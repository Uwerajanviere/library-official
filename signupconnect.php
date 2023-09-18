<?php
$con= mysqli_connect("localhost","root","","online_library");
if(!$con){

    die('could not connect'.mysqli_error());
}

$sql= "INSERT INTO student(firstname,lastname,email,school,level,program,regnumber)
VALUES ('$_POST[fname]','$_POST[lname]','$_POST[email]','$_POST[school]',
'$_POST[level]','$_POST[program]',$_POST[reg]);";

if($con->query($sql)){
header("location: home.php");
}
else{
    echo "data not entered";
}



?>