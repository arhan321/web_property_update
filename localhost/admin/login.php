<?php

include '../components/connect.php';

if(isset($_POST['submit'])){

   $name = $_POST['name'];
   $name = filter_var($name); 
   $pass = $_POST['pass'];
   $pass = filter_var($pass); 

   $select_admins = $conn->prepare("SELECT * FROM `admins` WHERE name = ? LIMIT 1");
   $select_admins->execute([$name]);
   $row = $select_admins->fetch(PDO::FETCH_ASSOC);

   if($select_admins->rowCount() > 0) {
      // Check if the password is hashed using sha1
      if (password_verify($pass, $row['password'])) {
         setcookie('admin_id', $row['id'], time() + 60*60*24*30, '/');
         header('location:dashboard.php');
         exit(); 
      } else if (sha1($pass) === $row['password']) {
         // Update the password to use password_hash()
         $new_hashed_password = password_hash($pass, PASSWORD_DEFAULT);
         $update_password = $conn->prepare("UPDATE `admins` SET `password` = ? WHERE `id` = ?");
         $update_password->execute([$new_hashed_password, $row['id']]);
         setcookie('admin_id', $row['id'], time() + 60*60*24*30, '/');
         header('location:dashboard.php');
         exit(); 
      } else {
         $warning_msg[] = 'Incorrect username or password!';
      }
   } else {
      $warning_msg[] = 'Incorrect username or password!';
   }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Login</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="../css/admin_style.css">

</head>
<body style="padding-left: 0;">

<!-- login section starts  -->

<section class="form-container" style="min-height: 100vh;">

   <form action="" method="POST">
      <h3>welcome back!</h3>
      <p>Dashboard<span> Admin</span> <span>Property</span></p>
      <input type="text" name="name" placeholder="enter username" maxlength="20" class="box" required oninput="this.value = this.value.replace(/\s/g, '')">
      <input type="password" name="pass" placeholder="enter password" maxlength="20" class="box" required oninput="this.value = this.value.replace(/\s/g, '')">
      <input type="submit" value="login now" name="submit" class="btn">
   </form>

</section>

<!-- login section ends -->

<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>

<?php include '../components/message.php'; ?>

</body>
</html>


<!-- if login forgot password  -->
<!-- if(isset($_POST['submit'])){

   $name = $_POST['name'];
   $name = filter_var($name, FILTER_SANITIZE_FULL_SPECIAL_CHARS); 
   $pass = $_POST['pass'];
   $pass = filter_var($pass, FILTER_SANITIZE_FULL_SPECIAL_CHARS); 

   $select_admins = $conn->prepare("SELECT * FROM admins WHERE name = ? LIMIT 1");
   $select_admins->execute([$name]);
   $row = $select_admins->fetch(PDO::FETCH_ASSOC);

   if($select_admins->rowCount() > 0) {
      // Directly compare the plain-text password
      if ($pass === $row['password']) {
         setcookie('admin_id', $row['id'], time() + 60*60*24*30, '/');
         header('location:dashboard.php');
         exit(); 
      } else {
         $warning_msg[] = 'Incorrect username or password!';
      }
   } else {
      $warning_msg[] = 'Incorrect username or password!';
   }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Login</title>


   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">


   <link rel="stylesheet" href="../css/admin_style.css">

</head>
<body style="padding-left: 0;">



<section class="form-container" style="min-height: 100vh;">

   <form action="" method="POST">
      <h3>welcome back!</h3>
      <p>Dashboard<span> Admin</span> TututMul<span>Property</span></p>
      <input type="text" name="name" placeholder="enter username" maxlength="20" class="box" required oninput="this.value = this.value.replace(/\s/g, '')">
      <input type="password" name="pass" placeholder="enter password" maxlength="20" class="box" required oninput="this.value = this.value.replace(/\s/g, '')">
      <input type="submit" value="login now" name="submit" class="btn">
   </form>

</section>



<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>

</body>
</html> -->
