<?php
session_start();
unset($_SESSION["username"]);
unset($_SESSION["password"]);

echo 'You have been disconnected';
header('Refresh: 0; URL = ../index.php');
?>