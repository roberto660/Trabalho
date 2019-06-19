<?php  

include_once'conexao.php';
$cod = $_POST['codigo'];
$name= $_POST['nome'];
@$cur = $_POST['curso'];

$sql = "INSERT INTO alunos (codigo,nome,curso) VALUES ('$cod','$name', '$cur')";
$r = mysqli_query($con,$sql);

if($r){
	echo "cadastrado com sucesso";
}else{
	echo "errro ao cadastrar";
}

?>