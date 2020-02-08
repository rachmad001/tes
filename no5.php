<?php 
	function fibo($data,$baris){
		$satusebelumnya = 1;
		$duasebelumnya = -1;
		$hasilAkhir = $satusebelumnya + $duasebelumnya;
		for ($i=0; $i < $baris; $i++) { 
			for ($j=0; $j < $data; $j++) { 
				echo $hasilAkhir.", ";
				$duasebelumnya = $satusebelumnya;
				$satusebelumnya = $hasilAkhir;
				$hasilAkhir = $duasebelumnya + $satusebelumnya;
			}
			echo "<br>";
		}
	}
	$data = 4;
	$baris = 3;
	fibo($data,$baris);
 ?>