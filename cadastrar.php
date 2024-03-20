<?php

session_start();

@include('Produto.php');

$produto = new Produto(
    0,
    $_POST['nome'],
    $_POST['descricao'],
    floatval(str_replace(',', '.', $_POST['valor'])),
    $_POST['fornecedor']
);

@include('Connection.php');

$insertConnection = new Connection();

$insertQuery = "insert into produtos(nome, descricao, valor, fornecedor) ";
$insertQuery = $insertQuery . "values ('$produto->nome', '$produto->descricao', '$produto->valor', '$produto->fornecedor')";

mysqli_query($insertConnection->connection, $insertQuery);

$insertConnection->close();

header('location: lista.php');
exit();
?>