<!DOCTYPE html>
<html>
<body>
<h1> Calculator</h1>

<p>Created by Akshay Bakshi and Lowell Bander.</p>

<form method="GET">
<input type="text" name="expr">
<input type="submit" value="Calculate">
</form>

<h1>Result</h1>
<?php
echo $_GET['expr'];
?>

</body>
</html>
