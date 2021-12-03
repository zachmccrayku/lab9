<?php
error_reporting(E_ALL);
ini_set("display errors", 1);

$answer1 = $_POST['question-1-answers'];
$answer2 = $_POST['question-2-answers'];
$answer3 = $_POST['question-3-answers'];
$answer4 = $_POST['question-4-answers'];
$answer5 = $_POST['question-5-answers'];

$totalCorrect = 0;
$percentCorrect = 0;

if($answer1 == "A") {$totalCorrect++;}
if($answer1 == "C") {$totalCorrect++;}
if($answer1 == "C") {$totalCorrect++;}
if($answer1 == "A") {$totalCorrect++;}
if($answer1 == "D") {$totalCorrect++;}

$percentCorrect = ($totalCorrect / 5) * 100;

echo "What does EECS stand for? <br> You answered: " . $answer1 . "<br>";
echo "The correct answer is Electrical Engineering and Computer Science <br><br>";

echo "What course is EECS448? <br> You answered: " . $answer2 . "<br>";
echo "The correct answer is Software Engineering I <br><br>";

echo "Which of the following is not a coding or programming language? <br> You answered: " . $answer3 . "<br>";
echo "The correct answer is QZD <br><br>";

echo "What is a bug in computer programming? <br> You answered: " . $answer4 . "<br>";
echo "The correct answer is A fault or an error <br><br>";

echo "What is Dr. Gibbons first name? <br> You answered: " . $answer5 . "<br>";
echo "The correct answer is None of the Above <br><br>";

echo "You answered " . $totalCorrect . " right for a score of " . $percentCorrect . "%!";

?>