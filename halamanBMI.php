<?php
 include_once 'header.php';
 include_once 'sidebar.php';
?>
<div class="content-wrapper">

<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Fixed Layout</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item"><a href="#">Layout</a></li>
              <li class="breadcrumb-item active">Fixed Layout</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <!-- Default box -->
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Title</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
              </div>
              <div class="card-body">
                Start creating your amazing application!
              </div>
              <!-- /.card-body -->
              <div class="card-footer">
                Footer
              </div>
              <!-- /.card-footer-->
            </div>
            <!-- /.card -->
          </div>
        </div>
      </div>
    </section>
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootsrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <title>OUTPUT</title>
</head>

<body>

<div class="container">
  <h2 class="text-center mb-5">From Pasien</h2>
<form action="HalamanBMI.php" method="GET">
  <div class="form-group row">
    <label for="nama" class="col-4 col-form-label">Nama Lengkap</label> 
    <div class="col-8">
      <input id="nama" name="nama__lengkap" type="text" class="from-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="berat" class="col-4 col-form-label">Berat</label> 
    <div class="col-8">
      <input id="berat" name="berat__" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="umur" class="col-4 col-form-label">umur</label> 
    <div class="col-8">
      <input id="umur" name="umur__" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="tinggi" class="col-4 col-form-label">Tinggi Badan</label> 
    <div class="col-8">
      <input id="tinggi" name="tinggi__" type="text" class="from-control">
    </div>
  </div>
  <div class="form-group row">
    <label class="col-4">Jenis Kelamin</label> 
    <div class="col-8">
      <div class="form-check mr-auto">
        <input class="from-check-input" type="radio" id="laki" name="jenis__kelamin" value="Laki-Laki"> 
        <label class="from_check-label mr-5" for="laki">
          Laki-Laki
        </label>
        <input class="from-check-input" type="radio" id="perempuan" name="jenis__kelamin" value="perempuan"> 
        <label class="from_check-label mr-5" for="perempuan">
          Perempuan
        </label>
      </div>
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-4 col-8">
      <input type="submit" value="SIMPAN" name="proses">
    </div>
  </div>
</form>
</dive>
<hr>
<?php require_once "classBMI.php"; ?>

<div class="container">
  <h2 class="text-center mb-5">Data BMI Pasien</h2>
  <table class="table table-hover table-striped">
    <thead>
      <tr>
        <th scope="cool">#</th>
        <th scope="cool">Nama Lengkap</th>
        <th scope="cool">Gender</th>
        <th scope="cool">Umur</th>
        <th scope="cool">Berat</th>
        <th scope="cool">Tinggi</th>
        <th scope="cool">BMI</th>
        <th scope="cool">Hasil</th>
      </tr>
    </thead>
    <tbody>
      <?php
      $nomor = 1;
      foreach ($ar_pasien as $pasien) {
        echo '<tr><td>' . $nomor . '</td>';
        echo 'td' . $pasien['nama'] . '</td>';
        echo 'td' . $pasien['kelamin'] . '</td>';
        echo 'td' . $pasien['umur'] . '</td>';
        echo 'td' . $pasien['berat'] . '</td>';
        echo 'td' . $pasien['tinggi'] . '</td>';
        $BMI = $pasien["berat"] / (($pasien["tinggi"] / 100) ** 2);
        echo 'td' . number_format($BMI, 1). '</td>';
        echo '</tr>';
        $nomor++;
      }
      ?>
    </tbody>
  </table>
</div>

</div>
<?php
 include_once 'footer.php';
?>