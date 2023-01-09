$(document).ready(function() {
    $('#example').DataTable({
        paging: false,
        ordering: false,
        info: false,
        scrollY: '250px',
        scrollCollapse: true,
        "searching": false,
        language: { emptyTable: "Selecione um ativo no menu superior" }
    });
});

$(function() {
    $('#idAtivo, #tipoA, #vencimento').change(function() {
        var pesquisa = document.getElementById('idAtivo').value;
        var tipopcao = document.getElementById('tipoA').value;
        var venci = document.getElementById('vencimento').value;
        var dados = {
            palavra: pesquisa,
            tpdado: tipopcao,
            tpvenc: venci
        }
        $.post('retorno.php', dados, function(retorna) {
            $('.resultado').html(retorna);
        });

        $.post('retorno2.php', dados, function(retorna) {
            $('#teta').html(retorna);
        });
    });
});