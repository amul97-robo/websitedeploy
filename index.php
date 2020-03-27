</!DOCTYPE html>
<html>
<head>
	<title>
		Interest Calculator
	</title>
	<style>
		input[type=textbox] {
  width: 50%;
  padding: 12px 20px;
  margin: 20px 0;
  box-sizing: border-box;
  border: 3px solid #ccc;
  border-color: coral;
  -webkit-transition: 0.5s;
  transition: 0.5s;
  outline: none;
}

input[type=text]:focus {
  border: 3px solid #fff;
}

input[type=Submit] {
  background-color: #4CAF50; /* Green */
  border: none;
  color: white;
  padding: 16px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  transition-duration: 0.4s;
  cursor: pointer;
}

input[type=Submit] {
  background-color: white; 
  color: black; 
  border: 2px solid #4CAF50;
}

input[type=Submit]:hover {
  background-color: #4CAF50;
  color: white;
}

	</style>
</head>
<body>
		<div style="background-image: url('interest.jpg'); 
		background-repeat: no-repeat;
		background-color: #FFFACD;
		background-size: 100%;
	   	height:600px; 	
	    background-position: center; 
		">
	<form action="index.php" method="POST" />
		<center>
		Principal(In Rs.):<input type="textbox" name="principal" placeholder="Enter principal amount" /><br>
		Rate(%):&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type="textbox" name="rate" placeholder="Enter rate" /><br>
		Time(in yrs):&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type="textbox" name="time" placeholder="Enter time" /><br>		
		<input type="Submit" name="Submit">
		<h1>Calculated Interest:</h1>
		</center>
		
	<?php
	if(isset($_POST['Submit']))
	{
		$p=$_POST['principal'];
		$r=$_POST['rate'];
		$t=$_POST['time'];
		$i;

		$i=($p*$r*$t)/100;
		echo "<h1><center><font color='orange'>".+$i."</font></center></h1>";
		

	}
	
	

	?>
	</form>

	

</body>
</html>

