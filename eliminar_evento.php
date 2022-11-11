<?php  
  
$id = $_POST['id'];  
  
try {  
    require "bdd.php";  
} catch(Exception $e) {  
    exit('No se pudo conectar a la BD.');  
}  
  
$sql = "DELETE from eventos WHERE id=".$id;  
$q = $bdd->prepare($sql);  
$q->execute();  
  
?>  