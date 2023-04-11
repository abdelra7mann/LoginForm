<?php
  session_start();
  session_unset();
  session_destroy();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Logout Page</title>
	<style>
		body {
			font-family: Arial, sans-serif;
			background-color: #f5f5f5;
		}
		.container {
			max-width: 600px;
			margin: 0 auto;
			padding: 40px;
			background-color: #fff;
			border-radius: 10px;
			box-shadow: 0px 0px 20px #bbb;
			text-align: center;
		}
		h2 {
			color: #1af917;
			font-size: 36px;
			font-weight: bold;
			margin-bottom: 20px;
		}
		p {
			color: #666;
			font-size: 24px;
			margin-bottom: 30px;
		}
		a {
			color: #fff;
			background-color: #222;
			padding: 10px 20px;
			border-radius: 5px;
			text-decoration: none;
			transition: background-color 0.3s ease;
		}
		a:hover {
			background-color: #444;
		}
	</style>
</head>
<body>
	<div class="container">
		<h2>Logout Successful</h2>
		<p>You have been successfully logged out.</p>
		<p><a href="cockie.php">Login again</a></p>
	</div>
</body>
</html>

