
<?php

  // Initialize the session
  session_start();

  // Capture the values that was posted by the form
  $_SESSION['full_name'] = $_POST['full_name'];

  $_SESSION['reference_code'] = $_POST['reference_code'];
    
  $_SESSION['customer_email'] = $_POST['customer_email'];

  $_SESSION['automobile_maker'] = $_POST['automobile_maker'];

  $_SESSION['maker_model'] = $_POST['maker_model'];
?>

<!DOCTYPE html>
<html>

<head>

    <title>Automobile Manufacturers Evaluation</title>
    
</head>

<body>

<h2>Your Submitted Details</h2>

<label>Customer Name: </label><?php echo $_SESSION['full_name']; ?><br><br>

<label>Customer Reference Code: </label><?php echo $_SESSION['reference_code']; ?><br><br>

<label>Customer Email: </label><?php echo $_SESSION['customer_email']; ?><br><br>

<label>Automobile Makers: </label><?php echo $_SESSION['automobile_maker']; ?><br><br>

<label>Maker's Model: </label><?php echo $_SESSION['maker_model']; ?><br><br>

<label>Car Conditions: </label><br>

<?php 

    // If function to get the car conditions that was checked
    if(!empty($_POST['car_conditions'])) {

        // Loop to get car conditions
        foreach($_POST['car_conditions'] as $car_condition) {

            echo $car_condition."</br>";
        }
    }
?>

</body>
</html>
