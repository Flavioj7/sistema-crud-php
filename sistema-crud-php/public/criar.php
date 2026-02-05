<?php include("../config/conexao.php"); ?>
<form method="POST">
<input name="nome" placeholder="Nome" required>
<input name="email" type="email" placeholder="Email" required>
<input name="senha" type="password" placeholder="Senha" required>
<button type="submit">Cadastrar</button>
</form>
<?php
if($_POST){
  $stmt = $conn->prepare("INSERT INTO usuarios (nome,email,senha) VALUES (?,?,?)");
  $senha = password_hash($_POST['senha'], PASSWORD_DEFAULT);
  $stmt->bind_param("sss", $_POST['nome'], $_POST['email'], $senha);
  $stmt->execute();
  header("Location: index.php");
}
?>