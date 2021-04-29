<?php include('Connection.php'); ?>

<!DOCTYPE html>
<html>
<head>
  <title>Payment</title>
  <div class="main">
    <a href="Main.php">MAIN</a>
  </div>
  <div class="display">
    <a href="Payment_Display.php">DISPLAY TABLE >></a>
  </div>
</head>
<body>

  <form action="Payment.php" method="post">
  	<fieldset>
  		<legend>PAYMENT: DETAILS</legend>
    <div class="details">
    	<input type='text' placeholder='Payment ID' name='payment_id'><br><br>
      <input type='text' placeholder='Customer ID' name='customer_id'><br><br>
    	<input type='text' placeholder='Staff ID' name='staff_id'><br><br>
      <input type='text' placeholder='Rental ID' name='rental_id'><br><br>
      <input type='text' placeholder='Amount' name='amount'><br><br>
      <input type='datetime-local' placeholder='Payment Date' name='payment_date'><br><br>
      <input type='datetime-local' placeholder='Last Update' name='last_update'><br><br>
    </div>
    <div class="button">
     	<input type='submit' value='INSERT' name='INSERT'>
      <input type='submit' value='UPDATE' name='UPDATE'>
      <input type='submit' value='DELETE' name="DELETE">
    </div>
    </fieldset>
  </form>

  <?php

    if(isset($_POST['INSERT'])){

    	$payment_id = $_POST['payment_id'];
      $customer_id = $_POST['customer_id'];
      $staff_id = $_POST['staff_id'];
    	$rental_id = $_POST['rental_id'];
    	$amount = $_POST['amount'];
      $payment_date = $_POST['payment_date'];
      $last_update = $_POST['last_update'];

    	$insert = "INSERT INTO payment (payment_id, customer_id, staff_id, rental_id, amount, payment_date, last_update)
                 VALUES ('$payment_id', '$customer_id' , '$staff_id', '$rental_id', '$amount', '$payment_date', '$last_update')";

      $result = mysqli_query($conn, $insert);

      }

    if(isset($_POST['UPDATE'])){

      $payment_id = $_POST['payment_id'];
      $customer_id = $_POST['customer_id'];
      $staff_id = $_POST['staff_id'];
    	$rental_id = $_POST['rental_id'];
    	$amount = $_POST['amount'];
      $payment_date = $_POST['payment_date'];
      $last_update = $_POST['last_update'];

      $update = "UPDATE payment SET payment_id='$_POST[payment_id]', customer_id='$_POST[customer_id]', staff_id='$_POST[staff_id]',
                rental_id='$_POST[rental_id]', amount='$_POST[amount]', payment_date='$_POST[payment_date]', last_update='$_POST[last_update]'
                where payment_id='$_POST[payment_id]'";

      $result = mysqli_query($conn, $update);

    }

    if(isset($_POST['DELETE'])){

      $payment_id = $_POST['payment_id'];

      $delete = "DELETE FROM payment WHERE payment_id = '$payment_id'";

      $result = mysqli_query($conn, $delete);

      }

  mysqli_close($conn);

  ?>

  <style>
    .main{margin-left: 50px;}
    .main a{color:#fff;
      text-decoration: none;
      font-family: Century Gothic;
      float: left;
      margin-top: 30px;
      transition: 0.6s ease;}
    .main a:hover{color: #000;}
    body{margin:0;
	   padding:0;
	   background-image:linear-gradient(125deg,#FDA7DF,#ED4C67,#B53471,#5758BB,#1B1464);
	   background-size:400% 400%;
	   animation:bganimation 15s infinite;}
    @keyframes bganimation{0%{
      background-position:0% 50%}
      50%{background-position:100% 50%}
      100%{background-position:0% 50%}}
    .display a{padding: 5px 7px;
      float: right;
      margin-top: 20px;
      margin-right: 20px;
      border: none;
      border-radius: 5px;
      text-decoration: none;
      font-family: Century Gothic;
      color: #fff;
      outline: none;
      background: none;
      transition: 0.6s ease;
      cursor: pointer;}
    .display a:hover{color: #000;}
    legend{color: #fff;}
    form{width: 50%;
      padding-top: 40px;
      padding-left: 350px;
      text-align: center;
      font-size: 15px;
      font-family: Century Gothic;
      outline: none;
      color: #fff;}
    fieldset{padding-top: 20px;
      padding-bottom: 20px;
      border: 2px solid #fff;}
    ::placeholder{color: #fff;}
    .details input{width: 60%;
      padding: 10px 15px;
      font-size: 16px;
      font-family: Century Gothic;
      color: #fff;
      border-top: none;
      border-bottom: 2px solid #fff;
      border-left: none;
      border-right: none;
      outline: none;
      background: none;}
    .button input{padding: 5px 7px;
      border-radius: 5px;
      border: none;
      text-decoration: none;
      font-family: Century Gothic;
      color: #fff;
      outline: none;
      background: none;
      transition: 0.6s ease;
      cursor: pointer;}
    .button input:hover{background: #fff;
      color:#000;}
  </style>

</body>
</html>
