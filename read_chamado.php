<?php

include 'db.php';
$status = isset($_GET['status']) ? $_GET['status'] : '';
$criticidade = isset($_GET['criticidade']) ? $_GET['criticidade'] : '';


$sql = "SELECT * FROM chamados WHERE 1";


$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table border='1'>
        <tr>
            <th>ID</th>
            <th>Cliente</th>
            <th>Descrição</th>
            <th>Criticidade</th>
            <th>Status</th>
            <th>Ações</th>
        </tr>";

    while ($row = $result->fetch_assoc()) {
        echo "<tr>
            <td>{$row['id_chamado']}</td>
            <td>{$row['cliente_id']}</td>
            <td>{$row['descricao']}</td>
            <td>{$row['criticidade']}</td>
            <td>{$row['status']}</td>
            <td>
            </td>
        </tr>";
    }

    echo "</table>";
} else {
    echo "Nenhum chamado encontrado.";
}

$conn->close();
?>
