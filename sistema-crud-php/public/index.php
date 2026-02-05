<?php include("../config/conexao.php"); ?>
<h2>Usuários cadastrados</h2>
<a href="criar.php">Novo usuário</a>
<table border="1">
<tr><th>Nome</th><th>Email</th><th>Ações</th></tr>
<?php
$result = $conn->query("SELECT * FROM usuarios");
while($row = $result->fetch_assoc()):
?>
<tr>
<td><?= $row['nome'] ?></td>
<td><?= $row['email'] ?></td>
<td>
<a href="editar.php?id=<?= $row['id'] ?>">Editar</a>
<a href="excluir.php?id=<?= $row['id'] ?>">Excluir</a>
</td>
</tr>
<?php endwhile; ?>
</table>