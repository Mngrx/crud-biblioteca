<?php 

	include 'conexao.php';

	$nome = $_POST['nome'];
	$email = $_POST['email'];
	$login = $_POST['login'];
	$senha = $_POST['senha'];

	$query = "INSERT INTO tb_usuario(nome, email, login, senha) VALUES ('$nome', '$email', '$login', '$senha')";

	$resultado = mysql_query($query, $conexao);

	$linhas = mysql_affected_rows();

	if ($resultado) {

		echo "Usuário cadastrado com sucesso!!<br/>";
		echo "Quantidade de linhas afetadas: $linhas.";
	} else {
		echo "Usuário não cadastrado.";
	}

	mysql_close();
?>

<br/><br/><br/>

<form method="post" action="index.php">
<input type="submit" value="Tela Inicial" id="retorno">
</form>