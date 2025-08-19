<?php
if (isset($_GET['codigo'])) {
    $banco = "banco.txt";
    $informacoes = 7;
    $codigo = intval($_GET['codigo']);
    $lista = explode("\n", file_get_contents($banco));

    // remove imagem do servidor
    $imgIndex = $informacoes * ($codigo - 1) + 6;
    if (!empty($lista[$imgIndex]) && file_exists($lista[$imgIndex])) {
        unlink($lista[$imgIndex]);
    }

    array_splice($lista, $informacoes * ($codigo - 1), $informacoes);

    $texto = "";
    foreach ($lista as $linha) {
        if (trim($linha) !== "") {
            $texto .= $linha . "\n";
        }
    }

    file_put_contents($banco, $texto);
}
header("Location: select.php");
exit;
?>