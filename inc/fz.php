<?php 
	function errfun($error_level, $error_message, $error_file, $error_line, $error_context) {
		echo $error_level;
	}
	
	set_error_handler("errfun");
?>