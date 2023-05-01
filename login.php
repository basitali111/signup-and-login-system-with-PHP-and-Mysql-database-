<?php
echo '<h1 class="bg-blue-300">Hello world!</h1>';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
   <link rel="stylesheet" href="/styles.css">
</head>
<body>
<h1>Login Form</h1>
<h1 class="text-3xl font-bold underline bg-blue-300">
    Hello world!
  </h1>
    <form>
      <label for="username">Username:</label>
      <input type="text" id="username" name="username" required><br>

      <label for="password">Password:</label>
      <input type="password" id="password" name="password" required><br>
    
      <input type="submit" value="Submit">
    </form>
</body>
</html>