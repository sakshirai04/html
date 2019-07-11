<?php

if (isset($_POST['submit'])){
	if (empty($_POST["name"])){
		echo "Name is required";
	}
	else{
		$name= $_POST['name'];
		echo "Name ". $name;
		echo "<br>";

	}
	echo "<br>";
	if (empty($_POST["mail"])){
		echo "Email is required";
	}else{
	$mail=$_POST['mail'];
	echo "Email ".$mail;
	echo "<br>";

}

	
}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Welcome</title>
</head>
<body>
	<center>
	<form method="POST" action="basic1.php">
	<div class="form-control">
	<label>Name</label>
	<input type="text" name="name" placeholder="Name" style="background-color: lightgrey">
	</div>
	<br>
	<div class="form-control">
		<label>Email</label>
		<input type="text" name="mail" placeholder="Email" style="background-color: lightgrey">
	</div>
	<br>

	<div>
		<button type="submit" name="submit">Submit</button>
	
		<button type="submit" name="cancel">Cancel</button>
	</div>
</form>
</center>

</body>
</html>