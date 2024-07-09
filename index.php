<!DOCTYPE html>
<html lang="pt-br">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script> -->
</head>

<body>
	<p>Código PHP</p>
	<h2>Exibindo alunos</h2>
	<?php
	$servername = "localhost"; // local
	$username = "root";
	$password = "";
	$dbname = "teste";

	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}

	// $sql = "SELECT id, firstname, lastname FROM MyGuests";
	$sql = "SELECT * FROM teste.alunos";
	$result = $conn->query($sql);

	if ($result->num_rows > 0) {
		// output data of each row
		while ($row = $result->fetch_assoc()) {
			// Abre o formulario
			echo '<form action="inserir-aluno.php" method="POST">'; 
			// Campo que mantem o ID de cada aluno
			echo '<div><input type="texto" class="form-control" name="idalunos" value="' . $row["idalunos"] . '"></div>'; 
			// Exibe o dado do aluno
			echo '<p>' . $row["idalunos"] . " | " . $row["nome"] . " | " . $row["email"] . " | " . $row["telefone"] . " | " . $row["valor_mensalidade"] . " | " . $row["senha"] . " | " . $row["situacao"] . " | " . $row["observacao"] . "</p>"; 
			// Botoes
			echo '<div> <input type="submit" value="Deletar" name="deletar"></input> <input type="submit" value="Editar" name="editar"></input> </div>';
			// Quebra de linha
			echo '<br><br><br><br>';
			// Fecha o formulario
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
			<input type="texto" class="form-control" name="observacao">
		</div>
		<div>
			<label for="submit">Enviar</label>
			<input type="submit" class="form-control" name="submit">
		</div>
	</form>



	<!-- 
C - create
R - READ
U
D
-->
</body>

</html>