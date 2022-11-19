<?php
session_start();
// it need ??
session_unset();
session_destroy();

header("location:../views");
exit;
?>