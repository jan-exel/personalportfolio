<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<title>Janice Exel | Portfolio</title>
<link rel="shortcut icon" type="image/x-icon" href="images/tag.jpg" />
<link href="css/normalize.css" rel="stylesheet" media="screen" />
<link href="css/styles.css" rel="stylesheet" type="text/css" />
</head>
<body>
	<header>
    	<a href="index.html"><img src="images/banner.png" /></a>
    </header>
    <div id="content">
    	<nav>
			<ul>
				<li><a href="index.html">Home</a></li>
                <li><a href="about.html">About Me</a></li>
				<li><a href="projects.html">Projects</a></li>
				<li><a href="services.html">Services</a></li>
                <li><a href="contact.php">Contact</a></li>
        	</ul>
		</nav>
    	<h1>Contact</h1>
    	<div id="section1">
				<ul id="contact">
                	<li><strong>Janice Exel</strong></li>
                	<li>(519) 719-5079</li>
                	<li>Barrie, Ontario</li>
                	<li>janice.exel@gmail.com</li>
                	<li>200244547@student.georgianc.on.ca</li>
                	<li>janexel.sidescript.ca/</li>
                </ul>
		</div>
        <div id="socialmedia">
        <a href="mailto: janice.exel@gmail.com?subject=Portfolio Email" alt="Email me!">
        <img src="images/email3.png" width="64" height="64" /></a>
        
        <a href="http://www.linkedin.com/in/janexel" alt="Check out my LinkedIn!">
        <img src="images/linkedin.png" width="60" height="58" /></a>
        
        <a href="https://www.twitter.com/JaniceXL" alt="Follow me on Twitter!">
        <img src="images/twitter.png" width="60" height="58" /></a>
        
        <a href="https://github.com/jan-exel" alt="Check out my GitHub!">
        <img src="images/github.png" width="64" height="64" /></a>
        </div> 
        <div id="emailform">
            <h3>Email</h3>
            <p>Send me a message directly!</p>
            <form action="contact.php" method="post">
                <div>
                    <input type="text" name="name" value="" placeholder="Name" />
                </div>
                <div>
                    <input type="text" name="email" value="" placeholder="Email" />
                </div>
                <div>
                    <textarea name="message" value=""></textarea>
                </div>
                <div>  
                    <input type="submit" value="Send" />
                </div>
            </form>
            <?php
                if (isset($_POST['name']) && isset($_POST['message']) && isset($_POST['email'])) {
                    mail('janice.exel@gmail.com','Website message from ' . $_POST['name'],$_POST['message'],'From:' . $_POST['email']);
                }
                elseif (isset($_POST['name']) || isset($_POST['message']) || isset($_POST['email'])) {
                    echo "<p>Please fill in all the boxes in order to send an email.</p>";
                }
            ?>
        </div>
    </div>
    <footer>
    	<p>&copy;2013 Janice Exel</p>
    </footer>
</body>
</html>