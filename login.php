<?php
session_start();
//Database Configuration File
include('config.php');
//error_reporting(0);
if(isset($_POST['login']))
  {
 
    // Getting username/ email and password
    $username=$_POST['username'];
    $password=$_POST['password'];
    
    // Fetch data from database on the basis of username/email and password

$sql =mysqli_query($con,"SELECT * FROM register WHERE username='$username' ");
$num=mysqli_fetch_array($sql);

if($num>0)
{
$hashpassword=$num['password']; // Hashed password fething from database
//verifying Password
if ($password==$hashpassword) {
$_SESSION['login']=$_POST['username'];
$_SESSION['username']=$num['username'];
echo "<script>alert('login Sucessful');</script>";
    echo "<script type='text/javascript'> document.location = 'adminDashboard.php'; </script>";
  } else {
echo "<script>alert('Wrong Password');</script>";
 
  }
}
//if username or email not found in database
else{
echo "<script>alert('User not registered with us');</script>";
  }
 
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sign In</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <div class="wrapper">
    <div class="form-wrapper ">
      <form method="post">
        <h2>Login</h2>
        <div class="input-group">
          <input type="text" name="username" required>
          <label for="">Username</label>
        </div>
        <div class="input-group">
          <input type="password" name="password" required>
          <label for="">Password</label>
        </div>
        <!-- <div class="remember">
          <label><input type="checkbox"> Remember me</label>
        </div> -->
        <button type="submit" name="login">Login</button>
        <div class="signUp-link">
          <p>Don't have an account? <a href="register.php" class="signUpBtn-link">Sign Up</a></p>
        </div>
      </form>
    </div>
  </div>
  <script src="script.js"></script>
</body>
</html>
