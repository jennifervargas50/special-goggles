<?php // Script 8.5 - books.php
/* This page lists J.D. Salinger's bibliography. */

// Address error management, if you want.
ini_set('display_errors', 1);
error_reporting(E_ALL);

// Set the page title and include the header file:
define('TITLE', 'Books by J.D. Salinger');
include('templates/header.html');

// Leave the PHP section to display lots of HTML:
?>

<h2>J.D. Salinger's Books</h2>
<ul>
   <li>The Catcher in the Rye</li>
   <li>Nine Stories</li>
   <li>Franny and Zooey</li>
   <li>Raise High the Roof Beam, Carpenters and Seymour: An Introduction</li>
</ul>

<?php include('templates/footer.html');
?>