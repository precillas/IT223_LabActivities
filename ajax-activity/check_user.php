<?php
header('Content-Type: application/json');

// Get username from AJAX
$username = $_POST['username'] ?? '';

// Sample "database"
$taken_usernames = ['admin', 'root', 'user123'];

// If empty input
if (empty($username)) {
    echo json_encode([
        "available" => false,
        "message" => "Please enter a username!"
    ]);
    exit;
}

// Check if username exists
if (in_array(strtolower($username), $taken_usernames)) {
    echo json_encode([
        "available" => false,
        "message" => "Username is already taken!"
    ]);
} else {
    echo json_encode([
        "available" => true,
        "message" => "Username is available!"
    ]);
}
?>