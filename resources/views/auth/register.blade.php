<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <title>Inventory Management System - Register</title>

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">

  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      font-family: 'Poppins', sans-serif;
      background: linear-gradient(135deg, #e0e7ff, #fef9ff);
      min-height: 100vh;
      display: flex;
      align-items: center;
      justify-content: center;
      padding: 20px;
    }

    .register-container {
      background: #ffffff;
      padding: 30px 25px;
      border-radius: 16px;
      box-shadow: 0 8px 30px rgba(0, 0, 0, 0.08);
      width: 100%;
      max-width: 400px;
    }

    .register-container h2 {
      text-align: center;
      margin-bottom: 20px;
      font-weight: 600;
      color: #333;
      font-size: 24px;
    }

    .form-group {
      margin-bottom: 16px;
    }

    .form-group label {
      display: block;
      font-size: 14px;
      margin-bottom: 5px;
      color: #555;
    }

    .form-group input {
      width: 100%;
      padding: 10px 14px;
      border: 1px solid #ccc;
      border-radius: 8px;
      font-size: 14px;
      outline: none;
      transition: border-color 0.3s;
    }

    .form-group input:focus {
      border-color: #6c63ff;
    }

    .form-button {
      margin-top: 15px;
    }

    .form-submit {
      width: 100%;
      padding: 10px;
      background: #6c63ff;
      border: none;
      color: #fff;
      font-size: 15px;
      font-weight: 600;
      border-radius: 8px;
      cursor: pointer;
      transition: background 0.3s;
    }

    .form-submit:hover {
      background: #5a54d1;
    }

    .login-link {
      display: block;
      margin-top: 12px;
      text-align: center;
      font-size: 13px;
      color: #6c63ff;
      text-decoration: none;
      font-weight: 600;
    }

    .login-link:hover {
      text-decoration: underline;
    }
  </style>
</head>

<body>

  <div class="register-container">
    <h2>Create Account</h2>
    <form method="POST" action="{{ route('register') }}">
      @csrf
      <div class="form-group">
        <label for="name">Full Name</label>
        <input type="text" name="name" id="name" placeholder="Your full name" required />
      </div>
      <div class="form-group">
        <label for="email">Email Address</label>
        <input type="email" name="email" id="email" placeholder="Your email" required />
      </div>
      <div class="form-group">
        <label for="password">Password</label>
        <input type="password" name="password" id="password" placeholder="Create password" required />
      </div>
      <div class="form-group">
        <label for="password_confirmation">Confirm Password</label>
        <input type="password" name="password_confirmation" id="password_confirmation" placeholder="Confirm password" required />
      </div>
      <div class="form-button">
        <input type="submit" class="form-submit" value="Register" />
      </div>
    </form>

    <a href="{{ route('login') }}" class="login-link">Already have an account? Log in</a>
  </div>

</body>
</html>
