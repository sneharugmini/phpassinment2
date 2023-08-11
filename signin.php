<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles.css">
    <title>Sign In</title>
</head>
<body>
    <div class="container">
        <h2>Sign In</h2>
        <form action="login_success.php" method="post">
            <!-- Input fields for login -->
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required><br>

            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required><br>

            <button type="submit">Sign In</button>
        </form>
    </div>
</body>
</html>
