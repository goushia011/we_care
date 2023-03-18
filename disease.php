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
  <?php include "./layout/dash.php" ?>
  <div class="main">
    <h1> Disease Prediction system</h1>
    <section>
      <?php $symptoms_str = file_get_contents("data/symptoms.json") ?>
      <?php $symptoms = json_decode($symptoms_str) ?>
      <div style="display: flex; justify-content: center;">
        <div class="symptoms-container">
          <?php foreach ($symptoms as $key => $value) { ?>
            <div>
              <label for="<?php echo $key ?>">
                <input type="checkbox" name="symptoms[]" id="<?php echo $key ?>">
                <?php echo $value ?>
              </label>
            </div>
          <?php } ?>
        </div>
      </div>
      <div class="content">
        <input type="submit">
        <input type="text">
      </div>
    </section>
  </div>
</body>