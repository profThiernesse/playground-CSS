<?php

	include("CSS_Checker.php");

	$error = CSS_Check($argv[2],$argv[1]);
	
	if (count($error)==0) {
		echo "TECHIO> success true\n";
	}
	else {
		echo "TECHIO> success false\n";
		display_techio($error);
	}
	
?>