<?php
include 'db.php';

if (isset($_POST['nome_cliente'], $_POST['email_cliente'], $_POST['telefone_cliente'])) {
    $nome_cliente = $_POST['nome_cliente'];
    $email_cliente = $_POST['email_cliente'];
    $telefone_cliente = $_POST['telefone_cliente'];

    $sql = "INSERT INTO clientes (nome, email, telefone) VALUES ('$nome_cliente', '$email_cliente', '$telefone_cliente')";

    if ($conn->query($sql) === TRUE) {
        echo "Cadastro realizado com sucesso!";
    } else {
        echo "Erro: " . $sql . "<br>" . $conn->error;
    }

}
$conn->close();

?>


<form method="post" action="create_cliente.php">
    Nome: <input type="text" name="nome_cliente" required><br><br>
    Email: <input type="text" name="email_cliente" required><br><br>
    Telefone <input type="number" name="telefone_cliente" required> <br><br>
    <input type="submit" value="Adicionar"><br><br>
    <a href="create_chamado.php">Criar Chamado</a>
</form>
