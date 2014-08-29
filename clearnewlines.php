<?php
/*
	output modifier to clear newlines from string
	usage [[+content:clearnewlines]]
*/

$output = trim(preg_replace('/\s+/', ' ', $input));

return $output;
?>