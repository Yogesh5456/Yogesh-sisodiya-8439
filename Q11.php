<!-- Q11.Scenario: Suppose you are developing a quiz 
application where users can attempt multiple-choice 
questions. You want to 
implement a feature that calculates the user's score based 
on the number of correct answers. Write a PHP script that 
calculates the user's score and displays it at the end of the 
quiz. -->
<?php
$correctAnswers = 15;
$totalQuestions = 20;

$score = ($correctAnswers / $totalQuestions) * 100;
echo "Your score is ".$score."%";
?>