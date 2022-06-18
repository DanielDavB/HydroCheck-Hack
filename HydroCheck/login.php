<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.css">
</head>
<body>
<?php
    include "php/nav.php"
?>

    <h1 class="display-4 fw-normal text-center">Login</h1>
    <hr class="mt-2 mb-5">
<form action="auth.php" method="POST">
    <div class="d-flex flex-sm-column ">
        <label for="">Username</label>
        <input type="text" name="user">
        <br><br>
        <label for="">Password</label>
        <input type="password" name="pass">
    </div>
    <div class="d-flex justify-content-center">
        <input class="btn btn-success" type="submit" name="confirm" value="OK">
    </div>
    <?php
    include "php/footer.php";
    ?>
</form>
</body>
</html>