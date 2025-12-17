<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Login Admin</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background: #f4f6f8;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }
    .login-box {
      background: white;
      padding: 30px;
      border-radius: 10px;
      width: 300px;
      box-shadow: 0 4px 10px rgba(0,0,0,.1);
      text-align: center;
    }
    input {
      width: 100%;
      padding: 10px;
      margin: 10px 0;
    }
    button {
      width: 100%;
      padding: 10px;
      background: #1e88e5;
      color: white;
      border: none;
      border-radius: 5px;
      cursor: pointer;
    }
  </style>
</head>
<body>

<div class="login-box">
  <h2>Login Admin</h2>
  <input type="password" id="password" placeholder="Password Admin">
  <button onclick="login()">Login</button>
</div>

<script>
  function login() {
    const pw = document.getElementById("password").value;

    if (pw === "admin123") {
      localStorage.setItem("adminLogin", "true");
      window.location.href = "admin/dashboard.html";
    } else {
      alert("Password salah!");
    }
  }
</script>

</body>
</html>
