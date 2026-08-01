<?php

// CHECK PASSWORD
// 1. la password deve essere almeno 8 caratteri
// 2. deve contenere almeno un carattere maiuscolo
// 3. deve contenere almeno un numero
// 4. deve contenere almeno un carattere speciale

// Check lunghezza caratteri
function checkL($passw){

    if( strlen($passw) >= 8){
        return true;
    }

    echo "La password deve contenere almeno 8 caratteri \n";
    return false;
}

// Check carattere maiscolo
function checkMaiusc($passw){

    for($i = 0; $i < strlen($passw); $i++){

        if( ctype_upper($passw[$i]) ){
            return true;
        }
    }
    
    echo "La password deve contenere almeno un carattere maiuscolo \n";
    return false;
}

// Check numero come carattere
function checkNum($passw){

    for($i = 0; $i < strlen($passw); $i++){

        if( is_numeric($passw[$i]) ){
            return true;
        }
    }

    echo "La password deve contenere almeno un numero \n";
    return false;
}

// Check carattere speciale
function checkChars($passw){
    $specialChars = ['!', '@', '#', '$', '%', '^', '&', '*', '(', ')', ',', '.', '?', '"', ':', '{', '}', '|', '<', '>'];

    for($i = 0; $i < strlen($passw); $i++){

        if( in_array($passw[$i], $specialChars) ){
            return true;
        }
    }

    echo "La password deve contenere almeno un carattere speciale \n";
    return false;
}


//check Password
function checkPassw($var){

    $firstCheck = checkL($var); 
    $secondCheck = checkMaiusc($var);
    $thirdCheck = checkNum($var);
    $fourthCheck = checkChars($var);

    if( $firstCheck && $secondCheck && $thirdCheck && $fourthCheck ){
        echo "La password è valida \n";
        return true;
    }
    
    return $firstCheck && $secondCheck && $thirdCheck && $fourthCheck;
}