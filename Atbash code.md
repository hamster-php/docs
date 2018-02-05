<a href="https://ru.wikipedia.org/wiki/%D0%90%D1%82%D0%B1%D0%B0%D1%88"><h1>Шифр Атбаш</h1></a>
<?php

$alf = range('A','Z');
$word = "MESSAGE";
$txt = str_split($word);
function Atb($txt){
	global $alf;
 foreach ($txt as $key => $val){
  $key = array_search($val, $alf);
     //формула
   $y .= $alf[(26-($key+1))%count($alf)]; 
  }
  echo "ЗАШИФРОВАННЫЙ ТЕКСТ: $y <br/>"; 
}
echo Atb($txt);

$txt1 = 'A';
$arr1 = str_split ($txt1);
function antiAtb($arr1){
		global $alf;
  foreach ($arr1 as $key => $val){
 $key = array_search($val, $alf);
   $x .= $alf[(26-($key+1))%26]; 
   }
  echo "РАСШИФРОВАННЫЙ ТЕКСТ: $x <br/>"; 
}
 echo antiAtb($arr1);
