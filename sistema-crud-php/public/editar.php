<?php
include("../config/conexao.php");
$id = $_GET['id'];
$user = $conn->query("SELECT * FROM usuarios WHERE id=$id")->fetch_assoc();
?>
<form method="POST">
<input name="nome" value="<?= $user['nome'] ?>">
<input name="email" value="<?= $user['email'] ?>">
<button type="submit">Salvar</button>
</form>
<?php
if($_POST){
  $stmt = $conn->prepare("UPDATE usuarios SET nome=?, email=? WHERE id=?");
  $stmt->bind_param("ssi", $_POST['nome'], $_POST['email'], $id);
  $stmt->execute();
  header("Location: index.php");
}
?>