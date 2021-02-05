<html>
	<head>
		<title>PHP Test</title>
	</head>
	<body>
		<?php 
			echo '<p>TEST HEROKU POSTGRESQL DATABASE </p>'; 
			# Heroku credential
			$host_heroku = "ec2-18-206-84-251.compute-1.amazonaws.com";
			$db_heroku = "d8k42dnhtd0o9i";
			$user_heroku = "crmjpgdtqgprga";
			$pw_heroku = "0d86d0fb5f24be75ffb6728bb2ffaa6762b75489e8923fda3cdf71c519a99d67";
			# Create connection to Heroku Postgres
			$conn_string = "host=$host_heroku port=5432 dbname=$db_heroku user=$user_heroku password=$pw_heroku";
			$pg_heroku = pg_connect($conn_string);
			# Get data by query
			$result = pg_query($pg_heroku, "select * from pg_stat_activity");
			var_dump(pg_fetch_all($result));
			
		?> 
	</body>
</html>
