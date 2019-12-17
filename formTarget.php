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
              <li><i class="fa fa-laptop"></i>Lahan ke-1</li>
            </ol>
          </div>
        </div>

        <form class="form-horizontal" method="post">


            <div class="row">
                <div class="col-lg-12">
                  <section class="panel">
                    <header class="panel-heading">
                      Opsi Lahan
                    </header>
                    <div class="panel-body">
                          
                        <div class="form-group">
                              <label class="control-label col-lg-2" for="inputSuccess">Tanaman</label>
                              <div class="col-lg-10">
                                  <select class="form-control m-bot15" name="tanaman">
                                  <?php
                                    $sql="SELECT * FROM jenis_tanaman";
                                    // $hasil=mysqli_query($sql);
                                    $hasil = mysqli_query($con, $sql);
                                    while($row= mysqli_fetch_assoc($hasil))
                                      {
                                        echo "<option value=".$row['id_tanaman'].">".$row['nama_tanaman']."</option>";
                                      }
                                  ?>
                                  </select>
                              </div>
                        </div>
                          
                    </div>
                  </section>
                </div>
              </div>

        <div class="row">
            <div class="col-lg-12">
              <section class="panel">
                <header class="panel-heading">
                  Kriteria Jarak
                </header>
                <div class="panel-body">
                      
                    <div class="form-group">
                          <label class="control-label col-lg-2" for="inputSuccess">Jarak Lahan dengan petani (meter)</label>
                          <div class="col-lg-10">
                            <select class="form-control m-bot15" name="jarakPetani">
                              <?php
                                $sql="SELECT * FROM options_kriteria where id_sub_kriteria = 1";
                                // $hasil=mysqli_query($sql);
                                $hasil = mysqli_query($con, $sql);
                                while($row= mysqli_fetch_assoc($hasil))
                                  {
                                    echo "<option value=".$row['id_options'].">".$row['options']."</option>";
                                  }
                              ?>
                              </select>
                              <select class="form-control m-bot15" name="jarakPetaniFactor">
                                <option value="cf">CF</option>
                                <option value="sf">SF</option>
                              </select>
                          </div>
                      
                          <label class="control-label col-lg-2" for="inputSuccess">Jarak lahan dengan pasar (meter)</label>
                          <div class="col-lg-10">
                            <select class="form-control m-bot15" name="jarakPasar">
                            <?php
                                $sql="SELECT * FROM options_kriteria where id_sub_kriteria = 2";
                                // $hasil=mysqli_query($sql);
                                $hasil = mysqli_query($con, $sql);
                                while($row= mysqli_fetch_assoc($hasil))
                                  {
                                    echo "<option value=".$row['id_options'].">".$row['options']."</option>";
                                  }
                              ?>
                            </select>
                            <select class="form-control m-bot15" name="jarakPasarFactor">
                                <option value="cf">CF</option>
                                <option value="sf">SF</option>
                              </select>

                          </div>

                          <label class="control-label col-lg-2" for="inputSuccess">Jarak lahan dengan pemukiman (meter)</label>
                          <div class="col-lg-10">
                            <select class="form-control m-bot15" name="jarakPemukiman">
                            <?php
                                $sql="SELECT * FROM options_kriteria where id_sub_kriteria = 3";
                                // $hasil=mysqli_query($sql);
                                $hasil = mysqli_query($con, $sql);
                                while($row= mysqli_fetch_assoc($hasil))
                                  {
                                    echo "<option value=".$row['id_options'].">".$row['options']."</option>";
                                  }
                              ?>
                            </select>
                            <select class="form-control m-bot15" name="jarakPemukimanFactor">
                                <option value="cf">CF</option>
                                <option value="sf">SF</option>
                              </select>
                          </div>

                      </div>
                      
                </div>
              </section>
            </div>
          </div>

          <div class="row">
              <div class="col-lg-12">
                <section class="panel">
                  <header class="panel-heading">
                      Kriteria Lokasi
                  </header>
                  <div class="panel-body">
                        
                      <div class="form-group" >
                            <label class="control-label col-lg-2" for="inputSuccess">Luas Tanah (meter persegi)</label>
                            <div class="col-lg-10">
                              <select class="form-control m-bot15" name="luasTanah">
                              <?php
                                $sql="SELECT * FROM options_kriteria where id_sub_kriteria = 4";
                                // $hasil=mysqli_query($sql);
                                $hasil = mysqli_query($con, $sql);
                                while($row= mysqli_fetch_assoc($hasil))
                                  {
                                    echo "<option value=".$row['id_options'].">".$row['options']."</option>";
                                  }
                              ?>
                              </select>
                              <select class="form-control m-bot15" name="luasTanahFactor">
                                <option value="cf">CF</option>
                                <option value="sf">SF</option>
                              </select>

                            </div>
                        
                            <label class="control-label col-lg-2" for="inputSuccess">Ketinggian Lingkungan (mdpl)</label>
                            <div class="col-lg-10">
                              <select class="form-control m-bot15" name="ketinggianLingkungan">
                              <?php
                                $sql="SELECT * FROM options_kriteria where id_sub_kriteria = 5";
                                // $hasil=mysqli_query($sql);
                                $hasil = mysqli_query($con, $sql);
                                while($row= mysqli_fetch_assoc($hasil))
                                  {
                                    echo "<option value=".$row['id_options'].">".$row['options']."</option>";
                                  }
                              ?>

                              </select>
                              <select class="form-control m-bot15" name="ketinggianLingkunganFactor">
                                <option value="cf">CF</option>
                                <option value="sf">SF</option>
                              </select>

                            </div>
  
                            <label class="control-label col-lg-2" for="inputSuccess">Jenis Tanah</label>
                            <div class="col-lg-10 ">
                  
                                <div class="radio">
                                    <label>
                                        <input type="radio" name="jenisTanah" id="optionsRadios1" value="23" checked>
                                        <img src="img/lempung.jpg" height="200" width="200" class="rounded float-left" alt="...">
                                    </label>
                                  </div>
                                  <div class="radio">
                                      <label>
                                          <input type="radio" name="jenisTanah" id="optionsRadios1" value="22" checked>
                                          <img src="img/gembur.jpg" height="200" width="200" class="rounded float-left" alt="...">
                                      </label>
                                  </div>
                                  <div class="radio">
                                      <label>
                                          <input type="radio" name="jenisTanah" id="optionsRadios1" value="24" checked>
                                          <img src="img/berpasir.jpg" height="200" width="200" class="rounded float-left" alt="...">
                                      </label>
                                  </div>
                                  <select class="form-control m-bot15" name="jenisTanahFactor">
                                    <option value="cf">CF</option>
                                    <option value="sf">SF</option>
                                  </select>
                            
                            </div>

                            <div class="mt-4">
                            <label class="control-label col-lg-2 mt-2" for="inputSuccess">Harga Tanah</label>
                            <div class="col-lg-10 mt-2">
                              <select class="form-control m-bot15" name="hargaTanah">
                              <?php
                                $sql="SELECT * FROM options_kriteria where id_sub_kriteria = 7";
                                // $hasil=mysqli_query($sql);
                                $hasil = mysqli_query($con, $sql);
                                while($row= mysqli_fetch_assoc($hasil))
                                  {
                                    echo "<option value=".$row['id_options'].">".$row['options']."</option>";
                                  }
                              ?>
                              </select>
                              <select class="form-control m-bot15" name="hargaTanahFactor">
                                    <option value="cf">CF</option>
                                    <option value="sf">SF</option>
                                  </select>
                            </div>
                            </div>
  
                        </div>
                        
                  </div>
                </section>
              </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                  <section class="panel">
                    <header class="panel-heading">
                      Kriteria Iklim
                    </header>
                    <div class="panel-body">
                          
                        <div class="form-group">
                              <label class="control-label col-lg-2" for="inputSuccess">Panas (meter)</label>
                              <div class="col-lg-10">
                                <select class="form-control m-bot15" name="panas">
                                <?php
                                  $sql="SELECT * FROM options_kriteria where id_sub_kriteria = 8";
                                  // $hasil=mysqli_query($sql);
                                  $hasil = mysqli_query($con, $sql);
                                  while($row= mysqli_fetch_assoc($hasil))
                                    {
                                      echo "<option value=".$row['id_options'].">".$row['options']."</option>";
                                    }
                                ?>
                                </select>
                                <select class="form-control m-bot15" name="panasFactor">
                                    <option value="cf">CF</option>
                                    <option value="sf">SF</option>
                                  </select>
                              </div>
                          
                              <label class="control-label col-lg-2" for="inputSuccess">Dingin (meter)</label>
                              <div class="col-lg-10">
                                <select class="form-control m-bot15" name="dingin">
                                <?php
                                  $sql="SELECT * FROM options_kriteria where id_sub_kriteria = 9";
                                  // $hasil=mysqli_query($sql);
                                  $hasil = mysqli_query($con, $sql);
                                  while($row= mysqli_fetch_assoc($hasil))
                                    {
                                      echo "<option value=".$row['id_options'].">".$row['options']."</option>";
                                    }
                                ?>
                                </select>
                                <select class="form-control m-bot15" name="dinginFactor">
                                    <option value="cf">CF</option>
                                    <option value="sf">SF</option>
                                  </select>
                              </div>
    
                              <label class="control-label col-lg-2" for="inputSuccess">Curah Hujan (meter)</label>
                              <div class="col-lg-10">
                                <select class="form-control m-bot15" name="curahHujan">
                                <?php
                                  $sql="SELECT * FROM options_kriteria where id_sub_kriteria = 10";
                                  // $hasil=mysqli_query($sql);
                                  $hasil = mysqli_query($con, $sql);
                                  while($row= mysqli_fetch_assoc($hasil))
                                    {
                                      echo "<option value=".$row['id_options'].">".$row['options']."</option>";
                                    }
                                ?>
                                </select>
                                <select class="form-control m-bot15" name="curahHujanFactor">
                                    <option value="cf">CF</option>
                                    <option value="sf">SF</option>
                                  </select>
                              </div>
    
                          </div>
                          
                    </div>
                  </section>
                </div>
              </div>

              <section class="panel">
                  <!-- <header class="panel-heading">
                    Block level button
                  </header> -->
                  <div class="panel-body">
                    <button  value="Submit" name="submit" type="submit" class="btn btn-primary btn-lg btn-block">Simpan</button>
                  </div>
                </section>

        </form>

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

