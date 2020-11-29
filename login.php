<?php
session_start();

?>

<html>
<head>
    <title>Log In</title>
    <link rel="stylesheet" href="style3.css">
</head>
    <body>
        <?php
        include("connection.php");
        if(isset($_POST['submit']))
        {
             $email = $_POST['email'];
             $password = $_POST['password'];

             $query = " select * from signup where email ='$email' && password = '$password'";
             $data = mysqli_query($conn,$query);
             $total = mysqli_num_rows($data);
             if($total==1)
             {
                header('location:index.php');
             }
             else
             {
                echo "login failed";
             }
        }
        ?>

        <div class="sign-up-form">
            <h1> Login Now</h1>
            <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="POST">
                <input type="email" class="input-box" placeholder="Your Email" name="email">
                <input type="password" class="input-box" placeholder="Your Password" name="password">
                <input type="submit" name="submit" value="login"/>

            </form>
        </div>
    </body>

</html>
