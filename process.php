<?php
$username = $_POST['username'];
$password = $_POST['password'];

  if(isset($_POST['login']))
  {
    if ($username == 'admin' && $password == 'admin') {
      @include 'home.html';

    }
    else {
      @include 'index.html';
    }
  }
 ?>
