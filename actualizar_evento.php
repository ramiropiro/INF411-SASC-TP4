<?php

$id = $_POST['id'];
$title = $_POST['title'];
$start = $_POST['start'];
$end = $_POST['end'];
$color = $_POST['color'];

try {  
    require "bdd.php";  
} catch(Exception $e) {  
    exit('No se pudo conectar a la BD.');  
}  
$backgroundColor = '#4267B2';
$sql = "UPDATE eventos SET title=?, start=?, end=?, color=?, backgroundColor=? WHERE id=?";  
$q = $bdd->prepare($sql);  
$q->execute(array($title,$start,$end,$color,$backgroundColor,$id));
  
?>  