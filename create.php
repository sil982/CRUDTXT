<?php
$banco = "banco.txt";

// Cria a pasta uploads se não existir
if (!is_dir("uploads")) {
    mkdir("uploads");
}

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $nomeArquivo = $_FILES['foto']['name'];
    $tempArquivo = $_FILES['foto']['tmp_name'];
    $caminhoFinal = "uploads/" . uniqid() . "_" . basename($nomeArquivo);

    if (move_uploaded_file($tempArquivo, $caminhoFinal)) {
        $conteudo = $_POST["nome"] . "\n" .
                    $_POST["endereco"] . "\n" .
                    $_POST["telefone"] . "\n" .
                    $_POST["email"] . "\n" .
                    $_POST["data"] . "\n" .
                    str_replace("\n", "<br>", $_POST["mensagem"]) . "\n" .
                    $caminhoFinal . "\n";

        $criar = fopen($banco, "a+");

        if ($criar) {
            fwrite($criar, $conteudo);
            fclose($criar);
            echo "<script>alert('Dados cadastrados com sucesso'); window.location.href='formulario.php';</script>";
        } else {
            echo "<script>alert('Erro ao cadastrar os dados!'); window.location.href='formulario.php';</script>";
        }
    } else {
        echo "<script>alert('Falha no upload da imagem!'); window.location.href='formulario.php';</script>";
    }
}
?>