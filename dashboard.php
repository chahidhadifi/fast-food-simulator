<?php
session_start();
if (!$_SESSION["auth"]) {
    header("location: admin.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="assets/css/dashboard.css">
</head>
<body>
    <div class="logout">
        <a href="logout.php">Logout></a>
    </div>
    <div class="container">
        <h1>Dashboard 📊</h1>
        <?php 
        $username = "root"; 
        $localhost = "localhost";
        $password = ""; 
        $database = "fast_food_simulator"; 
        $mysqli = new mysqli($localhost, $username, $password, $database); 
        $query = "select * from commands";

        echo '<table> 
            <tr> 
                <td>#</td> 
                <td>Name</td> 
                <td>Table</td> 
                <td>Lettuce</td> 
                <td>Onion</td> 
                <td>Tomato</td> 
                <td>Cheese</td> 
                <td>Beef</td> 
            </tr>';

        if ($result = $mysqli->query($query)) {
            while ($row = $result->fetch_assoc()) {
                $field1 = $row["id"];
                $field2 = $row["user_name"];
                $field3 = $row["user_table"];
                $field4 = $row["lettuce"];
                $field5 = $row["onion"]; 
                $field6 = $row["tomato"]; 
                $field7 = $row["cheese"]; 
                $field8 = $row["beef"]; 
                echo '<tr> 
                        <td>'.$field1.'</td> 
                        <td>'.$field2.'</td> 
                        <td>'.$field3.'</td> 
                        <td>'.$field4.'</td> 
                        <td>'.$field5.'</td> 
                        <td>'.$field6.'</td> 
                        <td>'.$field7.'</td> 
                        <td>'.$field8.'</td> 
                    </tr>';
            }
            $result->free();
            }
        ?>
    </div>
</body>
</html>