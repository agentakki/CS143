<!DOCTYPE html>
<html>
	<head>
		<title>Calculator</title>
	</head>
<body>
	<h1> Calculator</h1>
	
	<p>Created by Akshay Bakshi and Lowell Bander.</p>
	
	<form method="GET">
		<input type="text" name="expr">
		<input type="submit" value="Calculate">
	</form>
	
	<h1>Result</h1>
	<?php
		$expr = $_GET['expr'];
		$result = preg_match('((-?\d+\.?\d*)[\+\-\/\*])*(-?\d+\.?\d*)', $expr);
		//if (preg_match("/(-)?(\d+(.\d+)?)(\s*[+-/*]\s*(-)?(\d+)(.\d+)?)*/", $expr)) {
		if($result === 1)
		{
			echo $expr;
			echo " = ";
			eval("echo $expr;");
		}
		else  {
			echo 'Invalid input';
		}

	?>
	
	</body>
</html>
