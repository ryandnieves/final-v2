<!DOCTYPE html>
<html>
<head>
</head>
<body>

<?php
	include_once 'connectDatabase.php';
	
	//Let's make sure the correct data is received. 
	if (!isset($_REQUEST['email']) || $_REQUEST['email'] == null){
		header('HTTP/1.1 500 Internal Server Error');
		exit("ERROR: There was an error writing to the database. Some required data was missing.<br><a href='index.php'>Go back to main page.</a>");
	}
	
	$useremail = $_REQUEST['email'];

	//Let's make sure the e-mail exists (so we can delete it).
	$sql = 'SELECT * FROM accounts WHERE email="'.$useremail.'"';
	$results = runQuery($sql);
	
	//If the following line has results (the array length is more than 0), that means data/e-mail exists.
	if (count($results) == 0){
		header('HTTP/1.1 500 Internal Server Error');
		exit("ERROR: The e-mail address doesn't exist.<br><a href='index.php'>Go back to main page.</a>");
	}

	//Let's delete the data
	$sql = 'DELETE FROM accounts WHERE email="'.$useremail.'"';
	$results = runQuery($sql);
	
	echo "User Deleted.";

?>

	<div>
		<a href="index.php">Go back to main page.</a>
	</div>

</body>
</html>