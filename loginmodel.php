<?php
class LoginModel {
    private $db;

    public function __construct($db) {
        $this->db = $db;
    }

    public function getUser($username) {
        $stmt = $this->db->prepare('SELECT * FROM users WHERE username = ?');
        
        if (!$stmt) {
            // Debugging: Check if the statement was prepared successfully
            echo "Failed to prepare statement: " . implode(", ", $this->db->errorInfo());
            return false;
        }

        $stmt->execute([$username]);
        
        // Debugging: Check if the statement was executed successfully
        if (!$stmt->rowCount()) {
            echo "No user found with the username.";
            return false;
        }

        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
}
?>

