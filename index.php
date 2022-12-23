<?php
ini_set('display_errors', 0);
error_reporting(0);

$url_ultimo_registro = "https://opcoes.net.br/cotacoes?au=false&ativos=PETR4";

$dados_ultimo_registro = file_get_contents($url_ultimo_registro);

$json_ultimo_registro = json_decode($dados_ultimo_registro, true);

$data_ultimo_registro = $json_ultimo_registro['data']['PETR4']['HOR'];
?>
<!doctype html>
<html lang="pt-br" class="h-100">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.104.2">
    <title>Opções - Buy and Hold</title>

    <link href="assets/dist/css/style.css" rel="stylesheet">
    <script src="assets/dist/js/bootstrap.bundle.min.js"></script>

    <link href="assets/dist/css/jquery.dataTables.min.css" rel="stylesheet">
    <script src="assets/dist/js/jquery-3.6.3.js"></script>
    <script src="assets/dist/js/jquery.dataTables.min.js"></script>



    <style>
        /* Scrollbar Styling */
        ::-webkit-scrollbar {
            width: 10px;
        }

        ::-webkit-scrollbar-track {
            background-color: #ebebeb;
            -webkit-border-radius: 10px;
            border-radius: 10px;
        }

        ::-webkit-scrollbar-thumb {
            -webkit-border-radius: 10px;
            border-radius: 10px;
            background: #6d6d6d;
        }

        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }

        .b-example-divider {
            height: 3rem;
            background-color: rgba(0, 0, 0, .1);
            border: solid rgba(0, 0, 0, .15);
            border-width: 1px 0;
            box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
        }

        .b-example-vr {
            flex-shrink: 0;
            width: 1.5rem;
            height: 100vh;
        }

        .bi {
            vertical-align: -.125em;
            fill: currentColor;
        }

        .nav-scroller {
            position: relative;
            z-index: 2;
            height: 2.75rem;
            overflow-y: hidden;
        }

        .nav-scroller .nav {
            display: flex;
            flex-wrap: nowrap;
            padding-bottom: 1rem;
            margin-top: -1px;
            overflow-x: auto;
            text-align: center;
            white-space: nowrap;
            -webkit-overflow-scrolling: touch;
        }

        .mb-auto-new {
            margin-bottom: 50px;
        }
    </style>


    <!-- Custom styles for this template -->
    <link href="assets/dist/css/cover.css" rel="stylesheet">
</head>

