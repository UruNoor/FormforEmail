<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $complaint = htmlspecialchars($_POST['complaint']);

    // Save the complaint to a file (or database)
    $file = 'complaints.txt';
    $data = "Name: $name\nEmail: $email\nComplaint: $complaint\n\n";
    file_put_contents($file, $data, FILE_APPEND);

    // Redirect back to the form
    header("Location: index.html");
    exit();
}
?>