<?php
    class Weather {

        private static $tempConditions= ['cold','mild','warm'];

        public static function celciusToFarenheit($c){
            return $c * 9 / 5 +32; 
        }
        public static function determinTempCondition($f){
            if ($f < 40){
                return self::$tempConditions[0]; // cold
            }else if($f <70){
                return self::$tempConditions[1]; // mild
            }else {
                return self::$tempConditions[2]; // warm
            }
        }        
    }

    $weatherInstance = new Weather();

    echo ($weatherInstance->determinTempCondition(20)." 1 <br>");
    print_r($weatherInstance->determinTempCondition(47)." 2 <br>");
    echo Weather::$determinTempCondition(80)." 4 <br>";

    print_r(Weather::$tempConditions[1]." 3 <br>");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FUNCIONES</title>
</head>
<body>
    
</body>
</html>