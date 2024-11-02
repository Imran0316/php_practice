<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<style>
    h1{
        color: green;
        font-size: 48px;
        text-transform: uppercase;
    }
    p{
        font-size: 22px;
    }
  
    
</style>
<body>
    
</body>
</html>
<?php
// echo "<pre>";
// print_r($_GET);
// echo "</pre>";

// foreach ($_GET as $key => $value) {
//     echo $key .  ": " .$value . "<br>";
// }
echo "<span>";

if($_GET["name"]==="imran" && $_GET["email"]==="ik775239@gmail.com" && $_GET["password"]==="987654321" && $_GET["phone"]==="03162811932" ){
    echo "<h1>";
   echo "congratulation!" . "<br>" ;
    echo "</h1>";
    echo "<h3>";
   echo "MR:" . $_GET["name"] . " you are login successfully with the following details:" . "<br>";
   echo "</h3>";
   
   foreach ($_GET as $key => $value) {
    echo "<p>";
      echo $key . ": " . $value ."<br>";
    echo  "</p>";
   }
   
//    echo $_GET["name"] . "<br>";
//    echo $_GET["email"] . "<br>";
//    echo $_GET["name"] . "<br>";
//    echo $_GET["name"] . "<br>";
 }else{
    echo "<p style='color: red;'>";
    echo "please fill form correctly";
    echo "</p>";
 }
 echo "</span>";

 

?>