<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Atualizar Registro</title>
</head>

<body>
    <?php
    $banco = "banco.txt";
    $nome = $endereco = $telefone = $email = $data = $mensagem = $imagem = "";

    if (isset($_GET['codigo']) && file_exists($banco)) {
        $lista = explode("\n", file_get_contents($banco));
        $informacoes = 7;
        $conjunto = $informacoes * ($_GET['codigo'] - 1);

        $nome     = $lista[$conjunto];
        $endereco = $lista[$conjunto + 1];
        $telefone = $lista[$conjunto + 2];
        $email    = $lista[$conjunto + 3];
        $data     = $lista[$conjunto + 4];
        $mensagem = str_replace("<br>", "\n", $lista[$conjunto + 5]);
        $imagem   = $lista[$conjunto + 6];
    }
    ?>

    <form method="post" action="update.php" enctype="multipart/form-data">
        <input type="hidden" name="codigo" value="<?php echo $_GET['codigo']; ?>">
        <label>Nome:</label><br><input type="text" name="nome" value="<?php echo $nome; ?>" required><br>
        <label>Endereço:</label><br><input type="text" name="endereco" value="<?php echo $endereco; ?>" required><br>
        <label>Telefone:</label><br><input type="text" name="telefone" value="<?php echo $telefone; ?>" required><br>
        <label>Email:</label><br><input type="text" name="email" value="<?php echo $email; ?>" required><br>
        <label>Data:</label><br><input type="date" name="data" value="<?php echo $data; ?>" required><br>
        <label>Mensagem:</label><br><textarea name="mensagem" rows="5" cols="40"><?php echo $mensagem; ?></textarea><br>
        <label>Imagem atual:</label><br>
        <img src="<?php echo $imagem; ?>" width="120"><br>
        <label>Nova imagem (opcional):</label><br>
        <input type="file" name="foto" accept="image/*"><br><br>
        <input type="submit" value="Salvar Alterações">
    </form>

    <br><a href="formulario.php">Voltar ao formulário</a>
</body>

</html>