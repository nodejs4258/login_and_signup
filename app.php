<?php
session_start();

// Check if the user is not logged in
if (!isset($_SESSION['userId']) || !isset($_SESSION['username'])) {
    // Redirect the user to the login page
    header("Location: login.php");
    exit();
}
?>



<!DOCTYPE html>
<html>
<head>
    <title>App</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            margin: 0;
            padding: 20px;
        }
        .container {
            max-width: 600px;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }
        h1 {
            color: #333;
        }
        p {
            color: #777;
            line-height: 1.5;
        }
        .logout-btn {
            margin-top: 20px;
            background-color: #333;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 3px;
            cursor: pointer;
        }
        .logout-btn:hover {
            background-color: #555;
        }
    </style>
</head>
<body>
  <div class="container">
        <h1>Welcome to Your App</h1>
        <p>This is your custom app page that represents the functionality and features of your application.</p>
        
        <h2>User Dashboard</h2>
        <p>Yeah! You are logged in </p> <?php $username = $_SESSION['username']; echo $username ;?>
        
        <p>Here, you can display your app's content, user information, and perform various actions based on your application's requirements.</p>
        
        <button class="logout-btn" onclick="logout()">Log Out</button>
		<button class="logout-btn" id="delete-btn">Delete Account</button>
    </div> 

    <script>
        function logout() {
            // Perform logout action here if needed
            // Redirect the user to the login page
            window.location.href = "logout.php";
        }
		//account deletion
    </script>
	
	 <script>
        // Get the delete button element
        const deleteButton = document.getElementById('delete-btn');

        // Add a click event listener to the delete button
        deleteButton.addEventListener('click', () => {
            // Show a confirmation alert
            const confirmation = confirm("Are you sure you want to delete your account? You will never get it back.");
            
            // If user confirms, proceed with account deletion
            if (confirmation) {
                // Redirect to delete account PHP script
                window.location.href = 'delete-account.php';
            } else {
                alert('Account deletion canceled.');
            }
        });
    </script>
	
	
</body>
</html>
