<!-- Creare una variabile con un paragrafo di testo a vostra scelta. Stampare a schermo il paragrafo e la
sua lunghezza. Una parola da censurare viene passata dall'utente tramite parametro
GET. Stampare di nuovo il paragrafo e la sua lunghezza, dopo aver sostituito con tre
asterischi (***) tutte le occorrenze della parola da censurare. -->


<?php
    $unaVariabile = "Un paragrafo Lorem ipsum dolor sit amet consectetur adipisicing elit.";
    
    echo $unaVariabile;

    echo '<br>';

    echo strlen($unaVariabile);

    $word = $_GET['word'];

    echo '<br>';

    echo $word;

    echo '<br>';

    echo str_replace($word,"***",$unaVariabile)

?>

