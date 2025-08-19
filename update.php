<?php
$banco = "banco.txt";

if (isset($_POST['codigo'])) {
    if (file_exists($banco) && !empty(file_get_contents($banco))) {
        $lista = explode("\n", file_get_contents($banco));
        $informacoes = 7;
        $codigo = intval($_POST['codigo']);
        $conjunto = $informacoes * ($codigo - 1);

        $fotoNova = $lista[$conjunto + 6]; // mantém imagem atual
        if (!empty($_FILES['foto']['name'])) {
            $nomeArquivo = $_FILES['foto']['name'];
            $tempArquivo = $_FILES['foto']['tmp_name'];
            $fotoNova = "uploads/" . uniqid() . "_" . basename($nomeArquivo);
            move_uploaded_file($tempArquivo, $fotoNova);
        }

        $lista[$conjunto]     = $_POST['nome'];
        $lista[$conjunto + 1] = $_POST['endereco'];
        $lista[$conjunto + 2] = $_POST['telefone'];
        $lista[$conjunto + 3] = $_POST['email'];
        $lista[$conjunto + 4] = $_POST['data'];
        $lista[$conjunto + 5] = str_replace("\n", "<br>", $_POST["mensagem"]);
        $lista[$conjunto + 6] = $fotoNova;

        $texto = "";
        foreach ($lista as $linha) {
            if (trim($linha) !== "") {
                $texto .= $linha . "\n";
            }
        }

        file_put_contents($banco, $texto);
        echo "<script>alert('Dados atualizados com sucesso'); window.location.href='formulario.php';</script>";
        exit;
    }
}
?>