<!DOCTYPE html>
<html>
<head>
</head>
<body>

<?php
	include_once 'connectDatabase.php';
	
	//Let's make sure the correct data is received. 
	if (!isset($_REQUEST['email']) || !isset($_REQUEST['password'])){
		header('HTTP/1.1 500 Internal Server Error');
		exit("ERROR: There was an error writing to the database. Some required data was missing.<br><a href='index.php'>Go back to main page.</a>");
	}
	else if ($_REQUEST['email'] == null || $_REQUEST['password'] == null){
		header('HTTP/1.1 500 Internal Server Error');
		exit("ERROR: There was an error writing to the database. Some required data was blank.<br><a href='index.php'>Go back to main page.</a>");
	}
	
	$useremail = $_REQUEST['email'];
	$userpass  = $_REQUEST['password'];

	//Let's make sure the e-mail doesn't already exist.
	$sql = 'SELECT * FROM accounts where email="'.$useremail.'"';
	$results = runQuery($sql);
	
	//If the following line has results (the array length is more than 0), that means data/e-mail already exists.
	if (count($results) > 0){
		header('HTTP/1.1 500 Internal Server Error');
		exit("ERROR: The e-mail address already exists.<br><a href='index.php'>Go back to main page.</a>");
	}

	//Let's add the data.
	$sql = 'INSERT INTO accounts (`email`, `password`) VALUES ("'.$useremail.'", "'.$userpass.'")';
	$results = runQuery($sql);
	
	echo "User Added.";

?>

	<div>
		<a href="index.php">Go back to main page.</a>
	</div>

</body>
</html>