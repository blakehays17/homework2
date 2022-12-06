<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include("bootstrap.php"); ?>
    <link rel="stylesheet" href="main.css">
    <title>Home</title>
</head>

<body>
    <?php include("header.php"); ?>
    <div class="content">
        <h1>Homework 2</h1>
        <h3>A Demo of $_POST in PHP</h3>
        <form action="mypost.php" method="post">
            <label for="name">Name: </label>
            <input type="text" name="name" id="name" placeholder="please enter your name"><br>
            <label for="email">Email: </label>
            <input type="email" name="email" id="email" placeholder="please enter your email"><br>
            <input type="submit" value="Submit">
        </form>
        <h3>A Demo of $_GET in PHP</h3>
        <form action="myget.php" method="get">
            <label for="name">Name: </label>
            <input type="text" name="name" id="name" placeholder="please enter your name"><br>
            <label for="email">Email: </label>
            <input type="email" name="email" id="email" placeholder="please enter your email"><br>
            <input type="submit" value="Submit">
        </form>
    </div>
    <?php include("footer.php"); ?>
</body>

</html>