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
    <main class="card w-25 mx-auto border-0 my-5">
        <div class="card-header bg-white border-0">
            <h2 class="card-title text-center text-danger h4 mb-0">Delete User</h2>
        </div>
        <div class="card-body">
            <div class="text-center mb-4">
                <i class="fas fa-exclamation-triangle text-warning display-4 d-block mb-2"></i>
                <p class="fw-bold mb-0">Are you sure you want to delete "<?=$user_details['first_name']?><?=$user_details['last_name']?>"?</p>
            </div>
            <div class="row">
                <div class="col">
                    <a href="dashboards.php" class="btn btn-secondary w-100">Cancel</a>
                </div>
                <div class="col">
                    <!-- <form method="get" actions="../actions/delete-user.php">
                    <input type="hidden" name="user_id" value="<?=$user_details['id']?>">  
                        <button type="submit" class="btn btn-outline-danger w-100" name="btn_delete">Delete</button>
                    </form> -->
                    <a href="../actions/delete-user.php?user_id=<?=$user_details['id']?>">delete</a>
                </div>
            </div>
        </div>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF"
        crossorigin="anonymous"></script>
  
</body>
</html>