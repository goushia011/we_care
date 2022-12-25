<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <button><a href="logout.php">logout</a></button>
</body>
</html> -->

<?php

session_start();

// if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !==true)
// {
//     header("location: login.php");
// }


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WE Care</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/home.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css"
        integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg=="
        crossorigin="anonymous" />

</head>

<body>
    <!-- **************************header-part***************************** -->
    <div class="header" id="topheder">
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
            <div class="container  p-2">
                <a class="navbar-brand font-weight-bold text-white" href="#">We Care</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto text-uppercase">
                        <li class="nav-item active">
                            <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Service</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Blog </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">about</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">contact</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="logout.php">Logout</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="#"> <img src="https://img.icons8.com/metro/26/000000/guest-male.png"> <?php echo "Welcome ". $_SESSION['username']?></a>
                        </li>
                    </ul>

                </div>
            </div>
        </nav>
        <section class="heder-section">
            <div class="center-div">
                <h1 class="font-weight-bold">We wish you a healthy life!</h1>
                <p>Aayiye aoko bimaar bnate h</p>
                <div class="heder-button">
                    <!-- <a href="Login.html">Login  </a>
                    <a href="registration.html">signup</a> -->
                </div>
            </div>
        </section>
    </div>
    <!-- ********************************End header***************************************** -->

    <!-- ******************************three Extra div Start******************************************* -->
    <section class="header-extradiv">
        <div class="container">
            <div class="row">
                <div class="extra-div col-lg-4 col-md-4 col-12">
                    <a href="#"><i class="fa-3x fa fa-user-md" aria-hidden="true"></i></a>
                    <h2>Disease Prediction</h2>
                    <p>It is a way to recognize patient health by applying data mining and machine learning techniques on patient 
                        treatment history</p>
                </div>
                <div class="extra-div col-lg-4 col-md-4 col-12">
                    <a href="#"><i class="fa-3x fa fa-medkit" aria-hidden="true"></i></a>
                    <h2>Medical Treatment</h2>
                    <p>To help you find the best help possible, We Care medical team is by your side to help you find the solution to
                         your general surgical problems</p>
                </div>
                <div class="extra-div col-lg-4 col-md-4 col-12">
                    <a href="#"><i class="fa-3x fa fa-heartbeat" aria-hidden="true"></i></a>
                    <h2>Emergency Help</h2>
                    <p>All around the world, acutely ill and injured people seek care every day.  Frontline providers manage children 
                        and adults with medical, surgical and obstetric emergencies.</p>
                </div>
            </div>
        </div>
    </section>


    <!-- ******************************three Extra div End******************************************* -->



 <!-- ****************************bootstrap 4 script link*********************************** -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>