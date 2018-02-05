
```
<?php
$alf = range('A','Z'); 
$a = 3;
$b = 4;
$txt = 'HOM';
 function kod_Affine($txt){
	global $alf, $a, $b;
	$result = '';
	$arr = str_split($txt); 
		foreach ($arr as $key => $val){ 
		$key = array_search ($val, $alf);
                $e = $alf[($a*$key+$b)%26];
	        $result .= $e; 
	}
	return $result;
	}
echo kod_Affine($txt);
echo  "<br>";

$txt1 = 'ZUO';
function dekod_Affine($txt1){
	global $alf, $a, $b;
	$result1 = '';
	$arr1 = str_split($txt1); 
		foreach ($arr1 as $key1 => $val1){ 
		$key1 = array_search ($val1, $alf);
                $x=$a*$a%26;
                $d = $alf[($x*($key1-$b))%26];
                $result1 .= $d; 
	}
	return $result1;
}
echo dekod_Affine($txt1);
```
