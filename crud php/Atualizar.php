<?php
include_once 'conexao.php';
$cod = $_POST['codigo'];
$name= $_POST['nome'];
$cur = $_POST['curso'];
$sql "UPDATE * FROM alunos SET nome = '$aluno' curso = '$cur' WHERE '$cod' = codigo";
$r = mysqli_query($con, $sql);
if($r){
	echo "Atualizado com Sucesso!";
}else{
	echo "Ops ocorreu um erro!";
}?>