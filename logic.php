<?php
	//lets create a simple word array
	$words   = array('house','farm','battery','box','member','method','apple','secret','scarf','people');
	//lets create number and char arrays
	$numbers = array('1','2','3','4','5','6','7','8','9','0');
	$chars   = array('!','@','#','$','%','^','&','*','?','(',')','_','+');
	?>

	
	<?php
		//adding the words to the array
		$passwordNum = array();

		//init the vars used from GET
		$numberOfWords  = $_GET["numwords"]-1;
		$includeNumbers = $_GET["numinclude"];
		$includeChars   = $_GET["charinclude"];

		if($numberOfWords >= 9 ){
			exit ("Try again, too many words");
		}
		
		for($i = 0; $i <= $numberOfWords; $i++){
			//get a random number
			$rWord = rand(0,9);
			
			//push word in # position to array.
			array_push($passwordNum, $words[$rWord]);
		}

		if($includeChars == 'Yes'){
			$rWord = rand(0,9);
			array_push($passwordNum, $chars[$rWord]);
		}
		if($includeNumbers == 'Yes'){
			$rWord = rand(0,12);
			array_push($passwordNum, $numbers[$rWord]);
		}
	?>

	
	
	
