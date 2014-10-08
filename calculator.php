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
echo $expr;
//echo eval('return '+ $_GET['expr']);
?>

</body>
</html>
