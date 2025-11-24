<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Confirmation</title>
    <link rel="stylesheet" href="styles/main.css">
</head>
<body>

    <h1>CH10 Project Confirmation</h1>
    <p>Patrick Newbrough</p>
    <p><?php echo date("F j, Y"); ?></p>

    <?php
    // ✅ Step 9: Check if form submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        // ✅ Step 10: Retrieve form data
        $name = $_POST["name"];
        $email = $_POST["email"];
        $message = $_POST["message"];

        // ✅ Step 11: Trim whitespace
        $name = trim($name);
        $email = trim($email);
        $message = trim($message);

        // ✅ Step 12: Sanitize email
        $email = filter_var($email, FILTER_SANITIZE_EMAIL);

        // ✅ Step 13: Check if fields are empty
        if (empty($name) || empty($email) || empty($message)) {
            $msg = "❌ All fields are required.";
            $msgClass = "error";
        } else {
            // ✅ Step 14: Confirmation message
            $msg = "✅ Thank you, $name! Your message has been received.";
            $msgClass = "success";
        }

        // ✅ Step 15: Display output
        echo "<div class='$msgClass'>$msg</div>";

        echo "<p><strong>Name:</strong> $name</p>";
        echo "<p><strong>Email:</strong> $email</p>";
        echo "<p><strong>Message:</strong> $message</p>";
    }
    ?>

</body>
</html>
