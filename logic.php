<?php
	//lets create a simple word array
	$words = array('house,farm,battery,box,member,method,apple,secret,scarf,people');
	?>

	
	<?php
		//adding the words to the array
		$passwordNum = array();
		
		foreach ($_GET as $key => $value){
			$rWord = rand(0,8);
			$passwordNum[$value] = $words[$rWord];
		}
	?>

	
	
	
