<?php

$numApples = $_POST["numApples"];
$numBananas = $_POST["numBananas"];
$numCarrots = $_POST["numCarrots"];
$userPassword = $_POST["userPassword"];
$userEmail = $_POST["userEmail"];

echo "Thank you shopping with us today!";
echo "<br>For reference, " . $userEmail . ", your password is the following: " . $userPassword;
echo "<br>You ordered this many of the following items: Apples (" . $numApples . "), Bananas (" . $numBananas . "), and Carrots (" . $numCarrots . ").";

?>