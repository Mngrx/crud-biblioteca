<!DOCTYPE html>
<html>
<head>
	<title>Exercitando o Form</title>
	<meta charset="utf-8"/>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css"/>
</head>
<body>
	<div class="jubotron">
		<div class="container">
			<h2>Inserindo Usuário</h2>
			<form method="post" action="criar.php"/>
				<div>
					<label for="name">Nome:</label>
					<input type="text" name="nome" id="nome" placeholder="Informe o nome"/>
				</div>
				<div>
					<label for="email">Email: </label>
					<input type="text" name="email" id="email" placeholder="Informe o email"/>
				</div>
				<div>
					<label for="login">Login: </label>
					<input type="text" name="login" id="login" placeholder="Informe o login"/>
				</div>
				<div>
					<label for="senha">Senha: </label>
					<input type="password" name="senha" id="senha" placeholder="Informe a senha"/>
				</div>
				<input type="submit" value="Cadastrar" id="botaoCadastrar">
			</form>
			<form method="post" action="index.php">
				<br/><input type="submit" value="Tela Inicial" id="retorno">
			</form>
		</div>
	</div>
</body>
</html>
