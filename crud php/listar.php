<!DOCTYPE html>
<html>
<head>
	<title>Visualizar aluno</title>
	<meta charset="utf-8"/>
	<style type="text/css">sss
		a{
			text-decoration: none;	
		}
		#campo{
                position: relative;
                width: 100%;
                height:800PX ;
                padding-top: 100px;
                background: green;
                background-color:green(0,0,0,0.6);
                font-family:border-color: green;
             
            
		}
		#bt{
			margin-left: 30%;
				top: -2%	
			background-color:green;
		}
	</style>
</head>
<body bgcolor="green">

				<?php include_once('conexao.php');?>
				<div id="campo">
				<table border="1px" align="center">
					<tr>
						<td colspan="5" align="center">MOSTRAR LISTADOS</td>
					</tr>
				<tr>
					<td align="center">CODIGO DA CHAVE</td>
					<td align="center">NOME</td>
					<td align="center">CURSO</td>
					<td align="center">EXCLUIR</td>
					<td align="center">EDITAR</td>
				</tr>
				<button id="bt"><a href="index.php">VOLTAR</a></button>
						
			

	<?php
	include_once('conexao.php');
	@$excluir = $_GET['excluir'];

		$r = mysqli_query($con, "DELETE FROM alunos where codigo = $excluir");
		if($r){
			echo "<script>location.href='listar.php';</script>";

		}


	$sql = "SELECT * FROM alunos";

	$r = mysqli_query($con, $sql);
	if($r){
		while ($result=mysqli_fetch_array($r)){?>
		<tr>
			<td><?php echo $result['codigo'];?></td>
			<td><?php echo $result['nome'];?></td>
			<td><?php echo $result['curso'];?></td>
			<td width="60px"><a href="?excluir=<?php echo $result['codigo']; ?>" onclick="return confirm('Deseja Realmente Excluir?');">EXCLUIR</td>
			<td><a href="update.php?id=<?php echo $result['codigo'];?>&nome=<?php echo $result['nome']; ?>&curso=<?php echo $result['curso']; ?>" onclick="return confirm('Deseja Realmente atualizar?');"> EDITAR</td>
		</tr>

			<?php
		}
	}
			?>
</table>


</div>
</body>
</html>