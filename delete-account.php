<?php
session_start();

if (isset($_SESSION['userId'])) {
    // Load the user data
    $userId = $_SESSION['userId'];
    $userDataFileName = 'user_data_in_json/' . $userId . '.json';

    if (file_exists($userDataFileName)) {
        $userData = json_decode(file_get_contents($userDataFileName), true);

        // Delete the user's data (account)
        unlink($userDataFileName);
        header('Location: sign-up.php');
        // Optionally, perform any other cleanup actions here

        // Redirect the user to the login page after successful account deletion
        //header('Location: login.php');
        exit();
    }
}
?>
