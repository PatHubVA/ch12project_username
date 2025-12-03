<!DOCTYPE html>
<html>
<head>
    <title>Student Directory</title>
    <link rel="stylesheet" href="styles/main.css">
    <script src="scripts/main.js"></script>
</head>
<body>

<h1>Student Directory Project</h1>
<p>Patrick Newbrough</p>
<p><?php echo date("F j, Y"); ?></p>

<form method="POST" action="search.php">
    <label for="lname">Enter Last Name:</label>
    <input type="text" id="lname" name="lname" required>
    <button type="submit">Search</button>
</form>

</body>
</html>
