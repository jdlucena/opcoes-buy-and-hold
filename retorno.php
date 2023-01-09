<?php

$retVal = ($_POST['palavra'] == 'todos') ? '' : (($_POST['palavra'] == '') ? 'B3SA3' : $_POST['palavra']);

$tipo_opcao = $_POST['tpdado'] ?? 'PUT';

$datVenci = $_POST['tpvenc'];

// Endereço da API com todas as moedas seleciondas
$endereco_todas_as_moedas = "https://opcoes.net.br/listaopcoes/completa?idAcao=$retVal&listarVencimentos=false&cotacoes=true&vencimentos=$datVenci";

// Lê todo o conteúdo e armazena na string
$dados_todas_as_moedas = file_get_contents($endereco_todas_as_moedas);

// Decodifica a string JSON
$json_todas_as_moedas = json_decode($dados_todas_as_moedas, true);

$result = $json_todas_as_moedas['data']['cotacoesOpcoes'];

// ordena do maior prêmio
usort($result, function ($a, $b)    {    return strnatcmp($b[7],$a[7]);} );
?>

    <?php
    if ($tipo_opcao == 'PUT') {
        foreach ($result as $value) {
            if ($value[2] == $tipo_opcao && $value[6] <= -0.09 && $value[7] >= 0.02) {
                echo '<tr>';
                echo '<td>' . substr($value[0], 0, -5) . '</td>';
                echo '<td>' . $value[2] . '</td>';
                echo '<td>' . $value[4] . '</td>';
                echo '<td>' . number_format($value[5], 2, ',', '.') . '</td>';
                echo '<td>' . number_format($value[6] * 100, 2, ',', '.') . '</td>';
                echo '<td>' . number_format($value[7] * 100, 2, ',', '.') . '</td>';
                echo '<td>' . number_format($value[8], 2, ',', '.') . '</td>';
                echo '<td>' . $value[9] . '</td>';
                echo '</tr>';
            }
        }
    } else {
        foreach ($result as $value) {
            if ($value[2] == $tipo_opcao && $value[6] >= 0.09 && $value[7] >= 0.02) {
                echo '<tr>';
                echo '<td>' . substr($value[0], 0, -5) . '</td>';
                echo '<td>' . $value[2] . '</td>';
                echo '<td>' . $value[4] . '</td>';
                echo '<td>' . $value[5] . '</td>';
                echo '<td>' . $value[6] * 100 . '</td>';
                echo '<td>' . $value[7] * 100 . '</td>';
                echo '<td>' . $value[8] . '</td>';
                echo '<td>' . $value[9] . '</td>';
                echo '</tr>';
            }
        }
    }

    ?>