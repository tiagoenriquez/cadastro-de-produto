<?php

@include('Connection.php');
@include('Produto.php');

$selectConnection = new Connection();
$selectQuery = "select * from produtos";
$result = mysqli_query($selectConnection->connection, $selectQuery);
$produtos = [];

if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
        array_push($produtos, new Produto($row['id'], $row['nome'], $row['descricao'], $row['valor'], $row['fornecedor']));
    }
}

$selectConnection->close();

?>