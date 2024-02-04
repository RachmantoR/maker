<?php

if(isset($_GET['i']) && isset($_GET['n'])){

?>

<html>
    <head>
        <title>upload-file</title>
    </head>
    <body>
    <form action="./files/query/post.php?i=<?php echo $_GET['i'] ?>&n=<?php echo $_GET['n'] ?>" method="POST" enctype="multipart/form-data">
    <h1>Files :</h1>
    <input type="file" name="file"><br>
    <h1>Description :</h1>
    <input type="text" name="description"><br>
    <button type="submit">SIGN-IN</button>
    </form>
    </body>
</html>

<?php

} else {
    header('location: ./login.php?tsk=1&msg=you entered the page not in legal way');
}

?>