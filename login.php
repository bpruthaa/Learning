<?php
	$hostname = "localhost";
	$username = "root";
	$password = "";
	$database = "test";
	$conn = mysqli_connect($hostname, $username, $password, $database);
	if(!conn)
	{
		die("unable to connect");
	}
	if($_POST)
	{
		$uname=$_POST["email"];
		$pass=$_POST["password"];
		//Preventing Sql Injection with username and Password
		$uname=mysqli_real_escape_string($conn,$uname);
		$pass=mysqli_real_escape_string($conn,$pass);
		$query= "SELECT * from login_db where email = '$uname' AND password = '$pass' ";
		$result= mysqli_query($conn,$query);
	}
	if(mysqli_num_rows($result)==1)
	{
		echo("Welcome User");
	}
	else
	{
		echo("Incorrect Username/Password");
	}
?>
<!DOCTYPE HTML>
<HTML>
	<HEAD>
			<link href='https://fonts.googleapis.com/css?family=Open+Sans:700,600' rel='stylesheet' type='text/css'>

			<STYLE>
				body{
  						font-family: 'Open Sans', sans-serif;
  						background:#3498db;
  						margin: 0 auto 0 auto;  
  						width:100%; 
  						text-align:center;
  						margin: 20px 0px 20px 0px;   
					}
				p{
  						font-size:12px;
  						text-decoration: none;
  						color:#ffffff;
				}
				.box{
  						background:white;
  						width:300px;
  						border-radius:6px;
  						margin: 0 auto 0 auto;
  						padding:0px 0px 70px 0px;
  						border: #2980b9 4px solid; 
					}
				.roles{
  						background:#ecf0f1;
  						border: #ccc 1px solid;
  						border-bottom: #ccc 2px solid;
  						padding: 8px;
  						width:270px;
  						color:#AAAAAA;
  						margin-top:10px;
  						font-size:1em;
  						border-radius:4px;
					}

				.email{
  						background:#ecf0f1;
  						border: #ccc 1px solid;
  						border-bottom: #ccc 2px solid;
  						padding: 8px;
  						width:250px;
  						color:#AAAAAA;
  						margin-top:10px;
  						font-size:1em;
  						border-radius:4px;
					}

				.password{
  						border-radius:4px;
  						background:#ecf0f1;
  						border: #ccc 1px solid;
  						padding: 8px;
  						width:250px;
  						font-size:1em;
					}

				.btn{
  						background:#2ecc71;
  						width:125px;
  						padding-top:5px;
  						padding-bottom:5px;
  						color:white;
  						border-radius:4px;
  						border: #27ae60 1px solid;
  
  						margin-top:20px;
  						margin-bottom:20px;
  						float:left;
  						margin-left:16px;
  						font-weight:800;
  						font-size:0.8em;
					}

					.btn:hover{
  						background:#2CC06B; 
					}

					


			</STYLE>
	
	</HEAD>
	<BODY>
		<form method="post" action="login.php" method="post">
		<div class="box">
			<select name="Roles" class="roles">
  				<option value="Student">Student</option>
  				<option value="Faculty">Faculty</option>
  				<option value="Admin">Admin</option>
  			</select>
			<input type="email" name="email" value="email" onFocus="field_focus(this, 'email');" onblur="field_blur(this, 'email');" class="email" id="email" /> 
			<input type="password" name="password" value="email" onFocus="field_focus(this, 'email');" onblur="field_blur(this, 'email');" class="email" id="pwd"/> 
			<div><input type="submit" class="btn" id="submit" value="login"></div> 
			</div>
		</form><br>

		<p>Forgot your password? <u style="color:#f1c40f;"><a href="#">Click Here!</u></a></p>
  
	</BODY>
</HTML>