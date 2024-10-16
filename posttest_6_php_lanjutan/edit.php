<?php
    require "koneksi.php";

    // Mengambil ID yang dilempar oleh link
    $id = $_GET['id'];

    $result = mysqli_query($conn, "SELECT * FROM suggestion_box WHERE id_pelanggan = $id");
    
    $pelanggan = [];

    while ($row = mysqli_fetch_assoc($result)) {
        $pelanggan[] = $row;
    }

    $pelanggan = $pelanggan[0];

    if (isset($_POST['ubah'])) {
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $pesan = $_POST['pesan'];

    $sql = "UPDATE suggestion_box SET nama='$nama', Email='$email', Pesan='$pesan' WHERE id_pelanggan=$id";

    $result = mysqli_query($conn, $sql);

    if ($result) {
        echo "
        <script>
            alert('Data berhasil diubah!');
            document.location.href = 'lihatdata.php';
        </script>";
    } else {
        echo "
        <script>
            alert('Data gagal diubah!');
            document.location.href = 'lihatdata.php';
        </script>";
    }
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ShoesLaundry</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="crud.css">


    <link href="https://fonts.googleapis.com/css2?family=Shrikhand&family=Spicy+Rice&display=swap" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css2?family=Shrikhand&display=swap" rel="stylesheet">
</head>

<body onload="hidePreloader()">

    <div id="preloader">
        <img src="assets/preloading.gif" alt="preloader">
        </div>
        <section id="contact">
            <h2>Edit Pesan</h2>
            <form method="POST" action="">
                
                
                <div class="input-field">
                <label class="label-field" for="name">Nama:</label>
                <input type="text" id="name" name="nama" value="<?php echo $pelanggan['nama'] ?>" required>
                </div>

                <div class="input-field">
                <label class="label-field" for="email">Email:</label>
                <input type="email" id="email" name="email" value="<?php echo $pelanggan['Email'] ?>" required>
                </div>

                <div class="input-field">
                <label class="label-field" for="message">Pesan:</label>
                <textarea id="message" name="pesan" value="" required><?php echo $pelanggan['Pesan'] ?></textarea>
                </div>

                <input class="button" type="submit" value="Ubah" name="ubah">
            </form>
        </section>

    <script src="https://unpkg.com/feather-icons"></script>

    <script>
        feather.replace();
    </script>

    
    <script src="script.js"></script>
</body>

</html>