<?php

$datVenci = $_POST['palavra'];

if ($datVenci <> 'todos') {
    $url_ultimo_registro = "https://opcoes.net.br/cotacoes?au=false&ativos=$datVenci";

    $dados_ultimo_registro = file_get_contents($url_ultimo_registro);

    $json_ultimo_registro = json_decode($dados_ultimo_registro, true);

    $data_ultimo_registro = $json_ultimo_registro['data'][$datVenci]['ULT'];

    echo "Última cotação: " . number_format($data_ultimo_registro, 2, ',', '.');
}