<body class="d-flex h-100 text-center text-bg-dark">

    <div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
        <header class="mb-auto-new">
            <div>
                <h3 class="float-md-start mb-0">Opções B<small>&</small>H</h3>
                <nav class="nav nav-masthead justify-content-center float-md-end">
                    <div class="dropdown nav-link fw-bold py-1 px-0">
                        <select id="idAtivo" name="pesquisa" class="bg-dark text-white form-select form-select-sm">
                            <option value="XXXX3" selected="selected">Ativo</option>
                            <option value="todos">Todos</option>
                            <option value="ALPA4">ALPA4</option>
                            <option value="AMER3">AMER3</option>
                            <option value="ASAI3">ASAI3</option>
                            <option value="AZUL4">AZUL4</option>
                            <option value="B3SA3">B3SA3</option>
                            <option value="BBAS3">BBAS3</option>
                            <option value="BBDC3">BBDC3</option>
                            <option value="BBDC4">BBDC4</option>
                            <option value="BBSE3">BBSE3</option>
                            <option value="BOVA11">BOVA11</option>
                            <option value="BPAC11">BPAC11</option>
                            <option value="BRAP4">BRAP4</option>
                            <option value="BRFS3">BRFS3</option>
                            <option value="BRKM5">BRKM5</option>
                            <option value="BRML3">BRML3</option>
                            <option value="CIEL3">CIEL3</option>
                            <option value="CMIG4">CMIG4</option>
                            <option value="CMIN3">CMIN3</option>
                            <option value="COGN3">COGN3</option>
                            <option value="CPLE6">CPLE6</option>
                            <option value="CSAN3">CSAN3</option>
                            <option value="CSNA3">CSNA3</option>
                            <option value="CVCB3">CVCB3</option>
                            <option value="CYRE3">CYRE3</option>
                            <option value="EGIE3">EGIE3</option>
                            <option value="ELET3">ELET3</option>
                            <option value="ELET6">ELET6</option>
                            <option value="EMBR3">EMBR3</option>
                            <option value="EQTL3">EQTL3</option>
                            <option value="GFSA3">GFSA3</option>
                            <option value="GGBR4">GGBR4</option>
                            <option value="GOAU4">GOAU4</option>
                            <option value="GOLL4">GOLL4</option>
                            <option value="HAPV3">HAPV3</option>
                            <option value="HYPE3">HYPE3</option>
                            <option value="IBOV11">IBOV11</option>
                            <option value="IRBR3">IRBR3</option>
                            <option value="ITSA4">ITSA4</option>
                            <option value="ITUB4">ITUB4</option>
                            <option value="JBSS3">JBSS3</option>
                            <option value="KLBN11">KLBN11</option>
                            <option value="LREN3">LREN3</option>
                            <option value="MGLU3">MGLU3</option>
                            <option value="MRFG3">MRFG3</option>
                            <option value="MRVE3">MRVE3</option>
                            <option value="MULT3">MULT3</option>
                            <option value="NTCO3">NTCO3</option>
                            <option value="PCAR3">PCAR3</option>
                            <option value="PETR3">PETR3</option>
                            <option value="PETR4">PETR4</option>
                            <option value="PETZ3">PETZ3</option>
                            <option value="PRIO3">PRIO3</option>
                            <option value="QUAL3">QUAL3</option>
                            <option value="RADL3">RADL3</option>
                            <option value="RAIL3">RAIL3</option>
                            <option value="RDOR3">RDOR3</option>
                            <option value="RENT3">RENT3</option>
                            <option value="RRRP3">RRRP3</option>
                            <option value="SANB11">SANB11</option>
                            <option value="SBSP3">SBSP3</option>
                            <option value="SUZB3">SUZB3</option>
                            <option value="TAEE11">TAEE11</option>
                            <option value="UGPA3">UGPA3</option>
                            <option value="USIM5">USIM5</option>
                            <option value="VALE3">VALE3</option>
                            <option value="VBBR3">VBBR3</option>
                            <option value="VIIA3">VIIA3</option>
                            <option value="VIVT3">VIVT3</option>
                            <option value="WEGE3">WEGE3</option>
                            <option value="YDUQ3">YDUQ3</option>
                        </select>
                    </div>
                    <div class="dropdown nav-link fw-bold py-1 px-0">
                        <select id="tipoA" name="tipopcao" class="bg-dark text-white form-select form-select-sm">
                            <option value="PUT" selected="selected">PUT</option>
                            <option value="CALL">CALL</option>
                        </select>
                    </div>
                    <div class="dropdown nav-link fw-bold py-1 px-0">
                        <select id="vencimento" name="dtVencimento" class="bg-dark text-white form-select form-select-sm">
                            <option value="2023-01-20" selected="selected">20/01/2023</option>
                            <option value="2023-02-17">17/02/2023</option>
                            <option value="2023-03-17">17/03/2023</option>
                            <option value="2023-04-20">20/04/2023</option>
                            <option value="2023-05-19">19/05/2023</option>
                            <option value="2023-06-16">16/06/2023</option>
                            <option value="2023-07-21">21/07/2023</option>
                            <option value="2023-08-18">18/08/2023</option>
                            <option value="2023-09-15">15/09/2023</option>
                            <option value="2023-10-20">20/10/2023</option>
                            <option value="2023-11-17">17/11/2023</option>
                            <option value="2023-12-15">15/12/2023</option>
                            <option value="2024-01-19">19/01/2024</option>
                            <option value="2024-02-14">14/02/2024</option>
                            <option value="2024-03-13">13/03/2024</option>
                            <option value="2024-04-19">19/04/2024</option>
                            <option value="2024-05-17">17/05/2024</option>
                            <option value="2024-06-21">21/06/2024</option>
                            <option value="2024-07-19">19/07/2024</option>
                            <option value="2024-08-16">16/08/2024</option>
                            <option value="2024-09-20">20/09/2024</option>
                            <option value="2024-10-18">18/10/2024</option>
                            <option value="2024-11-14">14/11/2024</option>
                            <option value="2024-12-20">20/12/2024</option>
                            <option value="2025-01-17">17/01/2025</option>
                        </select>
                    </div>
                </nav>
            </div>
        </header>

        <main class="px-3" style="margin-bottom: 50px;">
            <h1>Opções com os melhores prêmios</h1>
            <p class="lead">Sistema voltado para quem busca opções com os maiores prêmios e com strike muito fora do dinheiro.<br>
                O objetivo é ficar com o prêmio e não ser exercido. Selecione o ativo no menu superior e aproveite!</p>
            <strong>Fechamento do pregão: <?=$data_ultimo_registro?></strong>
            <p class="lead">
            <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
                <button type="button" class="btn btn-outline-info btn-lg px-4 me-sm-3 fw-bold">Prêmio: +2%</button>
                <button type="button" class="btn btn-outline-primary btn-lg px-4 me-sm-3 fw-bold">Strike: +9%</button>
            </div>
            </p>
        </main>

        <main class="px-3">
            <table id="example" class="compact display" style="width:100%">
                <thead>
                    <tr>
                        <th class="text-center">Ticker</th>
                        <th class="text-center">Tipo</th>
                        <th class="text-center">A/I/OTM</th>
                        <th class="text-center">Strike</th>
                        <th class="text-center">% Strike</th>
                        <th class="text-center">% Prêmio</th>
                        <th class="text-center">Prêmio</th>
                        <th class="text-center">Negócios</th>
                    </tr>
                </thead>
                <tbody class="resultado">                    
                </tbody>
            </table>
        </main>        

        <footer class="mt-auto text-white-50">
            <p>Desenvolvido por <a href="https://www.linkedin.com/in/jeffersonlucena/" class="text-white">Jefferson Lucena</a> 🦊</p>
        </footer>
    </div>

    <script>
        $(document).ready(function() {
            $('#example').DataTable({
                paging: false,
                ordering: false,
                info: false,
                scrollY: '250px',
                scrollCollapse: true,
                "searching": false,
            });
        });
    </script>

    <script>
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
                $.post('opcoes2.php', dados, function(retorna) {
                    $('.resultado').html(retorna);
                });
            });
        });
    </script>

</body>

</html>
