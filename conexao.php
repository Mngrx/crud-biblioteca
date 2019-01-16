<?php 

	//conexão com o banco de dados
	//3 argumentos: servidor, usuário e senha

	$conexao = mysql_connect('localhost', 'Aluno', 'aluno');

	//escolher o banco de dados, passando a conexão

	mysql_select_db('bd_curso', $conexao);

 ?>