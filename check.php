<?php
ob_start();
session_start();

$random_number = $_SESSION['random_number'];
$number_of_guesses = $_SESSION['number_of_guesses'];

$user_guess = $_POST['user_guess'];

if ($user_guess > $random_number) { /*user_guess er større end rand_number */
    echo "Hot !"; /*Hot ! bliver vist*/
    $_SESSION['number_of_guesses']++; /*antal fæt stiger med 1*/
    header("Refresh:3; guess.php");
}

if ($user_guess < $random_number) { /*random_number er større end user_guess */
    echo "Icecold"; /*"Icecold bliver vist*/
    $_SESSION['number_of_guesses']++; /*antal fæt stiger med 1*/
    header("Refresh:3; guess.php"); 
}

if ($user_guess == $random_number) { /*random_number er det samme som end user_guess */
    echo "Correct";  /*Correct bliver vist*/
    $_SESSION['number_of_guesses'] = 0; /*viser antal gæt*/
    $_SESSION['random_number'] = rand(1,99);
    header("Refresh:6; guess.php"); 
}    
?>

<?php

echo "<pre>", print_r($_SESSION), "</pre>"; /*print_r viser rigtigt nummer og antaæ gøt*/

?>


    