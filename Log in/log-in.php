<?php
$logIn = false;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include 'conn.php'; // Make sure this includes the database connection properly

    $username = $_POST["username"];
    $password = $_POST["password"];

    $sql = "SELECT * FROM `users`.`user` WHERE UserName = '$username' AND Password='$password'";
    $result = mysqli_query($conn, $sql);
    $num_of_rows = mysqli_num_rows($result);

    if ($num_of_rows == 1) {
            $logIn=true;
        // Here, you should compare the password hash from the database with the hashed user input
        // Assuming you're using password_hash() for hashing passwords
          session_start();
          $_SESSION['loggedin']=true;
          $_SESSION['username']=$username;
          header("location:main.php");
     
    }   
  
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
          <style>











body{
    /* display: flex; */
    
   
     background: url('2.jpg');
}
.wrapper{
    width: 550px;
    margin: auto;
    margin-top: 50px;
    background-color: transparent;
    border: 2px solid rgba(255, 255, 255, .2);
    backdrop-filter: blur(20px);
    border-radius: 20px;
    padding: 30px 40px;



}
.wrapper h1{
    text-align: center;
    font-size: 36px;
    color: #fff;
    

}
.wrapper .input-box{
       width: 100%;
       height: 50px;
       margin: 24px 0px;
    display: flex;
    position: relative;
}
.input-box input{
    width: 100%;
    height: 100%;
    outline: none;
    border-radius: 40px;
    background: transparent;
    border: none;
    border: 2px solid rgba(255, 255, 255, .2);
    padding: 23px;
}
.input-box input::placeholder{
    color: #fff;
    font-size: 17px;
}
.input-box i{
    position: absolute;
    right: 20px;
    top: 35%;
    transform: translate(-50%);
    font-size: 20px;
}

.wrapper .remember-forget{
    display: flex;
    justify-content: space-between;
    font-size: 15px;
    margin: 12px;
}
.remember-forget label input{
     accent-color: #fff; 
    margin-right: 5px;
}
.remember-forget a{
    color: #fff;
    text-decoration: none;
    cursor: pointer;
}
.remember-forget a:hover{
    text-decoration: underline;
}

.btn{
    width: 100%;
    height: 40px;
    border: none;
    outline: none;
    border-radius: 40px;
    cursor: pointer;
    color: black;
}
.register p{
  font-size: 15px;
  color: white;
  margin-top: 10px;
  text-align: center;
}
.register p a{
    font-weight: 600;
    color: red;
    text-decoration: none;
    
   
}
.register p a:hover{
    text-decoration: underline;
}






          </style>


  </head>
<body>

<?php
     include 'nav.php';
  ?>
<?php
if ($logIn) {
    echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
        You Are Logged in.
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>';
}
else{

  echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
  Failed Logging in.
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
  </button>
</div>';

}
?>

<div class="wrapper">
    <h1>Log In</h1>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <div class="input-box">
            <input type="text" name="username" placeholder="Enter Username">
            <i class='bx bxs-user-pin'></i>
        </div>

        <div class="input-box">
            <input type="password" name="password" placeholder="Enter password">
            <i class='bx bx-lock-alt' id="position"></i>
        </div>

        <div class="remember-forget">
            <label><input type="checkbox" name="remember"> Remember me</label>
            <a href="#">Forgot Password</a>
        </div>

        <button class="btn" type="submit">Log in</button>

        <div class="register">
            <p>Don't have an account? <a href="/Log in/sign-in.php">Sign Up</a></p>
        </div>
    </form>
</div>





<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>
