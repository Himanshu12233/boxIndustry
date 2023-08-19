<?php

include('database.php');

if (isset($_POST['username'])) {

    $femail = $_POST['username'];
    $fpass = $_POST['password'];

    $query = "SELECT * from login where username='" . $username . "' AND password='" . $password . "'limit 1";

    $result = mysqli_query($connection, $query);

    if (mysqli_num_rows($result) == 1) {
        header("Location: box.html");
    } else {
        echo "You Have Entered Incorrect Password";
        exit();
    }

}
?>