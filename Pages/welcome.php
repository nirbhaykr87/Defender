<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<h3>Factorial is  </h3>

<?php
$n = "My name is Nirbhay Kumar";
$res = preg_replace("/[A-Z]/","H", $n);
// echo $res;

foreach ($res as $word) {
    echo $word . " ";
}
?>

</body>
</html>
