<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <link rel="stylesheet" href="login-page.css">
  <script defer src="login-page.js"></script>
  <style>
      html {
  height: 100%;
}

body {
  height: 100%;
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
  display: grid;
  justify-items: center;
  align-items: center;
  background-color: #3a3a3a;
}

#main-holder {
  width: 50%;
  height: 70%;
  display: grid;
  justify-items: center;
  align-items: center;
  background-color: white;
  border-radius: 7px;
  box-shadow: 0px 0px 5px 2px black;
}

#login-error-msg-holder {
  width: 100%;
  height: 100%;
  display: grid;
  justify-items: center;
  align-items: center;
}

#login-error-msg {
  width: 23%;
  text-align: center;
  margin: 0;
  padding: 5px;
  font-size: 12px;
  font-weight: bold;
  color: #8a0000;
  border: 1px solid #8a0000;
  background-color: #e58f8f;
  opacity: 0;
}

#error-msg-second-line {
  display: block;
}

#login-form {
  align-self: flex-start;
  display: grid;
  justify-items: center;
  align-items: center;
}

.login-form-field::placeholder {
  color: #3a3a3a;
}

.login-form-field {
  border: none;
  border-bottom: 1px solid #3a3a3a;
  margin-bottom: 10px;
  border-radius: 3px;
  outline: none;
  padding: 0px 0px 5px 5px;
}

#login-form-submit {
  width: 100%;
  padding: 7px;
  border: none;
  border-radius: 5px;
  color: white;
  font-weight: bold;
  background-color: #3a3a3a;
  cursor: pointer;
  outline: none;
}
.button{
  width: 100%;
  padding: 7px;
  border: none;
  border-radius: 5px;
  color:black;
  font-weight: bold;
  background-color: white;
  cursor: pointer;
  outline: none;
}
.btn{
  width: 100%;
  padding: 7px;
  border: none;
  border-radius: 5px;
  color:white;
  font-weight: bold;
  background-color: black;
  cursor: pointer;
  outline: none;

}
  </style>
</head>

<body>
  <main id="main-holder">
    <!-- <h1 id="login-header">Login</h1> -->
    <h2 id="login-header">AICTE SIGN UP</h2>
    
    <div>
        <form id="login-form">
            <input type="text" name="username" id="username-field" class="login-form-field" placeholder="Email">
      <input type="password" name="password" id="password-field" class="login-form-field" placeholder="Create Password">
      <input type="text" name="college_name" id="college_name-field" class="login-form-field" placeholder="College Name">
      <div>
        <button class="btn">Create New Account</button>
    </div>
    </form>
    </div>
      <a href='http://localhost/cwd/LogIn.php'><button class="btn">Sign In</button></a>
  </div>
  </main>
</body>

</html>