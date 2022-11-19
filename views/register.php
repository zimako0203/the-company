<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>register</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
  <div class="card w-25 my-auto mx-auto">
    <div class="card-header bg-white border-0">
    <h1>REGISTER</h1>
    </div>

    <div class="card-body">
      <form action="../actions/register.php" method="post">
        <label for="first_name">First Name</label>
        <input type="text" name="first_name" id="first_name" class="form-control mb-2"  required autofocus>

        <label for="Last_name">Last Name</label>
        <input type="text" name="last_name" id="last_name" class="form-control mb-2" required>

        <label for="username">UserName</label>
        <input type="text" name="username" id="username" class="form-control mb-2" maxlength="15" required>

        <label for="password">Password</label>
        <input type="password" name="password" id="password" class="form-control mb-2" required>         
        
        <button type="submit" class="btn btn-success btn-block" name="btn_register">REGISTER</button>

        <p class="text-center mt-3 small">Register already?<a href="">Log in.</a></p>
      </form>
    </div>

  </div>
  
</body>
</html>