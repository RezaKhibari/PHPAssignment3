<?php
    session_start();
    $dsn = 'mysql:host=localhost;dbname=tech_support';
    $username = 'root';
    $password = '123456';

    try{
        $db = new PDO($dsn, $username, $password); // creates the connection
    }
    catch (PDOException $e){
        $error_message = $e->getMessage();
        echo "<p>Error connecting to database: $error_message</p>";
        exit();
    }
?>