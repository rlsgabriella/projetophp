<!DOCTYPE html>
<html lang="pt-br">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>

<body>
	<p>Código PHP</p>
	<h2>Exibindo alunos</h2>
	<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "teste";

	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}

	$sql = "SELECT * FROM teste.alunos";
	$result = $conn->query($sql);

	if ($result->num_rows > 0) {
		while ($row = $result->fetch_assoc()) {
			echo '<form action="inserir-aluno.php" method="POST">';
			echo '<input type="hidden" name="idalunos" value="' . $row["idalunos"] . '">';
			echo '<div><label>Nome: </label><input type="text" class="form-control" name="nome" value="' . $row["nome"] . '"></div>';
			echo '<div><label>E-mail: </label><input type="text" class="form-control" name="email" value="' . $row["email"] . '"></div>';
			echo '<div><label>Telefone: </label><input type="text" class="form-control" name="telefone" value="' . $row["telefone"] . '"></div>';
			echo '<div><label>Valor Mensalidade: </label><input type="number" class="form-control" name="valor_mensalidade" value="' . $row["valor_mensalidade"] . '"></div>';
			echo '<div><label>Senha: </label><input type="text" class="form-control" name="senha" value="' . $row["senha"] . '"></div>';
			echo '<div><label>Situação: </label><input type="number" class="form-control" name="situacao" value="' . $row["situação"] . '"></div>';
			echo '<div><label>Observação: </label><input type="text" class="form-control" name="observacao" value="' . $row["observação"] . '"></div>';
			echo '<div><input type="submit" value="Deletar" name="deletar"><input type="submit" value="Editar" name="editar"></div>';
			echo '<br><br><br><br>';
			echo '</form>';
		}
	} else {
		echo "0 results";
	}
	$conn->close();
	?>

	<h2>Criando aluno</h2>
	<div class="container">
		<div class="row">
			<div class="col">
			</div>
		</div>
	</div>
	<h1>Cadastro</h1>
	<form action="inserir-aluno.php" method="POST">
		<div class="form-group">
			<label for="nome">Nome completo</label>
			<input type="text" class="form-control" name="nome">
		</div>
		<div>
			<label for="email">E-mail</label>
			<input type="text" class="form-control" name="email">
		</div>
		<div>
			<label for="telefone">Telefone</label>
			<input type="text" class="form-control" name="telefone">
		</div>
		<div>
			<label for="valor">Valor da mensalidade</label>
			<input type="number" class="form-control" name="valor_mensalidade">
		</div>
		<div>
			<label for="senha">Senha</label>
			<input type="text" class="form-control" name="senha">
		</div>
		<div>
			<label for="situacao">Situação</label>
			<input type="number" class="form-control" name="situacao">
		</div>
		<div>
			<label for="observacao">Observação</label>
			<input type="text" class="form-control" name="observacao">
		</div>
		<div>
			<label for="submit">Enviar</label>
			<input type="submit" class="form-control" name="submit">
		</div>
	</form>
</body>

</html>