 <?php include('Connection.php'); ?>

<!DOCTYPE html>
<html>
<head>
  <title>Address</title>
  <div class="main">
    <a href="Main.php">MAIN</a>
  </div>
  <div class="display">
    <a href="Address_Display.php">DISPLAY TABLE >></a>
  </div>
</head>
<body>

  <form action="Address.php" method="post">
  	<fieldset>
  		<legend>ADDRESS: DETAILS</legend>
    <div class="details">
      <input type="text" placeholder="Address ID" name="address_id"><br><br>
  		<input type="text" placeholder="Address" name="address"><br><br>
    	<input type="text" placeholder="Address 2" name="address2"><br><br>
      <input type="text" placeholder="District" name="district"><br><br>
      <input type="text" placeholder="City ID" name="city_id"><br><br>
      <input type="text" placeholder="Postal Code" name="postal_code"><br><br>
      <input type="text" placeholder="Phone" name="phone"><br><br>
      <input type="text" placeholder="Last Update" name="last_update"><br><br>
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

    	$address_id = $_POST['address_id'];
      $address = $_POST['address'];
    	$address2 = $_POST['address2'];
      $district = $_POST['district'];
      $city_id = $_POST['city_id'];
      $postal_code = $_POST['postal_code'];
      $phone = $_POST['phone'];
      $last_update = $_POST['last_update'];

    	$insert = "INSERT INTO address (address_id, address, address2, district, city_id, postal_code, phone, last_update)
                 VALUES ('$address_id', '$address', '$address2', '$district', '$city_id', '$postal_code', '$phone', '$last_update')";

      $result = mysqli_query($conn, $insert);

      mysqli_close($conn);

      }

    if(isset($_POST['UPDATE'])){

      $address_id = $_POST['address_id'];
      $address = $_POST['address'];
      $address2 = $_POST['address2'];
      $district = $_POST['district'];
      $city_id = $_POST['city_id'];
      $postal_code = $_POST['postal_code'];
      $phone = $_POST['phone'];
      $last_update = $_POST['last_update'];

      $update = "UPDATE address SET address_id='$_POST[address_id]', address='$_POST[address]',
                address2='$_POST[address2]', district='$_POST[district]', city_id='$_POST[city_id]', postal_code='$_POST[postal_code]', phone='$_POST[phone]', last_update='$_POST[last_update]'
                where address_id='$_POST[address_id]'";

      $result = mysqli_query($conn, $update);

    	mysqli_close($conn);

    }

    if(isset($_POST['DELETE'])){

      $address_id = $_POST['address_id'];

      $delete = "DELETE FROM address WHERE address_id = '$address_id'";

      $result = mysqli_query($conn, $delete);

      mysqli_close($conn);

      }

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
    a{padding: 5px 7px;
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
    a:hover{color: #000;}
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
