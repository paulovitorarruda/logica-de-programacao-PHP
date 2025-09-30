<?php
//Código PHP!
//HelloWorld!
$HelloWorld = ['H','-','e','-','l','-','l','-','o','-','W','-','o','-','r','-','l','-','d',];
$string = '';
for($i = 0; $i < count($HelloWorld); $i++){
	if($HelloWorld[$i] == '-'){
		continue;
	}    
	$string.=$HelloWorld[$i];
}
echo $string;
?>