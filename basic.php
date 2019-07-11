<!DOCTYPE html>
<html>
<head>
	<title>FIRST PAGE</title>
</head>
<body bgcolor="black" >
	<div style="background-color: white" >
	<center><h1>My First Page</h1></center>
	</div>
	

<div style="background-color: yellow ">
<?php
echo "hello world";
echo "<br>";
echo "hello world";
echo "<br>";
echo "hello world";
echo "<br>";
echo "hello world";
$txt="Helloo World";
$x=5;
$y=10;
echo "<br>";
echo $txt;
echo "<br>";
echo $x;
echo "<br>";
echo $y;
echo "<br>";
echo $x+$y;
echo "<br>";
echo $x-$y;
echo "<br>";
echo $x*$y;
echo "<br>";
echo $x/$y;
echo "<br>";
$t=date("H");
if($t>40)
{
	echo "Have a nice day...!!!!!!!";
}
elseif ($t<41) {
	echo "have a bad day";
}
else{
	echo "Have a good night...!!!!!!!";

}
date_default_timezone_set('Asia/kolkata');
echo "<br>";
echo date('h:i:s:a');
echo "<br>";
echo date('d-m-y-l');
echo "<br>";
$color="black";
switch ($color) {
	case "red":
		echo "This is your fav color";
		break;
		case 'blue':
		echo "This is your fav color";
			break;
	
	default:
		echo "No fav color";
		break;
}
echo "<br>";
echo "Today is:".date('d-m-y-l');
echo "<br>";
echo "Today is:".date('h:i:s:a');
?>
</div>

<div style="background-color: white">
<center>
<form method="POST" action="basic.php">
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
		<button type="submit" name="submit">Button</button>
	
		<button type="submit" name="cancel">Cancel</button>
	</div>
</form>
</center>
</div>



</body>
</html>