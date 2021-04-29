<!DOCTYPE html>
<html>
<head>

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"></link>
  <title>Customer Table</title>

  <form action="Customer_Display.php" method="post">
  <div class="main">
    <a href="Main.php">MAIN</a>
  </div>

  <div class="search-box">
    <input class='search' type='text' name='customer_id' placeholder='Search Customer ID'>
    <i class="fa fa-search" aria-hidden="true"></i>
  </div>

  <div class="search">
    <input type="submit" value="SEARCH" name="SEARCH">
  </div>

  <div class="reset">
    <input type="submit" value="RESET" name="RESET">
  </div>

</form>
</head>

<body style="background-color: #41A7C0">

<div class="display">
  <a href="Customer.php"><< BACK TO FORM</a>
</div>

<div class="center">

	<?php
	 include('Connection.php');

	 if(isset($_POST['SEARCH'])){
	 	$customer_id = $_POST['customer_id'];

		$select = "SELECT * FROM customer WHERE customer_id = '$customer_id'";

		$result = mysqli_query($conn, $select);

		if($result = mysqli_query($conn, $select)){
			if(mysqli_num_rows($result) > 0){
				echo "<table>";
				  echo "<tr>";
				    echo "<th>customer_id</th>";
				    echo "<th>store_id</th>";
				    echo "<th>first_name</th>";
				    echo "<th>last_name</th>";
				    echo "<th>email</th>";
				    echo "<th>address_id</th>";
				    echo "<th>active</th>";
				    echo "<th>create_date</th>";
				    echo "<th>last_update</th>";
				  echo "</tr>";

				while($row = mysqli_fetch_array($result)){
					echo "<tr>";
					    echo "<td>" . $row['customer_id'] . "</td>";
					    echo "<td>" . $row['store_id'] . "</td>";
					    echo "<td>" . $row['first_name'] . "</td>";
					    echo "<td>" . $row['last_name'] . "</td>";
					    echo "<td>" . $row['email'] . "</td>";
					    echo "<td>" . $row['address_id'] . "</td>";
					    echo "<td>" . $row['active'] . "</td>";
					    echo "<td>" . $row['create_date'] . "</td>";
					    echo "<td>" . $row['last_update'] . "</td>";
					echo "</tr>";
				}
				echo "</table>";
			}
		}
	 }

	 elseif((!isset($_POST['SEARCH'])) && (isset($_POST['RESET']))){
	 $select = 'SELECT * FROM customer';
	 $result = mysqli_query($conn, $select);

	 if($result->num_rows > 0){
	 	if(mysqli_num_rows($result) > 0){
				echo "<table>";
				  echo "<tr>";
				    echo "<th>customer_id</th>";
				    echo "<th>store_id</th>";
				    echo "<th>first_name</th>";
				    echo "<th>last_name</th>";
				    echo "<th>email</th>";
				    echo "<th>address_id</th>";
				    echo "<th>active</th>";
				    echo "<th>create_date</th>";
				    echo "<th>last_update</th>";
				  echo "</tr>";

		  while($row = $result->fetch_assoc()){
			   echo "<tr><td>" . $row['customer_id'] . "</td><td>" . $row['store_id'] . "</td><td>" . $row['first_name'] . "</td><td>" . $row['last_name'] . "</td><td>" . $row['email'] . "</td><td>" . $row['address_id'] . "</td><td>" . $row['active'] . "</td><td>" . $row['create_date'] . "</td><td>" . $row['last_update'] . "</td></tr>";
		  }
	 }
	 else{
		  echo "No results";
	 }
    }
   }

   else {
     $select = 'SELECT * FROM customer';
     $result = mysqli_query($conn, $select);

     if($result->num_rows > 0){
      if(mysqli_num_rows($result) > 0){
          echo "<table>";
            echo "<tr>";
              echo "<th>customer_id</th>";
              echo "<th>store_id</th>";
              echo "<th>first_name</th>";
              echo "<th>last_name</th>";
              echo "<th>email</th>";
              echo "<th>address_id</th>";
              echo "<th>active</th>";
              echo "<th>create_date</th>";
              echo "<th>last_update</th>";
            echo "</tr>";

        while($row = $result->fetch_assoc()){
           echo "<tr><td>" . $row['customer_id'] . "</td><td>" . $row['store_id'] . "</td><td>" . $row['first_name'] . "</td><td>" . $row['last_name'] . "</td><td>" . $row['email'] . "</td><td>" . $row['address_id'] . "</td><td>" . $row['active'] . "</td><td>" . $row['create_date'] . "</td><td>" . $row['last_update'] . "</td></tr>";
        }
     }
     else{
        echo "No results";
     }
      }
     }
	 mysqli_close($conn);
	 ?>

</div>

<style>
.main{margin-left: 50px;}
.main a{color:#fff;
  text-decoration: none;
  font-family: Century Gothic;
  float: left;
  margin-top: 30px;
  transition: 0.6s ease;}
.main a:hover{color: #000;}
.search-box input{border: none;
	border-radius: 40px;
  margin-top: 30px;
  margin-left: 100px;
  padding: 10px;
  width: 600px;
  outline:none;}
.search input{border: none;
  border-radius: 15px;
  float: right;
  background: #fff;
  font-size: 15px;
  font-family: Century Gothic;
  color: #41A7C0;
  letter-spacing: 2px;
  margin-top: -35px;
  margin-right: 350px;
  padding:10px;
  width: 100px;
  outline: none;
  transition: 0.6s ease;}
.search input:hover{background: #fff;
  color: #000;}
.reset input{border: none;
  border-radius: 15px;
  float: right;
  background: #fff;
  font-size: 15px;
  font-family: Century Gothic;
  color: #41A7C0;
  letter-spacing: 2px;
  margin-top: -35px;
  margin-right: -230px;
  padding:10px;
  width: 100px;
  outline: none;
  transition: 0.6s ease;}
.reset input:hover{background: #fff;
  color: #000;}
.search-box i{color: #fff;
  margin-left: 10px;}
.display a{float: right;
  margin-top: -45px;
  margin-right: -420px;
  border: none;
  text-decoration: none;
  font-family: Century Gothic;
  color: #fff;
  outline: none;
  background: none;
  transition: 0.6s ease;
  cursor: pointer;}
.display a:hover{color:#000;}
.center table{margin-top: 30px;
  margin-left: 150px;}
table, th, td{border: 2px solid #fff;
  font-size: 15px;
  font-family: Calibri Light;
  border-collapse: collapse;
  width: 50%;
  text-align: center;
  color: #fff;
}
</style>

</body>
</html>
