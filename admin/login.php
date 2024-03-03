<?php




// If user is not logged in, redirect to login page


include("../config/database.php");
// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if username and password are set and not empty
    if (isset($_POST["username"]) && isset($_POST["password"]) && !empty($_POST["username"]) && !empty($_POST["password"])) {
        // Your authentication logic here (e.g., database query to check credentials)
        $username = $_POST["username"];
        $password = $_POST["password"];

        $query = "SELECT * FROM admin WHERE username='$username' AND password='$password'";
        $result = $conn->query($query);

        if ($result->num_rows > 0) {
            // Authentication successful, redirect to admin page
            // echo "<script>localStorage.setItem('isLoggedIn', 'true'); window.location.href = 'admin.php';</script>";
            // save the loggedIn in cookie as true
            setcookie('isLoggedIn', 'true', time() + (86400 * 30), "/");
            header("Location: admin.php");
            exit;
        } else {
            // Authentication failed, display error message
            $error_message = "Invalid username or password.";
        }
        
        // Example: Check if username is "admin" and password is "password"
        // if ($username === "admin" && $password === "password") {
        //     // Authentication successful, redirect to admin page
        //     header("Location: admin.php");
        //     exit;
        // } else {
        //     // Authentication failed, display error message
        //     $error_message = "Invalid username or password.";
        // }
    } else {
        // Username or password not provided, display error message
        $error_message = "Please enter both username and password.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <script src="https://cdn.tailwindcss.com"></script>

</head>
<body class="bg-gray-100 h-screen flex justify-center items-center">
    <div class="bg-white p-8 rounded shadow-md min-w-lg">
        <h1 class="text-4xl mb-4">Admin Login</h1>
        <?php if (isset($error_message)): ?>
            <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mb-4" role="alert">
                <span class="block sm:inline"><?php echo $error_message; ?></span>
            </div>
        <?php endif; ?>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
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
