<?php 

	include 'conexao.php';
	
	$nome = $_POST['nome'];

	$query = "SELECT * FROM tb_usuario WHERE nome like '%$nome%'";

	$resultado = mysql_query($query, $conexao);

	if ($resultado) {
		
		while ($linha = mysql_fetch_array($resultado)) {
			echo $linha['id']."<br/>";
			echo $linha['nome']."<br/>";
			echo $linha['email']."<br/>";
			echo $linha['login']."<br/>";
			echo $linha['senha']."<br/><br/>";
		}
	
	} else {

		echo "<h2>Nome não encontrado!</h2>";

	}

	mysql_close();

 ?>

<form method="post" action="index.php">
		<input type="submit" value="Tela Inicial" id="retorno">
</form>