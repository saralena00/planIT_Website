
<?php


session_name(CONFIG_SESSION_NAME);
session_start();

require_once('includes/mysqli_connect.php'); // ab hier haben wir verbindung zur DB

$username = 'terry@bytekultur.net';
$passwort = '$2y$10$2e2tfRH76lsyWVPzMrrJ5.YZB/cSDL46j5tRjj1jCNysmWyv6St0i'; // salted hash mit password_hash()

?>