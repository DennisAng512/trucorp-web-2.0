<?php
    $conn = new mysqli("192.168.75.129", "root", "1234", "trucorp-web-2.0");
 
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
 
    $result = $conn->prepare('SELECT ID, Nama, Alamat, Jabatan FROM users');
    $result->execute();
    $result->bind_result($ID, $Nama, $Alamat, $Jabatan);
    echo $result->num_rows;
 
    $conn->close();
?>