<?php
if (isset($_POST['submit'])) // ADICIONAR ALUNO
{
    print_r('idalunos: ' . $_POST['idalunos']);
    print_r('<br>');
    print_r('nome: ' . $_POST['nome']);
    print_r('<br>');
    print_r('email: ' . $_POST['email']);
    print_r('<br>');
    print_r('telefone: ' . $_POST['telefone']);
    print_r('<br>');
    print_r('valor_mensalidade: ' . $_POST['valor_mensalidade']);
    print_r('<br>');
    print_r('senha: ' . $_POST['senha']);
    print_r('<br>');
    print_r('situacao: ' . $_POST['situacao']);
    print_r('<br>');
    print_r('observacao: ' . $_POST['observacao']);


    // Dados de conexão com o banco de dados
    $servername = "localhost"; // local
    $username = "root";
    $password = "";
    $dbname = "teste";
    // Criando a conexão
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Checando a conexão
    if ($conn->connect_error) {
        die("Conexão falhou: " . $conn->connect_error);
    }

    // Dados a serem inseridos
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
    $valor_mensalidade = $_POST['valor_mensalidade'];
    $senha = $_POST['senha'];
    $situacao = $_POST['situacao'];
    $observacao = $_POST['observacao'];

    // Preparando a instrução SQL
    $sql = "INSERT INTO alunos (nome, email, telefone, valor_mensalidade, senha, situação, observação) VALUES ('$nome', '$email', '$telefone', '$valor_mensalidade', '$senha', '$situacao', '$observacao')";

    // Executando a instrução SQL
    if ($conn->query($sql) === TRUE) {
        echo "<br>";
        echo "Novo registro inserido com sucesso";
    } else {
        echo "Erro: " . $sql . "<br>" . $conn->error;
    }

    // Fechando a conexão
    $conn->close();
}
if (isset($_POST['deletar'])) // DELETAR ALUNO
{
    echo 'PRECISO DELETAR ALUNO' . $_POST['idalunos'];

    // Dados de conexão com o banco de dados
    $servername = "localhost"; // local
    $username = "root";
    $password = "";
    $dbname = "teste";
    // Criando a conexão
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Checando a conexão
    if ($conn->connect_error) {
        die("Conexão falhou: " . $conn->connect_error);
    }

    // Dados a serem inseridos
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
    $valor_mensalidade = $_POST['valor_mensalidade'];
    $senha = $_POST['senha'];
    $situacao = $_POST['situacao'];
    $observacao = $_POST['observacao'];

    // Preparando a instrução SQL
    $sql = "DELETE FROM alunos WHERE idalunos = " . $_POST['idalunos'];

    // Executando a instrução SQL
    if ($conn->query($sql) === TRUE) {
        echo "<br>";
        echo "Registro deletado.";
    } else {
        echo "Erro: " . $sql . "<br>" . $conn->error;
    }

    // Fechando a conexão
    $conn->close();
}

if (isset($_POST['editar'])) // EDITAR ALUNO
{
    echo 'PRECISO editar ALUNO';
    print_r('<br>');
    print_r('idalunos: ' . $_POST['idalunos']);
    print_r('<br>');
    print_r('nome: ' . $_POST['nome']);
    print_r('<br>');
    print_r('email: ' . $_POST['email']);
    print_r('<br>');
    print_r('telefone: ' . $_POST['telefone']);
    print_r('<br>');
    print_r('valor_mensalidade: ' . $_POST['valor_mensalidade']);
    print_r('<br>');
    print_r('senha: ' . $_POST['senha']);
    print_r('<br>');
    print_r('situacao: ' . $_POST['situacao']);
    print_r('<br>');
    print_r('observacao: ' . $_POST['observacao']);


    // Dados de conexão com o banco de dados
    $servername = "localhost"; // local
    $username = "root";
    $password = "";
    $dbname = "teste";
    // Criando a conexão
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Checando a conexão
    if ($conn->connect_error) {
        die("Conexão falhou: " . $conn->connect_error);
    }

    // Dados a serem inseridos
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
    $valor_mensalidade = $_POST['valor_mensalidade'];
    $senha = $_POST['senha'];
    $situacao = $_POST['situacao'];
    $observacao = $_POST['observacao'];

    // Preparando a instrução SQL
    $sql = "UPDATE alunos SET nome = '$nome', email = '$email', telefone = '$telefone', valor_mensalidade = '$valor_mensalidade', senha = '$senha', situação = '$situacao', observação = '$observacao' WHERE idalunos = " . $_POST['idalunos'];

    // Executando a instrução SQL
    if ($conn->query($sql) === TRUE) {
        echo "<br>";
        echo "Atualizado registro com sucesso";
    } else {
        echo "Erro: " . $sql . "<br>" . $conn->error;
    }

    // Fechando a conexão
    $conn->close();
}
