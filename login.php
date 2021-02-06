<?php
include "conn.php";

if(isset($_POST['submit'])){
    $username = trim($_POST['username']);
    $pass = trim($_POST['password']);
   
    $sql = "SELECT * FROM register WHERE username = '$username'";
    $result = $conn->query($sql);

if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc()) {
    $id = $row["id"];
    $user = $row["username"]; 
    $passw = $row["password"];

    if(($username == $user) && ($pass == $passw)){
        header('location: upload.php');
    }
  }
} else {
  echo "0 results";
}
$conn->close();



         
        
   


}





?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project01</title>
    <!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">



    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
    -->

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Big+Shoulders+Display:wght@500&display=swap" rel="stylesheet">
</head>
<body style='background-color:#e6f7ff;'>
        <div>
            
            <h1 style='font-family:big shoulder display; color:#3366ff'>College Library</h1>
        </div>
    
        <div style='margin-top:60px'>
        
            <form class="row g-3"  method="post"    style='width:45%; margin:auto; font-family:big shulder display;   background-color: hsla(89, 43%, 51%, 0.3); border-radius:20px;'>
            <div>
                <h2>Log In</h2>
            </div>
        
        <div class="col-md-6" style='margin-top:10px;'>
            <label for="inputEmail4" class="form-label">User Name</label>
            <input type="text" class="form-control" id="inputEmail4" name="username" required>
        </div>
       
        
        <div class="col-md-6" style='margin-top:10px;'>
            <label for="inputPassword4" class="form-label">Password</label>
            <input type="password" class="form-control" id="inputPassword4" name="password" required>
        </div>
        
       
        
        
        
        <div class="col-12" style='margin-top:10px;'>
            <button type="submit" class="btn btn-primary" name="submit">Login</button>
            <p>New User <a href="index.php">Register Here</a></p>
        </div>
    </form>
        </div>
</body>
</html>