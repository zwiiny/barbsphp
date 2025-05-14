<?php
include "db.php";

$sql = "SELECT * FROM clientes";
$resultado = $conn->query($sql);

if ($resultado === false) {
    die("Erro na consulta SQL: " . $conn->error);
}
?>

<h2>Clientes da Canuto Barber</h2>
<a href="adicionar.php">+ Novo Cliente</a>
<table border="1" cellpadding="10">
  <tr>
    <th>Nome</th>
    <th>Telefone</th>
    <th>Email</th>
    <th>Ações</th>
  </tr>
  <?php while ($cliente = $resultado->fetch_assoc()) { ?>
    <tr>
      <td><?= htmlspecialchars($cliente['nome']) ?></td>
      <td><?= htmlspecialchars($cliente['telefone']) ?></td>
      <td><?= htmlspecialchars($cliente['email']) ?></td>
      <td>
        <a href="editar.php?id=<?= $cliente['id'] ?>">Editar</a> |
        <a href="deletar.php?id=<?= $cliente['id'] ?>" onclick="return confirm('Tem certeza?')">Excluir</a>
      </td>
    </tr>
  <?php } ?>
</table>
