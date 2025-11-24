<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Search Results</title>
    <link rel="stylesheet" href="styles/main.css">
</head>
<body>

<?php
// Step 12: Check request method
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Step 13: Sanitize input
    $email = trim($_POST["email"]);
    $email = filter_var($email, FILTER_SANITIZE_EMAIL);

    // Step 14: Connect to DB (with password)
    $conn = mysqli_connect("localhost", "root", "mysql", "taus_data");

    if (!$conn) {
        die("<div class='message'>Database connection failed.</div>");
    }

    // Step 15: SQL query
    $sql = "SELECT firstName, lastName, email FROM tbl_student WHERE email = '$email'";
    $result = mysqli_query($conn, $sql);

    // Step 16: Conditional results
    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);

        echo "<div class='message'>";
        echo "Student found:<br>";
        echo "Name: " . $row['firstName'] . " " . $row['lastName'] . "<br>";
        echo "Email: " . $row['email'];
        echo "</div>";

    } else {
        echo "<div class='message'>No student found with that email.</div>";
    }

    mysqli_close($conn);
}
?>

<br>
<a href="index.php">Return to Search</a>

</body>
</html>