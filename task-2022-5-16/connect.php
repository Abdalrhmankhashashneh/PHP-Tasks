<?php


try {
    $db = new PDO('mysql:host=localhost;dbname=test' , 'root' , ''); 
}
 catch (PDOException $e) {
    echo 'sorry we have a problem we will fix it as soon we can ';
}
