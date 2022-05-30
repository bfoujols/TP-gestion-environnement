<?php

require "../vendor/autoload.php";

$dsn = 'mysql:dbname=gestion_env;host=127.0.0.1:9001';
$user = 'root';
$password = 'yoo';

// Etape 1
$dbpdo = new PDO($dsn, $user, $password, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
// Etape 2 Validation requete SQL
// PDO ($dbpdo) -> PDOStatement ($pdoState)
$pdoState = $dbpdo->query("SELECT * FROM parc");
// Etape 3 PDOStatement ($pdoState) -> Renvoi les lignes de ma requete
$result = $pdoState->fetchAll();
$listParc = [];
foreach ($result as $item) {
    $listParc[] = new \TPGE\Parc(
        $item["id"],
        $item["nom"],
        $item["region"],
        $item["hectare"]);
}

echo "<pre>";
var_dump($listParc);
echo "</pre> </br>-------------------------------</br>";

// 6 plantes
$plante1 = new \TPGE\Aquatique("Algue", "vert", true, "Salé", true);
$plante2 = new \TPGE\Aquatique("Nenuphar", "Vert", false, "Douce", false);
$plante3 = new \TPGE\Terre("Tulipe", "Rouge", false, "Terreau", "SUD");
$plante4 = new \TPGE\Terre("Cannabis", "vert", true, "Argile", "SUD");
$plante5 = new \TPGE\Terre("Tournesol", "Jaune", true, "Terreau", "SUD");
$plante6 = new \TPGE\Aquatique("Riz", "Blanc", true, "Douce", false);

$listParc[0]->setTabPlante($plante1);
$listParc[0]->setTabPlante($plante4);
$listParc[2]->setTabPlante($plante5);
$listParc[2]->setTabPlante($plante2);
$listParc[2]->setTabPlante($plante3);
$listParc[3]->setTabPlante($plante5);

// On les affice via la methode __toString()
echo $listParc[0] . "<br>";
$listParc[0]->getListPlante();
echo "<br><br>";
echo $listParc[2] . "<br>";
$listParc[2]->getListPlante();
echo "<br><br>";
echo $listParc[3] . "<br>";
$listParc[3]->getListPlante();
