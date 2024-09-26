<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="style.css">

    <title>Sign Up</title>
</head>
<body>
    <h1>Sign Up</h1>
    <form method="POST" autocomplete="no" action="process-sign-up.php">
        <label for="userId">User ID:</label>
        <input type="text" id="userId" placeholder="Only NUMBERS" name="userId" required><br><br>
        
        <label for="username">Username:</label>
        <input type="text" id="username" placeholder="Username" name="username" required><br><br>
        
        <label for="password">Password:</label>
        <input type="password" id="password" placeholder="Password"  name="password" required><br><br>
        <p> Already have an account? Then <a style=" color:#007bff; text-decoration: none;"	href="login.php">login</a><br><br>
        <input type="submit" value="Sign Up">
    </form>
</body>
</html>
