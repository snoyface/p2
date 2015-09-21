<?php
	//lets create a simple word array
	$words = array('house','farm','battery','box','member','method','apple','secret','scarf','people');
	echo $words[0];
	?>

	
	<?php
		//adding the words to the array
		$passwordNum = array();

		//init the vars used from GET
		$numberOfWords  = $_GET["numwords"]-1;
		$includeNumbers = $_GET["numinclude"];
		$includeChars   = $_GET["charinclude"];
		
		for($i = 0; $i <= $numberOfWords; $i++){
			//get a random number
			$rWord = rand(0,9);
			
			//push word in # position to array.
			array_push($passwordNum, $words[$rWord]);
		}
	?>

	
	
	
