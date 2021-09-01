<!-- Connexion a la base de donnees de MySQL -->
<?php

function loadDb(): PDO
{
    try {
        $user = 'root';
        $pass = 'root';
        $dsn = 'mysql:host=localhost;dbname=football;charset-utf8';
        $conn = new PDO($dsn, $user, $pass);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $conn;
    } catch (Exception $e) {
        echo $e->getMessage();
    }
}