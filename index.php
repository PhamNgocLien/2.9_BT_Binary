<?php

function convertToBinary($num){
    $arr = str_split($num);
    $arrBinary = array();
    for ($i = 0; $i < count($arr);$i++){
        $num = $arr[$i] % 2;
        array_push($arrBinary,$num);
    }
    $binary = implode('',$arrBinary);
    return $binary;
}

$number = 123321;
echo '<pre>';
print_r(convertToBinary($number));
