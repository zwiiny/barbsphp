<?php
include "db.php";
$id = $_POST['id'];
$nome = $_POST['nome'];
$telefone = $_POST['telefone'];
$email = $_POST['email'];
$conn->query("UPDATE clientes SET nome='$nome', telefone='$telefone', email='$email' WHERE id=$id");
header("Location: index.php");
?>
