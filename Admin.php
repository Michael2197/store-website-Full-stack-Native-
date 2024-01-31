<?php

session_start();
ob_start();


 include('db.php')



?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="static/css/Admin.css?v=2">

    <title>Document</title>
</head>
<body>
<div class= "container">
        ADD PRODUCTS

    <form  class="form" method ="POST" enctype="multipart/form-data"  >
    <?php

if(isset($_POST['btn5'])){

$tit = htmlspecialchars($_POST['tit']);
$prc = htmlspecialchars($_POST['prc']);

$sora =$_FILES['sora'];
$path = 'imgs/' . $sora['name'];
$tmp = $sora['tmp_name'];




$data = "INSERT INTO `products`(`price`,`title`, `image`) VALUES ('$prc','$tit','$path')";

 $done = mysqli_query($connect,$data);

    move_uploaded_file($tmp, $path);

}




 ?>
      <input class="formC" type="file" name="sora"><br><br><br>
      <input class="formC" type="title" name="tit" placeholder="title ....."><br><br><br>
      <input class="formC" type="price" name="prc" placeholder="price ....."><br>
      <input class="formb" type="submit" name="btn5">


    </form>


</div>
   
</body>
</html>