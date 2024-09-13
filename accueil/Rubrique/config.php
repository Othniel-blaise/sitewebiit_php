<?php
$sname ="localhost";
$unmae="root";
$password="";
$db_name= "compteteams";
// Connexion à la base de données

$conn =mysqli_connect($sname,$unmae,$password,$db_name);
// Vérifier la connexion
if (!$conn) {
    die("La connexion à la base de données a échoué : " . mysqli_connect_error());
} else {
    echo "Connexion réussie à la base de données";
}
?>