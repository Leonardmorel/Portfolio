<?php

try {
    $pdo = new PDO('mysql:host=localhost;dbname=tableau', 'root', '');
}
catch(PDOException $e) {
    echo "error";
}
$request= new PDO('SELECT * FROM tableau');




?>
