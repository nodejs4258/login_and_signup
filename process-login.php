<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $userId = $_POST['userId'];
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Retrieve user data from the JSON file
    $fileName = 'user_data_in_json/' . $userId . '.json';

    if (file_exists($fileName)) {
        $fileContents = file_get_contents($fileName);
        $userData = json_decode($fileContents, true);

        if ($userData['username'] === $username && $userData['password'] === $password) {
            // Set session variables
            $_SESSION['userId'] = $userId;
            $_SESSION['username'] = $username;

            // Redirect the user to the app or dummy page
            // Replace "app.php" with the actual page you want to redirect to
            header("Location: app.php");
            exit();
        } 
		else {
			// html code for invalid credentials
echo <<<HTML
<html>
<head>
 <title>Invalid Credentials</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f1f1f1;
	  cursor: not-allowed;
    }
    
    .container {
      max-width: 750px;
      margin: 100px auto;
      padding: 20px;
      background-color: #fff;
      border-radius: 5px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }
    
    h1 {
      font-size: 24px;
      text-align: center;
      color: #ff0000;
      margin-bottom: 20px;
    }
    
    p {
      font-size: 16px;
      text-align: center;
      color: #555555;
      margin-bottom: 20px;
    }
    
    .button {
      display: inline-block;
      padding: 10px 20px;
      background-color: #ff0000;
      color: #fff;
      text-decoration: none;
      border-radius: 3px;
      transition: background-color 0.3s ease;
    }
    
    .button:hover {
      background-color: #cc0000;
    }
  </style>
</head>
<body>
  <div class="container">
    <h1>Invalid Credentials</h1>
    <p>The username or password you entered is incorrect.</p>
    <p>Please try again.</p>
    <div style="text-align: center;">
      <a href="login.php" class="button">Go back to Login</a>
    </div>
  </div>
</body>
</html>
HTML;
}
    } else {
		//html code for invalid UserId
         echo <<<HTML
<html>
<head>
 <title>Invalid UserId</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f1f1f1;
	  cursor: not-allowed;
    }
    
    .container {
      max-width: 750px;
      margin: 100px auto;
      padding: 20px;
      background-color: #fff;
      border-radius: 5px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }
    
    h1 {
      font-size: 24px;
      text-align: center;
      color: #ff0000;
      margin-bottom: 20px;
    }
    
    p {
      font-size: 16px;
      text-align: center;
      color: #555555;
      margin-bottom: 20px;
    }
    
    .button {
      display: inline-block;
      padding: 10px 20px;
      background-color: #ff0000;
      color: #fff;
      text-decoration: none;
      border-radius: 3px;
      transition: background-color 0.3s ease;
    }
    
    .button:hover {
      background-color: #cc0000;
    }
  </style>
</head>
<body>
  <div class="container">
    <h1>Invalid UserId</h1>
    <p>The userId you entered is incorrect.</p>
    <p>Please try again.</p>
    <div style="text-align: center;">
      <a href="login.php" class="button">Go back to Login</a>
    </div>
  </div>
</body>
</html>
HTML;
    }
}

// Check if the user is already logged in
if (isset($_SESSION['userId']) && isset($_SESSION['username'])) {
    // Redirect the user to the app or dummy page
    // Replace "app.php" with the actual page you want to redirect to
    header("Location: app.php");
    exit();
}
?>

