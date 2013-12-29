<!DOCTYPE HTML>

<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>Login PHP</title>
	<link rel="stylesheet" href="style.css" />
	<link href='http://fonts.googleapis.com/css?family=Oleo+Script' rel='stylesheet' type='text/css'>
	<script type="text/javascript" src="jquery-1.7.min.js"></script>
	<script type="text/javascript">
	
	$(document).ready(function(){
		$("#login").click(function(){
			
			var action = $("#lg-form").attr('action');
			var form_data = {
				username: $("#username").val(),
				password: $("#password").val(),
				is_ajax: 1
			};
			
			$.ajax({
				type: "POST",
				url: action,
				data: form_data,
				success: function(response)
				{
					if(response == "success")
						$("#lg-form").slideUp('slow', function(){
							$("#message").html('<p class="success">You have logged in successfully!</p><p>Redirecting....</p>');
						});
					else
						$("#message").html('<p class="error">ERROR: Invalid username and/or password.</p>');
				}	
			});
			return false;
		});
	});
	</script>
</head>
<body>

	<div align="center"><img src="paseban_logo.png"></div>
	<div class="lg-container">
		<h1>Login</h1>
		<form action="waka-login.php" id="lg-form" name="lg-form" method="post">
			
			<div>
				<label for="username">Username:</label>
				<input type="text" name="username" id="username" placeholder="username"/>
			</div>
			
			<div>
				<label for="password">Password:</label>
				<input type="password" name="password" id="password" placeholder="password" />
			</div>
			
			<div>
				<select name="type">
				  <option name="tester" value="tester">Tester</option>
				  <option name="programmer" value="programmer">Programmer</option>
				  <option name="spv_qc" value="spv_qc">Supervisor QC</option>
				  <option name="spv_programmer" value="spv_programmer">Supervisor Programmer</option>
				</select>
			</div>


			<div>				
				<button type="submit" id="login">Login</button>
			</div>
			
		</form>
		<div id="message"></div>
	</div>
</body>
</html>