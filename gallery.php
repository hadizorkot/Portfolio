<?php
session_start();

$user = $_SESSION["user"];

$galleryData = file_get_contents('gallery.json');
$gallery = json_decode($galleryData, true);
$imageNames = $gallery['images'];
?>
<!DOCTYPE html>
<html lang="en">
<head> 
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gallery</title>
    <link href="https://fonts.googleapis.com/vpn2?family=Teko:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="vpn.css">
</head>
<body> 
        <div class="user-info">
        <p id="welcome-msg">Welcome, <?php echo $user["fullName"]; ?></p>
            <a href="logout.php" class="logout-btn">  Logout</a>
        </div>
    <nav>
        <div class="menu">
            <ul>
                <li class="dropdown">
                    <label for="menu-toggle">☰ Menu</label>
                    <div class="dropdown-content">
                        <a href="main.php">Main</a>
                        <a href="cv.php">CV</a>
                        <a href="contact.php">Contact Us</a>
                    </div>
                </li>
            </ul>
        </div>
    </nav>
    <div class="wrapper">
    <div class="main-content">
        <?php
        foreach ($imageNames as $index => $imageName) {
            $lightboxId = $index + 1;
            ?>
            <div class="box">
                <input type="checkbox" id="lightbox-toggle-<?php echo $lightboxId; ?>" class="lightbox-toggle">
                <label for="lightbox-toggle-<?php echo $lightboxId; ?>">
                    <img src="images/<?php echo $imageName; ?>" alt="">
                </label>
            </div>
            <?php
        }
        ?>
    </div>
</body>
</html>signup
    

