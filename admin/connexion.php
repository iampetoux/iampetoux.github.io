<?php

    $host = 'localhost';
    $port = '3306';
    $db_name = 'port';
    $user = 'root';
    $password = 'bilou973';
    $bool = 0;


    try {
        $connexion = new PDO('mysql:host='.$host.';port='.$port.';dbname='.$db_name, $user, $password);
        $bool = 1;
    } catch(Exception $e) {
        echo 'Error : ' . $e->getMessage() . '<br />';
        echo 'N° : ' . $e->getCode();
    }
?>