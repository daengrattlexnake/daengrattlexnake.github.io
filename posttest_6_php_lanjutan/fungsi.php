<?php
require "koneksi.php";

if (isset($_POST['tambah'])) { // Mengecek apakah $_POST['tambah'] bernilai true
  $nama = $_POST['nama']; // Mengambil data dari form nama
  $email = $_POST['email']; // mengambil data dari form nim
  $pesan = $_POST['pesan'];
  $file = $_FILES['foto'];
  $tmp_name = $file['tmp_name']; // mengambil data dari form foto
  $file_name = $file['name']; // mengambil data dari form foto

  $validExtension = array('jpg', 'jpeg', 'png'); // Ekstensi file yang diperbolehkan
  $fileExtension = strtolower(end(explode('.', $file_name)));
  if (!in_array($fileExtension, $validExtension)) { // Mengecek apakah ekstensi file yang diupload sesuai dengan yang diperbolehkan
    echo "
      <script>
        alert('Ekstensi file yang diupload tidak diperbolehkan!');
        document.location.href = 'index.php';
      </script>";
    exit;
    } else {
    $newFilenName = date('d-m-y') . '-' . $file_name; // Menggabungkan tanggal sekarang 
    if (move_uploaded_file($tmp_name, 'images/' . $newFilenName)) { // Memindahkan file yang diupload ke folder images
      $sql = "INSERT into suggestion_box values (null, '$nama', '$email', '$pesan', '$newFilenName')"; //
      $result = mysqli_query($conn, $sql); // Menjalankan query
      if ($result) { // Mengecek apakah query berhasil dijalankan
        echo "
          <script>
            alert('Berhasil menambah orderan!');
            document.location.href = 'index.php';   
          </script>";
      } else {
        echo "
          <script>
            alert('Gagal menambah orderan!');
            document.location.href = 'index.php';
          </script>";
      }
    }
  }
}

?>