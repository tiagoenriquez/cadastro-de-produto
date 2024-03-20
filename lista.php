<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Casa da Tecnologia</title>
</head>
<body>
    <h1>Lista de Produtos</h1>
    <table border="1px">
        <thead>
            <tr>
                <th>Id</th>
                <th>Nome</th>
                <th>Descrição</th>
                <th>Valor</th>
                <th>Fornecedor</th>
            </tr>
        </thead>
        <tbody>

            <?php

            @include('listar.php');

            foreach ($produtos as $produto) {
                echo "<tr>";
                echo "<td>" . $produto->id . "</td>";
                echo "<td>" . $produto->nome . "</td>";
                echo "<td>" . $produto->descricao . "</td>";
                echo "<td>R$ " . str_replace('.', ',', strval($produto->valor)) . "</td>";
                echo "<td>" . $produto->fornecedor . "</td>";
                echo "</tr";
                echo "<br>";
            }

            ?>

        </tbody>
    </table>
</body>
</html>