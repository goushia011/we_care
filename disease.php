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
  <link rel="stylesheet" href="css/disease.css">
  <script src="js/fetch_desease.js"></script>

  <title>wecare</title>
</head>

<body>
  <?php include "./layout/dash.php" ?>
  <div class="main">
    <h1> Disease Prediction system</h1>
    <section>
      <?php $symptoms_str = file_get_contents("data/symptoms.json") ?>
      <?php $symptoms = json_decode($symptoms_str) ?>
      <div class="disease-prediction">
        <section class="symptoms-container">
          <?php foreach ($symptoms as $key => $value) { ?>
            <div class="symptom">
              <input type="checkbox" class="checkbox" name="symptoms[]" value="<?php echo $key ?>" id="<?php echo $key ?>">
              <label for="<?php echo $key ?>">
                <?php echo $value ?>
              </label>
            </div>
          <?php } ?>
        </section>
        <section class="actions">
          <input type="submit" class="submit-disease" id="btnSubmit" value="Submit">
          <div id="prediction" class="txt"></div>
        </section>
      </div>
    </section>
  </div>
</body>