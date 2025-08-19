<?php
$banco = "banco.txt";
$informacoes = 7; // Nome, Endereço, Telefone, Email, Data, Mensagem, Imagem

echo "<center><h2>Registros cadastrados</h2></center>";

if (file_exists($banco) && !empty(trim(file_get_contents($banco)))) {
    $lista = explode("\n", file_get_contents($banco));

    // Remove última linha se estiver vazia
    if (trim(end($lista)) === "") {
        array_pop($lista);
    }

    // Alerta se houver registro incompleto
    if (count($lista) % $informacoes !== 0) {
        echo "<p style='color:red; text-align:center;'> ! Atenção: Há registro(s) incompleto(s) no arquivo banco.txt</p>";
    }

    echo "<center><table border='1' cellpadding='8'>";
    echo "<tr>
            <th>Código</th>
            <th>Nome</th>
            <th>Endereço</th>
            <th>Telefone</th>
            <th>Email</th>
            <th>Data</th>
            <th>Mensagem</th>
            <th>Imagem</th>
            <th>Ações</th>
          </tr>";

    $conjunto = 1;
    for ($i = 0; $i + $informacoes <= count($lista); $i += $informacoes) {
        echo "<tr>";
        echo "<td>$conjunto</td>";
        echo "<td>" . htmlspecialchars($lista[$i]) . "</td>";
        echo "<td>" . htmlspecialchars($lista[$i + 1]) . "</td>";
        echo "<td>" . htmlspecialchars($lista[$i + 2]) . "</td>";
        echo "<td>" . htmlspecialchars($lista[$i + 3]) . "</td>";
        echo "<td>" . htmlspecialchars($lista[$i + 4]) . "</td>";
        echo "<td>" . nl2br($lista[$i + 5]) . "</td>";

        // Imagem
        $imagem = $lista[$i + 6];
        if (file_exists($imagem)) {
            echo "<td><img src='{$imagem}' width='80'></td>";
        } else {
            echo "<td><span style='color:red;'>Imagem não encontrada</span></td>";
        }

        // Ações
        echo "<td>
                <a href='delete.php?codigo=$conjunto'>Excluir</a> |
                <a href='monta.php?codigo=$conjunto'>Editar</a>
              </td>";
        echo "</tr>";
        $conjunto++;
    }

    echo "</table></center>";
    echo "<br><center><a href='formulario.php'>Voltar ao formulário</a></center>";
} else {
    echo "<p align='center'>Ainda não há nenhum registro.</p>";
    echo "<br><center><a href='formulario.php'>Voltar ao formulário</a></center>";
}
