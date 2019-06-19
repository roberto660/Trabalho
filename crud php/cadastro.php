<!DOCTYPE html>
<html>
<head>
	<title>CADASTRO</title>
	<meta charset="utf-8"/>
	<style type="text/css">
		#divCenter{
			 	position: relative;
			 	top: 300px;
			 	margin: 0 auto;
                width: 250px;
                height: 300px;
                background: green;
                background-color: green(0,0,0,0.6);

               
                
		}
		.formulario{
			position: absolute;
			left: 30px;
		}
		#codigo{
			font-size:25px;
		}

		#form{
			font-size:20px;
		}

		#cad{
			font-size:40px;
			top:400px;
		}
		#nome{
			margin-top: 50px;
			font-size: 40px;
		}


	</style>
</head>
<body bgcolor="green">
	<div id="divCenter">
	
	<h1 align="center" id="cad">CADASTRO</h1>

	<form method="POST" action="inserir.php" class="formulario" id="form">
    CÓDIGO DA CHAVE<input type="text" name="codigo" id="codigo" size="15" /><br><br>	
    NOME DO ALUNO<input type="text" name="nome" id="codigo" size="16"/><br><br>
    CURSO TECNICO<input type="text" name="curso" id="codigo" size="16"/><br><br>
     
 
    <p><input type="submit" name="cadastrar-se" value="CADASTRAR"/>
	 <button><a href="index.php">VOLTAR</a></button></p>

<?php
          include_once "conexao.php";
          if(isset($_POST['cadastrar-se'])){
              $codigo = $_POST['codigo'];
              $nome = $_POST['nome'];
              $curso = $_POST['curso'];
              mysqli_query($con,"INSERT INTO alunos (codigo, nome, curso)VALUES('$codigo', '$nome', '$curso')");
              mysqli_close($con);
          }
        ?>

</form>
</div>
</body>
</html>
