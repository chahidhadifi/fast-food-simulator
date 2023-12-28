<?php
if ($_POST) {
    $host = "localhost";
    $user = "root";
    $password = "";
    $dbname = "fast_food_simulator";
    $conn = new mysqli($host, $user, $password, $dbname);
    $username = $_POST["username"];
    $password = $_POST["password"];
    $query = "select * from admin where username='$username' and password='$password'";
    $result = mysqli_query($conn, $query);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link rel="stylesheet" href="assets/css/admin.css">
</head>
<body>
<div class="container">
<h1>Login 🔑</h1>
<form method="post">
    <input type="text" placeholder="username" name="username">
    <br>
    <input type="text" placeholder="password" name="password">
    <br>
    <div class="submit-form">
        <input type="submit" value="submit">
    </div>
</form>
</div>
<?php
    if ($_POST) {
        if (mysqli_num_rows($result) == 1) {
            session_start();
            $_SESSION["auth"] = "true";
            header("location: dashboard.php");
        } else {
            echo 'username or password is incorrect';
        }
    }
?>
</body>
</html>