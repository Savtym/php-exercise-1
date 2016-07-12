<?php 
	function drawLine($max) {
		echo "+";
		$max += 8;
		for ($i = 0; $i < $max; ++$i)
			echo "-";
		echo "+", PHP_EOL;
	}

	function drawHeader($mask, $max) {
		drawLine($max);
		printf($mask, '#', 'Param');
		drawLine($max);
	}

	function drawTable($arg) {
		$max = 7;
		for ($i=0; $i < count($arg); $i++) {
			if (strlen($arg[$i]) > $max)
				$max = strlen($arg[$i]);
		}
		$mask = "| %3.3s | %-$max.80s |\n";
		drawHeader($mask, $max);
		for ($i = 0; $i < count($arg); $i++) { 
			printf("| %3.3s | %-$max.80s |\n",$i+1,$arg[$i]);
		}
		drawLine($max);
	}

	drawTable($argv);
?>