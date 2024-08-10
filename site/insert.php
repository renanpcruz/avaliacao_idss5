<?php
include 'db_connect.php';
session_start();

$titulo = $_POST['titulo'];
$genero = $_POST['genero'];
$data_lancamento = $_POST['data_lancamento'];
$desenvolvedor = $_POST['desenvolvedor'];

$sql = "INSERT INTO jogos (titulo, genero, data_lancamento, desenvolvedor) VALUES ('$titulo', '$genero', '$data_lancamento', '$desenvolvedor')";

if ($conn->query($sql) === TRUE) {
    $_SESSION['message'] = "Novo jogo adicionado com sucesso";
} else {
    $_SESSION['message'] = "Erro: " . $sql . "<br>" . $conn->error;
}

$conn->close();
header('Location: index.php');
exit();
?>
