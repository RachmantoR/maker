<?php

include('./files/connection/connection.php');
if(isset($_GET['i'])  && isset($_GET['n'])){
$i = base64_decode($_GET['n']);
$selection = "SELECT * FROM user WHERE id='$i'";
$query = mysqli_query($connection, $selection);
$exist = mysqli_fetch_assoc($query);

?>

<html>
    <head>
        <title>
            content
        </title>
    </head>
    <body>
        <a href="./upload.php?i=<?php echo $_GET['i'] ?>&n=<?php echo $_GET['n'] ?>">upload some shit</a>
    </body>
</html>

<?php
    
} else {

header('location: ./login.php');

}

?>