<?php
include "./Connection.php";
$in=new connection(); 

if(isset($_POST['sub'])){
    $name=mysqli_real_escape_string($in->mysqli,$_POST['name']);
    $fname=mysqli_real_escape_string($in->mysqli,$_POST['fname']);

    $d=$in->insert("oop",array(
        "name"=>$name,
        "fnameS"=>$fname
    ));

    if($d=="Inserted"){
        echo "data has been inserted";
    }else{
        echo "data has not  been inserted";
    }
}




?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
    <input type="text" name="name" id="">
    <input type="text" name="fname" id="">
    <input type="file" name="sub" id="">

    </form>

</body>
</html>