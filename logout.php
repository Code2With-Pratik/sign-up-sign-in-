<?php
session_start();

// Unset all session variables
$_SESSION = [];

// Destroy the session
session_unset();
session_destroy();

// Optional: Delete session cookie (more secure logout)
if (ini_get("session.use_cookies")) {
    $params = session_get_cookie_params();
    setcookie(session_name(), '', time() - 42000,
        $params["path"], $params["domain"],
        $params["secure"], $params["httponly"]
    );
}

// Redirect to homepage
header("Location: http://localhost/smartstore/");
exit();
?>