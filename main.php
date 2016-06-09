<html>
<head>
	<title>Hello Friends, Goodbye World</title>
</head>
<body>
	<?php
		$num = rand();
		$numLen = strlen($num);
		$array = str_split($num);
		
		for($i = 0; $i < $numLen; $i++){
			switch ($array[$i]){
				case 0:
					$array[$i] = "A";
					break;
				case 1:
					$array[$i] = "B";
					break;
				case 2:
					$array[$i] = "C";
					break;
				case 3:
					$array[$i] = "D";
					break;
				case 4:
					$array[$i] = "E";
					break;
				case 5:
					$array[$i] = "F";
					break;
				case 6:
					$array[$i] = "G";
					break;
				case 7:
					$array[$i] = "H";
					break;
				case 8:
					$array[$i] = "I";
					break;
				case 9:
					$array[$i] = "J";
					break;
			}
			
			echo "The letter for digit " . $i . " is " . $array[$i];
		}
		
		echo ("<br><br>TODAY'S RANDOM NUMBER IS: " . $num);
	?>
</body>
</html>
