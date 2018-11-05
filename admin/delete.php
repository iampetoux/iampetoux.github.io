<?php
// ETNA PROJECT, 12/10/2018 by flamen_m
// portfolio
// File description:
//       
//
?>

<!DOCTYPE html>
<html>

<head>

<?php

include 'connexion.php';

?>

<meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">

      <title>Admin - Portfolio</title>

      <link rel="stylesheet" href="css/adminp.css">

      <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
      <link href='http://fonts.googleapis.com/css?family=Cookie' rel='stylesheet' type='text/css'>


      </head>

      <body>
    
      <aside class="bar">

      <a href="admin.php"><img src"logo.png">Admin</img></a>

      <div class="bar-links">

      <div class="link-blue selected">

      <a href="#">
      <i class="fa fa-edit"></i>Projects
      </a>

      <ul class="sub-links">
      <li><a href="insert.php">Insert</a></li>
      <li><a href="edit.php">Edit</a></li>
      <li><a href="delete.php">Delete</a></li>
      </ul>

      </div>

      <div class="link-red">

      <a href="logout.php">
      <i class="fa fa-sign-out"></i>Logout
      </a>

      </div>

      </div>

      </aside>

    <div class="main">
    <p class="welcome">Welcome on the admin page.</p>
    <h1>Projects info</h1>
    </div>
    <div class="projadmin">
    <h2>Infos</h2>
    <p>There is actually x Projects.</p>
    <p>Their IDs are : x x x x</p>
</div>
</body>

</html>
