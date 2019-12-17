<?php
	$con = new mysqli("localhost","root","4","aplikasi_pemilihan_lahan_obat");
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
  <meta name="author" content="GeeksLabs">
  <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
  <link rel="shortcut icon" href="img/favicon.png">

  <title>Creative - Bootstrap Admin Template</title>

  <!-- Bootstrap CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <!-- bootstrap theme -->
  <link href="css/bootstrap-theme.css" rel="stylesheet">
  <!--external css-->
  <!-- font icon -->
  <link href="css/elegant-icons-style.css" rel="stylesheet" />
  <link href="css/font-awesome.min.css" rel="stylesheet" />
  <!-- full calendar css-->
  <link href="assets/fullcalendar/fullcalendar/bootstrap-fullcalendar.css" rel="stylesheet" />
  <link href="assets/fullcalendar/fullcalendar/fullcalendar.css" rel="stylesheet" />
  <!-- easy pie chart-->
  <link href="assets/jquery-easy-pie-chart/jquery.easy-pie-chart.css" rel="stylesheet" type="text/css" media="screen" />
  <!-- owl carousel -->
  <link rel="stylesheet" href="css/owl.carousel.css" type="text/css">
  <link href="css/jquery-jvectormap-1.2.2.css" rel="stylesheet">
  <!-- Custom styles -->
  <link rel="stylesheet" href="css/fullcalendar.css">
  <link href="css/widgets.css" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet">
  <link href="css/style-responsive.css" rel="stylesheet" />
  <link href="css/xcharts.min.css" rel=" stylesheet">
  <link href="css/jquery-ui-1.10.4.min.css" rel="stylesheet">
  <!-- =======================================================
    Theme Name: NiceAdmin
    Theme URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
    Author: BootstrapMade
    Author URL: https://bootstrapmade.com
  ======================================================= -->
</head>

