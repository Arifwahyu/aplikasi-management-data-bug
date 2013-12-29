<?php
session_start();
if(isset($_SESSION['username'])) {
header('location:index.php'); }
require_once("koneksi.php");
?>
<!DOCTYPE HTML>

<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>Login PHP</title>
	<link rel="stylesheet" href="style.css" />
	<link href='http://fonts.googleapis.com/css?family=Oleo+Script' rel='stylesheet' type='text/css'>
	<script type="text/javascript" src="jquery-1.7.min.js"></script>
</head>
<body>

	<div align="center"><img src="logo.png"></div>
	<div class="lg-container">
		<h1>Login</h1>
		<form action="proseslogin.php" id="lg-form" name="lg-form" method="post">
			
			<div align="center">
				Type:
				<select name="type">
				  <option name="-pilih-" value="-pilih-">-pilih-</option>	
				  <option name="tester" value="tester">Tester</option>
				  <option name="programmer" value="programmer">Programmer</option>
				  <option name="spv_qc" value="spv_qc">Supervisor QC</option>
				  <option name="spv_programmer" value="spv_programmer">Supervisor Programmer</option>
				</select>
			</div>
			<div>
				<label for="username">Username:</label>
				<input type="text" name="username" id="username" placeholder="username"/>
			</div>
			
			<div>
				<label for="password">Password:</label>
				<input type="password" name="password" id="password" placeholder="password" />
			</div>
			<div align="center">				
				<button type="submit" id="login">Login</button> <br/><br/> Belum Punya Akun ? <a href="daftar.php">Daftar</button></a>
			</div>
			
		</form>
		<div id="message"></div>
	</div>
	<div align="center">
	Copyright @2013
</div>
</body>
</html>