<?php
ob_start();
session_start();

if(isset($_SESSION['random_number'])) { /*station eksisterer?*/
    $_SESSION['random_number'] = $_SESSION['random_number']; /*Hvis station eksisterer*/
} else {
    $_SESSION['random_number'] = rand(1,99); /*rand genererer tilfældigt nummer */
}
if(isset($_SESSION['number_of_guesses'])) {
    $_SESSION['number_of_guesses'] = $_SESSION['number_of_guesses'];
} else {
    $_SESSION['number_of_guesses'] = 0; /*number_of_guesses er 0 hvis man ikke har forsøgt*/
}

?>
<!DOCTYPE html>
<html lang="en">
<head></head>
    <meta charset="UTF-8">
    <title>Document</title>
    <style type="text/css">
    .header { /*CSS*/
        position: absolute;
        left: 50%;
        top: 20%;
        transform: translate(-50%, -44%);
    }
    .guess {
        position: absolute;
        left: 50%;
        top: 30%;
        transform: translate(-50%, -44%);
    }/*CSS slut*/

    </style>
<body>
<div class="header">
<h1>The Game of Guess</h1>
</div>

<div class="guess">
<center>
<form action="check.php" method="post">
<p>Guess a number between 1 and 99</p>
<input type="text" name="user_guess"><br>
<br><br>
<input type="submit" value="Guess" name="guess_submitted">
</form>
</center>
</div>
    
</body>
</html>

