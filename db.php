<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "banking";
$port = "3308";


$conn = mysqli_connect($servername, $username, $password,$dbname,$port);


if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
//echo "Connected successfully";

//$enter_query = "INSERT INTO mytable(id,name,email,amount) VALUES (2,'likhith','likhithsasank@gmail.com', 200)";
//$query_submit = mysqli_query($conn,$enter_query) or die(mysqli_error($conn));
//echo"Successfully submitted";



?>