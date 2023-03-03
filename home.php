<?php
session_start();
ob_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title> we_care </title>

  <!-- font awesome cdn link  -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

  <!-- custom css file link  -->
  <link rel="stylesheet" href="css/style.css">

</head>
<body>
<header class="header">

<a href="#" class="logo"><i class="fas fa-notes-medical">WeCare. </i></a>
<!-- <i class="fas fa-heartbeat"></i> -->

<nav class="navbar">
  <a href="/we_care/home.php#home">home</a>
  <a href="/we_care/home.php#services">services</a>
  <a href="#footer">contact us</a>
  <a href="logout.php">Logout</a>
  <a class="fas fa-users" href="#"> <img src=""> <?php echo "Welcome ". $_SESSION['username']?></a>
  <?php $email = array_key_exists('username', $_SESSION) ? $_SESSION['username'] : false ?>



</nav>
</header>

<!-- service section start -->

<section class="services" id="services">

  <h1 class="heading"> our <span>services</span> </h1>

  <div class="box-container">

    <div class="box">
      <i class="fas fa-notes-medical"></i>
      <h3>Online Doctor appointment</h3>
      <p>Consult with our top doctors available for you 24/7.</p>
      
    </div>

    <div class="box">
      <i class="fas fa-ambulance"></i>
      <h3>24/7 Ambulance</h3>
      <p>Book your ambulance in the case of emergency.</p>
      
    </div>

    <div class="box">
      <i class="fas fa-user-md"></i>
      <h3>Expert Doctors</h3>
      <p>We have thousand of expert doctor through whom you can easily connect. </p>
      
    </div>

    <div class="box">
      <i class="fas fa-pills"></i>
      <h3>Medicines</h3>
      <p>You can also easily buy the medicines refered by doctors.</p>
      
    </div>

    <div class="box">
      <i class="fas fa-procedures"></i>
      <h3>Blood Bank facility</h3>
      <p>All type of blood available in the need of a rush hour.</p>
       
    </div>

    <div class="box">
      <i class="fas fa-heartbeat"></i>
      <h3>Disease Prediction System</h3>
      <p>Predict the Disease through your symptoms </p>
      
    </div>

  </div>

</section> -->
 <!-- ends -->

<?php include "./layout/footer.php" ?>
</body>
</head>
</html>

