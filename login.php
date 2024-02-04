<html>

<head>
    <title>
        LOG-IN page
    </title>
</head>

<body>

<?php

if(isset($_GET['tsk']) && isset($_GET['msg'])){
    
?>

<h1 style="color: red"><?php  echo $_GET['msg']  ?></h1>

<?php

}

?>

<form action="./files/query/request.php" method="POST">
    <h1>USERNAME :</h1>
    <input type="text" name="username"><br>
    <h1>PASSWORD :</h1>
    <input type="text" name="password"><br>
    <button type="submit">LOGIN</button>
</form>
<a href="sign.php">SIGN-up</a>
</body>

</html>