<?php

//access current session with session start
session_start();

//evaluate the user_id stored in the session
//if session is empty ACCESS DENIED, redirect to login page
if (empty($_SESSION['user'])) {
	header('Location: businesscontacts.php');
	}
	
else {
	
	echo'
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
    	<div id="section1">';
        
		
		echo '<p>Welcome to my business contacts page!</p>';
		
        $conn = mysqli_connect('webdesign4.georgianc.on.ca', 'db200244547', '11679', 'db200244547') or die('Error connecting to MySQL server');
		
		$sql = "SELECT * FROM business_contacts ORDER BY name";	
		$result = mysqli_query($conn, $sql) or die('Error querying database.');
		
		echo '<table border="1"><tr><th>Name</th><th>Occupation</th><th>Company</th><th>Phone</th><th>Email</th></tr>';

		//Loop through the result and output them 1 individually
		while ($row = mysqli_fetch_array($result)) {
			echo '<tr><td>' . $row['name'] . '</td><td>' . $row['occupation'] . '</td><td>' . $row['company'] . '</td><td>' . $row['phone'] . '</td><td>' . $row['email'] . '</td></tr>';
		}
		
		echo '</table><p><a href="logout.php" alt="Logout">Logout</a></p>';
		
        echo'
        </div>
    </div>
    <footer>
    	<p>&copy;2013 Janice Exel</p>
    </footer>
</body>
</html>';

}

?>