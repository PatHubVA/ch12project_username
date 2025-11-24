<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Student Email Search</title>
    <link rel="stylesheet" href="styles/main.css">
</head>
<body>

<h1>Student Email Search Project</h1>
<p>Patrick W. Newbrough</p>
<p><?php echo date("F j, Y"); ?></p>

<form method="POST" action="results.php">
    <label for="email">Enter Student Email:</label>
    <input type="email" id="email" name="email" required>
    <input type="submit" value="Search">
</form>

</body>
</html>
