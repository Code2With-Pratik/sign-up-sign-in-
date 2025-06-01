<?php
session_start();

// Redirect to login if not authenticated
if (!isset($_SESSION['user_id'])) {
    header("Location: http://localhost/smartstore/");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 flex items-center justify-center h-screen">
    <div class="bg-white p-8 rounded-lg shadow-lg w-full max-w-md text-center">
        <h2 class="text-2xl font-bold mb-4">Welcome, <?php echo htmlspecialchars($_SESSION['full_name']); ?>!</h2>
        <p class="text-gray-700 mb-6">Thank you for joining us. We're excited to have you here!</p>
        <a href="logout.php" class="bg-red-500 text-white py-2 px-4 rounded-lg hover:bg-red-600">Logout</a>
    </div>
</body>
</html>