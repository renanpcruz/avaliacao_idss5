<?php
$servername = "db";
$username = "user";
$password = "password";
$dbname = "jogos_db";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}
?>
