<?php
include 'components/connect.php';

$user_id = isset($_COOKIE['user_id']) ? $_COOKIE['user_id'] : '';

if(isset($_POST['submit'])){
   $email = $_POST['email'];
   $pass = sha1($_POST['pass']);

   // Membersihkan input dari potensi serangan SQL Injection
   $email = filter_var($email, FILTER_SANITIZE_EMAIL);
   $pass = filter_var($pass, FILTER_SANITIZE_SPECIAL_CHARS); // Mengganti FILTER_SANITIZE_STRING dengan FILTER_SANITIZE_SPECIAL_CHARS

   // Persiapkan pernyataan SQL dengan parameter terikat untuk menghindari serangan SQL Injection
   $select_users = $conn->prepare("SELECT * FROM `users` WHERE email = ? AND password = ? LIMIT 1");
   $select_users->execute([$email, $pass]);
   $row = $select_users->fetch(PDO::FETCH_ASSOC);

   if($select_users->rowCount() > 0){
      setcookie('user_id', $row['id'], time() + 60*60*24*30, '/');
      header('location:home.php');
      exit(); // Jangan lupa keluar setelah melakukan redirect
   }else{
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
   <link rel="stylesheet" href="css/style.css">

   <!-- gsap animation cdn link  -->
   <script src="https://unpkg.com/gsap@3.9.0/dist/gsap.min.js"></script>

</head>
<body>
   
<?php include 'components/user_header.php'; ?>

<!-- login section starts  -->

<section class="form-container">

   <form action="" method="post">
      <h3>Welcome !!</h3>
      <input type="email" name="email" required maxlength="50" placeholder="enter your email" class="box">
      <input type="password" name="pass" required maxlength="20" placeholder="enter your password" class="box">
      <p>don't have an account? <a href="register.php">register new</a></p>
      <input type="submit" value="login now" name="submit" class="btn">
   </form>

</section>

<!-- login section ends -->










<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>

<?php include 'components/footer.php'; ?>

<!-- custom js file link  -->
<script src="js/script.js"></script>

<?php include 'components/message.php'; ?>

</body>
</html>