<?php
  //2 ARRAYS E VAMOS VERIFICAR OS NÚMEROS EM COMUM.

  $array_0 = array(0,1,2,3,4,5,6,7,'Paulo','Vitor');
  $array_1 = array(1,3,5,7,9,11,13,15,'Paulo','Vitor');


  //RODAR DOIS LOOPING E VERIFICAR SE EXISTE EM UM E NO OUTRO.
  $em_comum = [];
  for ($i = 0; $i < count($array_0); $i++){ 
    for($n = 0; $n < count($array_1); $n++){
      if($array_0[$i] === $array_1[$n]){
        //NÚMERO EM COMUM!
        $em_comum[] = $array_0[$i];
      }
    }
  }
  foreach ($em_comum as $key => $value) {
    echo $value;
    echo '<br>';
  }

?>