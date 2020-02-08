<?php 
	function ganti_kata($kalimat,$target,$ubah){
		$hasilUbah = "";
		for ($i=0; $i < strlen($kalimat); $i++) { 
			if($kalimat[$i] == $target){
				$hasilUbah .= $ubah;
			}
			else {
				$hasilUbah .= $kalimat[$i];
			}
		}
		return $hasilUbah;
	}
	$kalimat = "Tuban";
	$target = "a";
	$ubah = "u";
	echo ganti_kata($kalimat,$target,$ubah);
?>