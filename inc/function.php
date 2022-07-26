<?php

function connect(){
  $servername="localhost";
  $dbuser="root" ;
  $dbpassword="";
  $dbname="ecommerce";
  
  try {
      $conn = new PDO("mysql:host=$servername;dbname=$dbname", $dbuser, $dbpassword);
      // set the PDO error mode to exception
      $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      //echo "Connected successfully";
    } catch(PDOException $e) {
      echo "Connection failed: " . $e->getMessage();
    }

  return $conn;
}

function getAllCategorie(){
$conn =connect();
    
    // ex requette
    $requette="SELECT * from categorie";
    $rest= $conn->query($requette);
    $categorie= $rest->fetchAll();
    
    return $categorie;
}

function getAllProduct(){

  $conn =connect();
  // ex requette
  $requette="SELECT * from produit";
  $rest= $conn->query($requette);
  $produit= $rest->fetchAll();
  
  return $produit;


}

function searchproduit($keywords){

  $conn =connect();
  // ex requette
  $requette1 = "SELECT * FROM produit WHERE nom LIKE'%$keywords%'";
  $resultat1 = $conn->query($requette1);
  $produit = $resultat1->fetchAll();

  return $produit;
}

function getproduitById($id){
$conn = connect();

$requette = "SELECT * FROM produit WHERE id=$id";
$resultat = $conn->query($requette);
  $produit = $resultat->fetch();
return $produit;
}

function ADDvisiteur($data){
  $conn =connect();

   $mphash = md5($data['password']); //cryptage de mot de passe via md5
  $requette = "INSERT INTO visiteur(nom,prenom,email,mp,telephone) VALUES('".$data['nom']."','".$data['prenom']."','".$data['email']."','".$mphash."','".$data['tel']."')";
$resultat = $conn->query($requette);
      if($resultat){
      return true;
      }else {
      return false;

      }
}
function connectvisiteur($data){
  $conn =connect();
 $email= $data['email'];
 $mp= $data['password']; 

$requette="SELECT * FROM visiteur WHERE email='$email' AND mp='$mp' ";
$resultat= $conn->query($requette);
$user= $resultat->fetch();
return $user;
}


function connectadmin($data){

  $conn =connect();
 $email= $data['email'];
 $mp= md5($data['password']); 

$requette="SELECT * FROM administrateur WHERE email='$email' AND mp='$mp' ";
$resultat= $conn->query($requette);
$user= $resultat->fetch();
return $user;




}
?>