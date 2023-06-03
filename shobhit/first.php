<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $age = 16;
    %output = ($age >= 18)?"Eligible":"";
    echo $output;

    $num = 10;
    $num1 = 20;
    $num2 = 16;

    if($num > $num1 or $num1 > $num2){
        echo "true";
    }
    else{
        echo "False";
    }
    ?>
</body>
</html>