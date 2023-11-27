<?php
$showalert=false;
$showerror = false;
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include 'conn.php';
    
   

    $username = $_POST["username"];
    $password = $_POST["password"];
    $cpassword = $_POST["cpassword"];
    
    $sql = "SELECT * FROM `users`.`user` WHERE UserName = '$username'";
    $result = mysqli_query($conn, $sql);
    $no_of_rows = mysqli_num_rows($result);
    
    if ($no_of_rows > 0) {
        $exist = true;
    } else {
        $exist = false;
    }

    if ($password == $cpassword && !$exist) {
        
       

        $sql = "INSERT INTO `users`.`user` (`UserName`, `Password`, `Date`) VALUES ('$username', '$password', current_timestamp())";
        $result = mysqli_query($conn, $sql);
        
        if ($result) {
            $showalert = true;
        } 
    }
    else{
      $showerror=true;
    }
}
?>






<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="style1.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>Sign Up</title>
  </head>
  <body>

    <?php
     include 'nav.php';
  ?>
   <?php

if ($showalert) {
  echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
      Acount created  successfully.
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
      </button>
  </div>';
  
}
if( $showerror){
  echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
  password mismatch or username exist
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
  </button>
</div>';
}

?>

<div class="wrapper">
          <h1>Sign up</h1>
      <form action="sign-in.php" method="post">

          <div class="input-box">
            <input type="text" name="username" id="" placeholder="Enter Username">
            <i class='bx bxs-user-pin'></i>
          </div>

          
          <div class="input-box">
            <input type="password" name="password" id="" placeholder="Enter password">
            <i class='bx bx-lock-alt' id="position"></i>
          </div>
          <div class="input-box">
            <input type="password" name="cpassword" id="" placeholder="Confirm password">
            <i class='bx bx-lock-alt' id="position"></i>
          </div>

          <div class="remember-forget">
           <label><input type="checkbox">remember me</label>
           <a href="#">Forgot Password</a>
         


          </div>
          <button class="btn" type="submit">Sign Up</button>

          <div class="register">
            <p>Already have an acount? <a href="/Log in/log-in.php">Log in</a>
            </p>
           
          </div>
          
          










      </form>




    </div> 

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>