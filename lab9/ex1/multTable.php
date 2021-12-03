<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);

$rows = 100;
$cols = 100;

echo "<table>";
for($i = 0; $i < $rows; $i++){
    echo "<tr>";
    for($j = 0; $j < $cols; $j++)
    {
        echo "<td>" . $i*$j . "</td>";
    }
    echo "</tr>";
}
echo "</table>";
?>