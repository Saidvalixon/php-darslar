<?php 
    $login = $_GET['login'];
    $name = $_GET['name'];
    echo $name."<br>";
    // echo $number;

    $name  = array(
        'saidvalikhon' => "said2004", 
        // 'barat' => "barat2332", 
);

    foreach ($name as $key => $value) {
        if ($_GET['login'] == $key && $_GET['password'] == $value) {
           echo $_GET["login"]." ro'yhatdan o'tdngiz";
        }else {
            echo " siz notogri login yoki password kiritdingiz";
        }
    }

















//     $name  = array(
//         'ismail' => "ismail32223", 
//         'barat' => "barat8121", 
// );
// $islogin = false;
//     foreach ($name as $key => $value) {
//         if ($_GET['login'] == $key && $_GET['password'] == $value) {
//           $islogin = true;
//         }
//     }if ($islogin) {
//         echo $_GET['login']." nima gap";
//     }else {
//             echo "siz notogri login yoki password kiritdingiz";
//         }   
 ?>


















<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="">
   <p> <input type="text" name="login"></p>
   <p> <input type="password" name="password"></p>
    <input type="submit">
    </form>
</body>
</html>