<?php
error_reporting(E_ALL);       # Report Errors, Warnings, and Notices
ini_set('display_errors', 1); # Display errors on page (instead of a log file)
?>
<?php
phpinfo();
?>

// <?php require 'logic.php'; ?>

<!DOCTYPE html>
<html>
<head>

	<title>Jonathan MacLeod P2 - Random password generator</title>
	<meta charset="utf-8">
	
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel='stylesheet' href='//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css' type='text/css'>
	<link href="//netdna.bootstrapcdn.com/bootswatch/3.1.1/flatly/bootstrap.min.css" rel="stylesheet">
</head>

<body>
<container>
	<h1>Jonathan MacLeods Password generator</h1>
	<br>
	<form  method="GET" action= "index.php" autocomplete="off">
		How many words?<br>
		<input type="text" name="numwords"> Max 9
		<br>
		Should it include a number?<br>
		<input type= "radio" name="numinclude" value="Yes">Yes
		<br>
		<input type= "radio" name="numinclude" value="No">No
		<br>
		Should it include a special character?<br>
		<input type= "radio" name="charinclude" value="Yes">Yes
		<br>
		<input type= "radio" name="charinclude" value="No">No
		<br>
		<input type="submit" value="Submit">
	</form>

    //lets create a simple word array
	<?php
	$words = array('house,farm,battery,box,member,method,apple,secret,scarf,people');
	?>

	//adding the words to the array
	<?php
		
		$passwordNum = array();
		
		foreach ($_GET("numwords") as $key => $value){
			$rWord = rand(0,9);
			$passwordNum[$value] = $words[$rWord];
		}
	?>

	<p>Your password is: </p> 
	
	<?php
	foreach ($passwordNum as $key => $value){
		echo $value;
	}
	?>

</container>
</body>
</html>
		