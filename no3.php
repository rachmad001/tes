<?php 
	function count_vowels($input){
		$hurufHidup = ['a','i','u','e','o'];
		$result = 0;
		for ($i=0; $i < strlen($input); $i++) { 
			for ($j=0; $j < count($hurufHidup); $j++) { 
				if ($input[$i] == $hurufHidup[$j]){
					$result++;
					break;
				}
			}
		}
		return $result;
	}
	$input = "programmer";
	echo count_vowels($input);

?>