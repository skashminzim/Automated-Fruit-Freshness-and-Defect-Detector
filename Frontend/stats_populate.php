<?php
require("connection.php");
/*
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "IDP";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
*/
/*$sql = "INSERT INTO MyGuests (firstname, lastname, email)
VALUES ('John', 'Doe', 'john@example.com');";
$sql .= "INSERT INTO MyGuests (firstname, lastname, email)
VALUES ('Mary', 'Moe', 'mary@example.com');";
$sql .= "INSERT INTO MyGuests (firstname, lastname, email)
VALUES ('Julie', 'Dooley', 'julie@example.com')";
if ($conn->multi_query($sql) === TRUE) {
  echo "New records created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}*/
$todays = date('Y-m-d');

$sql="INSERT INTO stats_fruit (`Batch No`, `Fruit Name`, `Total Kgs`, `Usable Kgs`, `Unusable Kgs`, `Date of Processing`)
VALUES ('B6','Mango',5,2,3,'{$todays}');";
$sql.="INSERT INTO stats_fruit (`Batch No`, `Fruit Name`, `Total Kgs`, `Usable Kgs`, `Unusable Kgs`, `Date of Processing`)
VALUES ('B7','Apple',5,2,3,'{$todays}');";
$sql.="INSERT INTO stats_fruit (`Batch No`, `Fruit Name`, `Total Kgs`, `Usable Kgs`, `Unusable Kgs`, `Date of Processing`)
VALUES ('B8','Banana',5,2,3,'{$todays}');";
if ($conn->multi_query($sql) === TRUE) {
  echo "New records created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}



$conn->close();
?>
