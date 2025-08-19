<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Formulário</title>
</head>
<body>
    <h1 style="color: blue; text-align:center">FORMULÁRIO</h1>

    <form action="create.php" method="post" enctype="multipart/form-data">
        <table border="0" align="center">
            <tr><td>Nome:</td><td><input name="nome" type="text" size="52" required></td></tr>
            <tr><td>Endereço:</td><td><input name="endereco" type="text" size="52" required></td></tr>
            <tr><td>Telefone:</td><td><input name="telefone" type="text" size="52" required></td></tr>
            <tr><td>Email:</td><td><input name="email" type="text" size="52" required></td></tr>
            <tr><td>Data:</td><td><input name="data" type="date" required></td></tr>
            <tr><td>Mensagem:</td>
                <td><textarea name="mensagem" cols="50" rows="8" required></textarea></td>
            </tr>
            <tr><td>Foto:</td>
                <td><input type="file" name="foto" accept="image/*" required></td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <input type="submit" value="Cadastrar">
                    <input type="reset" value="Limpar campos">
                    <button type="button" onclick="window.location.href='select.php'">Visualizar Registros</button>
                </td>
            </tr>
        </table>
    </form>
</body>
</html>