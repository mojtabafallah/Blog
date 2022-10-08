<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <form action="src/user.php" method="post">
       <label for="username">UserName</label>
      <input type="text" name="username" id="username" required>
      <label for="password">password</label>
      <input type="password" name="password" id="password" required>
      <label for="remember"></label>
      <input type="checkbox" name="remember">
      <button name="login" type="submit">Login</button>
    </form>
</head>
<body>
    
</body>
</html>