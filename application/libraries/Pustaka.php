<?php

class Pustaka {

	function tanggal_indo($tanggal) {
		return date("d-m-Y H:i:s", strtotime($tanggal));
	}

	function dec_to_int($int) {
		return round($int,0);
	}

	function penyebut($nilai) {
	  	switch ($nilai) {
	  		case 0:
	  			$hasil = "Nol";
	  			break;
	  		case 10:
	  			$hasil = "Sepuluh";
	  			break;
	  		case 20:
	  			$hasil = "Dua Puluh";
	  			break;
	  		case 30:
	  			$hasil = "Tiga Puluh";
	  			break;
	  		case 40:
	  			$hasil = "Empat Puluh";
	  			break;
	  		case 50:
	  			$hasil = "Lima Puluh";
	  			break;
	  		case 60:
	  			$hasil = "Enam Puluh";
	  			break;
	  		case 70:
	  			$hasil = "Tujuh Puluh";
	  			break;
	  		case 80:
	  			$hasil = "Delapan Puluh";
	  			break;
	  		case 90:
	  			$hasil = "Sembilan Puluh";
	  			break;
	  		case 100:
	  			$hasil = "Seratus";
	  			break;
	  		
	  		default:
	  			$hasil = "Error!!!";
	  			break;
	  	}
	  	return $hasil;
	}

}

?>