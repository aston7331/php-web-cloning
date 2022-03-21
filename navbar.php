<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>SimpleSite.com</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <!--Main body start-->
    <section>
        <div class="container">
            <!--Banner section-->
            <div class="<?php echo $classname; ?>">
                <!--Navbar start-->
                <div class="nav">
                    <div class="navcontant">
                        <div class="logo">
                            <a class="log" href="INDEX.php">SimpleSite</a>
                        </div>
                        <div class="title">
                            <div class="navcontant1">
                                <a class="navList" href="CustomerService.php">Customer Service</a>
                            </div>
                            <div class="navcontant2">
                                <a class="navList" href="Features.php">Features</a>
                            </div>
                            <div class="navcontant3">
                                <a class="navList" href="Themes.php">Themes</a>
                            </div>
                        </div>
                        <div class="login">
                            <button class="btn">LOG IN</button>
                        </div>
                        <div class="lang">
                            <img class="myimg" src="https://www.simplesite.com/Images/FrontPage2017/Icons/globe.png">
                            <select name="language" id="language">
                                <option>English</option>
                                <option>Hindi</option>
                                <option>Aribic</option>
                                <option>Latin</option>
                            </select>
                        </div>
                    </div>
                </div>