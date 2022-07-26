<?php
$idcategorie = $_GET['idc'];

include "../../inc/function.php";
$conn = connect();

$requette = "DELETE FROM categorie Where id=$idcategorie";
$resultat = $conn->query($requette);

if ($resultat){

    header('location:liste.php?delete=ok');
}




?>