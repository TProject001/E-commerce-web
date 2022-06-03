<?php

//to remove warning from web-page
error_reporting(0);

$conn = mysqli_connect("localhost:3308", "root", "", "ecommerce") or die("connection failed");
if ($conn) {
} else {
    echo "error occur";
}
if (!empty($_POST['logindt'])) {
    $email = $_POST['email'];
    $password = $_POST['pwd'];
    $query = "SELECT * FROM register WHERE email='$email' AND password='$password'";

    $result = mysqli_query($conn, $query);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="Login style.css">
</head>

<body>
    <form action="" method="post">
        <div class="container">
            <h1>Sign In</h1>
            <p>Login with us</p>
            <hr />

            <label for="email"><b>Email Id</b></label>
            <input type="text" placeholder="Email id" name='email' id='email' required />

            <label for="pwd"><b>Password</b></label>
            <input type="password" placeholder="Enter password" name="pwd" id="pwd" required />

            <hr />
            <input type="submit" name="logindt" value="Login" class="registerbtn">
            <p id="status"></p>

        </div>
    </form>
    <script>
        <?php
        $count = mysqli_num_rows($result);
        if ($count > 0) {
            echo "<a href='index.php?email='></a>"
        //    if(isset($_POST['email'])){
         //       header("Location: index.php");
           // }
        ?>
            document.getElementById("status").innerHTML = "Login successfully";
            setInterval(()=>{
                location.replace('index.php');
            })
        <?php
        } else {
        ?>
            document.getElementById("status").innerHTML = "Login not successful";
        <?php
        }
        ?>
    </script>
</body>

</html>