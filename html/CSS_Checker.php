<?php
	include("parser_css.php");
		
	function CSS_Check($pattern, $check) {
		$parser = new CssParser();
		$parser->load_files($check);
		$parser->parse();

		$checker = new CssParser();
		$checker->load_files($pattern);
		$checker->parse();

		$css=$parser->parsed['main'];
		$css_check=$checker->parsed['main'];
		
		// var_dump($css_check);
		
		$error_array=array();

		foreach ($css_check as $selector => $properties) {
			$keys = array_keys($css);
			$result_sel = preg_grep("#".$selector."#", $keys);
			
			if (count($result_sel)==0) $error_array[] = remove_regex_char($selector) ." : not found";
			
			foreach ($result_sel as $current_selector) {
				$def_sel = $css[$current_selector];
				if (!empty($properties)) {
					foreach ($properties as $prop => $value) {
						$keys = array_keys($def_sel);
						$result_prop = preg_grep("#".$prop."#", $keys);
						if (count($result_prop)==0) $error_array[] = remove_regex_char($prop) ." in " . remove_regex_char($selector) . " : not found";
						else {
							if (!preg_grep("#".$value."#",array_extract($def_sel,$result_prop))) $error_array[] = remove_regex_char($value)." for " . remove_regex_char($prop) ." in " . remove_regex_char($selector) . " : not found";
						}
					}	
				}
			}
		}
		return $error_array;
	}
	
	
	
	function display_techio($data) {
		foreach ($data as $ph)
			echo "TECHIO> message --channel 'Error' '" . $ph . "'\n";
	}
	
	
	function remove_regex_char($string) {
		$search=array();
		$replace=array();

		$search[]="#\.#";
		$replace[]="";
		$search[]="#\\$#";
		$replace[]="";
		$search[]="#\^#";
		$replace[]="";
		$search[]="#\*#";
		$replace[]="";
		$search[]="#\\\(.)#";
		$replace[]="$1";

		return trim(preg_replace($search,$replace,$string));
	}
	
	function array_extract($array, $keys) {
		foreach($keys as $key)
			$retval[$key] = $array[$key];
		return $retval;
	}
	
		
	
?>