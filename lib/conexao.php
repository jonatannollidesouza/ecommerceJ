<?php
$username = 'root';
$password = '';

try{
    $conn = new PDO('mysql:host=localhost;dbname=meu_commerce', $username, $password);
} catch(PDOException $e){
    echo 'ERROR: ' . $e->getMessage();
}
?>