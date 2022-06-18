<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Users</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <script src="js/bootstrap.js"></script>
        
</head>
<body>
    <?php
    include "php/nav.php";
    include "php/connection.php";
    if(isset($_POST["add"])){
        $user = $_POST["user"];
        $pass = $_POST["pass"];
        $email = $_POST["email"];

        $result = $mysql->prepare("INSERT INTO users (username, password, email) VALUES (?,?,?)");
        $result->bind_param("sss",$user,$pass,$email);
        $result->execute();
        header("Location:index.php");
        }
    ?>
    <h1 class="display-4 fw-normal text-center">Get a new account</h1>
    <hr class="mt-2 mb-5">

<form method="POST">
    <div class="form-group">
        <label for="">Username:</label>
        <input type="text" class="form-control" name="user">
    </div>
    <div class="form-group">
        <label for="">Password:</label>
        <input type="text" class="form-control" name="pass">
    </div>
    <div class="form-group">
        <label for="">Email:</label>
        <input type="email" class="form-control" name="email">
    </div>
    <div class="d-flex justify-content-center">
        <input class="btn btn-success"type="submit" name="add" value="New User">
    </div>
</form>

    <?php
    include "php/footer.php";
    ?>
</body>
</html>