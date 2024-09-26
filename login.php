


<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="style.css">

    <title>Login</title>
</head>
<body>
<class id="wet">
    <h1><strong>Login</strong></h1>
    <form method="POST" autocomplete="no" action="process-login.php">
        <label for="userId">User ID:</label>
        <input type="text" id="userId" placeholder="Only NUMBERS" name="userId" required><br><br>
        
        <label for="username">Username:</label>
        <input type="text" id="username" placeholder="Username" name="username" required><br><br>
        
        <label for="password">Password:</label>
        <input type="password" id="password" placeholder="Password" name="password" required><br><br>
        <p> Not have an account? Then <a style="color:#007bff; text-decoration: none;" href="sign-up.php">signup</a><br><br>
        <input type="submit" value="Log In">
    </form>
	</class>
</body>
</html>


