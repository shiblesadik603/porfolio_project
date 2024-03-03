<?php
// Check if user is logged in (check localStorage flag)
$isLoggedIn = false;
if (isset($_COOKIE['isLoggedIn']) && $_COOKIE['isLoggedIn'] === 'true') {
    $isLoggedIn = true;
}

// If user is not logged in, redirect to login page
if (!$isLoggedIn) {
    header("Location: login.php");
    exit;
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Page</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 h-screen flex justify-center items-center">
    <div class="bg-white p-8 rounded shadow-md">
        <h1 class="text-2xl mb-4">Welcome Admin!</h1>
        <p class="text-gray-700">This is your admin page. You can add your content here.</p>

      <div class="mt-5">
      <a href="logout.php" class="btn py-2 px-3 bg-red-500 text-white rounded mt-5">Logout</a>
      </div>
    </div>
</body>
</html>
