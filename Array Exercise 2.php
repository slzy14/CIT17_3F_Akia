
	 <?php

	 $cities = array("Tokyo", "Mexico City", "New York City", "Mumbai, Seoul", "Shanghai", "Lagos", "Buenos Aires", "Cairo", "London");

	 ?>

	 <!DOCTYPE html>
	 <html lang="en">
	 <head>
	 	<meta charset="UTF-8">
	 	<title>Large Cities</title>
	 </head>
	 <body>

	 		<h3>Large Cities</h3>

<div>
	 	<!-- FOR LOOPING CITIES -->
	 	<?php
	 	for ($i = 0; $i < COUNT($cities); $i++) {
	 		echo $cities{$i} . ", ";
	 	}
	 	?>
	 	



	 	<!-- UNORDERED LIST -->
	 	<ul>
	 		<?php
	 		for ($i = 0; $i < COUNT($cities); $i++) {
	 			echo "<li>{$cities{$i}}</li>";
	 		}
	 		?>

	 	</ul>
	 


	 	<?php array_push($cities, "Los Angeles", "Calcutta", "Osaka", "Beijing"); ?>

	 	<?php sort($cities); ?>
	 	<?php var_dump($cities) ?>

	 	 	<!-- LIST (sorted) -->
	 	<ul>
	 		<?php
	 		for ($i = 0; $i < COUNT($cities); $i++) {
	 			echo "<li>{$cities{$i}}</li>";
	 		}
	 		?>
	 	</ul>

</div>


	 </body>
	 </html>