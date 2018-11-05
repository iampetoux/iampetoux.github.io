<?php
// ETNA PROJECT, 12/10/2018 by flamen_m
// portfolio
// File description:
//       
//
?>

<!DOCTYPE html>

<html>
  <head lang="en">
    <title>Admin</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/admin.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
</head>

<body>

     <h2>Admin Login</h2>
     <div class="container form-signin">

         <?php
    $msg = '';
            
if (isset($_POST['login']) && !empty($_POST['username']) 
&& !empty($_POST['password'])) {
    
    if ($_POST['username'] == 'test' && 
    $_POST['password'] == '1234') {
        $_SESSION['valid'] = true;
        $_SESSION['timeout'] = time();
        $_SESSION['username'] = 'test';
                  
        header("Location: admin.php");
    } else {
        $msg = 'Wrong username or password';
    }
}
         ?>
      </div> <!-- /container -->
      
      <div class = "container">
      
         <form class = "form-signin" role = "form" 
            action = "<?php echo htmlspecialchars($_SERVER['PHP_SELF']); 
            ?>" method = "post">
                  <h4 class = "form-signin-heading"><?php echo $msg; ?></h4>
                  <input type = "text" class = "form-control" 
                  name = "username" placeholder = "login" 
                  required autofocus></br>
                  <input type = "password" class = "form-control"
                  name = "password" placeholder = "password" required>
                  <button class = "btn btn-lg btn-primary btn-block" type = "submit" 
                  name = "login">Login</button><br>
                  <span class="back"><a href="../index.php"><i class="fa fa-chevron-left"></i> Back</a></span>
    </form> 
   </body>
</html>