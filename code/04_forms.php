<html lang="en">
<head>
  <meta charset="UTF-8">
  <link rel="shortcut icon" href="file:///Users/jesperorb/projects/revealjs/favicon.png" type="image/x-icon">
  <title>PHP</title>
  <style>
    html{
      height: 100%;
    }
    body{
      margin-top: 3rem;
      height: 100%;
      background-color: #F5f5f5;
      color: #333;
      font: 100%/1.5 'Helvetica Neue', monospace;
      display: flex;
      align-items: center;
      flex-flow: column;
      text-shadow: 0px 0px 1px rgba(0,0,0,0.1);
    }
  </style>
</head>
<body>
  <?php
    if(isset($_POST["username"])){
      echo $_POST["username"];
    }
  ?>

<form action="index.php" method="POST">
    <input type="text" name="username" />
    <input type="password" name="password" />
    <input type="submit" value="Skicka" />
</form>

<?php

  $name = "Jesper";
  echo "<div class='myDivNotYours'> $name </div>";
    
?>

<div style="color: lightsalmon;"> 
  <?= $name; /* <?php echo $name ?> */ ?> 
</div>

</body>
</html>