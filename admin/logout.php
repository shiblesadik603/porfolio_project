<?php
// Clear the isLoggedIn cookie
setcookie('isLoggedIn', '', time() - 3600, '/');

// Redirect to login page
header("Location: login.php");
exit;
?>
