<?php
session_start();

$user = $_SESSION["user"];
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=">
  <title>Contact Us</title>
  <link href="https://fonts.googleapis.com/css2?family=Teko:wght@300&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="rd.css">
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
                    <a href="gallery.php">Gallery</a>
                    <a href="contact.php">Contact Us</a>
                </div>
            </li>
        </ul>
    </div>
</nav>
  
  <section>
    
    <div class="section-header">
      <div class="container">
        <h2>Contact Us</h2>
        
      </div>
    </div>
    
    <div class="container">
      <div class="row">
        
        <div class="contact-info">
          <div class="contact-info-item">
            <div class="contact-info-icon">
              
            </div>
            
            <div class="contact-info-content">
              <h4>Address</h4>
              <p>Beirut<br/>Rue Mme Curie <br/>Behind vernice cafe</p>
            </div>
          </div>
          
          <div class="contact-info-item">
            <div class="contact-info-icon">
             
            </div>
            
            <div class="contact-info-content">
              <h4>Phone</h4>
              <p>+961 70 070284</p>
            </div>
          </div>
          
          <div class="contact-info-item">
            <div class="contact-info-icon">
            </div>
            
            <div class="contact-info-content">
              <h4>Email</h4>
             <p>hzorkot075@gmail.com</p>
            </div>
          </div>
        </div>
        
        <div class="contact-form">
          <form action="" id="contact-form">
            <h2>Send Message</h2>
            <div class="input-box">
              <input type="text" required="true" name="">
              <span>Full Name</span>
            </div>
            
            <div class="input-box">
              <input type="email" required="true" name="">
              <span>Email</span>
            </div>
            
            <div class="input-box">
              <textarea required="true" name=""></textarea>
              <span>Type your Message...</span>
            </div>
            
            <div class="input-box">
              <input type="submit" value="Send" name="">
            </div>
          </form>
        </div>
        
      </div>
    </div>
  </section>
  
</body>
</html>