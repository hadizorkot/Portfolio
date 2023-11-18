<?php
session_start();

if (!isset($_SESSION["user"])) {
    header("Location: login.html");
    exit;
}

$user = $_SESSION["user"];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"> 
    <title>Online Deployment</title>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="ss.css">    
</head>
<body>
    <div class="header">
        <nav>
            <div class="menu">
                <ul>
                    <li class="dropdown">
                        <label for="menu-toggle">☰ Menu</label>
                        <div class="dropdown-content">
                            <a href="cv.php">CV</a>
                            <a href="gallery.php">Gallery</a>
                            <a href="contact.php">Contact Us</a>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="logo">Main Page</div>
            <div class="user-info">
                <p>Welcome, <?php echo $user["fullName"]; ?></p>
                <a href="logout.php">Logout</a>
            </div>
        </nav>

        <div class="banner-text">
            <h1>Hadi Zorkot</h1>
        </div>
    </div>
</body>
</html>
