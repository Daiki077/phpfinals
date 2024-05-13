<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Final exam</title>
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
    input[type = "text"]{
        padding: 10px;
        background-color: 10px black;
    }
    input[type = "password"]{
        padding: 10px;
        background-color: 10px black;
    }
    </style>
</head>
<body>
    <h1>
        Log in here 
    </h1>
    <form action="handle.php" method="POST">
    <p><input type="text" placeholder="Username here" name = "User"></p>
    <p><input type="password" placeholder="Password here" name = "Pass"></p>
    <p ><input type="submit" value="Submit" name = "lgsubmit"></p>
    <a href="register.php">Register</a>
    </form>

</body>
</html>