<body>
  <!-- container section start -->
  <section id="container" class="">


    <header class="header dark-bg">
      <div class="toggle-nav">
        <div class="icon-reorder tooltips" data-original-title="Toggle Navigation" data-placement="bottom"><i class="icon_menu"></i></div>
      </div>

      <!--logo start-->
      <a href="index.html" class="logo">Penentuan Lahan <span class="lite">Tanaman Obat</span></a>
      <!--logo end-->

      <div class="top-nav notification-row">
        <!-- notificatoin dropdown start-->
        <ul class="nav pull-right top-menu">

          
          <!-- user login dropdown start-->
          <li class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <span class="profile-ava">
                                <img alt="" src="img/avatar-mini4.jpg">
                            </span>
                            <span class="username">Victor Siginting</span>
                            <b class="caret"></b>
                        </a>
            <ul class="dropdown-menu extended logout">
              <div class="log-arrow-up"></div>
              <li>
                <a href="login.html"><i class="icon_key_alt"></i> Log Out</a>
              </li>
            </ul>
          </li>
          <!-- user login dropdown end -->
        </ul>
        <!-- notificatoin dropdown end-->
      </div>
    </header>
    <!--header end-->

    <!--sidebar start-->
    <aside>
        <div id="sidebar" class="nav-collapse ">
          <!-- sidebar menu start-->
          <ul class="sidebar-menu">
          <li class="active">
              <a class="" href="index.php">
                    <i class="icon_house_alt"></i>
                    <span>Dashboard</span>
              </a>
          </li>
          
          <li class="sub-menu">
            <a href="javascript:;" class="">
                          <i class="icon_table"></i>
                          <span>Tables</span>
                          <span class="menu-arrow arrow_carrot-right"></span>
                      </a>
            <ul class="sub">
              <li><a class="" href="basic_table.php">Table Target</a></li>
              <!-- <li><a class="" href="basic_table_prediksi.html">Table Prediksi</a></li> -->
              <li><a class="" href="tablePilihanUser.php">Table Data Lahan</a></li>
            </ul>
          </li>
        </ul>
          <!-- sidebar menu end-->
        </div>
      </aside>
    <!--sidebar end-->

    <!--main content start-->
    <section id="main-content">
      <section class="wrapper">
        <!--overview start-->
        <div class="row">
          <div class="col-lg-12">
            <h3 class="page-header"><i class="fa fa-laptop"></i> Dashboard</h3>
            <ol class="breadcrumb">
              <li><i class="fa fa-home"></i><a href="index.html">Home</a></li>
              <li><i class="fa fa-laptop"></i>Dashboard</li>
            </ol>
          </div>
        </div>

        <div class="col-sm-12">
            <section class="panel">
              <header class="panel-heading">
                Table Pilihan User
              </header>
              <table class="table table-striped">
                <thead>
                  <tr>
                    <th>#</th>
                    <th>Lahan</th>
                    <th>Kriteria</th>
                    <th>Sub Kriteria</th>
                    <th>Pilihan User</th>
                    <th>Bobot</th>
                    <th>Factor</th>
                    <th>BobotFactor</th>

                  </tr>
                </thead>
                <tbody>
                  <?php
                    $sql="SELECT  options_kriteria.options, options_kriteria.bobot, pilihan_user.id_lahan, lahan.nama_lahan,
                                  id_sub_kriteria_user.id_factor, kriteria.nama_kriteria, sub_kriteria.nama_sub_kriteria, factor.bobot_factor
                          FROM pilihan_user 
                          INNER JOIN options_kriteria ON options_kriteria.id_options = pilihan_user.id_options
                          INNER JOIN kriteria ON kriteria.id_kriteria = pilihan_user.id_kriteria
                          INNER JOIN sub_kriteria ON sub_kriteria.id_sub_kriteria = pilihan_user.id_sub_kriteria
                          INNER JOIN lahan ON lahan.id_lahan = pilihan_user.id_lahan
                          INNER JOIN id_sub_kriteria_user ON id_sub_kriteria_user.id_sub_kriteria = pilihan_user.id_sub_kriteria
                          INNER JOIN factor ON factor.nama_factor = id_sub_kriteria_user.id_factor
                          ";
                    $hasil = mysqli_query($con, $sql);
                    $no = 1;
                    while($row= mysqli_fetch_assoc($hasil))
                      {
                  ?>
                      <tr>
                        <td> <?= $no ?> </td>
                        <td> <?= $row['nama_lahan'] ?> </td>
                        <td> <?= $row['nama_kriteria'] ?> </td>
                        <td> <?= $row['nama_sub_kriteria'] ?> </td>
                        <td> <?= $row['options'] ?> </td>
                        <td> <?= $row['bobot'] ?> </td>
                        <td> <?= $row['id_factor'] ?> </td>
                        <td> <?= $row['bobot_factor'] ?> </td>
                        
                      </tr>
                  <?php
                      $no++;
                      }
                    ?>
                   </tbody>
              </table>
              
            </section>
          </div>

          <div class="col-sm-12">
            <section class="panel">
              <header class="panel-heading">
                Fuzzy Keanggotaan Pilihan User Jahe
              </header>
              <table class="table table-striped">
                <thead>
                  <tr>
                    <th>#</th>
                    <th>Lahan</th>
                    <th>Id Sub Kriteria</th>
                    <th>Nama Sub Kriteria</th>
                    <th>Bobot</th>
                    <th>Fuzzy</th>
                  </tr>
                </thead>
                <tbody>
                <?php
                    $A1 = 4;
                    $A2 = 4;
                    $A3 = 4;

                    $B1 = 4;
                    $B2 = 5;
                    $B3 = 3;
                    $B4 = 4;

                    $C1 = 3;
                    $C2 = 3;
                    $C3 = 3;

                    $sql="SELECT options_kriteria.bobot, pilihan_user.id_sub_kriteria, sub_kriteria.nama_sub_kriteria,
                          lahan.nama_lahan, pilihan_user.id_pilihan_user
                          FROM pilihan_user 
                          INNER JOIN lahan ON lahan.id_lahan = pilihan_user.id_lahan
                          INNER JOIN sub_kriteria ON sub_kriteria.id_sub_kriteria = pilihan_user.id_sub_kriteria                          
                          INNER JOIN options_kriteria ON options_kriteria.id_options = pilihan_user.id_options
                          ";
                    $hasil = mysqli_query($con, $sql);
                    $no = 1;
                    while($row= mysqli_fetch_assoc($hasil))
                      {
                        if ($row['id_sub_kriteria'] == 1 || $row['id_sub_kriteria'] == 2 || $row['id_sub_kriteria'] == 3 || $row['id_sub_kriteria'] == 4 || $row['id_sub_kriteria'] == 7 ) {
                            $max = $A1;
                        }elseif ($row['id_sub_kriteria'] == 5) {
                            $max = $B2;
                        }else{
                            $max = $C1;
                        }
                        $fuzzy = ($row['bobot']-1)/($max-1);
                        $id_pilihan_user = $row['id_pilihan_user'];
                        // $update_fuzzy_pilihan_user = "UPDATE pilihan_user SET fuzzy_user=$fuzzy WHERE id_pilihan_user = $id_pilihan_user ";
                        // mysqli_query($con, $update_fuzzy_pilihan_user);
                      //   echo '('.$row['id_sub_kriteria'].')'.$row['nama_sub_kriteria']. ' = ' .$row['bobot'].' = '.$fuzzy.'<br>';
                      // }
                  ?>
                      <tr>
                        <td> <?= $no ?> </td>
                        <td> <?= $row['nama_lahan'] ?> </td>
                        <td> <?= $row['id_sub_kriteria'] ?> </td>
                        <td> <?= $row['nama_sub_kriteria'] ?> </td>
                        <td> <?= $row['bobot'] ?> </td>
                        <td> <?= $fuzzy ?> </td>
                        
                      </tr>
                  <?php
                      $no++;
                      }
                    ?>
                   </tbody>
              </table>

            </section>
          </div>

          <div class="col-sm-12">
            <section class="panel">
              <header class="panel-heading">
                Fuzzy Keanggotaan Pilihan User - Target
              </header>
              <table class="table table-striped">
                <thead>
                  <tr>
                    <th>#</th>
                    <th>Lahan</th>
                    <th>Id Sub Kriteria</th>
                    <th>Nama Sub Kriteria</th>
                    <th>Fuzzy User</th>
                    <th>Fuzzy Target</th>
                    <th>Hasil Fuzzy</th>
                    <th>Pembulatan</th>
                    <th>Hasil Fuzzy ke Bobot</th>
                  </tr>
                </thead>
                <tbody>
                <?php
                    $A1 = 4;
                    $A2 = 4;
                    $A3 = 4;

                    $B1 = 4;
                    $B2 = 5;
                    $B3 = 3;
                    $B4 = 4;

                    $C1 = 3;
                    $C2 = 3;
                    $C3 = 3;

                    $sql="SELECT options_kriteria.bobot, pilihan_user.id_sub_kriteria, sub_kriteria.nama_sub_kriteria,
                          lahan.nama_lahan, pilihan_user.id_pilihan_user, target_lahan.fuzzy, pilihan_user.fuzzy_user
                          FROM pilihan_user 
                          INNER JOIN lahan ON lahan.id_lahan = pilihan_user.id_lahan
                          INNER JOIN sub_kriteria ON sub_kriteria.id_sub_kriteria = pilihan_user.id_sub_kriteria                          
                          INNER JOIN options_kriteria ON options_kriteria.id_options = pilihan_user.id_options
                          INNER JOIN target_lahan ON target_lahan.id_sub_kriteria = pilihan_user.id_sub_kriteria
                          ";
                    $hasil = mysqli_query($con, $sql);
                    $no = 1;
                    while($row= mysqli_fetch_assoc($hasil))
                      { 
                        $id_pilihan_user = $row['id_pilihan_user'];
                        $hasilFuzzy = $row['fuzzy_user'] - $row['fuzzy'];
                        $pembulatan = round($hasilFuzzy, 1);
            
                  ?>
                      <tr>
                        <td> <?= $no ?> </td>
                        <td> <?= $row['nama_lahan'] ?> </td>
                        <td> <?= $row['id_sub_kriteria'] ?> </td>
                        <td> <?= $row['nama_sub_kriteria'] ?> </td>
                        <td> <?= $row['fuzzy_user'] ?> </td>
                        <td> <?= $row['fuzzy'] ?> </td>
                        <td> <?= $hasilFuzzy ?> </td>
                        <td>
                          <?= $pembulatan ?>
                        </td>
                        <td>
                            <?php
                              $bobotSelisih = 0;
                              if ($pembulatan == 0) {
                                $bobotSelisih = 11;
                              }elseif ($pembulatan == 0.1) {
                                $bobotSelisih = 10.5;
                              }elseif ($pembulatan == -0.1) {
                                $bobotSelisih = 10;
                              }elseif ($pembulatan == 0.2) {
                                $bobotSelisih = 9.5;
                              }elseif ($pembulatan == -0.2) {
                                $bobotSelisih = 9;
                              }elseif ($pembulatan == 0.3) {
                                $bobotSelisih = 8.5;
                              }elseif ($pembulatan == -0.3) {
                                $bobotSelisih = 8;
                              }elseif ($pembulatan == 0.4) {
                                $bobotSelisih = 7.5;
                              }elseif ($pembulatan == -0.4) {
                                $bobotSelisih = 7;
                              }elseif ($pembulatan == 0.5) {
                                $bobotSelisih = 6.5;
                              }elseif ($pembulatan == -0.5) {
                                $bobotSelisih = 6;
                              }elseif ($pembulatan == 0.6) {
                                $bobotSelisih = 5.5;
                              }elseif ($pembulatan == -0.6) {
                                $bobotSelisih = 5;
                              }elseif ($pembulatan == 0.7) {
                                $bobotSelisih = 4.5;
                              }elseif ($pembulatan == -0.7) {
                                $bobotSelisih = 4;
                              }elseif ($pembulatan == 0.8) {
                                $bobotSelisih = 3.5;
                              }elseif ($pembulatan == -0.8) {
                                $bobotSelisih = 3;
                              }elseif ($pembulatan == 0.9) {
                                $bobotSelisih = 2.5;
                              }elseif ($pembulatan == -0.9) {
                                $bobotSelisih = 2;
                              }elseif ($pembulatan == 1) {
                                $bobotSelisih = 1.5;
                              }elseif ($pembulatan == -1) {
                                $bobotSelisih = 1;
                              }
                              echo $bobotSelisih;
                              // $update_fuzzy_pilihan_user = "UPDATE pilihan_user SET bobotSelisihUser=$bobotSelisih WHERE id_pilihan_user = $id_pilihan_user ";
                              // mysqli_query($con, $update_fuzzy_pilihan_user);
                            ?>
                        </td>
                      </tr>
                  <?php
                      $no++;
                      }
                    ?>
                   </tbody>
              </table>

            </section>
          </div>

          <?php
             // pengambilan bobot Factor dari user
             $sqlBobotFactor="SELECT *
             FROM factor 
             where id_user = 1
             ";
             $hasilsqlBobotFactor = mysqli_query($con, $sqlBobotFactor);
             while($rowBobotFactor= mysqli_fetch_assoc($hasilsqlBobotFactor))
             {
               // echo $rowBobotFactor['bobot_factor'].'<br>';
               if ($rowBobotFactor['nama_factor'] == 'cf') {
                 $bobotCF = $rowBobotFactor['bobot_factor'];
               }elseif ($rowBobotFactor['nama_factor'] == 'sf') {
                 $bobotSF = $rowBobotFactor['bobot_factor'];
               }
             }
          ?>

          <div class="col-sm-12">
            <section class="panel">
              <header class="panel-heading">
                Pembobotan Factor untuk Jarak
              </header>
                <?php
                      for ($i=10; $i<=14 ; $i++) { 
                        $lahan = $row['id_lahan'];
                        $sqlFactor="SELECT 
                              lahan.nama_lahan,
                              id_sub_kriteria_user.id_factor,
                              COUNT(pilihan_user.bobotSelisihUser) as countCF,
                              SUM(pilihan_user.bobotSelisihUser) as bobotSelisihUser
                        FROM pilihan_user 
                        INNER JOIN lahan ON lahan.id_lahan = pilihan_user.id_lahan
                        INNER JOIN id_sub_kriteria_user ON id_sub_kriteria_user.id_sub_kriteria_user = pilihan_user.id_sub_kriteria
                        where pilihan_user.id_lahan = $i AND pilihan_user.id_kriteria = 1 AND id_sub_kriteria_user.id_factor = 'cf'
                        ";
                        $hasilFactor = mysqli_query($con, $sqlFactor);
                        $no = 1;
                        while($rowFactor= mysqli_fetch_assoc($hasilFactor))
                          {
                            $JarakCF[$i] = $rowFactor['bobotSelisihUser']/$rowFactor['countCF'];
                            echo $rowFactor['nama_lahan'].' = '.$rowFactor['id_factor'].' = '.$rowFactor['bobotSelisihUser']/$rowFactor['countCF'] .'<br>';
                          }
                      }
                      for ($i=10; $i<=14 ; $i++) { 
                        $lahan = $row['id_lahan'];
                        $sqlFactor="SELECT 
                              lahan.nama_lahan,
                              id_sub_kriteria_user.id_factor,
                              COUNT(pilihan_user.bobotSelisihUser) as countSF,
                              SUM(pilihan_user.bobotSelisihUser) as bobotSelisihUser
                        FROM pilihan_user 
                        INNER JOIN lahan ON lahan.id_lahan = pilihan_user.id_lahan
                        INNER JOIN id_sub_kriteria_user ON id_sub_kriteria_user.id_sub_kriteria_user = pilihan_user.id_sub_kriteria
                        where pilihan_user.id_lahan = $i AND pilihan_user.id_kriteria = 1 AND id_sub_kriteria_user.id_factor = 'sf'
                        ";
                        $hasilFactor = mysqli_query($con, $sqlFactor);
                        $no = 1;
                        while($rowFactor= mysqli_fetch_assoc($hasilFactor))
                          {
                            $JarakSF[$i] = $rowFactor['bobotSelisihUser']/$rowFactor['countSF'];                            
                            echo $rowFactor['nama_lahan'].' = '.$rowFactor['id_factor'].' = '.$rowFactor['bobotSelisihUser']/$rowFactor['countSF'] .'<br>';
                          }
                      }
                ?>


            </section>
          </div>

          <div class="col-sm-12">
            <section class="panel">
              <header class="panel-heading">
                Total Pembobotan Factor untuk Jarak
              </header>
                <?php
                    // var_dump($JarakCF);
                    $lahan = 1;
                    for ($i=10; $i <=14 ; $i++) { 
                      $totalJarak[$i] = ($JarakCF[$i]*$bobotCF) + ($JarakSF[$i]*$bobotSF);
                      echo 'Lahan '.$lahan.' = ';
                      echo ($JarakCF[$i]*$bobotCF) + ($JarakSF[$i]*$bobotSF).'<br>';
                      $lahan++;
                    }
                ?>
            </section>
          </div>


          <div class="col-sm-12">
            <section class="panel">
              <header class="panel-heading">
                Pembobotan Factor untuk Lokasi
              </header>
                <?php
                      for ($i=10; $i<=14 ; $i++) { 
                        $lahan = $row['id_lahan'];
                        $sqlFactor="SELECT 
                              lahan.nama_lahan,
                              id_sub_kriteria_user.id_factor,
                              COUNT(pilihan_user.bobotSelisihUser) as countCF,
                              SUM(pilihan_user.bobotSelisihUser) as bobotSelisihUser
                        FROM pilihan_user 
                        INNER JOIN lahan ON lahan.id_lahan = pilihan_user.id_lahan
                        INNER JOIN id_sub_kriteria_user ON id_sub_kriteria_user.id_sub_kriteria_user = pilihan_user.id_sub_kriteria
                        where pilihan_user.id_lahan = $i AND pilihan_user.id_kriteria = 2 AND id_sub_kriteria_user.id_factor = 'cf'
                        ";
                        $hasilFactor = mysqli_query($con, $sqlFactor);
                        $no = 1;
                        while($rowFactor= mysqli_fetch_assoc($hasilFactor))
                          {
                            $lokasiCF[$i] = $rowFactor['bobotSelisihUser']/$rowFactor['countCF'];                            
                            echo $rowFactor['nama_lahan'].' = '.$rowFactor['id_factor'].' = '.$rowFactor['bobotSelisihUser']/$rowFactor['countCF'] .'<br>';
                          }
                      }
                      for ($i=10; $i<=14 ; $i++) { 
                        $lahan = $row['id_lahan'];
                        $sqlFactor="SELECT 
                              lahan.nama_lahan,
                              id_sub_kriteria_user.id_factor,
                              COUNT(pilihan_user.bobotSelisihUser) as countSF,
                              SUM(pilihan_user.bobotSelisihUser) as bobotSelisihUser
                        FROM pilihan_user 
                        INNER JOIN lahan ON lahan.id_lahan = pilihan_user.id_lahan
                        INNER JOIN id_sub_kriteria_user ON id_sub_kriteria_user.id_sub_kriteria_user = pilihan_user.id_sub_kriteria
                        where pilihan_user.id_lahan = $i AND pilihan_user.id_kriteria = 2 AND id_sub_kriteria_user.id_factor = 'sf'
                        ";
                        $hasilFactor = mysqli_query($con, $sqlFactor);
                        $no = 1;
                        while($rowFactor= mysqli_fetch_assoc($hasilFactor))
                          {
                            $lokasiSF[$i] = $rowFactor['bobotSelisihUser']/$rowFactor['countSF'];                            
                            echo $rowFactor['nama_lahan'].' = '.$rowFactor['id_factor'].' = '.$rowFactor['bobotSelisihUser']/$rowFactor['countSF'] .'<br>';
                          }
                      }
                ?>
            </section>
          </div>

          <div class="col-sm-12">
            <section class="panel">
              <header class="panel-heading">
                Total Pembobotan Factor untuk Lokasi
              </header>
                <?php
                    // var_dump($JarakCF);
                    $lahan = 1;
                    for ($i=10; $i <=14 ; $i++) { 
                      $totalLokasi[$i] = ($lokasiCF[$i]*$bobotCF) + ($lokasiSF[$i]*$bobotSF);
                      echo 'Lahan '.$lahan.' = ';
                      echo ($lokasiCF[$i]*$bobotCF) + ($lokasiSF[$i]*$bobotSF).'<br>';
                      $lahan++;
                    }
                ?>
            </section>
          </div>


          <div class="col-sm-12">
            <section class="panel">
              <header class="panel-heading">
                Pembobotan Factor untuk Iklim
              </header>
                <?php
                      for ($i=10; $i<=14 ; $i++) { 
                        $lahan = $row['id_lahan'];
                        $sqlFactor="SELECT 
                              lahan.nama_lahan,
                              id_sub_kriteria_user.id_factor,
                              COUNT(pilihan_user.bobotSelisihUser) as countCF,
                              SUM(pilihan_user.bobotSelisihUser) as bobotSelisihUser
                        FROM pilihan_user 
                        INNER JOIN lahan ON lahan.id_lahan = pilihan_user.id_lahan
                        INNER JOIN id_sub_kriteria_user ON id_sub_kriteria_user.id_sub_kriteria_user = pilihan_user.id_sub_kriteria
                        where pilihan_user.id_lahan = $i AND pilihan_user.id_kriteria = 3 AND id_sub_kriteria_user.id_factor = 'cf'
                        ";
                        $hasilFactor = mysqli_query($con, $sqlFactor);
                        $no = 1;
                        while($rowFactor= mysqli_fetch_assoc($hasilFactor))
                          {
                            $iklimCF[$i] = $rowFactor['bobotSelisihUser']/$rowFactor['countCF'];                            
                            echo $rowFactor['nama_lahan'].' = '.$rowFactor['id_factor'].' = '.$rowFactor['bobotSelisihUser']/$rowFactor['countCF'] .'<br>';
                          }
                      }
                      for ($i=10; $i<=14 ; $i++) { 
                        $lahan = $row['id_lahan'];
                        $sqlFactor="SELECT 
                              lahan.nama_lahan,
                              id_sub_kriteria_user.id_factor,
                              COUNT(pilihan_user.bobotSelisihUser) as countSF,
                              SUM(pilihan_user.bobotSelisihUser) as bobotSelisihUser
                        FROM pilihan_user 
                        INNER JOIN lahan ON lahan.id_lahan = pilihan_user.id_lahan
                        INNER JOIN id_sub_kriteria_user ON id_sub_kriteria_user.id_sub_kriteria_user = pilihan_user.id_sub_kriteria
                        where pilihan_user.id_lahan = $i AND pilihan_user.id_kriteria = 3 AND id_sub_kriteria_user.id_factor = 'sf'
                        ";
                        $hasilFactor = mysqli_query($con, $sqlFactor);
                        $no = 1;
                        while($rowFactor= mysqli_fetch_assoc($hasilFactor))
                          {
                            $iklimSF[$i] = $rowFactor['bobotSelisihUser']/$rowFactor['countSF'];                            
                            echo $rowFactor['nama_lahan'].' = '.$rowFactor['id_factor'].' = '.$rowFactor['bobotSelisihUser']/$rowFactor['countSF'] .'<br>';
                          }
                      }
                ?>
            </section>
          </div>


          <div class="col-sm-12">
            <section class="panel">
              <header class="panel-heading">
                Total Pembobotan Factor untuk Iklim
              </header>
                <?php

                    $lahan = 1;
                    for ($i=10; $i <=14 ; $i++) { 
                      $totalIklim[$i] = ($iklimCF[$i]*$bobotCF) + ($iklimSF[$i]*$bobotSF);
                      echo 'Lahan '.$lahan.' = ';
                      echo ($iklimCF[$i]*$bobotCF) + ($iklimSF[$i]*$bobotSF).'<br>';
                      $lahan++;
                    }
                ?>
            </section>
          </div>

          <div class="col-sm-12">
            <section class="panel">
              <header class="panel-heading">
                Hasil Akhir
              </header>
                <?php
                    // pengambilan bobot kriteria dari user
                    $sqlKriteria="SELECT *
                    FROM kriteria_user 
                    where id_user = 1
                    ";
                    $hasilKriteria = mysqli_query($con, $sqlKriteria);
                    while($rowBobotKriteria= mysqli_fetch_assoc($hasilKriteria))
                    {
                      // echo $rowBobotKriteria['bobot_kriteria'].'<br>';
                      if ($rowBobotKriteria['id_kriteria'] == 1) {
                        $bobotJarak = $rowBobotKriteria['bobot_kriteria'];
                      }elseif ($rowBobotKriteria['id_kriteria'] == 2) {
                        $bobotLokasi = $rowBobotKriteria['bobot_kriteria'];
                      }elseif ($rowBobotKriteria['id_kriteria'] == 3) {
                        $bobotIklim = $rowBobotKriteria['bobot_kriteria'];
                      }
                    }

                    $lahan = 1;
                    for ($i=10; $i <=14 ; $i++) { 
                      $hasilAkhir[$i] = ($totalJarak[$i]*0.4)+($totalLokasi[$i]*0.35)+($totalIklim[$i]*0.25);
                      echo 'Lahan '.$lahan.' = ';
                      echo ($totalJarak[$i]*$bobotJarak)+($totalLokasi[$i]*$bobotLokasi)+($totalIklim[$i]*$bobotIklim).'<br>';
                      $lahan++;
                    }
                ?>
            </section>
          </div>

          <div class="col-sm-12">
            <section class="panel">
              <header class="panel-heading">
                Lahan Paling Cocok Adalah
              </header>
                <?php
                    $key = array_keys($hasilAkhir, max($hasilAkhir));
                    
                    if ($key[0] == 10) {
                        $Hasillahan = 'Lahan 1';
                    }elseif ($key[0] == 11) {
                      $Hasillahan = 'Lahan 2';
                    }elseif ($key[0] == 12) {
                      $Hasillahan = 'Lahan 3';
                    }elseif ($key[0] == 13) {
                      $Hasillahan = 'Lahan 4';
                    }
                    elseif ($key[0] == 14) {
                      $Hasillahan = 'Lahan 5';
                    }
                    echo $Hasillahan.' = ';
                    echo max($hasilAkhir);
                ?>
            </section>
          </div>
          


        </div>
        </div>

      </section>
      
    </section>
    <!--main content end-->
  </section>
  <!-- container section start -->

  <!-- javascripts -->
  <script src="js/jquery.js"></script>
  <script src="js/jquery-ui-1.10.4.min.js"></script>
  <script src="js/jquery-1.8.3.min.js"></script>
  <script type="text/javascript" src="js/jquery-ui-1.9.2.custom.min.js"></script>
  <!-- bootstrap -->
  <script src="js/bootstrap.min.js"></script>
  <!-- nice scroll -->
  <script src="js/jquery.scrollTo.min.js"></script>
  <script src="js/jquery.nicescroll.js" type="text/javascript"></script>
  <!-- charts scripts -->
  <script src="assets/jquery-knob/js/jquery.knob.js"></script>
  <script src="js/jquery.sparkline.js" type="text/javascript"></script>
  <script src="assets/jquery-easy-pie-chart/jquery.easy-pie-chart.js"></script>
  <script src="js/owl.carousel.js"></script>
  <!-- jQuery full calendar -->
  <<script src="js/fullcalendar.min.js"></script>
    <!-- Full Google Calendar - Calendar -->
    <script src="assets/fullcalendar/fullcalendar/fullcalendar.js"></script>
    <!--script for this page only-->
    <script src="js/calendar-custom.js"></script>
    <script src="js/jquery.rateit.min.js"></script>
    <!-- custom select -->
    <script src="js/jquery.customSelect.min.js"></script>
    <script src="assets/chart-master/Chart.js"></script>

    <!--custome script for all page-->
    <script src="js/scripts.js"></script>
    <!-- custom script for this page-->
    <script src="js/sparkline-chart.js"></script>
    <script src="js/easy-pie-chart.js"></script>
    <script src="js/jquery-jvectormap-1.2.2.min.js"></script>
    <script src="js/jquery-jvectormap-world-mill-en.js"></script>
    <script src="js/xcharts.min.js"></script>
    <script src="js/jquery.autosize.min.js"></script>
    <script src="js/jquery.placeholder.min.js"></script>
    <script src="js/gdp-data.js"></script>
    <script src="js/morris.min.js"></script>
    <script src="js/sparklines.js"></script>
    <script src="js/charts.js"></script>
    <script src="js/jquery.slimscroll.min.js"></script>
    <script>
      //knob
      $(function() {
        $(".knob").knob({
          'draw': function() {
            $(this.i).val(this.cv + '%')
          }
        })
      });

      //carousel
      $(document).ready(function() {
        $("#owl-slider").owlCarousel({
          navigation: true,
          slideSpeed: 300,
          paginationSpeed: 400,
          singleItem: true

        });
      });

      //custom select box

      $(function() {
        $('select.styled').customSelect();
      });

      /* ---------- Map ---------- */
      $(function() {
        $('#map').vectorMap({
          map: 'world_mill_en',
          series: {
            regions: [{
              values: gdpData,
              scale: ['#000', '#000'],
              normalizeFunction: 'polynomial'
            }]
          },
          backgroundColor: '#eef3f7',
          onLabelShow: function(e, el, code) {
            el.html(el.html() + ' (GDP - ' + gdpData[code] + ')');
          }
        });
      });
    </script>

</body>

</html>
