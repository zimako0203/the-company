<?php
session_start();

include_once "../classes/user.php";

$user = new User;
$user_details = $user->getUser($_SESSION['user_id']);

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

<main class="card w-25 mx-auto my-5">
  <img src="../images/<?= $user_details['photo'] ?>" alt="" class="card-img-top">
  <div class="card-body">
    <!-- what is multipart? -->
    <form enctype="multipart/form-data" action="../actions/uploadPhoto.php" method="post">
      <div class="custom-file mb-2">
        <label for="photo" class="custom-file-label">Choose photo</label>
        <input type="file" name="photo" id="photo" class="custom-file-input" required>
      </div>

      <button type="submit" class="btn btn-outline-secondary btn-sm btn-block">Update Photo</button>
    </form>
  </div>
  <div class="card-footer border-0 bg-white">
    <p class="lead font-weight-bold mb-0"><?= $user_details['first_name']."".$user_details['last_name']?></p>
    <p class="lead"><?= $user_details['username']?></p>
  </div>

</main>
  
</body>
</html>