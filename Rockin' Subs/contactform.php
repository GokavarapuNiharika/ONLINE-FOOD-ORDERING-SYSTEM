<?php

$link = mysqli_connect("localhost","root","","project");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Escape user inputs for security
$Name = mysqli_real_escape_string($link, $_REQUEST['fullname']);
$Email = mysqli_real_escape_string($link, $_REQUEST['email']);
$Phno= mysqli_real_escape_string($link, $_REQUEST['phone']);
$Msg = mysqli_real_escape_string($link, $_REQUEST['message']);


 
 echo $Name;
 
// Attempt insert query execution
$sql = "INSERT INTO contactform VALUES ('$Name', '$Email','$Phno','$Msg')";
if(mysqli_query($link, $sql)){
    echo " Your feedback added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}

// Close connection
mysqli_close($link);
?>