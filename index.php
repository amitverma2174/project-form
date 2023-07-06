<?php
$insert = false;
if(isset($_POST['name'])){

$server = "localhost";
$username = "root";
$password = "";

$con = mysqli_connect($server, $username, $password);

if (!$con) {
    die("Could not connect to". mysqli_connect_error());
}
$name=$_POST['name'];
$age=$_POST['age'];
$gender=$_POST['gender'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$desc=$_POST['desc'];
$sql = "INSERT INTO `trip`.`trip` (`NAME`, `AGE`, `GENDER`, `EMAIL`, `PHONENO`, `OTHER`, `DATE`) VALUES
 ('$name', '$age', '$gender', '$email', '$phone', '$desc', current_timestamp());";

if ($con->query($sql)==true) {
    $insert = true;
}
else {
    $insert = false;
}
$con-> close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital@1&family=Sriracha&display=swap" rel="stylesheet">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome To Travel Form</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <img class="bg" src="avbg.jpg" alt="AV TRAVELS"> 
    <div class="container">
    <h1>Welcome to AV  travels </h1>
    <p>Enter your detail so we can reach you </p>
  
 <form action="index.php" method="post">
    <input type="text" name="name" id="name" placeholder="enter your name">
    <input type="text" name="age" id="age" placeholder="enter your age">
    <input type="text" name="gender" id="gender" placeholder="enter your gender">
    <input type="email" name="email" id="email" placeholder="enter your email">
    <input type="phone" name="phone" id="phone" placeholder="enter your phone no">
    <textarea name="desc" id="desc" cols="30" rows="10" placeholder="enter any other information here"></textarea>
    <?php
    if ($insert == true){
  echo "  <p class ='submitmsg'> We will reach you soon </p> ";
    }
    ?>
    <br>
    <button class="btn">Submit</button>
   
 </form>
</div>
    <script src="index.js"></script>
</body>
</html>
