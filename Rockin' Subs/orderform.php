<?php

$link = mysqli_connect("localhost","root","","project");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Escape user inputs for security
$Fullname = mysqli_real_escape_string($link, $_REQUEST['Fullname']);
$Email = mysqli_real_escape_string($link, $_REQUEST['Email']);
$Address= mysqli_real_escape_string($link, $_REQUEST['Address']);
$State = mysqli_real_escape_string($link, $_REQUEST['State']);
$Cardowner = mysqli_real_escape_string($link, $_REQUEST['Cardowner']);
$Cardnumber = mysqli_real_escape_string($link, $_REQUEST['Cardnumber']);
$Expdate = mysqli_real_escape_string($link, $_REQUEST['Expdate']);
$CVcode = mysqli_real_escape_string($link, $_REQUEST['CVcode']);
$Price = mysqli_real_escape_string($link, $_REQUEST['Item']);


 
 echo $Fullname;
 
// Attempt insert query execution
$sql = "INSERT INTO orderform VALUES ('$Fullname', '$Email', '$Address','$State','$Price','$Cardowner','$Cardnumber','$Expdate','$CVcode')";
if(mysqli_query($link, $sql)){
    echo " Your order is successfull.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);
?>