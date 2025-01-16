<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>

    <div class="login-container">
        <form class="login-form">
            <h2>Login</h2>

            <div class="input-group">
                <label for="username">Username</label>
                <input type="text" id="username" name="username" required>
            </div>

            <div class="input-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" required>
            </div>

            <button type="submit" class="login-btn">Login</button>

           
        </form>
    </div>

    <style>
        * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    font-family: 'Arial', sans-serif;
    background: linear-gradient(135deg, #6e7dff, #7ac5fd);
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    transition: background 0.5s ease-in-out;
}

.login-container {
    background-color: #fff;
    padding: 40px 30px;
    border-radius: 10px;
    box-shadow: 0 12px 20px rgba(0, 0, 0, 0.1);
    width: 100%;
    max-width: 350px;
    transition: transform 0.4s ease-in-out;
}

h2 {
    text-align: center;
    margin-bottom: 30px;
    color: #333;
    font-size: 24px;
    font-weight: bold;
    letter-spacing: 1px;
}

.input-group {
    margin-bottom: 20px;
}

.input-group label {
    display: block;
    margin-bottom: 8px;
    font-size: 14px;
    color: #333;
    font-weight: 600;
}

.input-group input {
    width: 100%;
    padding: 12px;
    border: 1px solid #ccc;
    border-radius: 6px;
    font-size: 16px;
    transition: border 0.3s ease-in-out, box-shadow 0.3s ease-in-out;
}

.input-group input:focus {
    border-color: #007BFF;
    box-shadow: 0 0 8px rgba(0, 123, 255, 0.6);
    outline: none;
}

.login-btn {
    width: 100%;
    padding: 12px;
    background-color: #007BFF;
    color: #fff;
    border: none;
    border-radius: 6px;
    font-size: 16px;
    cursor: pointer;
    transition: background-color 0.3s ease, transform 0.3s ease;
}

.login-btn:hover {
    background-color: #0056b3;
    transform: translateY(-3px);
}

.login-btn:active {
    transform: translateY(1px);
}

.signup-link {
    text-align: center;
    margin-top: 15px;
    font-size: 14px;
    color: #666;
}

.signup-link a {
    color: #007BFF;
    text-decoration: none;
    transition: color 0.3s ease;
}

.signup-link a:hover {
    color: #0056b3;
    text-decoration: underline;
}

/* Add some animation effects to the form */
.login-container {
    transform: translateY(100px);
    opacity: 0;
    animation: fadeInUp 0.8s forwards;
}

@keyframes fadeInUp {
    to {
        transform: translateY(0);
        opacity: 1;
    }
}

    </style>

</body>
</html>
