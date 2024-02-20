<?php
 $a = $_POST['num1'];
 
 $d = $_POST['number1'];
 $b = $_POST['number2'];
 $op= $_POST['operacao'];

 if( !empty($op) ) {
    if($op == '+')
       $c = $d + $b;
    else if($op == '-')
       $c = $d - $b;
    else if($op == '*')
       $c = $d*$b;
    else
       $c = $d/$b;

    echo "O resultado da opera&ccedil;&atilde;o &eacute;: $c";
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
<h2><?php echo "Infinita, elfos não morrem"; ?><h2>
</body>
</html>