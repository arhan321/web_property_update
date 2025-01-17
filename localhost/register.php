<?php

include 'components/connect.php';

if(isset($_COOKIE['user_id'])){
   $user_id = $_COOKIE['user_id'];
}else{
   $user_id = '';
}

if(isset($_POST['submit'])){

   $id = create_unique_id();
   $name = $_POST['name'];
   $number = $_POST['number'];
   $email = $_POST['email'];
   $pass = sha1($_POST['pass']);
   $c_pass = sha1($_POST['c_pass']);

   $select_users = $conn->prepare("SELECT * FROM `users` WHERE email = ?");
   $select_users->execute([$email]);

   if($select_users->rowCount() > 0){
      $warning_msg[] = 'Email sudah terdaftar!';
   }else{
      if($pass != $c_pass){
         $warning_msg[] = 'Password tidak cocok!';
      }else{
         // Validasi panjang nomor
         if(strlen($number) > 50) {
            $warning_msg[] = 'Nomor terlalu panjang, maksimal 50 karakter!';
         } else {
            $insert_user = $conn->prepare("INSERT INTO `users`(id, name, number, email, password) VALUES(?,?,?,?,?)");
            $insert_user->execute([$id, $name, $number, $email, $c_pass]);
            
            if($insert_user){
               $verify_users = $conn->prepare("SELECT * FROM `users` WHERE email = ? AND password = ? LIMIT 1");
               $verify_users->execute([$email, $pass]);
               $row = $verify_users->fetch(PDO::FETCH_ASSOC);
            
               if($verify_users->rowCount() > 0){
                  setcookie('user_id', $row['id'], time() + 60*60*24*30, '/');
                  header('location:home.php');
               }else{
                  $error_msg[] = 'Terjadi kesalahan, coba lagi!';
               }
            }

         }
      }
   }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Register</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<?php include 'components/user_header.php'; ?>

<!-- register section starts  -->

<section class="register">

   <form action="" method="post">
      <h3>create an account!</h3>
      <input type="text" name="name" required maxlength="50" placeholder="enter your name" class="box">
      <input type="email" name="email" required maxlength="50" placeholder="enter your email" class="box">
      <input type="number" name="number" required min="0" maxlength="50" placeholder="enter your number" class="box">
      <input type="password" name="pass" required maxlength="20" placeholder="enter your password" class="box">
      <input type="password" name="c_pass" required maxlength="20" placeholder="confirm your password" class="box">
      <p>already have an account? <a href="login.html">login now</a></p>
      <input type="submit" value="register now" name="submit" class="btn">
   </form>

</section>


<!-- register section ends -->

<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>

<?php include 'components/footer.php'; ?>

<!-- custom js file link  -->
<script src="js/script.js"></script>

<?php include 'components/message.php'; ?>

</body>
</html>
