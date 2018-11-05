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
    <h2>Insert</h2>

<?php
    include 'connexion.php';
   
    if($bool == 1) {
        $connexion->query("INSERT INTO Project (Title, Description, Picture, Enabled) VALUES ('$_POST['title']', '$_POST['description']', '$_POST['picture']', '$_POST['enabled']');")
    }
?>
    
    <p>Add a new project</p>

        <form action="inserted.php" method="post">
        Title <br><input type="text" name="title"><br>
        Description <br><textarea class="field" id="content" name="description" form="usrform">Enter text here...</textarea><br>
    Picture name (ex: picture.png) <br><input type="text" name="picture"><br><br>
    Enabled <br><input type="radio" name="enabled" value="1" checked> Yes<br>
      <input type="radio" name="enabled" value="0"> No<br>
      <br><input type="submit" value="Ajouter">
        </form><br>
</div>
</body>

</html>
