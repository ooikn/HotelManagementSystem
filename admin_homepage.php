<!DOCTYPE html>
<html>
	<head>
		<link href="admin_homepage.css" rel="stylesheet" type="text/css">
	</head>
	<body>
		<div class="navbar">
			<a href="#">Homepage</a>
			<form class="form" method="POST">
				<div class="align_form">
					<label for="email">Email:</label>
					<input type="email" name="email">
					<label for="password">Password:</label>
					<input type="password" name="password">
					<button type="submit" class="sign_in">Sign In</button>
				</div>
			</form>
		</div>
		     <?php
    //connect to the database
    $server = "localhost";
    $username = "root";
    $password = "";
    $dbname = "hotel management database";

    //create connection
    $mysqli = mysqli_connect($server, $username, $password, $dbname);

    //check connection
    if (!$mysqli) {
        die("Connection failed: " . mysqli_connect_error());
    }
    //validate add room form
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $email = trim($_POST["email"]);
        $password = trim($_POST["password"]);      
		$check = "SELECT email, password FROM admin WHERE email = '$email' AND password = '$password'";
		$result = mysqli_query($mysqli, $check);
		if(mysqli_num_rows($result) > 0){
			header("Location: admin_page.html");
		}
    }
    //close connection
    $mysqli->close();
    ?>  
		<div class="image_align">
			<img src="images/hotel_image(1).jpeg">
			<img src="images/hotel_internal(1)">
			<img src="images/hotel_restaurant(1).jpeg">
		</div>
	</body>
</html>