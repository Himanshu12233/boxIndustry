<?php

include('database.php');

if (isset($_POST['create'])) {

  $msg = insert_data($connection);

}

// insert query
function insert_data($connection)
{

  $username = legal_input($_POST['username']);
  $email = legal_input($_POST['email']);
  $password = legal_input($_POST['password']);
  $repassword = legal_input($_POST['repassword']);


  $query = "INSERT INTO login (username,email,password,repassword) VALUES ('$username','$email','$password','$repassword')";
  $exec = mysqli_query($connection, $query);
  if ($exec) {
    header("location:login.php");
  } else {
    $msg = "Error: " . $query . "<br>" . mysqli_error($connection);
  }
}

// convert illegal input to legal input
function legal_input($value)
{
  $value = trim($value);
  $value = stripslashes($value);
  $value = htmlspecialchars($value);
  return $value;
}
?>