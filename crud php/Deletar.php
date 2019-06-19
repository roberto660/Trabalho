<!DOCTYPE html>
<html>
<head>
	<title>Deletar alunos</title>
	<meta charset="utf-8"/>
</head>
<body>
	<?php
require_once'conexao.php';


$codigo = $_GET['id'];

$sql = "DELETE FROM alunos WHERE codigo = '$codigo' ";
$r = mysqli_query($con, $sql);
if($r){
	echo "Deletado com sucesso";
}else{
	echo "Erro ao Deletar ";
} 

    ?>


</html>