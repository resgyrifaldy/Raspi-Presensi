<?php
include "config.php";
$query = mysqli_query($connection, "SELECT * FROM data ORDER BY id DESC");
?>
<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

  <title>IOT Presensi</title>
</head>

<body>
  <!-- As a heading -->
  <nav class="navbar navbar-light bg-light">
    <span class="navbar-brand mb-0 h1">PRESENSI RFID</span>
  </nav>
  <div class="jumbotron jumbotron-fluid">
    <div class="container">
      <h2 class="display-4">Presensi IOT</h2>
      <table class="table table-dark">
        <thead>
          <tr>
            <th scope="col">No</th>
            <th scope="col">Nama</th>
            <th scope="col">ID</th>
            <th scope="col">Tanggal</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
          <?php if (mysqli_num_rows($query) > 0) { ?>
            <?php
              $no = 1;
              while ($data = mysqli_fetch_array($query)) {
                ?>
              <tr>
                <th scope="row"><?php echo $no ?></th>
                <td><?php echo $data["nama"]; ?></td>
                <td><?php echo $data["user_id"]; ?></td>
                <td><?php echo $data["date"]; ?></td>
                <td><a href="hapus.php?id=$data['id']">Hapus</a></td>
              </tr>
        </tbody>
      <?php $no++;
        } ?>
    <?php } ?>
      </table>
    </div>
  </div>

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
  <script language="javascript">
    setTimeout(function() {
      window.location.reload(1);
    }, 10000);
  </script>
</body>

</html>