<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Forgot Password</title>
    <style>
        body {
            background-image: url('images/ProjectBackground.png');
            background-attachment: fixed;
            background-size: cover;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            font-family: Arial, sans-serif;
        }
        .forgot-password-container {
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 300px;
            box-sizing: border-box;
            text-align: center;
        }
        h2 {
            color: #333;
        }
        label {
            font-weight: bold;
            display: block;
            margin: 5px 0;
        }
        input[type="email"] {
            width: 100%;
            padding: 10px;
            margin: 8px 0;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }
        input[type="submit"] {
            background-color: #FFC107;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            width: 100%;
            font-size: 16px;
        }
        input[type="submit"]:hover {
            background-color: #FFB300;
        }
        .success-message, .error-message {
            margin-top: 10px;
        }
        .success-message {
            color: green;
        }
        .error-message {
            color: red;
        }
    </style>
</head>
<body>
    <div class="forgot-password-container">
        <h2>Forgot Password</h2>
        <?php if (isset($_GET['message'])): ?>
            <div class="<?= htmlspecialchars($_GET['type']) ?>-message"><?= htmlspecialchars($_GET['message']) ?></div>
        <?php endif; ?>
        <form method="post" action="forgot_password.php">
            <label for="email">Registered Email:</label>
            <input type="email" id="email" name="email" required aria-label="Registered Email">
            <input type="submit" value="Send Verification">
        </form>
    </div>
</body>
</html>
