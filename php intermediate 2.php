<!doctype html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>PHP Intermediate 2</title>
	</head>
	<body>
		<table>
			<?php
			
			$y_axis = 0;
			for ($y_axis=0; $y_axis < 10 ; $y_axis++){ 
				if($y_axis == 0){
					echo "<tr><td></td>";
					for ($i=1; $i < 10 ; $i++) { 
					echo "<td>$i</td>";
					}
					echo "</tr>";	
				}
				else{
					echo '<tr>';
					for ($i = 1; $i  < 10 ; $i ++) { 
						if($i==1){
						echo "<td>".$y_axis."</td>";
						echo "<td>".$i *$y_axis."</td>";
						}	
						else{
						echo "<td>".$i *$y_axis."</td>";
						}
					}
					echo '</tr>';
				}
			}
			

		?>
		</table>

	</body>
</html>