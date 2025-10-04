<?php
  //PREENCHER ARRAY SEM NÚMEROS REPETIDOS
  $arr = [];

  for ($i = 0; $i < 7; $i++) { 
    $arr[$i] = rand(1,7);
    while(inArrayCustom($i,$arr[$i], $arr)){
         $arr[$i] = rand(1,7);
    }
  }

  print_r($arr);
  function inArrayCustom($indice,$valor,$arr){
    for($i = 0; $i < count($arr); $i++){
        if($arr[$i] == $valor && $i != $indice){
          echo 'repetiu!<br>';
          return true;
        }
    }
      return false;
  }

?>