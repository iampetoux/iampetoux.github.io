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

         <h2>Admin Signup</h2>
         <div class="container form-signin">

             <?php
    $msg = '';
    $login = $_POST['login'];

if (isset($_POST['login']) && !empty($_POST['username'])
&& !empty($_POST['password'])) {

    if ($_POST['password'] != $_POST['confirmpassword'])
        {
        echo 'Passwords are not identical';
    } else {
        $msg = 'Signed up with login : .$login.';
    }
}
         ?>
      </div> <!-- /container -->

                <div class = "container">

          <form class="form-signin" role="form" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
       
            <h4 class = "form-signin-heading"><?php echo $msg; ?></h4>
            <input type = "text" class = "form-control"
            name = "username" placeholder = "login" required autofocus></br>
            <input type = "password" class = "form-control"
            name = "password" placeholder = "password" required>
            <input type = "password" class = "form-control"
            name = "confirmpassword" placeholder = "repeat password" required>
            <button class = "btn btn-lg btn-primary btn-block" class="sub" type = "submit"
            name = "login">Register</button><br>
            <span class="back"><a href="../index.php"><i class="fa fa-chevron-left"></i> Back</a></span>
   </form>
 </body>
</html>