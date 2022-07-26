<?php
session_start();

//recupere des donné

$nom = $_POST['nom'];
$description = $_POST['description'];
$createur = $_SESSION['id'];
$date_creation = date("Y-m-d"); 

//la chaine de connexion
include "../../inc/function.php";
$conn = connect();

// creation de la requette execution

$requette ="INSERT INTO categorie(nom,description,createur,date_creation) VALUES ('$nom','$description','$createur','$date_creation')";
// execution 
$resultat = $conn->query($requette);
if($resultat){
   header('location:liste.php?ajout=ok');

}


?>