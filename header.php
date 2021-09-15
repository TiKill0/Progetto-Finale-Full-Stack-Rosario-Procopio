<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Quicksand:400,500,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Work+Sans:400,500,600,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <title>App</title>
</head>

<body>
    <header>
        <div class="nav">
            <ul class="nav__links">
                <li><a href='index.php'>Home</a></li>
                <?php
                if (isset($_SESSION['useruid'])) {
                    echo "<li><a href='index.php'> Profile page </a></li>";
                    echo "<li><a href='includes/logout.inc.php'> Log out </a></li>";
                } else {
                    echo "<li><a href='signup.php'> Sign up </a></li>";
                    echo "<li><a href='login.php'> Log in </a></li>";
                }
                ?>
            </ul>
        </div>
    </header>