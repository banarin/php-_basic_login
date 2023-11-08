<?php
    // les informations du server
    $serveur = "localhost";
    $user = "root";
    $motdepass = "";
    $databaseName = "loginphp";
    // creer la connexion

    try {
        $pdo = new PDO("mysql:host=$serveur;dbname=$databaseName",$user,$motdepass);
    } catch (PDOException $e) {
        die("erreur :".$e->getMessage());
    }


?>