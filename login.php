<?php include('login.php')
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device width, initialscale=1.0">
<title>Login Page</title>
<link rel="stylesheet" href="loginstyle.css"> </head>
<body>
<div class="login-container">
<div class="login-card">
<h2>Login</h2>
<form action="dashboard.html"
method="POST"
<div class="input-group">
<label for="username">Username / Email</label>
<input type="text" id="username" name="username" required>
</div>
<div class="input-group">
<label for="password">Password</label> <input type="password"
id="password" name="password" required>
</div>
<button type="submit">Log in Now</button>
<p>Log in via</p>
<div class="social-icons"> <a href="#">Instagram</a>
<a href="#">Facebook</a> <a href="#">Twitter</a>
</div>
</form>
</div>
</div>
</body>
</html> 
