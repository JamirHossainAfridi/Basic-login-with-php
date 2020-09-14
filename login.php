<?php
session_start();
?>
<html>
	<head>
		<title>Login</title>
	</head>
	<body>
		<fieldset align="center">
			<legend><h3><i>Login</i></h3></legend>
			<form action="<?= htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
				<table align="center">
					<tr>
						<td>Email</td>
						<td><input type="text" name="email" placeholder="Please give your email"/></td>
					</tr>
					<tr>
						<td>Password</td>
						<td><input type="password" name="password" placeholder="Please give your password"/></td>
					</tr>
					<tr><td></td></tr>
					
					<tr>
						
						<td colspan="2" align="center"><input type="submit" name="login" value="Login"/></td>
						
					</tr>
					<tr>
						<td><a href="registration.php">Don't have any account</a></td>
					</tr>
				</table>
			</form>
		</fieldset>

	</body>
</html>
<?php
if(isset($_POST['login']))
{
	$con=mysqli_connect("localhost","root","","jamir");
	if(!$con)
	{
		die("Connection Error: ".mysqli_connect_error()."<br/>");
	}
	//Retrieve Data

	$password=$_POST['password'];
	$email=$_POST['email'];
	$sql="SELECT * FROM users WHERE email='$email' AND password='$password'";
	$result=mysqli_query($con,$sql);	
	if(mysqli_num_rows($result)>0)
	{
		header("Location:index.php");
	}
	else
	{
		echo "Email or Password is incorrect...<br/>";
	}

	
mysqli_close($con);		
}
?>

	
