<?php 

$conn = new PDO("mysql:host=localhost;dbname=dbphp7", "root", "");

$conn->beginTransaction();

$stmt = $conn->prepare("DELETE FROM tb_usuarios WHERE idusuario = ?");

$id = 2;

$stmt->execute(array($id));

//rollback cancela a transação
//$conn->rollback(); 

//commit confirma a transação
$conn->commit();

echo "Delete Ok!";


 ?>