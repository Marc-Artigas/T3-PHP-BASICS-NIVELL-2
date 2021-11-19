<?php

function myFunction($a,$b){
    if ($a==$b){
        return ($a + $b)*2;
    } else {
        return $a + $b;
    }
    
}

echo myFunction(1,2)."<br>";
echo myFunction(3,2)."<br>";
echo myFunction(2,2)."<br>";


?>