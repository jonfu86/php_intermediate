<!doctype html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>PHP Intermediate 1</title>
	</head>
	<body>
		<?php

		$x = range(1,50);
		shuffle($x);
		$x = array_Slice($x, 0, 10);

		$y = array_rand(array_flip(range(1,100)),25);
		shuffle($y);



		
		function draw_stars($simple_array)
		{

			foreach($simple_array as $stars){
				for($i=0; $i<$stars; $i++){
					echo '*';
				}
				 echo '<br>';
			}
		}
		draw_stars($y);





		?>
	</body>
</html>