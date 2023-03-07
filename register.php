<?php 
session_start();

?>

<!DOCTYPE html>

<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="css/register.css">

    <title>Register - We Care</title>
  </head>
   
   <body background="image/main.jpg">

<?php 

include 'dbcon.php';

if(isset($_POST['submit'])){
  $name = mysqli_real_escape_string($con, $_POST['name']);
  $username = mysqli_real_escape_string($con, $_POST['username']);
  $email = mysqli_real_escape_string($con, $_POST['email']);
  $mobile = mysqli_real_escape_string($con, $_POST['mobile']);
  $gender = mysqli_real_escape_string($con, $_POST['gender']);
  $password = mysqli_real_escape_string($con, $_POST['password']);
  $cpassword = mysqli_real_escape_string($con, $_POST['cpassword']);
  
  //change password to hash
  $pass = password_hash($password, PASSWORD_BCRYPT);
  $cpass = password_hash($cpassword, PASSWORD_BCRYPT);

  $emailquery = "select * from registration where email ='$email' ";
  $query = mysqli_query($con, $emailquery);

  $emailcount = mysqli_num_rows($query);

  if($emailcount>0){
    echo "email already exists";
  }else{
    if($password === $cpassword){

      $insertquery =" insert into registration( name,  username, email, mobile, gender, password,cpassword) values('$name','$username','$email','$mobile', '$gender', '$pass','cpass')";

      $iquery = mysqli_query($con, $insertquery);

          if($iquery){
            

              ?>
                    <script>
                        alert("insert Successful");
                    </script>

                <?php
                header('location:login.php');
            }
            else{

                ?>
                    <script>
                        alert("Connection Successful");
                    </script>

                <?php
          }

    }else{
      //echo "password are not matching";
      ?>
      <script>
          alert("password are not matching");
      </script>

  <?php
    }
  }






}



?>

  <div class="container">
    <div class="title"> Register</div>
    <div class="content">
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
        <div class="user-details">
          <div class="input-box">
            <span class="details">Full Name</span>
            <input type="text" name="name" placeholder="Enter your name" required name="fullname">
          </div>
          <div class="input-box">
            <span class="details">Username</span>
            <input type="text" name="username" placeholder="Enter your username" required name="username">
          </div>
          <div class="input-box">
            <span class="details">Email</span>
            <input type="text" name="email" placeholder="Enter your email" required name="email">
          </div>
          <div class="input-box">
            <span class="details">Phone Number</span>
            <input type="text" name="mobile" placeholder="Enter your number" required name="phone">
          </div>
          <div class="input-box">
            <span class="details">Password</span>
            <input type="text" name="password" placeholder="Enter your password" required name="password">
          </div>
          <div class="input-box">
            <span class="details">Confirm Password</span>
            <input type="text" name="cpassword" placeholder="Confirm your password" required name="confirmpassword">
          </div>
        </div>
        <div class="gender-details">
          <input type="radio" name="gender" id="dot-1">
          <input type="radio" name="gender" id="dot-2">
          <input type="radio" name="gender" id="dot-3">
          <span class="gender-title">Gender</span>
          <div class="category">
            <label for="dot-1">
            <span class="dot one"></span>
            <span class="gender">Male</span>
          </label>
          <label for="dot-2">
            <span class="dot two"></span>
            <span class="gender">Female</span>
          </label>
          <label for="dot-3">
            <span class="dot three"></span>
            <span class="gender">Prefer not to say</span>
            </label>
          </div>
        </div>
        <div class="button">
            <input type="submit" name="submit" value="Register">
          </div>
          <div class="login">I,m a member,<a href="login.php" >login now</a></div>
      </form>
    </div>
  </div>
</body>
</html>
