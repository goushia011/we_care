<?php
session_start();
ob_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />

  <link rel="stylesheet" href="css/home.css">
  <title>wecare</title>
</head>

<body>
  <div class="container">
    <div class="topbar">
      <div class="logo">
        <h2>wecare.</h2>
      </div>

      <!-- search bar start -->
      <div class="search">
        <input type="text" name="search" placeholder="search here">
        <label for="search"><i class="fas fa-search"></i></label>
      </div>
      <!-- search bar end -->

      <i class="fas fa-bell"></i>
      <div class="user">
        <?php $email = array_key_exists('username', $_SESSION) ? $_SESSION['username'] : false ?>
        <?php echo "Welcome ". $_SESSION['username']?>
      </div>
    </div>

    <!-- sidebar start -->
    <div class="sidebar">
      <ul>
        <li>
          <a href="#">
            <i class="fas fa-th-large"></i>
            <div>Home</div>
          </a>
        </li>
        <li>
          <a href="#">
            <i class="fas fa-user-md"></i>
            <div>Diseases Prediction system</div>
          </a>
        </li>
        <li>
          <a href="#">
            <i class="fas fa-chalkboard-teacher"></i>
            <div>Doctor Appointment</div>
          </a>
        </li>
        <li>
          <a href="#">
            <i class="fas fa-users"></i>
            <div>Blood Bank</div>
          </a>
        </li>
        <li>
          <a href="#">
            <i class="fas fa-hospital"></i>
            <div>Buy Medicine</div>
          </a>
        </li>
        <li>
          <a href="#">
            <i class="fas fa-procedures"></i>
            <div>Ambulance</div>
          </a>
        </li>
        <li>
          <a href="logout.php">
            <i class="fas fa-cog"></i>
            <div>Logout</div>
          </a>
        </li>
        <li>
          <a href="#">
            <i class="fas fa-question"></i>
            <div>Help</div>
          </a>
        </li>
      </ul>
    </div>
    <!-- sidebar end -->
    
    <div class="main">
      <div class="cards">
        <div class="card">
          <div class="card-content">
            <div class="number">12170</div>
            <div class="card-name">Doctors</div>
          </div>
          <div class="icon-box">
            <i class="fas fa-user-md"></i>
          </div>
        </div>
        <div class="card">
          <div class="card-content">
            <div class="number">420000</div>
            <div class="card-name">Patients</div>
          </div>
          <div class="icon-box">
            <i class="fas fa-users"></i>
          </div>
        </div>
        <div class="card">
          <div class="card-content">
            <div class="number">680</div>
            <div class="card-name">Ambulance</div>
          </div>
          <div class="icon-box">
            <i class="fas fa-procedures"></i>
          </div>
        </div>
        <div class="card">
          <div class="card-content">
            <div class="number">450000</div>
            <div class="card-name">Medicines</div>
          </div>
          <div class="icon-box">
            <i class="fas fa-dollar-sign"></i>
          </div>
        </div>
      </div>
      <!-- <div class="charts">
        <div class="chart">
          <h2><section class="heder-section">
            <div class="center-div">
              <h1 class="font-weight-bold">We wish you a healthy life!</h1>
              <p>Aayiye aoko bimaar bnate h</p>
              <div class="heder-button">
              </div>
            </div>
          </section></h2>
          <div>
            <canvas id="lineChart"></canvas>
          </div>
        </div>
        <div class="chart doughnut-chart">
          <h2></h2>
          <div>
            <canvas id="doughnut"></canvas>
          </div>
        </div>
      </div> -->
      
    </div>
  </div>
</body>

</html>