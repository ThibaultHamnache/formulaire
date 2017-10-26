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

echo "<h1>Vous avez obtenu une note de " . $total . " sur 20 </h1><br>";

if ($total <= 5) {
  echo "<h2> Your death is coming </h2><br><br>";
  echo '<img src="images/hodor.gif">';
}elseif ($total <= 10) {
  echo "<h2> You know nothing looser </h2><br><br>";
  echo '<img src="images/nothing.gif">';
} elseif ($total <= 15) {
  echo "<h2> You are no one </h2><br><br>";
  echo '<img src="images/noone.gif">';

}else {
  echo "<h2> Drogon : Dracarys </h2><br><br>";
  echo '<img src="images/drogon.gif">';
};
