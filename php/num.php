<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    //1  $num1 = 40;
    //  $num2 = 40;
    //  if ($num1 > $num2)
    //      echo $num1;
    //  elseif ($num1 < $num2)
    //      echo $num2;
    //  else
    //      echo "num1 и num2 равны";
    //2 $num1 = 200;
    // $num2 = 50;
    // if ($num1 - $num2 == 100 || $num2 - $num1 == 100)
    //     echo "да";
    // else
    //     echo "нет";
    //3 $num1 = 100;
    // $num2 = 40;
    // if ($num1 - $num2 <= 20 || $num2 - $num1 <= 20) 
    //     echo "да";
    // else
    //     echo "нет";
    //  
    //4 $mes = 12;
    // switch ($mes) {
    //     case 1:
    //     case 2:
    //     case 12:
    //         echo "зима";
    //         break;
    //     case 3:
    //     case 4:
    //     case 5:
    //         echo "весна";
    //         break;
    //     case 6:
    //     case 7:
    //     case 8:
    //         echo "лето";
    //         break;
    //     case 9:
    //     case 10:
    //     case 11:
    //         echo "осень";
    //         break;
    //         default : echo "Oшибка"; break; 
    // }
    $lang = 'en';
    switch ($lang) {
        case 'ru':
            echo 'Привет, мир!';
            break;
        case 'en':
            echo 'Hello, world!';
            break;
        case 'de':
            echo 'Hallo, Welt!';
            break;
        default:
            echo 'Такого языка нет';
            break;
    }
    ?>

</body>
</html>