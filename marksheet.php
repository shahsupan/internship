<form method=post>
			<center>
			<table>
				<tr> <td id="a">Social seince 1:-</td> <td id="b"><input type="number" name="num1"></td> </tr>
				<tr> <td id="a">English 2:-</td> <td id="b"><input type="number" name="num2"></td> </tr>
				<tr> <td id="a">Maths3:-</td> <td id="b"><input type="number" name="num3"></td> </tr>
				<tr> <td colspan="2" id="c"><input type="submit" name="submit" value="Submit" id="submit"></td> </tr>
			</table>
			</center>
		</form>
		<?php
			if(isset($_POST['submit'])){
				$a = $_POST['num1'];
				$b = $_POST['num2'];
				$c = $_POST['num3'];
				if($a>$b and $a>$c){
					echo "Number 1 is Maximum : $a";
				}
				elseif ($b>$a and $b>$c) {
					echo "Number 2 is Maximum : $b";
				}
				elseif ($c>$a and $c>$b) {
					echo "Number 3 is Maximum : $c";
				}
				else{
					echo "All values are equal";
				}
			}
		?>

		<!DOCTYPE html>
		<html>
		<head>
			<meta charset="utf-8">
			<title>Marksheet</title>
		</head>
		<body>
		
		</body>
		</html>