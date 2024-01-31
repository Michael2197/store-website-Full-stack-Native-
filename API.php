
<!-- API with PDO way -->

<?php 

$cont= new PDO('mysql:host=127.0.0.1; dbname=mm','root','');

$hat = $cont->query("SELECT * FROM `users`");

$do=$hat->fetchAll(PDO::FETCH_ASSOC);

echo(json_encode($do));

header("content-type: application/json");

?>

<!-- normal API with mysqli -->

<?php
// $cont= new mysqli('localhost','root','','mm');

// $hat ="SELECT * FROM `users`";

// $rel=mysqli_query($cont,$hat);

// $do=mysqli_fetch_all($rel,MYSQLI_ASSOC);

// echo(json_encode($do));

// header("content-type: application/json");

?>