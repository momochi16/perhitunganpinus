<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<div class="container mt-3">
  <h2>Daftar Data Training</h2>
  <p>Berikut ini daftar data training yang telah tersimpan :</p>            
  <table class="table table-hover">
    <thead>
      <tr>
        <th>Id.Data</th>
        <th>Lingkar Batang</th>
        <th>Tinggi</th>
        <th>Jenis</th>
      </tr>
    </thead>
    <tbody>
      <?php $sql="SELECT * FROM `datatraining`";
      $q=mysqli_query($koneksi,$sql);
      $r=mysqli_fetch_array($q);
      do {
      ?>
      <tr>
        <td><?php echo $r['IdData'];?></td>
        <td><?php echo $r['Lingkar Batang'];?></td>
        <td><?php echo $r['Tinggi'];?></td>
        <td><?php echo $r['Jenis'];?></td>
      </tr>
      <?php }while($r=mysqli_fetch_array($q));
      ?>
    </tbody>
  </table>
</div>

</body>
</html>