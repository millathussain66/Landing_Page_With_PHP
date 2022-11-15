<?php
session_start();
require_once "../../../inc/db.php";

$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];

// Password 

$uppercase      = preg_match('@[A-Z]@', $password);
$lowercase      = preg_match('@[a-z]@', $password);
$number         = preg_match('@[0-9]@', $password);
$specialChars   = preg_match('@[^\w]@', $password);


// empty Check ;

if(empty($name)){
    $_SESSION['name_error'] ="* Name Required";
    header('location:../../register.php');
}


if(empty($email)){
    $_SESSION['email_error'] ="* Email Address Required";
    header('location:../../register.php');
}elseif(filter_var($email, FILTER_VALIDATE_EMAIL)){

    $_SESSION['email_error'] =" Select Validate Emile Address ";
    header('location:../../register.php');


}


if(empty($password)){
    $_SESSION['pass_error'] ="*Password Required";
    header('location:../../register.php');
}
else if(!$uppercase || !$lowercase || !$number || !$specialChars || strlen($password) < 8) {

    $_SESSION['pass_error'] ="Password should be at least 8 characters in length and should include at least one upper case letter, one number, and one special character";
    header('location:../../register.php');
}else{


    $query = "INSERT INTO user(name,email,password)VALUES('$name','$email','$password')";
    mysqli_query($db_con,$query);

    $_SESSION['success'] ="Your Register Successfully";
    header('location:../../index.php');



    
}








?>