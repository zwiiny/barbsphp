<?php
include "db.php";
$nome = $_POST['nome'];
$telefone = $_POST['telefone'];
$email = $_POST['email'];
$conn->query("INSERT INTO clientes (nome, telefone, email) VALUES ('$nome', '$telefone', '$email')");
header("Location: index.php");
?>
