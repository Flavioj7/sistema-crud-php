<?php
include("../config/conexao.php");
$id = $_GET['id'];
$stmt = $conn->prepare("DELETE FROM usuarios WHERE id=?");
$stmt->bind_param("i", $id);
$stmt->execute();
header("Location: index.php");
?>