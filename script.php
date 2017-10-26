<?php
$total = 0;
$_GET["author"] == "q1r2" ? $total += 1 : $total = $total;
$_GET["kids"] == "5" ? $total += 2 : $total = $total;
$_GET["father"] == "q4r2" ? $total += 1 : $total = $total;
$_GET["winter"] == "q5r3" ? $total += 1 : $total = $total;
$_GET["wolf"] == "q6r4" ? $total += 2 : $total = $total;
strtolower($_GET["actress"]) == "sophie turner" ? $total += 3 : $total = $total;
$_GET["alias"] == "q8r2" ? $total += 1 : $total = $total;
$_GET["bolton"] == "q9r1" ? $total += 1 : $total = $total;
$_GET["valar"] == "q10r1" ? $total += 1 : $total = $total;
$_GET["slogan"] == "q12r3" ? $total += 1 : $total = $total;


if (isset($_GET["drakeA"]) && isset($_GET["drakeD"]) && isset($_GET["drakeE"]) && !isset($_GET["drakeB"]) && !isset($_GET["drakeC"])) {
  $total += 1;
} else {
  $total = $total;
};

if (isset($_GET["countryA"]) && isset($_GET["countryB"]) && isset($_GET["countryD"]) && isset($_GET["countryF"]) && isset($_GET["countryG"]) && !isset($_GET["countryC"]) && !isset($_GET["countryE"])) {
  $total += 3;
} else {
  $total = $total;
};

if (isset($_GET["linkB"]) && isset($_GET["linkD"]) && !isset($_GET["linkA"]) && !isset($_GET["linkC"])) {
  $total += 2;
} else {
  $total = $total;
};

echo "Vous avez obtenu une note de " . $total . " sur 20 <br>";

if ($total <= 5) {
  echo "Your death is coming";
}elseif ($total <= 10) {
  echo "You know nothing looser";
} elseif ($total <= 15) {
  echo "You are no one";
}else {
  echo "You might be able to ride Drogon";
};
