<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet"
  href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
  <link rel="stylesheet" type="text/css" href="style.css" />
</head>
<body>
<div class="container">
 <div class-="forms-container">
  <div class="signin-signup">
    <form action="" class="sign-in-form">
        <h2 class ="title">Sign in</h2>
        <div class="input-field">
          <i class="bx bxs-user"></i>
          <input type="text" placeholder="Username">
        </div>
        <div class="input-field">
          <i class="bx bxs-lock"></i>
          <input type="password" placeholder="Password">
        </div>
        <input type="submit" value="Login" class="btn solid">
        <p class="social-text">Or Sign in with social platforms</p>
        <div class="social-media">
          <a href="#" class="social-icon">
            <i class="bx bxl-facebook"></i>
          </a>
          <a href="#" class="social-icon">
            <i class="bx bxl-twitter"></i>
          </a>
          <a href="#" class="social-icon">
            <i class="bx bxl-google"></i>
          </a>
          <a href="#" class="social-icon">
            <i class="bx bxl-linkedin"></i>
          </a>

      </div>
      </form>
    </div>
  </div>
  <div class="panels-container">
    <div class="panel left-panel">
      <div class="content">
        <h3>New Here ?</h3>
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Assumenda quos, earum ipsa ea veritatis, fuga vel architecto necessitatibus, atque minus nisi totam consectetur. Veniam sint dolore perferendis repellendus doloremque eos.

        </p>
        <button class="btn transparent" id="sign-up-btn" >Sign up</button>
        
      </div>
      <img src="./image/log.svg" alt="image" class="image" />
    </div>
    <div class="panel right-panel">
      <div class="content">
        <h3>One Of Us ?</h3>
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Assumenda quos, earum ipsa ea veritatis, fuga vel architecto necessitatibus, atque minus nisi totam consectetur. Veniam sint dolore perferendis repellendus doloremque eos.

        </p>
        <button class="btn transparent" id="sign-in-btn" >Sign in</button>
        
      </div>
      <img src="./image/register.svg" alt="image" class="image" />
    </div>
  </div>
</div>
<script src="app.js"></script>
</body>
</html>