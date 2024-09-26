<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $userId = $_POST['userId'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    
    // Check if the user file already exists
    $fileName = 'user_data_in_json/' . $userId . '.json';
    
    if (file_exists($fileName)) {
        
		echo <<<HTML
<html>
<head>
 <title>This user ID is already exist</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f1f1f1;
	  cursor: allowed;
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
    <h1>This user ID is already taken. Please choose a different user ID</h1>
    <p>This user ID is already taken. Please choose a different user ID</p>
    
    <div style="text-align: center;">
      <a href="sign-up.php" class="button">Go back to Sign-up</a>
    </div>
  </div>
</body>
</html>
HTML;
		
    } else {
        // Save user data to the JSON file
        $userData = [
            'userId' => $userId,
            'username' => $username,
            'password' => $password
        ];
        
        $fileContents = json_encode($userData);
        
        if (file_put_contents($fileName, $fileContents)) {
           
			//html code for User created successfully
         echo <<<HTML
<html>
<head>
 <title>User created successfully</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f1f1f1;
	  cursor: allowed;
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
    <h1>User created successfully</h1>
    <p>User created successfully</p>
    <p>Yeah! Now you can access the page by logging-in.</p>
	<p>! Login-In Now !</p>
    <div style="text-align: center;">
      <a href="login.php" class="button">Go to Login</a>
    </div>
  </div>
</body>
</html>
HTML;
        } else {
            echo '<strong>Error creating user</strong>';
        }
    }
}
?>
