<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Film</title>
</head>
<body>
    <?php
    	$titre = "Iron Lung";
		$budget = 3.6;
		$recettes = 49.9;

		$benef = $recettes-$budget;
		$retour_investissement = (($recettes - $budget)/$budget)*100;

		echo "<div class='p-2'>";
		echo "<div class='flex flex-col'>";
		echo "<h1> $titre </h1>";
		echo "<p>Benefices : $benef m</p>";
		echo "<p>Investissement : $retour_investissement %</p>";
		echo "</div>";

		
		if ($retour_investissement > 200){
			echo "<h2 class='bg-green-400'> Appréciation : Blockbuster </h2>";
		} elseif ($retour_investissement >= 100 && $retour_investissement <= 200){
			echo "<h2 class='bg-blue-400'> Appréciation : Rentable </h2>";
		} elseif ($retour_investissement >= 0 && $retour_investissement <= 100) {
			echo "<h2 class='bg-orange-400'> Appréciation : Modeste </h2>";
		} else {
			echo "<h2 class='bg-red-500'> Appréciation : Flop </h2>";
		}
		echo "</div>";
    ?>
</body>
</html>