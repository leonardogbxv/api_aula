<?php
$host = 'localhost';
$dbname = 'controlemundial';
$user = 'root';
$pass = '';

try {
  $conn = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);
  echo "Conexao ok";
} catch (PDOException $e) {
  die("Erro: " . $e -> getMessage());
}

?>