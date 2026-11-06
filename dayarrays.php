<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="author" content="Yen Ngan Bui">
  <title>PHP</title>
</head>
<body>
  <h1>Ayo PHP</h1>
<?php
    $days = array("Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday");
   
    for ($i =0; $i < 7 ; $i++) {
        echo "<p> $days[$i] </p>";
}
    for ($i =0; $i < 7 ; $i++) {
        echo "Day:", $i +1, $days[$i];
}
    echo "<p>The days of the week in English are:<br>";
    echo "$days[0], $days[1], $days[2], $days[3], $days[4], $days[5], $days[6].</p>";

    $days = array("Dimanche", "Lundi", "Mardi", "Mercredi", "Jeudi", "Vendredi", "Samedi");

    echo "<p>The days of the week in French are:<br>";
    echo "$days[0], $days[1], $days[2], $days[3], $days[4], $days[5], $days[6].</p>";
?>
</body>
</html>
