<?php  
  
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
$sql = "INSERT INTO eventos (title, color, start, end, backgroundColor) VALUES (:title, :color, :start, :end, :backgroundColor )";  
$q = $bdd->prepare($sql);  
$q->execute(array(':title'=>$title, ':color'=>$color, ':start'=>$start, ':end'=>$end, ':backgroundColor'=>$backgroundColor));  
  
?>  