<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <title>Login</title>
</head>
<body>
  <div class="container">
    <div class="card mt-5 w-25 mx-auto">
      <div class="card-header bg-dark text-center">
        <h4 class="card-title h5 text-uppercase">login</h4>
      </div>
      <div class="card-body">
        <form action="../actions/login.php" method="post">
          <label for="username" class="form-label small mt-2">Enter Username</label>
          <input type="text" name="username" id="username" class="mt-2 form-control">

          <label for="password" class="form-label small mt-2">Enter Username</label>
          <input type="password" name="password" id="password" class="mt-2 form-control">

          <input type="submit" value="Login" class="btn btn-outline-success w-100 mt-2" name="btn_submit">
        </form>
        <p class="text-center mt-3 small text-decoration-none"><a href="register.php">Create Account</a></p>
      </div>
    </div>
  </div>
  
</body>
</html>