<?php

	function connectDB(){
	 if (!$connDb){
		$connDb = mysql_connect('localhost:3306', 'user', '12345');
		if (!$connDb) { echo "The website has encountered an error.  We are working on a resolution.  Please check back in a few  hours.";die();}
		if (!mysql_select_db("assignment3", $connDb)) {echo "The website has encountered an error.  Please check back in a couple of hours."; die();}
	 }
	}

	function disconnectDB(){
		if ($connDb)	mysql_close($connDb);
	}
?>