<?php
if(isset($_POST["submit"])){
  // var_dump($_POST['submit']);
  // die();
  $id_tanaman = $_POST['tanaman'];

  $jarakPetani = $_POST['jarakPetani'];
  $jarakPetaniFactor = $_POST['jarakPetaniFactor'];
  $jarakPasar = $_POST['jarakPasar'];
  $jarakPasarFactor = $_POST['jarakPasarFactor'];
  $jarakPemukiman = $_POST['jarakPemukiman'];
  $jarakPemukimanFactor = $_POST['jarakPemukimanFactor'];

  $luasTanah = $_POST['luasTanah'];
  $luasTanahFactor = $_POST['luasTanahFactor'];
  $ketinggianLingkungan = $_POST['ketinggianLingkungan'];
  $ketinggianLingkunganFactor = $_POST['ketinggianLingkunganFactor'];
  $jenisTanah = $_POST['jenisTanah'];
  $jenisTanahFactor = $_POST['jenisTanahFactor'];
  $hargaTanah = $_POST['hargaTanah'];
  $hargaTanahFactor = $_POST['hargaTanahFactor'];


  $panas = $_POST['panas'];
  $panasFactor = $_POST['panasFactor'];
  $dingin = $_POST['dingin'];
  $dinginFactor = $_POST['dinginFactor'];
  $curahHujan = $_POST['curahHujan'];
  $curahHujanFactor = $_POST['curahHujanFactor'];

  // $sql = "INSERT INTO lahan (id_user, nama_lahan, id_tanaman, hasil) 
  //         VALUES 
  //         ('1', '$lahan', '$id_tanaman', '0')";
  // $con->query($sql);
  // if ($con->query($sql) === TRUE) {
  //   echo "<script type= 'text/javascript'>alert('New record created successfully');</script>";
  // } else {
  //   echo "<script type= 'text/javascript'>alert('Error: " . $sql . "<br>" . $con->error."');</script>";
  // }

  // $sql14="SELECT * FROM lahan ORDER BY id_lahan DESC";
  // $hasil = mysqli_query($con, $sql14);
  // $row= mysqli_fetch_assoc($hasil);
  // var_dump($row);
  // $id_lahan =  $row['id_lahan'];
  // die();

  // insert sql kriteria jarak
  $sql2 = "INSERT INTO target_lahan 
          (id_tanaman, id_kriteria, id_sub_kriteria, id_options, id_factor) 
          VALUES 
          ('$id_tanaman', '1','1', '$jarakPetani', '$jarakPetaniFactor')";
  $con->query($sql2);

  $sql3 = "INSERT INTO target_lahan 
    (id_tanaman, id_kriteria, id_sub_kriteria, id_options, id_factor) 
    VALUES 
    ('$id_tanaman', '1','2', '$jarakPasar', '$jarakPasarFactor')";
  $con->query($sql3);

  $sql4 = "INSERT INTO target_lahan 
    (id_tanaman, id_kriteria, id_sub_kriteria, id_options, id_factor) 
    VALUES 
    ('$id_tanaman', '1','3', '$jarakPemukiman', '$jarakPemukimanFactor')";
  $con->query($sql4);

    // insert sql kriteria lokasi
    $sql5 = "INSERT INTO target_lahan 
      (id_tanaman, id_kriteria, id_sub_kriteria, id_options, id_factor) 
      VALUES 
      ('$id_tanaman', '2','4', '$luasTanah', '$luasTanahFactor')";
    $con->query($sql5);

    $sql6 = "INSERT INTO target_lahan 
      (id_tanaman, id_kriteria, id_sub_kriteria, id_options, id_factor) 
      VALUES 
      ('$id_tanaman', '2','5', '$ketinggianLingkungan', '$ketinggianLingkunganFactor')";
    $con->query($sql6);

    $sql7 = "INSERT INTO target_lahan 
      (id_tanaman, id_kriteria, id_sub_kriteria, id_options, id_factor) 
      VALUES 
      ('$id_tanaman', '2','6', '$jenisTanah', '$jenisTanahFactor')";
    $con->query($sql7);

    $sql8 = "INSERT INTO target_lahan 
      (id_tanaman, id_kriteria, id_sub_kriteria, id_options, id_factor) 
      VALUES 
      ('$id_tanaman', '2','7', '$hargaTanah', '$hargaTanahFactor')";
    $con->query($sql8);

     // insert sql kriteria iklim
    $sql9 = "INSERT INTO target_lahan 
     (id_tanaman, id_kriteria, id_sub_kriteria, id_options, id_factor) 
     VALUES 
     ('$id_tanaman', '3','8', '$panas', '$panasFactor')";
   $con->query($sql9);


   $sql10 = "INSERT INTO target_lahan 
    (id_tanaman, id_kriteria, id_sub_kriteria, id_options, id_factor) 
    VALUES 
    ('$id_tanaman', '3','9', '$dingin', '$dinginFactor')";
    $con->query($sql10);

    $sql11 = "INSERT INTO target_lahan 
     (id_tanaman, id_kriteria, id_sub_kriteria, id_options, id_factor) 
     VALUES 
     ('$id_tanaman', '3','10', '$curahHujan', '$curahHujanFactor')";
   $con->query($sql11);


  
  $con->close();
  }

?>