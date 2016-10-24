<?php

for ($a=0 ; $a<10 ;$a++){
    $i=$a*$a*$a;
    for ($b=0 ; $b<10 ;$b++){
        $j=$b*$b*$b;
        for ($c=0 ; $c<10 ;$c++){
            $k=$c*$c*$c;
            
            $x=$i + $j + $k ;
            $y=$a . $b . $c ;
            if($x == $y && $x>99 && $x <1000){
                echo $x ,"<br>";
            }
        }
    }
}



?>