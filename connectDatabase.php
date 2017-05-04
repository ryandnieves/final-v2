<?php
	
	date_default_timezone_set('America/New_York');
	
	$hostname = 'localhost';
	$database = 'rdn5';
	$username = 'root';
	$password = '';		
	//$hostname = 'sql2.njit.edu'; // Change this to your server settings. E.g., sql2.njit.edu
	//$database = 'rdn5';
	//$username = 'rdn5';		// This should be your UCID (same as database name)
	//$password = 'DNb8Q7oFy';	// This is your NJIT mySQL password. It is likely different from your UCID password.
	
    try {
        
        $db = new PDO("mysql:host=$hostname;dbname=$database", $username, $password);

        $sql =

		"CREATE TABLE `accounts` (
  		`id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  		`email` varchar(60) DEFAULT NULL,
  		`fname` varchar(30) DEFAULT NULL,
  		`lname` varchar(30) DEFAULT NULL,
  		`phone` varchar(20) DEFAULT NULL,
  		`birthday` date DEFAULT NULL,
  		`gender` varchar(20) DEFAULT NULL,
  		`password` varchar(30) DEFAULT NULL,
  		PRIMARY KEY (`id`)
		);";

		$firstName = isset($_POST["fname"]);
		$lastName = isset($_POST["lname"]) ? $_POST['lname'] : '';
		$email = isset($_POST["email"]) ? $_POST['email'] : '';
		$password = isset($_POST["password"]) ? $_POST['password'] : '';
		$birthday = isset($_POST["birthday"]) ? $_POST['birthday'] : '';
		//$gender == isset($_POST["gender"]) ? $_POST['gender'] : '';
		$number = isset($_POST["number"]) ? $_POST['number'] : '';

		$sql = "INSERT INTO 'accounts' (fname, lname, email, password, birthday, number) VALUES ('$firstName', '$lastName', '$email' , '$password', '$birthday', '$number');";


        
    } catch (PDOException $e) {
        $error_message = $e->getMessage();
        http_error(500, "Internal Server Error", "We couldn't connect to a Heroku MySQL database.");
        header('HTTP/1.1 500 Internal Server Error');
		exit("ERROR: There was an error connecting to the mySQL database. Error message: ".$error_message);
    }
    
    
    // Runs SQL query and returns results (if valid)
    function runQuery($query) {

		global $db;

	    try {
    
			$q = $db->prepare($query);
			$q->execute();
			$results = $q->fetchAll();
			$q->closeCursor();

			return $results;
			
		} catch (PDOException $e) {

			http_error(500, "Internal Server Error", "There was a SQL error:\n\n" . $e->getMessage());
			
		}	
	    
	}
?>