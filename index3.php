<?php

$age = 25;
$genre = 'Femme';

if ($age >= 18 && $genre == Femme){
echo "Vous êtes une femme et vous êtes majeur";
 }
elseif ( $age < 18 && $genre == Femme) {
	echo "Vous êtes une femme et vous êtes mineur";
}
elseif ($age >= 18 && $genre == Homme) {

echo "Vous êtes un homme et vous êtes majeur";
}	
else {
	echo "Vous êtes un homme et vous êtes mineur";
}

?>