<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<title>Janice Exel | Portfolio</title>
<link rel="shortcut icon" type="image/x-icon" href="images/tag.jpg" />
<link href="css/normalize.css" rel="stylesheet" media="screen" />
<link href="css/styles.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Convergence">
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
    	<h1>Business Contacts</h1>
<?php

//destroy session and redirect to login page
session_start();
session_unset();
session_destroy();
header('Location: businesscontacts.php');

?>
	
    </div>
    <footer>
    	<p>&copy;2013 Janice Exel</p>
    </footer>
</body>
</html>