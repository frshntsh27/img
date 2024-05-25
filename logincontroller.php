<?php
class logincontroller {
    private $loginmodel;

    public function __construct($loginmodel) {
        $this->loginmodel = $loginmodel;
    }

    public function login($username, $password) {
        $user = $this->loginmodel->getUser($username);

        if (!$user) {
            echo "User not found.";
            return;
        }

        // Debugging: Print the retrieved user data (without password)
        echo "<pre>";
        print_r($user);
        echo "</pre>";

        if ($user && password_verify($password, $user['password'])) {
            // Start the session and set user session variables
            session_start();
            $_SESSION['username'] = $user['username'];
            $_SESSION['type'] = $user['type'];
            header('Location: basecode.php'); // Redirect to a dashboard page
            exit();
        } else {
            echo "Invalid username or password";
        }
    }
}
?>

