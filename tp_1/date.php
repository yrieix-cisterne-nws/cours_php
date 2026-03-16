<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Date film</title>
</head>
<body>
    <?php
    	$date_actuel = new DateTime();
		$date_sortie = new DateTime("2026-03-31");
		$interval = $date_actuel->diff($date_sortie);
		if ($interval->days < 31) {
			echo "<h1> C'est bientôt </h1>";
		} else {
			echo "<h1> Il faudra patienter </h1>"; 
		}
    ?>
</body>
</html>