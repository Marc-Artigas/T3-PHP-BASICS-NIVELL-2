<?php

// wxyz
// a
// ab

// Sortida
// zxyw
// a
// ba

    function changeChar($string){

    $numChar = strlen($string);//número de caracters
        if($numChar>1){

        $lastChar = substr($string,-1); //z

        $firstChar= substr($string,0,1); //w

        $string2 = substr($string,1,-1); //xy

        echo $lastChar.$string2.$firstChar;
    } else {
        echo $string;
    }
    
}

echo changeChar("wxyz")."<br>";
echo changeChar("a")."<br>";
echo changeChar("ab")."<br>";


    

    

   







?>