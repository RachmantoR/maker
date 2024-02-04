<?php

include('../connection/connection.php');
$res = base64_encode('pass');
$username = $_POST['username'];
$password = $_POST['password'];
$query = "SELECT * FROM user WHERE nama='$username'";
$result = mysqli_query($connection, $query);
$exist = mysqli_num_rows($result);
if($exist == 0){
    header('location: ../../login.php?tsk=1&msg=no username found');
} else {
    $exist = mysqli_fetch_assoc($result);
    if($username == $exist['nama'] && $password == $exist['password']){
    $resid = base64_encode($exist['id']);
    header("location: ../../?i=$res&n=$resid");
    } else {
        header('location: ../../login.php?tsk=1&msg=no username found');
    }
}

?>