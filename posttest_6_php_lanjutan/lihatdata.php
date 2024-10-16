<?php
  require "koneksi.php";

  $sql = mysqli_query($conn, "SELECT * FROM suggestion_box");

  $pelanggan = [];
  while ($row = mysqli_fetch_assoc($sql)) {
      $pelanggan[] = $row;
  }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ShoesLaundry</title>
    <link rel="stylesheet" href="styles.css">

    <link rel="stylesheet" href="boom.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link href="https://fonts.googleapis.com/css2?family=Shrikhand&family=Spicy+Rice&display=swap" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css2?family=Shrikhand&display=swap" rel="stylesheet">
</head>

<body onload="hidePreloader()">

    <div id="preloader">
        <img src="assets/preloading.gif" alt="preloader">
    </div>

    <main class="data-pelanggan-section">
    <section id="contact">
        <h1 class="review-title">
            Review Pengunjung
        </h1>

        <div>
          <?php
            date_default_timezone_set('Asia/Makassar');
            echo "Tanggal : " , date('d/m/Y h:i:sa');
            ?>
        </div>

        <div class="container">
            <a href="index.php">
                <button class="back">
                <p>Back</p>
                </button>
            </a>
        </div>

        <table class="table-pelanggan">
      <thead>
        <tr class="table-data-row">
          <th class="table-data-pelanggan">No</th>
          <th class="table-data-pelanggan">Nama</th>
          <th class="table-data-pelanggan">Email</th>
          <th class="table-data-pelanggan">Pesan</th>
          <th class="table-data-pelanggan">Foto</th>
          <th class="table-data-pelanggan">Aksi</th>
        </tr>
      </thead>
      <tbody>
        <?php $i = 1; foreach($pelanggan as $review) : ?>
          <tr class="table-data-row">
            <td class="table-data"><?php echo $i ?></td>
            <td class="table-data"><?php echo $review['nama'] ?></td>
            <td class="table-data"><?php echo $review['Email'] ?></td>
            <td class="table-data"><?php echo $review['Pesan'] ?></td>
            <td class="table-data">
              <img src="images/<?php echo $review['foto']?> " alt="foto" width="100px" height="100px" style="display:block; margin:0 auto;"/>
          </td>
            <td class="table-data">
              <div class="button-UD">
                <a href="edit.php?id=<?php echo $review['id_pelanggan']?>">
                  <button class="edit-data">
                    <i class="fa-solid fa-pen" style="color: #ffffff;"></i>
                  </button>
                </a> 
                <a href="delete.php?id=<?php echo $review['id_pelanggan']?>" 
                onclick="return confirm('Yakin ingin menghapus data ini?');">
                  <button class="hapus-data">
                    <i class="fa-solid fa-trash-can" style="color: #ffffff;"></i>
                  </button>
                </a>
              </div>
            </td>
          </tr>
        <?php $i++; endforeach ?>
      </tbody>
    </table>
    </main>
    </section>

    <script src="https://unpkg.com/feather-icons"></script>
    <script>
        feather.replace();
    </script>

    
    <script src="script.js"></script>
</body>

</html>