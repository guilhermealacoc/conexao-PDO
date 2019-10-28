<?php 
$conn = new PDO("mysql:dbname=teste_pdo;host=localhost", "root", "");

$stmt = $conn->prepare("SELECT * FROM teste");

$stmt->execute();

$resultado = $stmt->fetchAll(PDO :: FETCH_ASSOC);

var_dump($resultado);
?>