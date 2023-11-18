<?php
session_start();

$user = $_SESSION["user"];
?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>CV</title>
        <link rel="stylesheet" href="myStyle.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    </head> 
    <body>
        <div class="user-info">
        <p id="welcome-msg">Welcome, <?php echo $user["fullName"]; ?></p>
            <a href="logout.php" class="logout-btn">  Logout</a>
        </div>
        <div class="container">
           <div class="avatar">
            <img src="https://i.pinimg.com/564x/eb/57/6f/eb576ff023487bcb1fa3ad61ee7b23ee.jpg" alt="">
           </div>
           <div class="name">
                <h1>HADI ZORKOT</h1>
                <div class="specialize">Senior Student</div>
                <ul class="contact">
                    <li>
                        <span>P</span> +96170070284
                    </li>
                    <li>
                        <span>E</span> hzorkot075@gmail.com
                    </li>
                    <li>
                        <span>L</span><a href="www.linkedin.com/in/hadi-zorkot-4b0197246">Linkedin </a>
                    </li>
                </ul>
           </div>
           <div class="info">
                <ul>
                    <li>From <b>Beirut</b> - Lebanon</li>
                    
                    
                </ul>
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
           
           <div class="intro">
            <h2>INTRODUCE MYSELT</h2>
            Graduating next year with a computer science degree and looking for a role in developing and 
            design software where I can grow and learn from experienced team members.
           </div>
           <div class="experience">
            <h2>EDUCATION</h2>
    
            <div class="item">
                <h4>Lebanese American University</h4>
                <div class="time">
                   <span>2021 - Present</span>
                   
                </div>
                
                <div class="des">
                    B.A in Computer Science
                </div>
            </div>
    
                
                <h2 class="skills">
                    TECHNICAL SKILLS
                </h2>
                <ul>
                    <li>HTML</li>
                    <li>CSS</li>
                    <li>MySQL</li>
                    <li>Javascript</li>
                    <li>PHP</li>
                    <li>MySql</li>
                    <li>Git</li>
                    <li>C</li>
                    <Li>PYTHON</Li>
                    <li>Laravel</li>
                </ul>
    
           </div>
           <div class="project">
            <h2>PROJECTS</h2>
            <div class="item">
                <h4>Database project</h4>
                <div class="time">
                    October 2022- November 2022
                </div>
                
                
                <div class="des">
                    Completed a database team project within challenging deadline (Implement a relational 
database design in oracle for a hotel and created challenging queries to test design)
                    
                </div>
            </div>
    
            <div class="item">
                <h4>Software engineering project</h4>
                <div class="time">
                    February 2023 - March 2023
                </div>
                
                
                <div class="des">
                    Completed a software engineering project with a team, focused on developing a beauty center 
management system.
                    
                </div>
            </div>
    
            <div class="item">
                <h4>RISC processor project</h4>
                <div class="time">
                    February 2021 - April 2021
                </div>
                
                <div class="des">
                    Designed a RISC processor that supports arithmetic, memory access branch and register 
operation and sketched data path for several instruction and implemented the design.
                </div>
                
            </div>


            <div class="communication">
                <h2>Communication</h2>
                    
                    <div class="des">
                        Fluent English Language and good French language; excellent
communication skills; cooperative in team work projects.
                        
                    </div>
                </div>
           </div>
        </div>
        
    </body>
    </html>

