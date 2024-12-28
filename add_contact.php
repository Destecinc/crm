<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css"> <!-- Link to stylesheet -->
    <title>Add Contact</title>
</head>
<body>
    <h1>Add Contact</h1>
    <form action="view_contacts.php" method="POST" id="contact-form">
        <label for="firstName">First Name:</label>
        <input type="text" id="firstName" name="firstName" required><br>

        <label for="lastName">Last Name:</label>
        <input type="text" id="lastName" name="lastName" required><br>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required><br>

        <label for="phone">Phone:</label>
        <input type="text" id="phone" name="phone"><br>

        <label for="company">Company Name:</label>
        <input type="text" id="company" name="company"><br>

        <input type="submit" value="Add Contact">
    </form>
    <a href="view_contacts.php">View Contacts</a>
</body>
</html>