<?php
include("connection.php");
error_reporting(0);

?>

<html>
<head>
    <title>Sign Up form</title>
    <link rel="stylesheet" href="style3.css">
</head>
    <body>

        <div class="sign-up-form">
            <h1> Sign Up Now</h1>
            <form>
                
                <input type="text" class="input-box" placeholder="Your Email" name="email">
                <input type="password" class="input-box" placeholder="Your Password" name="password">
                
                
                <input type="submit" id="button" name="submit">

            </form>
        </div>
    </body>

</html>
<?php


$em=$_GET['email'];
$pwd=$_GET['password'];


$query="INSERT INTO signup VALUES('$em','$pwd')";
$data=mysqli_query($conn,$query);

if($data)
{
    ?>
    <script>
      alert('Successful');  
    </script>
    <?php
}
else
{
    //echo "Failed to insert data";
    ?>
    <script>
      alert('Successful');  
    </script>
    <?php
}
?>
