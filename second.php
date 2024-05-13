<?php
       session_start();
    if (!isset($_SESSION["username"])){
        header( 'Location: login.php');
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CANTEEN</title>
        <!-- style for submit button -->
<style>
    input[type="submit"] {
        background-color: gray;
        color: white; 
        padding: 10px;
        border-color: 10px black;
        border-radius: 5px; 
        cursor: pointer; 
        font-size: 16px;
    }
    </style>

</head>
<body>
    <h1>
        WELCOME SA SIMPLE CANTEEN NI ICHEL, <span style="color: red;"><?php echo $_SESSION["username"]; ?></span>
    </h1>
    <h2>
        HERE ARE THE MENU:
    </h2>
    <a href="login.php">Log out </a>
    
    <!-- HERE ARE THE UNORDERED LIST MENU -->
    <ul>
        <li>FISH BALL - 30PHP</li>
        <li>KIKIAM - 40PHP</li>
        <li>CORNDOG - 50PHP</li>
    </ul>
    
    <!-- CHOOSING OF ORDER -->
    <form action="order.php" method="GET">
        <label for="order">Choose your order</label>
        <select name="order" id="order">
            <option value="FISH BALL">FISH BALL</option>
            <option value="KIKIAM">KIKIAM</option>
            <option value="CORNDOG">CORNDOG</option>
        </select>
        <p>Quantity: <input type="text" placeholder="" name="Quantity" required></p>
        <p>Cash: <input type="text" placeholder="" name="Cash" required></p>
        <!-- Submit button -->
        <p><input type="submit" value="Submit" name="getorder"></p>
    </form>
</body>
</html>