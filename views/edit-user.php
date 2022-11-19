<?php
session_start();

include_once "../classes/user.php";

$user= new User;
$user_details=$user->getUser($_GET['user_id']);

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
<nav class="navbar navbar-expand-md navbar-dark bg-dark">
  <a href="dashboards.php" class="navbar-brand">
    <h1 class="h3">The company</h1>
  </a>
  <div class="ml-auto">
    <ul class="navbar-nav">
      <li class="nav-item"><a href="profile.php" class="nav-link"><?= $_SESSION['username']?></a></li>
      <li class="nav-item"><a href="../actions/logout.php" class="nav-link text-danger">Log out</a></li>
    </ul>
  </div>

</nav>
<div class="container">
    <div class="card mt-5 w-25 mx-auto">
      <div class="card-header bg-dark text-center">
        <h4 class="card-title h5 text-uppercase">EDIT USER</h4>
      </div>
      <div class="card-body">
        <form action="../actions/edit-user.php" method="post">
          <input type="hidden" name="user_id" value="<?=$user_details['id']?>">

          <label for="first_name">First name</label>
          <input type="text" name="first_name" id="first_name" class="mt-2 form-control" value="<?=$user_details['first_name']?>" required autofocus>

          <label for="last_name">Last name</label>
          <input type="text" name="last_name" id="last_name" class="mt-2 form-control" value="<?=$user_details['last_name']?>" required>

          <label for="username" class="font-weight-bold">Username</label>
          <input type="text" name="username" id="username" class="mt-2 form-control" maxlength="15" value="<?=$user_details['username']?>" required>

          <div class="text-right">
            <button type="text" class="btn btn-warning btn-sm mt-1">update</button>
            <a href="dashboards.php" class="btn btn-secondary btn-sm">Cancel</a>

          </div>
        </form>
      
      </div>
    </div>
  </div>
  
</body>
</html>