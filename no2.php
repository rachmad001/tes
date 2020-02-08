<?php
	function is_username_valid($username){
		$lenghtext = strlen($username);
		$result = "username tidak valid";
		if ($lenghtext < 5 || $lenghtext > 9){
			$result = "username tidak valid";
		}
		else {
			$granted = [
				'a','b','c','d','e','f','g','h','i','j','k','l','m','n',
				'o','p','q','r','s','t','u','v','w','x','y','z'
			];
			for ($i = 0; $i < $lenghtext; $i++){
				$result = "username tidak valid";
				for($j = 0; $j < count($granted); $j++){
					if ($username[$i] == $granted[$j]){
						$result = "username valid";
						break;
					}
				}
				if ($result == "username tidak valid"){
					break;
				}
			}
		}
		echo $result."<br>";
	}

	function is_password_valid($password){
		$lenghtext = strlen($password);
		$banyakangka = 0;
		$hurufkecil = 0;
		$hurufbesar = 0;
		$result = "Password invalid";
		if ($lenghtext < 8){
			$result = "Password invalid";
		}
		else {
			$kecil = [
				'a','b','c','d','e','f','g','h','i','j','k','l','m','n',
				'o','p','q','r','s','t','u','v','w','x','y','z'
			];
			$angka = ['0','1','2','3','4','5','6','7','8','9'];
			
			for ($i = 0; $i < $lenghtext; $i++){
				for ($j = 0; $j < count($kecil); $j++){
					if ($j < count($angka)){
						if ($password[$i] == $kecil[$j]) {
							$hurufkecil++;
							break;
						}
						elseif ($password[$i] == strtoupper($kecil[$j])) {
							$hurufbesar++;
							break;
						}
						elseif ($password[$i] == $angka[$j]){
							$banyakangka++;
							break;
						}
					}
					else {
						if ($password[$i] == $kecil[$j]) {
							$hurufkecil++;
							break;
						}
						elseif ($password[$i] == strtoupper($kecil[$j])) {
							$hurufbesar++;
							break;
						}
					}
					

				}
				
			}
		}
		if ($hurufkecil > 0 && $hurufbesar > 0 && $banyakangka > 0){
			if ($hurufbesar+$hurufkecil+$banyakangka < $lenghtext) {
				$result = "Password valid";
			}
		}
		echo $result."<br>";
	}
	$username = "cod3r";
	$password = "testextCEK12!@";
	
	is_username_valid($username);
	is_password_valid($password);
?>