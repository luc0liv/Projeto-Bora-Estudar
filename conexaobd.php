<?php
    $servername = "localhost"; //nome do seu servidor
    $database = "squad7"; //seu banco de dados
    $username = "gabu"; //nome do usuário
    $password = "123456"; //sua senha

 

    // Create connection
    $conn = mysqli_connect($servername, $username, $password, $database);
    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    mysqli_close($conn);
    ?>