<form>
			Number: <input type="text" name="num"><br/><br/>
			<input type="submit" name="submit"><br/><br/>
			<?php 
				if (isset($_GET['submit'])) {
					$num = $_GET['num'];
					$fact = 1;
					for ($x=$num; $x >0 ; $x--) { 
						$fact = $fact*$x;
					}
					echo "the factorial value of $num is $fact";
				}
			?>
		</form>

		<!DOCTYPE html>
		<html>
		<head>
			<meta charset="utf-8">
			<title>Factorial</title>
		</head>
		<body>
		
		</body>
		</html>