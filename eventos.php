<?php  
  
 $json = array();  
  
 $requete = "SELECT * FROM eventos ORDER BY id";  
  
 try {  
    require "bdd.php";  
 } catch(Exception $e) {  
    exit('No se pudo conectar a la BD.');  
 }  
  
 $resultat = $bdd->query($requete) or die(print_r($bdd->errorInfo()));  
  
 echo json_encode($resultat->fetchAll(PDO::FETCH_ASSOC));  
  
?>  