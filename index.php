<?php 
// Creare una variabile con un paragrafo di testo a vostra scelta.
// Una parola da censurare viene passata dall’utente tramite parametro GET.
// Stampare di nuovo il paragrafo e la sua lunghezza, dopo aver sostituito con tre asterischi (***) 
//tutte le occorrenze della parola da censurare.

$testo ='Ciao, benvenuto! Accedi al canale inserendo i tuoi dati: inserisci la tua mail e la tua password.';
$parolaUtente = $_GET["censura"];
$parolaCensurata = str_replace($parolaUtente, "***", $testo); // $parolaCensurata = str_replace($_GET["censura"], "***", $testo);
var_dump($parolaUtente);

// BONUS
$annoCorrente = date("Y");
$mioAnno = 1996;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Badwords</title>
</head>
<body> 
    <!-- Stampare a schermo il paragrafo e la sua lunghezza. -->
    <!-- calcola la lunghezza della stringa contando da quanti caratteri è composta-->
    <h1>BADWORDS</h1>

    <h2>Testo non censurato</h2> 
    <span> (testo composto da <?php echo strlen($testo); ?> caratteri) </br> </span> 
    <p> <?php  echo $testo; ?> </p>
    
    <h2>Testo censurato</h2>
    <span> (testo composto da <?php echo strlen($testo); ?> caratteri) </br> </span>
    <p>  <?php echo $parolaCensurata; ?> </p>
    <!-- (la parola censurata è <?php echo $_GET["censura"];?>) --> </br> 

   <!-- BONUS -->
   <h3>BONUS</h3>
   <p>
       Copyrigth anno corrente: © <?php echo $annoCorrente; ?> </br> 
       La mia età calcolata in modo dinamico: <?php echo $annoCorrente - $mioAnno ?> 
   </p>
</body>
</html>