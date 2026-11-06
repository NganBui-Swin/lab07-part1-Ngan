<?php
  session_start();
  $username = $_POST['username'];
  $password = $_POST['password'];

  if ($username == 'bobo' && $password == 'bobo123') {
    $_SESSION['user'] = $username;
    header('Location: welcome.php');
  } else {
    include 'header.inc';
    echo "Who r u bro? <a href='login.php'>Try again</a>";
    include 'footer.inc';
  }
?>