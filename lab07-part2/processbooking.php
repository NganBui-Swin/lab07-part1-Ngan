<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="description" content="Rohirrim Tour Booking Confirmation">
  <meta name="author" content="Yen Ngan Bui">
  <title>Booking Confirmation</title>
</head>
<body>
  <h1>Rohirrim Tour Booking Confirmation</h1>
<?php
  if (isset($_POST["firstname"])) {

    $firstname = $_POST["firstname"];
    $lastname = $_POST["lastname"];
    $age = $_POST["age"];
    $food = $_POST["food"];
    $partysize = $_POST["partysize"];
    $bookday = $_POST["bookday"];

    $species = $_POST["species"];
    if ($species == "M") $species = "Human";
    elseif ($species == "D") $species = "Dwarf";
    elseif ($species == "E") $species = "Elf";
    elseif ($species == "H") $species = "Hobbit";

    $tour = "";
    if (isset($_POST["accom"])) $tour = $tour . "Accommodation";
    if (isset($_POST["4day"])) $tour = $tour . "Four-day tour";
    if (isset($_POST["10day"])) $tour = $tour . "Ten-day tour";

    echo "<p>Welcome $firstname $lastname!<br>";
    echo "You are now booked on: $tour<br>";
    echo "Species: $species<br>";
    echo "Age: $age<br>";
    echo "Meal Preference: $food<br>";
    echo "Date: $bookday<br>";
    echo "Number of travellers: $partysize</p>";
  } else {
    echo "<p>Fill o day ne --> <a href=\"register.html\">booking form</a>.</p>";
  }
?>
</body>
</html>
