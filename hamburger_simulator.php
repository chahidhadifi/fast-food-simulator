<?php
session_start();

if ($_POST) {
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "fast_food_simulator";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    }

    $user_name = $_SESSION["name"];
    $user_table = $_SESSION["table"];
    $lettuce = $_POST["lettuce"];
    $onion = $_POST["onion"];
    $tomato = $_POST["tomato"];
    $cheese = $_POST["cheese"];
    $beef = $_POST["beef"];

    $sql = "insert into commands(user_name, user_table, lettuce, onion, tomato, cheese, beef)
    values ('$user_name', '$user_table', '$lettuce', '$onion', '$tomato', '$cheese', '$beef')";

    if ($conn->query($sql) === TRUE) {
        header("location: success.php");
    }

    $conn->close();
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Hamburger Maker</title>
    <link rel="stylesheet" href="assets/css/hamburger_simulator.css" />
  </head>
  <body>
    <div class="back-to-home">
        <a href="index.php">Back to home page></a>
    </div>
    <div class="container">
        <div class="title">
            <h1>Welcome <?php echo $_SESSION["name"]?> <span class="wave">👋🏻</span> </h1>
            <h3 class="sub-title">Create the hamburger you want by changing <br>the quantity of ingredients desired</h3>
          </div>
      <div class="simulation-burger">
        <form method="post">
            <div class="options-burger">
            <!-- Lettuce - Tomato - Onion - Cheese - Beef -->
            <div class="item-burger">
                <label for="lettuce">Lettuce</label>
                <div class="item-buttons">
                    <button class="add-lettuce">+</button>
                    <button class="remove-lettuce">-</button>
                    <input type="hidden" name="lettuce" min="0" max="5" value="0" id="number-lettuce">
                </div>
            </div>
            <div class="item-burger">
                <label for="onion">Onion</label>
                <div class="item-buttons">
                    <button class="add-onion">+</button>
                    <button class="remove-onion">-</button>
                    <input type="hidden" name="onion" min="0" max="5" value="0" id="number-onion">
                </div>
            </div>
            <div class="item-burger">
                <label for="tomato">Tomato</label>
                <div class="item-buttons">
                    <button class="add-tomato">+</button>
                    <button class="remove-tomato">-</button>
                    <input type="hidden" name="tomato" min="0" max="5" value="0" id="number-tomato">
                </div>
            </div>
            <div class="item-burger">
                <label for="cheese">Cheese</label>
                <div class="item-buttons">
                    <button class="add-cheese">+</button>
                    <button class="remove-cheese">-</button>
                    <input type="hidden" name="cheese" min="0" max="5" value="0" id="number-cheese">
                </div>
            </div>
            <div class="item-burger">
                <label for="beef">Beef</label>
                <div class="item-buttons">
                    <button class="add-beef">+</button>
                    <button class="remove-beef">-</button>
                    <input type="hidden" name="beef" min="0" max="5" value="0" id="number-beef">
                </div>
            </div>
            </div>
            <div class="submit">
                <input type="submit" value="Submit">
            </div>
        </form>
        <div class="image-burger">
          <div class="burger">
            <div class="top-bun">
              <div class="seeds"></div>
              <div class="seeds-two"></div>
            </div>
            <div class="lettuce"></div>
            <div class="onion"></div>
            <div class="tomato"></div>
            <div class="cheese"></div>
            <div class="beef"></div>
            <div class="bottom-bun"></div>
          </div>
        </div>
      </div>
    </div>
    <script src="assets/js/hamburger_simulator.js"></script>
  </body>
</html>
