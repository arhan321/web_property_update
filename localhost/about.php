<?php  

include 'components/connect.php';

if(isset($_COOKIE['user_id'])){
   $user_id = $_COOKIE['user_id'];
}else{
   $user_id = '';
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>About Us</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

   <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">    

</head>
<body>
   
<?php include 'components/user_header.php'; ?>

<!-- about section starts  -->

<section class="about">

   <div class="row">
      <div class="image">
         <img src="images/about-img.svg" alt="">
      </div>
      <div class="content">
         <h3>why choose us?</h3>
         <p>Kami menyediakan layanan terbaik dengan tim berdedikasi yang memahami kebutuhan Anda. Dengan database properti luas, mulai dari apartemen mewah hingga rumah keluarga, kami menawarkan banyak pilihan. Tim profesional kami yang berpengalaman memberikan saran ahli dan memastikan proses pembelian atau penyewaan berjalan lancar. Kepuasan klien adalah prioritas kami, dibuktikan oleh banyak testimoni positif. Kami menjamin transparansi dan kejujuran dalam semua transaksi. Dukungan kami hadir di setiap langkah, dari pencarian awal hingga dokumen akhir. Kami juga menawarkan properti di lokasi strategis dengan akses mudah ke fasilitas penting, menjadikan hidup Anda nyaman dan praktis</p>
         <a href="contact.php" class="inline-btn">contact us</a>
      </div>
   </div>

</section>

<!-- about section ends -->

<!-- steps section starts  -->

<section class="steps">

   <h1 class="heading"
   data-aos="fade-up"
   data-aos-duration="1500">3 simple steps</h1>

   <div class="box-container"
   data-aos="fade-up"
   data-aos-duration="1500">

      <div class="box">
         <img src="images/step-1.png" alt="">
         <h3>search property</h3>
         <p>pada web ini bisa mencari property sesuai dengan yang anda inginkan</p>
      </div>

      <div class="box">
         <img src="images/step-2.png" alt="">
         <h3>contact agents</h3>
         <p>bisa menghubungi agent property</p>
      </div>

      <div class="box">
         <img src="images/step-3.png" alt="">
         <h3>enjoy property</h3>
         <p>semoga property yang anda harapkan ada di web ini.</p>
      </div>

   </div>

</section>

<!-- steps section ends -->

<!-- review section starts  -->

<section class="reviews">

   <h1 class="heading"data-aos="fade-up"
   data-aos-duration="1500">client's reviews</h1>

   <div class="box-container">

      <div class="box"
      data-aos="fade-up"
      data-aos-duration="1500">
         <div class="user">
            <img src="images/pic-1.png" alt="">
            <div>
               <h3>atar</h3>
               <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star-half-alt"></i>
               </div>
            </div>
         </div>
         <p>property yang saya harapkan adaa !!!</p>
      </div>

      <div class="box"
      data-aos="fade-up"
   data-aos-duration="1500">
         <div class="user">
            <img src="images/pic-1.png" alt="">
            <div>
               <h3>febru ardiansyah</h3>
               <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star-half-alt"></i>
               </div>
            </div>
         </div>
         <p>rumah di web ini sesuai dengan harapakan saya, keren !!</p>
      </div>

      <div class="box"
      data-aos="fade-up"
      data-aos-duration="1500">
         <div class="user">
            <img src="images/pic-3.png" alt="">
            <div>
               <h3>noval BT</h3>
               <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star-half-alt"></i>
               </div>
            </div>
         </div>
         <p>web ini sangatlah mantap dan profesional</p>
      </div>

      <div class="box"
      data-aos="fade-up"
      data-aos-duration="1500">
         <div class="user">
            <img src="images/pic-3.png" alt="">
            <div>
               <h3>mawan</h3>
               <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star-half-alt"></i>
               </div>
            </div>
         </div>
         <p>web mantap sekali</p>
      </div>

      <div class="box"
      data-aos="fade-up"
      data-aos-duration="1500">
         <div class="user">
            <img src="images/pic-5.png" alt="">
            <div>
               <h3>aryo</h3>
               <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star-half-alt"></i>
               </div>
            </div>
         </div>
         <p>aku wis dapet umah neng jowo</p>
      </div>

      <div class="box"
      data-aos="fade-up"
      data-aos-duration="1500">
         <div class="user">
            <img src="images/pic-6.png" alt="">
            <div>
               <h3>pramuja</h3>
               <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star-half-alt"></i>
               </div>
            </div>
         </div>
         <p>rumah yang saya cari dan cocok sudah tersedia disini !!</p>
      </div>

   </div>

</section>

<!-- review section ends -->











<?php include 'components/footer.php'; ?>

 <!-- gsap animation cdn link  -->
 <script src="https://unpkg.com/gsap@3.9.0/dist/gsap.min.js"></script>

 <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
 <script>
  AOS.init();
</script>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>