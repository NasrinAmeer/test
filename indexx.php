<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>home page</title>
</head>
<body>
	<p><a href="">Home</a> &nbsp; | 
	<a href="about.html">Aboutus</a> &nbsp; | 
	<a href="contact.html">Contactus</a> &nbsp;</p>
	
	<h1>This is home page</h1>
	<p>Lorem ipsum dolor sit amet, <i>consectetur</i> adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
	<img src="httpdocs\images\lap1.jpg" alt="laptop" width="350px" /><br />
	<audio controls>
		<source src="httpdocs\audio\sample-3s.mp3" type="audio/mpeg"><br />	
	</audio><br />
	<button type="button">click me</button>
	<table border="1px">
		<tr>
			<th>name</th>
			<th>age</th>
		</tr>
		<tr>
			<td>nasrin</td>
			<td>27</td>
		</tr>
		<tr>
			<td>anju</td>
			<td>28</td>
		</tr>
	</table>
	<!--<form action="destination.html" method="post">-->
	<form action="getvalue.php" method="get">
	enter your name <input type="text" name="name" />
	enter your age <input type="text" name="age" />
	<input type="submit" value="submit" />
	</form>
	
	<script type="text/javascript">
	document.cookie = "names=nasrin";
	document.cookie = "age=10";
	localStorage.setItem('param2','value2');
	</script>
</body>
	
</html>