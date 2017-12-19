<?php

class Pustaka {

	function tanggal_indo($tanggal) {
		return date("d-m-Y H:i:s", strtotime($tanggal));
	}

	function dec_to_int($int) {
		return round($int,0);
	}

}

?>