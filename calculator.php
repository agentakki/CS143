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

		$production = 1;
		if($production)
		{
			error_reporting(0);
			ini_set('display_errors',0);
			ini_set('display_startup_errors', 0);
		}

		$expr = $_GET['expr'];

		if($expr != "") //Only do stuff if we have input
		{
			$input_expr = $expr; //need to output the exact string despite later modifications


			$result = 0;
			$result = preg_match('/((-?\d+\.?\d*)\s*[\+\-\/\*])*\s*(-?\d+\.?\d*)/', $expr, $matched);

			//cases where our regex might trip
			if($matched[0] != $expr)
			{
				$result = 0;
			} 
			
			//divide by 0 at the end 
			if(preg_match('/\/0$/', $expr))
			{
				$result = 0;
			}

			if(preg_match("/\/0[^\.]/", $input_expr))
			{
				$result = 0;
			}

			if ($result)
			{
				echo $input_expr;
				echo " = ";
				$expr = str_replace("--", "+", $expr); //lolz what a hack
				eval("echo $expr;");
			}
			else  
			{
				echo 'Invalid input';
			}
		}
		

	?>
	
	</body>
</html>
