<?php
include_once 'dbConnection.php';
ob_start();
$name     = $_POST['name'];
$name     = ucwords(strtolower($name));
$gender   = $_POST['gender'];
$email	  = $_POST['email'];
$phno     = $_POST['phno'];
$uni 	  = $_POST['uni'];
$password = $_POST['password'];

$name     = stripslashes($name);
$name     = addslashes($name);
$name     = ucwords(strtolower($name));
$gender   = stripslashes($gender);
$gender   = addslashes($gender);
$email	  = stripslashes($email);
$email	  = addslashes($email);
$phno     = stripslashes($phno);
$phno     = addslashes($phno);
$uni     = stripslashes($uni);
$uni     = addslashes($uni);
$password = stripslashes($password);
$password = addslashes($password);
$password = md5($password);

$q3 = mysqli_query($con, "INSERT INTO user VALUES  (NULL,'$name','$uni','$gender' ,'$email' ,'$phno', '$password')");
if ($q3) {

    
    header("location:dash.php?q=6");
} else {
    header("location:dash.php?q=6=email already exists. Please choose another&name=$name&email=$email&gender=$gender&phno=$phno&uni=$uni");
}
ob_end_flush();
?>