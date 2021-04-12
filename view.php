<!DOCTYPE html>
<html>
<head>
<style>
table, th, td {
    border: 1px solid black;
}
</style>
</head>
<body>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "resgistration";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT id, username, name, stream, dob, email, phone, gender FROM users";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  echo "<table><tr><th>Username</th><th>Name</th><th>Stream</th><th>Date of Birth</th><th>Email</th><th>Phone No.</th><th>Gender</th></tr>";
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "<tr><td>".$row["username"]."</td><td>".$row["name"]."</td><td>".$row["stream"]."</td><td>".$row["dob"]."</td><td>".$row["email"]."</td><td>".$row["phone"]."</td><td>".$row["gender"]."</td></tr>";
  }
  echo "</table>";
} else {
  echo "0 results";
}
$conn->close();
?>