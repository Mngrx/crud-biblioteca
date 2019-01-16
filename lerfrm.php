<!DOCTYPE html>
<html lang="pt-BR">
<head>
	<title>Ler Form</title>
	<meta charset="utf-8" />
</head>
<body>
	<h1>Busca Usuário</h1>
	<form method="post" action="ler.php">
		<label for="nome">Nome:</label>
		<input type="text" name="nome" id="nome" placeholder="Informe o nome" />

		<input type="submit" value="Buscar" id="botaoBuscar" />
		<br/><br/><br/>
	</form>
	<form method="post" action="index.php">
		<input type="submit" value="Tela Inicial" id="retorno">
	</form>
	
</body>
</html>