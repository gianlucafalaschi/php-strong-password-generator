<!-- Descrizione
Dobbiamo creare una pagina che permetta ai nostri utenti di utilizzare il nostro generatore di password (abbastanza) sicure.
L’esercizio è suddiviso in varie milestone ed è molto importante svilupparle in modo ordinato.
Milestone 1
Creare un form che invii in GET la lunghezza della password. Una nostra funzione utilizzerà questo dato per generare una password casuale 
(composta da lettere, lettere maiuscole, numeri e simboli) da restituire all’utente.
Scriviamo tutto (logica e layout) in un unico file index.php
Milestone 2
Verificato il corretto funzionamento del nostro codice, spostiamo la logica in un file functions.php che includeremo poi nella pagina principale
Milestone 3 (BONUS)
Invece di visualizzare la password nella index, effettuare un redirect ad una pagina dedicata che tramite $_SESSION recupererà la password da
mostrare all’utente.
Milestone 4 (BONUS)
Gestire ulteriori parametri per la password: quali caratteri usare fra numeri, lettere e simboli. Possono essere scelti singolarmente 
(es. solo numeri) oppure possono essere combinati fra loro (es. numeri e simboli, oppure tutti e tre insieme).
Dare all’utente anche la possibilità di permettere o meno la ripetizione di caratteri uguali. -->



<?php 
/* se  l'input 'passwLength' e' stato dato dall'utente la variabile $passwordLength  prende quel valore 
trasformato in un numero intero, 
altrimenti prende valore di stringa vuota'  */
$passwordLength = isset($_GET['passwLength']) ? intval($_GET['passwLength']) : '';

/* lista dei caratteri possibili per la password */
$charactersArray = ['a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z', 'A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z', 1, 2, 3, 4, 5, 6, 7, 8, 9, 0, '!', '"', '$', '%', '&', '/', '(', ')', '=', '?', '{', '[', ']', '}', '\\', '+', '*', '-', '#', "'", '_', ',', '.', ';', ':', '<', '>', '@'];

/*  Array inizialmente vuoto che contiene i caratteri della password */
$passwordArray = [];

/* prende elementi casuali dall'array di caratteri. Il numero di elementi viene dato dalla
lunghezza della password decisa dallo user  */
$randomElements = array_rand($charactersArray,$passwordLength);
foreach($randomElements as $randomElement) {
    var_dump($charactersArray[$randomElement]);
    $charactersArray[] = $charactersArray[$randomElement];

}
var_dump($charactersArray[$randomElement]);


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!--/ Bootstrap  -->
    <title>PHP Strong Password Generator</title>
</head>
<body class="bg-primary">
    <header>
        <div class="container">
            <h1 class="text-center text-secondary">Strong Password Generator</h1>
            <h2 class="text-center text-white">Genera una password sicura</h2>
         </div>
    </header>
    <main>
        <div class="container">
            <div class="row bg-light py-3 rounded ">
                <form method="GET">
                    <div class="row mb-3">
                        <label for="passwLength" class="col-sm-2 col-form-label">Lunghezza Password</label>
                        <div class="col-sm-10">
                        <input type="text" class="form-control" id="passwLength" name="passwLength">
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Invia</button>
                </form>
            </div>
        </div>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>