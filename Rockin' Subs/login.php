<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "project";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$username = array();
$sql = "SELECT * FROM login";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    $username[$row['username']] = $row['password'];
    }
  }
else {
  echo "0 results";
}
if($username[$_REQUEST['username']] == $_REQUEST['password']){
    header("Location: home.html");
}
$conn->close();
?>