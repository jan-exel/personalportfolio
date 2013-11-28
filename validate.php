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
		$conn = mysqli_connect('webdesign4.georgianc.on.ca', 'db200244547', '11679', 'db200244547') or die('Error connecting to MySQL server');
		
		$username = $_POST['user'];
		$password = $_POST['pass'];
		
		$sql = "SELECT * FROM admin_accounts WHERE username = '$username' && password = '$password'";	
		$result = mysqli_query($conn, $sql) or die('Error querying database.');
		
		$count = mysqli_num_rows($result);
		
		if ($count == 1) {
				echo 'Logged in Successfully.';
				while ($row = mysqli_fetch_array($result)) {
					session_start();
					
					//store user id in session object
					$_SESSION['user'] = $row['id'];
					
					//redirect to business contact page
					header('Location: display.php');
					
				}
		}
			else {
				echo '<div id="section1">
				
				<script type="text/javascript">
				alert("Invalid Login!");
				</script>
		
			<h3>Invalid Login</h3><p>This login is for registered users only.<br />If you are a registered user, please check your credentials and try to <a href="businesscontacts.php">login</a> again.</p></div>';
			}
		
		mysqli_close($conn);
			
    ?>
	
    </div>
    <footer>
    	<p>&copy;2013 Janice Exel</p>
    </footer>
</body>
</html>