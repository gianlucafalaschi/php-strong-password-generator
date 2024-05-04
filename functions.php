<?php

// funzione che crea una password random
// $elementsKeys => array che contiene la chiave degli elementi di una array 
// $arrayOfCharacters => array che contiene tutti i caratteri
// return: $charactersList un array di stringhe che rappresentano i caratteri delle password
function generatePasswordElement($elementsKeys, $arrayOfCharacters) {
    $charactersList = [];
    foreach($elementsKeys as $elementsKey) {
        /* salva nella variabile tutti gli elementi random dopo averli trasformati in strighe */
         $charactersList[] = strval($arrayOfCharacters[$elementsKey]);
    
     }
     return $charactersList;
}

?>