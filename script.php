<?php
$total = 0;
$_GET["author"] == "q1r2" ? $total += 1 : $total = $total;

$_GET["kids"] == "5" ? $total += 1 : $total = $total;
$_GET["father"] == "q4r2" ? $total += 1 : $total = $total;
$_GET["winter"] == "q5r3" ? $total += 1 : $total = $total;
$_GET["wolf"] == "q6r4" ? $total += 1 : $total = $total;
strtolower($_GET["actress"]) == "sophie turner" ? $total += 1 : $total = $total;
$_GET["alias"] == "q8r2" ? $total += 1 : $total = $total;
$_GET["bolton"] == "q9r1" ? $total += 1 : $total = $total;


if (isset($_GET["drakeA"]) && isset($_GET["drakeD"]) && isset($_GET["drakeE"]) && !isset($_GET["drakeB"]) && !isset($_GET["drakeC"])) {
  $total += 1;
} else {
  $total = $total;
};


echo "Vous avez " . $total . " bonnes réponses";
