
<?php
    
          include('config.php');
          
          if(isset($_POST['submit']))
          {
          $username=$_POST['username'];
          $email=$_POST['email'];
          $password=$_POST['password'];

          
          $date=date("d/m/y");

          $query=mysqli_query($con,"
            insert into register(username,email,password) values('$username','$email','$password')");
            
          if($query)
          {
            
            echo "<script>alert('Register Sucessful');</script>";
    echo "<script type='text/javascript'> document.location = 'login.php'; </script>";
          }
          else{
             echo "<script>alert('Error.');</script>";
          } 
          }

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sign Up</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <div class="wrapper">
    <div class="form-wrapper ">
      <form method="post">
        <h2>Sign Up</h2>
        <div class="input-group">
          <input type="text" name="username" required>
          <label for="">Username</label>
        </div>
        <div class="input-group">
          <input type="email" name="email" required>
          <label for="">Email</label>
        </div>
        <div class="input-group">
          <input type="password" name="password" required>
          <label for="">Password</label>
        </div>
        <!-- <div class="remember">
          <label><input type="checkbox"> I agree to the terms & conditions</label>
        </div> -->
        <button type="submit" name="submit">Sign Up</button>
        <div class="signUp-link">
          <p>Already have an account? <a href="login.php" class="signInBtn-link">Sign In</a></p>
        </div>
      </form>
    </div>
  </div>
  <script src="script.js"></script>
</body>
</html>
