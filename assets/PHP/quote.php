<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Collect and sanitize input data
    $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
    $phone = filter_input(INPUT_POST, 'phone', FILTER_SANITIZE_STRING);
    $option1 = filter_input(INPUT_POST, 'option1', FILTER_SANITIZE_STRING);
    $option2 = filter_input(INPUT_POST, 'option2', FILTER_SANITIZE_STRING);
    $quantity = filter_input(INPUT_POST, 'quantity', FILTER_SANITIZE_NUMBER_INT);
    $message = filter_input(INPUT_POST, 'message', FILTER_SANITIZE_STRING);

    // Validate email
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo json_encode(['success' => false]);
        exit;
    }

    // Email details
    $to = 'your-email@example.com'; // Replace with your email address
    $subject = 'New Quote Request';
    $body = "Name: $name\nEmail: $email\nPhone: $phone\nOption 1: $option1\nOption 2: $option2\nQuantity: $quantity\nMessage: $message";
    $headers = "From: $email\r\n";

    // Send email
    if (mail($to, $subject, $body, $headers)) {
        echo json_encode(['success' => true]);
    } else {
        echo json_encode(['success' => false]);
    }
} else {
    echo json_encode(['success' => false]);
}
?>