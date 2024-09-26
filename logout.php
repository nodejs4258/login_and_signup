<?php
session_start();

// Unset or destroy session variables
session_unset();
session_destroy();


// Redirect back to the login page
header('Location: login.php');
exit();
?>
