<?php
session_start();
if (isset($_SESSION["user"])) {
   header("Location: index.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>APNAmart</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="center">
        <div class="container">
            <div class="right">
                <h1>Log in</h1>
            <div class="form">
        <?php
        if (isset($_POST["login"])) {
           $email = $_POST["email"];
           $password = $_POST["password"];
            require_once "database.php";
            $sql = "SELECT * FROM users WHERE email = '$email'";
            $result = mysqli_query($conn, $sql);
            $user = mysqli_fetch_array($result, MYSQLI_ASSOC);
            if ($user) {
                if (password_verify($password, $user["password"])) {
                    session_start();
                    $_SESSION["user"] = "yes";
                    header("Location: index.php");
                    die();
                }else{
                    echo "<div class='alert alert-danger'>Password does not match</div>";
                }
            }else{
                echo "<div class='alert alert-danger'>Email does not match</div>";
            }
        }
        ?>
      <form action="login.php" method="post"  class="form" >
      Email:<br> <input type="email" placeholder="Enter Email:" name="email" class="number">
      Password:<br> <input type="password" placeholder="Enter Password:" name="password" class="number">
            <button class="continue" name="login">Login</button>
      </form>
      </div>
            </div>
            <div class="left">
                <div class="logo"><img src="logo (1).png" alt=""></div>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil explicabo voluptatem debitis ratione totam ab ad molestiae dolorem rerum voluptates? Ipsam accusantium placeat delectus ullam velit non commodi totam asperiores.</p>
                <div class="login"><p>Already Registered <a href="registration.php">Registration Here</a></p></div>
            </div>
        </div>
    </div>
    <script>
        const scriptURL = 'https://script.google.com/macros/s/AKfycbzjlkAE_wvyzZDL32v9K3Aa1YAAw9iFKfUVQMZV64uEy0WbuoKhF5SWvLQ9eDdJqmDH/exec'
            const form = document.forms['submit-to-google-sheet']
          const success = document.getElementById('success')
            form.addEventListener('submit', e => {
              e.preventDefault()
              fetch(scriptURL, { method: 'POST', body: new FormData(form)})
                .then(response =>{
success.innerHTML="data successfully submit";

setTimeout(function()
{
    success.innerHTML="";
},1000)
form.reset();
                })
                .catch(error => console.error('Error!', error.message))
            })
    </script>
    </body>
</html>