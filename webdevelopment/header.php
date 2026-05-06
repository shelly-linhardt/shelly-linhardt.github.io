<!DOCTYPE html>
    <!--
    Name: Shelly Linhardt
    Date: 5/3/2026
    Course: IS_LT: 7355
    Description: Portfolio Website
    -->

<html lang="en-US">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
   
    <title><?php echo $pageTitle ?? 'My Portfolio'; ?></title>

    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@400;600&family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="nav.css">
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="favicon.ico">
</head>

<body>

    <header>  
        <div class="logo-wrapper">
            <img src="logo.png" alt="My Logo">
        </div>

        <div class="hamburger-menu">
            &#9776;
        </div>

        <nav class="primary-navigation">
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="about.php">About</a></li>

                <li><a href="project.php">Portfolio</a></li>
                <li class="mobile-only"><a href="#accessibility-social-media">Accessibility & Social Media</a></li>
                <li class="mobile-only"><a href="#cataloging-youth">Cataloging for Youth</a></li>
                <li class="mobile-only"><a href="#technology-blog">Technology Blog</a></li>

                <li><a href="reflection.php">Reflection</a></li>
                <li><a href="contact.php">Contact</a></li>
            </ul>
        </nav>
    </header>