<form method="get">
			Number : <input type="number" name="num"><br/><br/>
			<input type="submit" name="submit"><br/><br/>
			<?php
				if(isset($_GET['submit'])){
					$num = $_GET['num'];
					echo "Number of starts in the pyramid are $num<br/><br/>";
					for($i=1;$i<=$num;$i++){
					  for($j=1;$j<=$i;$j++){
						echo " * ";
					  }
					  echo '</br>';
					}
				}
			?>
	</form>

	<!DOCTYPE html>
	<html>
	<head>
		<meta charset="utf-8">
		<title>Pryamid</title>
	</head>
	<body>
	
	</body>
	</html>