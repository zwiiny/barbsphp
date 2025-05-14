<?php
include "db.php";
$id = $_GET['id'];
$resultado = $conn->query("SELECT * FROM clientes WHERE id = $id");
$cliente = $resultado->fetch_assoc();
?>

<h2>Editar Cliente</h2>
<form action="atualizar.php" method="post">
  <input type="hidden" name="id" value="<?= $cliente['id'] ?>">
  Nome: <input type="text" name="nome" value="<?= $cliente['nome'] ?>" required><br>
  Telefone: <input type="text" name="telefone" value="<?= $cliente['telefone'] ?>"><br>
  Email: <input type="email" name="email" value="<?= $cliente['email'] ?>"><br>
  <button type="submit">Atualizar</button>
</form>
<a href="index.php">Voltar</a>
