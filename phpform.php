<!DOCTYPE HTML>
<html lang="en-US">
	<head>
		<meta charset="UTF-8">
		<title>php</title>
		<style type="text/css">
			body{background:orange;}
			input{background:#ddd; color:black;}
		</style>
	</head>
	<body>
		<h1>Registration form</h1>
		<form class="" action="" method="POST">
			First Name:<input placeholder="your name" type="text" name="first_name"/><br/><br/>
			Last Name: <input type="text" placeholder="Enter last name" name="last_name"/><br/><br/>
			Father name:<input type="text" placeholder="your father name" name="fn"/><br/><br/>
			Mother name:<input type="text" placeholder="your Mother name" name="mn"/><br/><br/>
			Email Address:<input type="email" placeholder="your email address" name="email"/><br/><br/>
			Password:<input type="password" placeholder="your password" name="password"/><br/><br/>
			Re-Password:<input type="password" placeholder="Enter Re-Password" name="fpassword"/><br/><br/>
			birth date:<input type="date" name="bdath"/><br/><br/><br/>
			Gender:<input placeholder="your Gender" name="gender" type="radio"/>Male<input name="gender" type="radio"/>Femele<input name="gender" type="radio"/>other<br/><br/>
			course choice:<input placeholder="select" type="checkbox" name="chekbox"/>Grafix design<input type="checkbox" name="chekbox"/>web design<br/><br/>
			your Distric:sellect option
			<select name="select">
				<option>select distric</option/>
				<option>panchagarh</option>
				<option>thakurgaon</option>
				<option>dinajpur</option>
				<option>rangpur</option>
				<option>lalmonirhat</option>
				<option>nilphamary</option>
			</select> <br />
			your comment:<br/> <textarea placeholder="write your comment" name="comment" cols="30" rows="10"></textarea><br/>
			<input value="sign up" type="submit" name="ok"/>
		</form>
		
		<?php
			if(isset($_POST['ok'])){
				echo $_POST['first_name'];
				echo "<br/>";
				echo $_POST['last_name'];
				echo "<br/>";
				echo $_POST['fn'];
				echo "<br/>";
				echo $_POST['mn'];
				echo "<br/>";
				echo $_POST['email'];
				echo "<br/>";
				echo $_POST['password'];
				echo "<br/>";
				echo $_POST['fpassword'];
				echo "<br/>";
				echo $_POST['bdath'];
				echo "<br/>";
				echo $_POST['gender'];
				echo "<br/>";
				echo $_POST['chekbox'];
				echo "<br/>";
				echo $_POST['select'];
				echo "<br/>";
				echo $_POST['comment'];
				echo "<br/>";
				
			};
		?>
	</body>
</html>