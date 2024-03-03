<?php 

// Check if user is logged in (check localStorage flag)
$isLoggedIn = false;
if (isset($_COOKIE['isLoggedIn']) && $_COOKIE['isLoggedIn'] === 'true') {
    $isLoggedIn = true;
    header("Location: admin.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    <script src="https://cdn.tailwindcss.com"></script>

    <style>
        /* Additional custom styles can be added here */
    </style>
</head>
<body class="bg-gray-100 h-screen flex justify-center items-center">
    <div class="bg-white p-8 rounded shadow-md min-w-md">
        <h1 class="text-2xl mb-4">Admin Login</h1>
        <form action="login.php" method="post">
            <div class="mb-4">
                <label for="username" class="block text-gray-700">Username:</label>
                <input type="text" id="username" name="username" class="form-input mt-1 block w-full p-3" required>
            </div>
            <div class="mb-4">
                <label for="password" class="block text-gray-700">Password:</label>
                <input type="password" id="password" name="password" class="form-input mt-1 block w-full p-3" required>
            </div>
            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">Login</button>
        </form>
    </div>
</body>
</html>
