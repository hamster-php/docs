<?php

$alf = range('A','Z');
$k = 3;
$word = "PETHOM";
$txt = str_split($word);
function Caesar($txt){
	global $alf, $k;
  foreach ($txt as $key => $val){
 $key = array_search($val, $alf);
    $y .= $alf[($key + $k)%26]; 
  }
  echo "ЗАШИФРОВАННЫЙ ТЕКСТ: $y <br/>"; 
}
echo Caesar($txt);
$txt1 = 'SHWKRP';
$arr1 = str_split ($txt1);
function antiCaesar($arr1){
		global $alf, $k;
  foreach ($arr1 as $key => $val){
 $key = array_search($val, $alf);
   $x .= $alf[($key-$k + 26)%26]; 
   }
  echo "РАСШИФРОВАННЫЙ ТЕКСТ: $x <br/>"; 
}
 echo antiCaesar($arr1);...
