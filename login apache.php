<?php $user= $_POST['user']; $password = $_POST['password']; if ($user=== 'redes' && $password === 'redes') { 
    header('Location: ./index2.html'); exit;
  } else {
    header('Location: index.html?error=1'); exit;
  }
?>
