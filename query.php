<!DOCTYPE html>
<html>
	<head>
		<title>Query</title>
	</head>
<body>
	<h1>Query</h1>

	<TEXTAREA NAME="area" ROWS=5 COLS=30>
        SELECT * FROM Actor WHERE id < 20;
	</TEXTAREA>
    <br>
	
	<?php
		$db_connection = mysql_connect("localhost", "cs143", "");
        if(!$db_connection) {
            $errmsg = mysql_error($db_connection);
            print "Connection failed: $errmsg <br />";
            exit(1);
        }
		mysql_select_db("TEST", $db_connection);
		$query = "select * from Student";
		$rs = mysql_query($query, $db_connection);
		while($row = mysql_fetch_row($rs)) {
			$name = $row[1];
			$email = $row[2];
			print "$sid, $name, $email<br />";
		}

        //$query = "update Student set email = CONCAT(email, '.edu')";
        mysql_query($query, $db_connection);

        $affected = mysql_affected_rows($db_connection);
        print "Total affected rows: $affected<br />";

        $query = "select * from Student where name = '%s'";
        $sanitized_name = mysql_real_escape_string($name, $db_connection);
        $query_to_issue = sprintf($query, $sanitized_name);
        $rs = mysql_query($query_to_issue, $db_connection);

		// close the connection when done
		mysql_close($db_connection);
	?>


	</body>
</html>
