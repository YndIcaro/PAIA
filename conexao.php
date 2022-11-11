<?php
    $servername     = "localhost";
    $database       = "imobiliaria";
    $username       = "root";
    $password       = "";

    $conn = new PDO("mysql:local=$servername;dbname=$database;port=3306;",$username,$password);