<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Login</title>
</head>

<body>
   
        <form method="post" action=<?= $_SERVER['PHP_SELF']; ?>>
      <div class="title">Welcome</div>
      <div class="subtitle">Let's Log In</div>
      <div class="input-container ic1">
        <input id="username" name="username" class="input" type="text" placeholder=" " />
        <div class="cut"></div>
        <label for="firstname" class="placeholder">username</label>
      </div>
      <div class="input-container ic2">
        <input id="password" name="password" class="input" type="password" placeholder=" " />
        <div class="cut"></div>
        <label for="password" class="placeholder">password</label>
      </div>
      <button type="text" name="submit" class="submit">submit</button>
    </form>
</body>
</html>
<style>
    body {
  align-items: center;
  background-color: #000;
  display: flex;
  justify-content: center;
  height: 100vh;
}

.form {
  background-color: #15172b;
  border-radius: 20px;
  box-sizing: border-box;
  height: 500px;
  padding: 20px;
  width: 320px;
}

.title {
  color: #eee;
  font-family: sans-serif;
  font-size: 36px;
  font-weight: 600;
  margin-top: 30px;
}

.subtitle {
  color: #eee;
  font-family: sans-serif;
  font-size: 16px;
  font-weight: 600;
  margin-top: 10px;
}

.input-container {
  height: 50px;
  position: relative;
  width: 100%;
}

.ic1 {
  margin-top: 40px;
}

.ic2 {
  margin-top: 30px;
}

.input {
  background-color: #303245;
  border-radius: 12px;
  border: 0;
  box-sizing: border-box;
  color: #eee;
  font-size: 18px;
  height: 100%;
  outline: 0;
  padding: 4px 20px 0;
  width: 100%;
}

.cut {
  background-color: #15172b;
  border-radius: 10px;
  height: 20px;
  left: 20px;
  position: absolute;
  top: -20px;
  transform: translateY(0);
  transition: transform 200ms;
  width: 76px;
}

.cut-short {
  width: 50px;
}

.input:focus ~ .cut,
.input:not(:placeholder-shown) ~ .cut {
  transform: translateY(8px);
}

.placeholder {
  color: #65657b;
  font-family: sans-serif;
  left: 20px;
  line-height: 14px;
  pointer-events: none;
  position: absolute;
  transform-origin: 0 50%;
  transition: transform 200ms, color 200ms;
  top: 20px;
}

.input:focus ~ .placeholder,
.input:not(:placeholder-shown) ~ .placeholder {
  transform: translateY(-30px) translateX(10px) scale(0.75);
}

.input:not(:placeholder-shown) ~ .placeholder {
  color: #808097;
}

.input:focus ~ .placeholder {
  color: #dc2f55;
}

.submit {
  background-color: #08d;
  border-radius: 12px;
  border: 0;
  box-sizing: border-box;
  color: #eee;
  cursor: pointer;
  font-size: 18px;
  height: 50px;
  margin-top: 38px;
  // outline: 0;
  text-align: center;
  width: 100%;
}

.submit:active {
  background-color: #06b;
}

</style>
<?php
if (isset($_POST['submit'])) {
    $conn = mysqli_connect("localhost", "root", "", "insight", "3308");
    if (!$conn) {
        echo "cannot connect to database" . mysqli_connect_error($conn);
        exit;
    }
    $username = $_POST['username'];
    $password = $_POST['password'];

    if ($username == "" and $password == "") {
        echo "<script>
    alert('fields cannot be empty');
    window.location.href = 'http://localhost/insight/login.php';
    </script>
    ";
    }

    $query = "SELECT username,password FROM users WHERE username='$username'";
    $result = mysqli_query($conn, $query);
    $row = mysqli_fetch_assoc($result);


    if (!$row) {
        echo "<script> alert('user does not exist');
    window.location.href = 'http://localhost/insight/login.php';
    </script>";
    }

    else if ($username != $row['username'] or $password != $row['password']) {
        echo "<script>
    alert('username and password mismatch try again');
    window.location.href = 'http://localhost/insight/index.html';
    </script>";
    } else if ($username == $row['username'] and $password == $row['password']) {
        $_SESSION['user']=$username;
        echo "<script>
    alert('sucessful');
    window.location.href = 'http://localhost/insight/index.html';
    </script>";
    }
    else {
        echo "<script>alert('incorrect password please try again');
        window.location.href = 'http://localhost/insight/login.php';
        </script>";
    }


}
?>