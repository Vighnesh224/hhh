<?php

if (isset($_GET['c']))
{
	$file = 'huh.txt';
	file_put_contents($file, $_GET['huh'].PHP_EOL, FILE_APPEND);
}


?>
<!DOCTYPE html>
<html>
<title> Problem </title>
<body>
<h1 align="center"> Oh No! Something went wrong! </h1>
</body>
</html> 
