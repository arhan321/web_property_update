<?php

   $db_host = "property_database";
   $db_name = "web_property";
   $db_user_name = 'root';
   $db_user_pass = 'Djony';

   // Buat DSN (Data Source Name) untuk PDO
   $dsn = "mysql:host=$db_host;dbname=$db_name;charset=utf8mb4";

   try {
      // Buat koneksi PDO
      $conn = new PDO($dsn, $db_user_name, $db_user_pass);

      // Set mode error untuk melempar exception jika terjadi kesalahan
      $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

   } catch (PDOException $e) {
      // Tangkap exception jika koneksi gagal
      die("Koneksi gagal: " . $e->getMessage());
   }

   function create_unique_id(){
      $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
      $charactersLength = strlen($characters);
      $randomString = '';
      for ($i = 0; $i < 20; $i++) {
          $randomString .= $characters[mt_rand(0, $charactersLength - 1)];
      }
      return $randomString;
  }

?>
