<?php
	/**
	 * Created by PhpStorm.
	 * User: abass
	 * Date: 06/01/2019
	 * Time: 20:06
	 */
	
	function sec_to_minutes($seconds) {
		$sec = $seconds % 60;
		if (function_exists('intdiv')):
			$min = intdiv($seconds, 60);
		else:
			$min = ($seconds - $sec) / 60;
		endif;
		$sec = abs($sec);
		$sec = ($sec < 10) ? '0' . $sec : $sec;
		
		return "$min:$sec";
	}
	
	echo sec_to_minutes(-547);