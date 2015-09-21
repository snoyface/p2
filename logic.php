<?php
	//lets create a simple word array
	$words = array('house,farm,battery,box,member,method,apple,secret,scarf,people');
	?>

	
	<?php
		//adding the words to the array
		$passwordNum = array();

		$numberOfWords  = $_GET["numwords"];
		$includeNumbers = $_GET["numinclude"];
		$includeChars   = $_GET["charinclude"];
		
		for($i = 0; $i <= $numberOfWords; $i++){
			//echo out all of the keys and values in $_GET
			echo $key . '==' . $value . '<br>';
			//generate a random number
			$rWord = rand(0,9);
			//echo out random num to be sure
			echo 'Random num: ' . $rWord;
			//push word in # position to array.
			array_push($passwordNum, $words[$rWord]);
/*
			if(isset($passwordNum)){
				array_push($passwordNum, $words[$rWord]);
			}else{ $passwordNum[0] = $words[$rWord];
				}
*/
		}
	?>

	
	
	
