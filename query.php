<!DOCTYPE html>
<html>
	<head>
		<title>Query</title>
	</head>
<body>
	<h1>Query</h1>


    <p>Enter a query, such as: <b>SELECT * FROM Student;</b></p>

    <form method="GET">
        <textarea name="query" cols="60" rows="8"></textarea>
        <input type="submit" value="Submit">
    </form>
    <br>
	
	<?php
		$db_connection = mysql_connect("localhost", "cs143", "");
        if(!$db_connection) {
            $errmsg = mysql_error($db_connection);
            print "Connection failed: $errmsg <br />";
            exit(1);
        }
		mysql_select_db("TEST", $db_connection);

        $query = $_GET["query"];
        $sanitized_query = mysql_real_escape_string($query, $db_connection);
        $rs = mysql_query($sanitized_query, $db_connection);

        print "<b>YOUR QUERY: </b>$sanitized_query<br><br>";

		while($row = mysql_fetch_row($rs)) {
			$sid = $row[0];
			$name = $row[1];
			$email = $row[2];
			print "$sid, $name, $email<br />";
		}

		// close the connection when done
		mysql_close($db_connection);
	?>


	</body>
</html>
