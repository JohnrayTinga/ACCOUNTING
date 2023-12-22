if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    // Validate form data (optional)
    // You can add your own validation logic here to ensure the data is in the correct format or meets specific requirements.

    // Process the form data (e.g., send an email, store in a database, etc.)
    // Perform any necessary operations with the form data, such as sending an email notification to the recipient or storing the data in a database.

    // Redirect to the thank you page
    header('Location: thank_you.html');
    exit();
}