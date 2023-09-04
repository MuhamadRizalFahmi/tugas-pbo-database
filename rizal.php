<?php
// include 'dbcontroller.php';
require_once('dbcontroller.php');
$db = new dbcontroller();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>

<body>
    <!-- Navbar -->
<nav class="navbar navbar-expand-lg bg-body-tertiary mb-3">
  <div class="container ">
    <a class="navbar-brand" href="#">SMKN 40 Jakarta</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" aria-disabled="true">Disabled</a>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
<!-- Akhir Navbar -->

<!-- Cards kelas-->
<div class="container" id="kelas">
        <h1 class="text-center text-center mb-5 mt-3">Kelas</h1>
        <div class="row text-center justify-content-center">

            <?php
            $sql = "select * from t_kelas";
            $row = $db->getALL($sql);
            foreach ($row as $kelas) :
            ?>

            <div class="card-all col-md-4 col-xl-4 mb-5" data-aos="flip-right" data-aos-duration="1000">
                <div class="card" style="width: 18rem;">
                    <img src="kelas/<?php echo $kelas['f_nama']; ?>.jpg" class="card-img-top" alt="Kelas">
                    <div class="card-body">
                        <h5 class="card-title text-dark">

                            <?php echo $kelas['f_nama']; ?>

                        </h5>
                    </div>
                </div>
            </div>

            <?php
            endforeach
            ?>
        </div>
    </div>
 
<!-- akhir card kelas -->

<!-- card jurusan -->

</div>
<div class="container" id="kelas">
        <h1 class="text-center text-center mb-5 mt-3">Jurusan</h1>
        <div class="row text-center justify-content-center">

            <?php
            $sql = "select * from t_jurusan";
            $row = $db->getALL($sql);
            foreach ($row as $jurusan) :
            ?>

            <div class="card-all col-md-4 col-xl-4 mb-5" data-aos="flip-right" data-aos-duration="1000">
                <div class="card" style="width: 18rem;">
                    <img src="img/<?php echo $jurusan['f_nama']; ?>.jpg" class="card-img-top" alt="jurusan">
                    <div class="card-body">
                        <h5 class="card-title text-dark">

                            <?php echo $jurusan['f_nama']; ?>

                        </h5>
                    </div>
                </div>
            </div>

            <?php
            endforeach
            ?>
        </div>
    </div>

<!-- Akhir Cards jurusan -->

<!-- card guru -->
<div class="container mb-5">
<h1 class="mt-5 mb-5 text-center">Guru</h1>
    <div class="row text-center justify-content-center">
        <?php
    $sql2 = "select * from t_guru";
    $row2 = $db->getALL($sql2);
    foreach ($row2 as $guru) :
        ?> 
    <div class="card mb-3" style="max-width: 540px;">
        <div class="row g-0">
            <div class="col-md-4">
                <img src="guru/<?php echo $guru['f_nama'];?>.jpg" class="img-fluid rounded-start" alt="...">
            </div>
            <div class="col-md-8">
                    <div class="card-body">
                         <h5 class="card-title"><?= $guru['f_nama']; ?></h5>
                         <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                         <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                        </div>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
    </div>
</div>
<!-- akhir card guru -->

<div class="container mt-4">
  <h1 class="mt-5 mb-5 text-center">Siswa</h1>
    <div class="row text-center justify-content-center">

        <?php
    $sql2 = "select * from t_siswa";
    $row2 = $db->getALL($sql2);
    foreach ($row2 as $siswa) :
        ?> 
    <div class="card mb-3" style="max-width: 540px;">
        <div class="row g-0">
            <div class="col-md-4">
                <img src="siswa/<?php echo $siswa['f_nama'];?>.jpg" class="img-fluid rounded-start" alt="...">
            </div>
            <div class="col-md-8">
                    <div class="card-body">
                         <h5 class="card-title"><?= $siswa['f_nama']; ?></h5>
                         <p class="card-text">Kelas: XI-RPL</p>
                         <p class="card-text">Jurusan: Rekayasa Perangkat Lunak</p>
                         <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                        </div>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
    </div>
</div>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</body>

</html>