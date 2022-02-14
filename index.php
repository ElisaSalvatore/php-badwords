<?php 
// Creare una variabile con un paragrafo di testo a vostra scelta.
// Una parola da censurare viene passata dall’utente tramite parametro GET.
// Stampare di nuovo il paragrafo e la sua lunghezza, dopo aver sostituito con tre asterischi (***) 
//tutte le occorrenze della parola da censurare.

$testo ='Ciao, benvenuto! Accedi al canale inserendo i tuoi dati: inserisci la tua mail e la tua password.';
$parolaUtente = $_GET["parola"];
$parolaCensurata = str_replace($_GET["parola"], "***", $testo);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body> 
    
    <!-- Stampare a schermo il paragrafo e la sua lunghezza. -->
    <?php  echo $testo; ?>
    <!-- calcola la lunghezza della stringa contando da quanti caratteri è composta-->
    (testo composto da <?php echo strlen($testo); ?> caratteri) </br> 

    <?php echo $parolaCensurata; ?>
     <!--(la parola censurata è <?php echo $_GET["parola"];?>) -->
</body>
</html>