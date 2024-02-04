<?php

include('../connection/connection.php');
$username = $_POST['username'];
$password = $_POST['password'];
$query = "SELECT * FROM user WHERE nama='$username'";
$result = mysqli_query($connection, $query);
$exist = mysqli_num_rows($result);
if($exist == 1){
    header('location: ../../sign.php?tsk=1&msg=username already exist');
} else {
    $query = "SELECT * FROM user";
    $result = mysqli_query($connection, $query);
    $exist = mysqli_num_rows($result) + 1;
    $query = "INSERT INTO user(`id`,`nama`,`password`,`token`) VALUES('$exist','$username','$password','#00-01-$exist')";
    $result = mysqli_query($connection, $query);
    header('location: ../../sign.php?tsk=1&msg=user has been successfully created');
}

?>