<?php

if(isset($_POST['submit'])){
  if(isset($_POST['email']) == true && empty($_POST['email']) == false){

    $email = $_POST['email'];

    if(filter_var($email, FILTER_VALIDATE_EMAIL) == true){
        echo '<h1>Thank you! I\'ll get back to you ASAP!</h1>';
        echo '<a href="index.php"><button>Home</button></a>';
    } else {
      echo '<h1>Not a valid email address</h1>';
      echo '<a href="form.php"><button>Send email</button></a>';
    }
  }
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="style.css">
  <link rel="icon" href="images/favicon1.ico" type="image/x-icon"/>
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
  <title>Fullstack Developer - Endesnson Mendez</title>
</head>
  <body>
    <div class='form-body'>

     </div>
     <footer class="form-foot2">
       <p>Copyright Endesnson Mendez © 2019</p>
       <p>Icons made by Freepik from www.flaticon.com</p>
     </footer>
  </body>
</html>
