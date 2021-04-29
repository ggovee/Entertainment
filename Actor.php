<?php include('Connection.php'); ?>

<!DOCTYPE html>
<html>
<head>
  <title>Actor</title>
  <div class="main">
    <a href="Main.php">MAIN</a>
  </div>
  <div class="display">
    <a href="Actor_Display.php">DISPLAY TABLE >></a>
  </div>
</head>
<body>

  <form action="Actor.php" method="post">
  	<fieldset>
  		<legend>ACTOR: DETAILS</legend>
    <div class="details">
      <input type="text" placeholder="Actor ID" name="actor_id"><br><br>
  		<input type="text" placeholder="First Name" name="first_name"><br><br>
    	<input type="text" placeholder="Last Name" name="last_name"><br><br>
      <input type="datetime-local" placeholder="Last Update" name="last_update"><br><br>
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

    	$actor_id = $_POST['actor_id'];
      $first_name = $_POST['first_name'];
    	$last_name = $_POST['last_name'];
      $last_update = $_POST['last_update'];

    	$insert = "INSERT INTO actor (actor_id, first_name, last_name, last_update)
                 VALUES ('$actor_id', '$first_name', '$last_name', '$last_update')";

      $result = mysqli_query($conn, $insert);

      mysqli_close($conn);

      }

    if(isset($_POST['UPDATE'])){

      $actor_id = $_POST['actor_id'];
      $first_name = $_POST['first_name'];
    	$last_name = $_POST['last_name'];
      $last_update = $_POST['last_update'];

      $update = "UPDATE actor SET actor_id='$_POST[actor_id]', first_name='$_POST[first_name]',
                last_name='$_POST[last_name]', last_update='$_POST[last_update]'
                where actor_id='$_POST[actor_id]'";

      $result = mysqli_query($conn, $update);

    	mysqli_close($conn);

    }

    if(isset($_POST['DELETE'])){

      $actor_id = $_POST['actor_id'];

      $delete = "DELETE FROM actor WHERE actor_id = '$actor_id'";

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
    .display a{padding: 5px 7px;
      float: right;
      margin-top: 30px;
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
