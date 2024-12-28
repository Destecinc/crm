<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get form data
    $firstName = htmlspecialchars($_POST['firstName']);
    $lastName = htmlspecialchars($_POST['lastName']);
    $email = htmlspecialchars($_POST['email']);
    $phone = htmlspecialchars($_POST['phone']);
    $company = htmlspecialchars($_POST['company']);
    
    // Here we would typically save the contact to a database.
    
    // Display the entered contact information
    echo '<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="styles.css"> <!-- Link to stylesheet -->
        <title>View Contacts</title>
    </head>
    <body>
        <h1>Contact Added</h1>
        <div class="table-container">
            <p>First Name: ' . $firstName . '</p>
            <p>Last Name: ' . $lastName . '</p>
            <p>Email: ' . $email . '</p>
            <p>Phone: ' . $phone . '</p>
            <p>Company: ' . $company . '</p>
        </div>
        <p><a href="add_contact.php">Add Another Contact</a></p>
        <p><a href="view_contacts.php">View All Contacts</a></p>
    </body>
    </html>';
} else {
    // Redirect back to form if accessed directly
    header('Location: add_contact.php');
    exit();
}
?>