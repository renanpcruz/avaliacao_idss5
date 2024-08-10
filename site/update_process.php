<?php
include 'db_connect.php';

$id = $_POST['id'];
$titulo = $_POST['titulo'];
$genero = $_POST['genero'];
$data_lancamento = $_POST['data_lancamento'];
$desenvolvedor = $_POST['desenvolvedor'];

$sql = "UPDATE jogos SET titulo='$titulo', genero='$genero', data_lancamento='$data_lancamento', desenvolvedor='$desenvolvedor' WHERE id=$id";

session_start();

if ($conn->query($sql) === TRUE) {
    $_SESSION['message'] = "Jogo atualizado com sucesso";
} else {
    $_SESSION['message'] = "Erro: " . $conn->error;
}

$conn->close();
header('Location: index.php');
exit();
?>
