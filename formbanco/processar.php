<?php 
require_once 'conexao.php';

if(isset($_POST['nome']) && isset($_POST['presida'])) {
  $parametros = [
    ':nome' => $_POST['nome'],
    ':presidente' => $_POST['presida']
  ];
  
  $stmt = $conn -> prepare("INSERT INTO lista_paises (nome, presidente, invadido) VALUES (:nome, :presidente, 0)");
  $stmt -> execute($parametros);
  
  header("Location: http://localhost/formbanco/index.php?status=ok");
  
  // echo "Tá no banco";
  // ':' é uma variavel do PDO
}
?>