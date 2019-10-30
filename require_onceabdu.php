<?php

require_once("evaluationabdu.php");
/*
echo "\n";
echo "Exercice 1 (True ou False):\n";

$lettres  ="a";

isVoyelle($lettres);

echo "\n";

$lettres  ="b";

isVoyelle($lettres);

echo "\n";

$lettres  ="c";

isVoyelle($lettres);

echo "\n";

$lettres  ="A";

isVoyelle($lettres);

echo "\n";

$lettres  ="E";

isVoyelle($lettres);

echo "\n";

$lettres  ="true";

isVoyelle($lettres);

echo "\n";

$lettres  ="false";

isVoyelle($lettres);

echo "\n";

$lettres  ="0";

isVoyelle($lettres);

echo "\n";

$lettres  ="1";

isVoyelle($lettres);

echo "\n";

$lettres  ="2";

isVoyelle($lettres);

echo "\n";

$lettres  ="bonjour";

isVoyelle($lettres);

echo "\n";
*/

echo "Exercice 2 (supprimer voyelle):\n";
echo "\n";
$chaine  ="'bonjour'";


supprimerVoyelles($chaine);

echo "\n";

$chaine  ='hello world';

supprimerVoyelles($chaine);

echo "\n";

$chaine  ='eau';

supprimerVoyelles($$chaine);

echo "\n";

$chaine  ="0";

supprimerVoyelles($chaine);

echo "\n";

$chaine  ="1";

supprimerVoyelles($chaine);

echo "\n";

$chaine  ="2";

supprimerVoyelles($chaine);

echo "\n";

$chaine  ="42";

supprimerVoyelles($chaine);

echo "\n";

$chaine  ="true";

supprimerVoyelles($chaine);

echo "\n";

$chaine  ="false";


echo "\n";

?>