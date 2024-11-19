<?php
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    $id_chamado = $_POST['id_chamado'];
    $cliente_id = $_POST['cliente_id'];
    $descricao = $_POST['descricao'];
    $criticidade = $_POST['criticidade'];
    $status = $_POST['status'];
    $data_abertura = $_POST['data_abertura'];
    $sql = "INSERT INTO chamados (id_chamado, cliente_id, descricao, criticidade, status, data_abertura) VALUES ('$id_chamado','$cliente_id', '$descricao', '$criticidade', '$status' , '$data_abertura')";

    if ($conn->query($sql) === TRUE) {
        echo "Chamado realizado com sucesso!";
    } else {
        echo "Erro: " . $sql . "<br>" . $conn->error;
    }

}
$conn->close();

?>


<form method="post" action="create_chamado.php">
    Id Chamado: <input type="number" name="id_chamado" required><br><br>
    Id Cliente: <input type="number" name="cliente_id" required><br><br>
    Descrição: <input type="text" name="descricao" required><br><br>
    Criticidade: 
    <select name="criticidade" required>
        <option value="baixa">Baixa</option>
        <option value="média">Média</option>
        <option value="alta">Alta</option>
    </select><br><br>
    Status: 
    <select name="status" required>
        <option value="aberto">Aberto</option>
        <option value="em andamento">Em andamento</option>
        <option value="resolvido">Resolvido</option>
    </select><br><br>
    Data: <input type="date" name="data_abertura" required><br><br>

    <input type="submit" value="Adicionar"><br><br>
    <a href="read_chamado.php">Ver Chamados</a>
</form>


