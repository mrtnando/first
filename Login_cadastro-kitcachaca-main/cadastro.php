<?php
session_start();
include('conexao.php');

if(empty($_POST['nome']) || empty($_POST['email']) || empty($_POST['senha'])) {
	header('Location: index.php');
	exit();
}

$nome = mysqli_real_escape_string($conexao, $_POST['nome']);
$email = mysqli_real_escape_string($conexao, $_POST['email']);
$senha = mysqli_real_escape_string($conexao, $_POST['senha']);

$query = "INSERT INTO `cliente`(`e-mail`, `senha`, `nome`) VALUES ('${email}','${senha}','${nome}')";

echo $query;
//$result = mysqli_query($conexao, $query);