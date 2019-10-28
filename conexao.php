<?php 
$conn = new PDO("mysql:dbname=nome_do_banco;host=localhost", "root", "");

$stmt = $conn->prepare("SELECT * FROM sua_tabela");

$stmt->execute();

$resultado = $stmt->fetchAll(PDO :: FETCH_ASSOC);

var_dump($resultado);
?>