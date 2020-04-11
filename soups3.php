<!doctype html>
<html lang="en">
<head>
   <meta charset="utf-8">
   <title>No Soup for You!</title>
</head>
<body>
<h1>Mmm...soups</h1>
<?php // Script 7.3 - soups3.php
/* This script creates and prints out an array. */

// Address error management, if you want.
ini_set('display_errors', 1);
error_reporting(E_ALL);

// Create the array:
$soups = array(
   'Monday' => 'Clam Chowder',
   'Tuesday' => 'White Chicken Chili',
   'Wednesday' => 'Vegetarian',
   'Thursday' => 'Chicken Noodle',
   'Friday' => 'Tomato',
   'Saturday' => 'Cream of Broccoli',
   'Sunday' => 'Lentil',
);

// Print each key and value:
foreach ($soups as $day => $soup) {
   print "<p>$day: $soup</p>\n";
}

?>
</body>
</html>