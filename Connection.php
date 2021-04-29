<?php
  $conn = new mysqli('localhost', 'root', 'Goat030214?!', 'entertainment', '3306');

  if(!$conn) {
    echo "Connection failed";
  }
?>
