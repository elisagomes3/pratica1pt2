<?php
        $servername = "localhost";
        $username = "root";
        $password = "root";
        $dbname = "pratica1_elisa";

        $conn = new mysqli($servername, $username, $password, $dbname);

        if($conn->connect_error){
            die("Conexão falhou: " . $conn->connect_error);
        }
?>