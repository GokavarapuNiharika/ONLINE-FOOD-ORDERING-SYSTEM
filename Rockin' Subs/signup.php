<?php

$link = mysqli_connect("localhost","root","","project");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Escape user inputs for security
$username = mysqli_real_escape_string($link, $_REQUEST['Username']);
$email = mysqli_real_escape_string($link, $_REQUEST['Email']);
$phno= mysqli_real_escape_string($link, $_REQUEST['Phno']);
$pwd = mysqli_real_escape_string($link, $_REQUEST['Password']);
$conpwd = mysqli_real_escape_string($link, $_REQUEST['Confirmpassword']);
 
 echo $username;
 
// Attempt insert query execution
$sql = "INSERT INTO signup VALUES ('$username', '$email', '$phno','$pwd','$conpwd')";
if(mysqli_query($link, $sql)){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);
?>