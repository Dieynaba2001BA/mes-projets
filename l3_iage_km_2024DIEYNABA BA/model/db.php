<?php

// $serveur="localhost";
// $port = "5432";
// $user="postgres";
// $pwd="passer@2024";
// $dbname="gestion";

// $connexion = pg_connect("host=$serveur port=$port dbname=$dbname user=$user password=$pwd");

// if(!$connexion){
//     echo "Erreur de connexion";
// }else{
//    echo "succes";
// }

$serveur = "localhost";
$user = "root";
$pwd = "";  
$dbname = "gestion";


$connexion = new mysqli($serveur, $user, $pwd, $dbname);


if ($connexion->connect_error) {
    die("Erreur de connexion: " . $connexion->connect_error);
} else {
    echo "";
}
?>

