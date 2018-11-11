<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>chào mừng bạn đến với chatapp</title>
</head>

<body>
<h2>FORM LOGIN</h2>
<div id="LoginDiv">
<form method="post" action="pages/InsertUser.php">
<table>
	<tr>
		<td>Email:</td><td><input type ="email" name="UserMailLogin"/></td>
	</tr>
    <tr>
    	<td>Password</td><td><input type="password" name="UserPasswordLogin"/></td>
    </tr>
    <tr>
        <td></td><td><input type="submit" value="LOG IN"/> </td>
    </tr>
</table>
</div>
<br>
<br>
<br>
<br>
<h2>FORM SIGN UP</h2>
<div id="SignUpDiv">
	<form method="post" action="pages/InsertUser.php">
	<table>
    	<tr>
        	<td>Your Name: </td> <td><input type="text" name="UserName"/></td>
        </tr>
        <tr>
        	<td>Your Email: </td> <td><input type="email" name="UserMail"/></td>
        </tr>
        <tr>
        	<td>Password: </td> <td><input type="password" name="UserPassword"/></td>
        </tr>
        <tr>
        	<td></td><td><input type="submit" value="Sign Up"/></td>
        </tr>
        <?php
        if(isset($_GET['success'])){
		?>
        <tr>
        	<td></td><td><span style="color:green">User Inserted</span></td>
        </tr>
        <?php
		}
		?>
    <table>

</body>
</html>