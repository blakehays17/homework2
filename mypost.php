<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include("bootstrap.php"); ?>
    <link rel="stylesheet" href="main.css">
    <title>My Post</title>
</head>

<body>
    <?php include("header.php"); ?>
    <div class="content">
        <h1>Homework 2</h1>
        <?php function writeName()
        {
            echo $_POST["name"];
        }
        ?>
        Welcome,
        <?php writeName(); ?> <br>
        Your email address is:
        <?php echo $_POST["email"]; ?>
    </div>
    <?php include("footer.php"); ?>
</body>

</html>