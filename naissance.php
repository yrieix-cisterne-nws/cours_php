<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Naissance</title>
</head>
<body>
    <?php
    	$age = 21;
		$prenom = "Yrieix";
		$taille = 1.15;
		$naissance = 2026 - $age;
		$autreage = 22;
		echo "<span>Salut</span>";
		echo $age;
		echo "Salut, j'ai " . $age . " ans";
		echo "Salut j'ai encore $age ans";
		echo "Salut je m'appelle $prenom, j'ai $age ans, Je suis née en $naissance , et je fait " . $taille . "mètres";
		var_dump($age == $autreage);
		if ($age > $autreage) {
			echo "<h1> L'age est bien supérieur</h1>";
        } else {
		    echo "<h1> L'age n'est pas supérieur </h1>";
        }
        ?>
</body>
</html>