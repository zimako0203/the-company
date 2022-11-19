<?php
session_start();

include "../classes/user.php";

$user = new User;
$user_list = $user->getUsers();

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>the company</title>
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

<main class="container py-5">
        <h2 class="h3 text-muted">Product List</h2>
        <table class="table table-hover mt-4">
            <thead class="table-light">
                <tr>
                    <th>#</th>
                    <th>First name</th>
                    <th>Last Name</th>
                    <th>Username</th>
                    <th style="width: 95px"></th>   <!-- for the action buttons -->
                </tr>
            </thead>
            <tbody>
          <?php
          while($user_details=$user_list->fetch_assoc()){
            ?>
            <tr>
              <td><?= $user_details['id']?></td>
              <td><?= $user_details['first_name']?></td>
              <td><?= $user_details['last_name']?></td>
              <td><?= $user_details['username']?></td>
              <td>
                <a href="edit-user.php?user_id=<?= $user_details['id'] ?>" class="btn btn-outline-secondary btn-sm"><i class="fas fa-pencil-alt"></i></a>
                <a href="delete-user.php?user_id=<?= $user_details['id']?>" class="btn btn-outline-danger btn-sm"><i class="fas fa-trash"></i></a></td>
            </tr>
          <?php }

          ?>
        </tbody>
        </table>
    </main>

  
</body>
</html>