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

        <form class="form-horizontal " method="post">

    

              <div class="row">
                <div class="col-lg-12">
                  <section class="panel">
                    <header class="panel-heading">
                      Penentuan Factor Pada Jarak
                    </header>
                    <div class="panel-body">
                          
                        <div class="form-group">
                              <label class="control-label col-lg-2" for="inputSuccess">Jarak Lahan dengan petani</label>
                              <div class="col-lg-10 ">  
                                <div class="radio">
                                    <label>
                                        <input type="radio" name="factorPetani" id="optionsRadios1" value="cf" checked>
                                        Core Factor
                                    </label>
                                  </div>
                                  <div class="radio">
                                      <label>
                                        <input type="radio" name="factorPetani" id="optionsRadios1" value="sf" checked>
                                        Secondary Factor
                                      </label>
                                  </div>
                            </div>

                            <label class="control-label col-lg-2" for="inputSuccess">Jarak lahan dengan pasar</label>
                              <div class="col-lg-10 ">  
                                <div class="radio">
                                    <label>
                                        <input type="radio" name="factorPasar" id="optionsRadios1" value="cf" checked>
                                        Core Factor
                                    </label>
                                  </div>
                                  <div class="radio">
                                      <label>
                                        <input type="radio" name="factorPasar" id="optionsRadios1" value="sf" checked>
                                        Secondary Factor
                                      </label>
                                  </div>
                            </div>

                            <label class="control-label col-lg-2" for="inputSuccess">Jarak lahan dengan pemukiman</label>
                              <div class="col-lg-10 ">  
                                <div class="radio">
                                    <label>
                                        <input type="radio" name="factorPemukiman" id="optionsRadios1" value="cf" checked>
                                        Core Factor
                                    </label>
                                  </div>
                                  <div class="radio">
                                      <label>
                                        <input type="radio" name="factorPemukiman" id="optionsRadios1" value="sf" checked>
                                        Secondary Factor
                                      </label>
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
                        Penentuan Factor Pada Lokasi
                      </header>
                      <div class="panel-body">
                            
                          <div class="form-group">
                                <label class="control-label col-lg-2" for="inputSuccess">Luas Tanah</label>
                                <div class="col-lg-10 ">  
                                  <div class="radio">
                                      <label>
                                          <input type="radio" name="factorLuasTanah" id="optionsRadios1" value="cf" checked>
                                          Core Factor
                                      </label>
                                    </div>
                                    <div class="radio">
                                        <label>
                                          <input type="radio" name="factorLuasTanah" id="optionsRadios1" value="sf" checked>
                                          Secondary Factor
                                        </label>
                                    </div>
                              </div>
  
                              <label class="control-label col-lg-2" for="inputSuccess">Ketinggian Lingkuangan</label>
                                <div class="col-lg-10 ">  
                                  <div class="radio">
                                      <label>
                                          <input type="radio" name="factorKetinggian" id="optionsRadios1" value="cf" checked>
                                          Core Factor
                                      </label>
                                    </div>
                                    <div class="radio">
                                        <label>
                                          <input type="radio" name="factorKetinggian" id="optionsRadios1" value="sf" checked>
                                          Secondary Factor
                                        </label>
                                    </div>
                              </div>
  
                              <label class="control-label col-lg-2" for="inputSuccess">Jenis Tanah</label>
                                <div class="col-lg-10 ">  
                                  <div class="radio">
                                      <label>
                                          <input type="radio" name="factorJenis" id="optionsRadios1" value="cf" checked>
                                          Core Factor
                                      </label>
                                    </div>
                                    <div class="radio">
                                        <label>
                                          <input type="radio" name="factorJenis" id="optionsRadios1" value="sf" checked>
                                          Secondary Factor
                                        </label>
                                    </div>
                              </div>

                              <label class="control-label col-lg-2" for="inputSuccess">Harga Tanah</label>
                                <div class="col-lg-10 ">  
                                  <div class="radio">
                                      <label>
                                          <input type="radio" name="factorHarga" id="optionsRadios1" value="cf" checked>
                                          Core Factor
                                      </label>
                                    </div>
                                    <div class="radio">
                                        <label>
                                          <input type="radio" name="factorHarga" id="optionsRadios1" value="sf" checked>
                                          Secondary Factor
                                        </label>
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
                          Penentuan Factor Pada Iklim
                        </header>
                        <div class="panel-body">
                              
                            <div class="form-group">
                                  <label class="control-label col-lg-2" for="inputSuccess">Panas</label>
                                  <div class="col-lg-10 ">  
                                    <div class="radio">
                                        <label>
                                            <input type="radio" name="factorPanas" id="optionsRadios1" value="cf" checked>
                                            Core Factor
                                        </label>
                                      </div>
                                      <div class="radio">
                                          <label>
                                            <input type="radio" name="factorPanas" id="optionsRadios1" value="sf" checked>
                                            Secondary Factor
                                          </label>
                                      </div>
                                </div>
    
                                <label class="control-label col-lg-2" for="inputSuccess">Dingin</label>
                                  <div class="col-lg-10 ">  
                                    <div class="radio">
                                        <label>
                                            <input type="radio" name="factorDingin" id="optionsRadios1" value="cf" checked>
                                            Core Factor
                                        </label>
                                      </div>
                                      <div class="radio">
                                          <label>
                                            <input type="radio" name="factorDingin" id="optionsRadios1" value="sf" checked>
                                            Secondary Factor
                                          </label>
                                      </div>
                                </div>
    
                                <label class="control-label col-lg-2" for="inputSuccess">Curah Hujan</label>
                                  <div class="col-lg-10 ">  
                                    <div class="radio">
                                        <label>
                                            <input type="radio" name="factorHujan" id="optionsRadios1" value="cf" checked>
                                            Core Factor
                                        </label>
                                      </div>
                                      <div class="radio">
                                          <label>
                                            <input type="radio" name="factorHujan" id="optionsRadios1" value="sf" checked>
                                            Secondary Factor
                                          </label>
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
                            Pembobotan
                          </header>
                          <div class="panel-body">
                                
                              <div class="form-group">
                                    <label class="control-label col-lg-2" for="inputSuccess">Pembobotan Core Factor</label>
                                    <div class="col-lg-10">
                                        <div class="row">
                                          <div class="col-lg-2">
                                            <input type="text" name="bobotCF" class="form-control" placeholder="%">
                                          </div>
                                        </div>
                                    </div>
                              </div>
                              <div class="form-group">
                                    <label class="control-label col-lg-2" for="inputSuccess">Pembobotan Secondary Factor</label>
                                    <div class="col-lg-10">
                                        <div class="row">
                                          <div class="col-lg-2">
                                            <input type="text" name="bobotSF" class="form-control" placeholder="%">
                                          </div>
                                        </div>
                                    </div>
                              </div>
                              <div class="form-group">      
                                    <label class="control-label col-lg-2" for="inputSuccess">Jarak</label>
                                    <div class="col-lg-10">
                                        <div class="row">
                                          <div class="col-lg-2">
                                            <input type="text" name="bobotJarak" class="form-control" placeholder="%">
                                          </div>
                                        </div>
                                    </div>
                              </div>
                              <div class="form-group">
                                    <label class="control-label col-lg-2" for="inputSuccess">Lokasi</label>
                                    <div class="col-lg-10">
                                        <div class="row">
                                          <div class="col-lg-2">
                                            <input type="text" name="bobotLokasi" class="form-control" placeholder="%">
                                          </div>
                                        </div>
                                    </div>
                              </div>
                              <div class="form-group">
                                    <label class="control-label col-lg-2" for="inputSuccess">Iklim</label>
                                    <div class="col-lg-10">
                                        <div class="row">
                                          <div class="col-lg-2">
                                            <input type="text" name="bobotIklim" class="form-control" placeholder="%">
                                          </div>
                                        </div>
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
                    <!-- <a href="index2.php"> -->
                        <button value="Submit" name="submit" type="submit" class="btn btn-primary btn-lg btn-block">Simpan</button>
                    <!-- </a> -->
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
  
  $factorPetani = $_POST['factorPetani'];
  $factorPasar = $_POST['factorPasar'];
  $factorPemukiman = $_POST['factorPemukiman'];

  $factorLuasTanah = $_POST['factorLuasTanah'];
  $factorKetinggian = $_POST['factorKetinggian'];
  $factorJenis = $_POST['factorJenis'];
  $factorHarga = $_POST['factorHarga'];

  $factorPanas = $_POST['factorPanas'];
  $factorDingin = $_POST['factorDingin'];
  $factorHujan = $_POST['factorHujan'];

  $bobotCF = $_POST['bobotCF'];
  $bobotSF = $_POST['bobotSF'];

  $bobotJarak = $_POST['bobotJarak'];
  $bobotLokasi = $_POST['bobotLokasi'];
  $bobotIklim = $_POST['bobotIklim'];

  // menentukan bobot kriteria
  $sql = "INSERT INTO kriteria_user (id_kriteria, bobot_kriteria, id_user) 
          VALUES 
          ('1', '$bobotJarak', '1')";
  $con->query($sql);

  $sql2 = "INSERT INTO kriteria_user (id_kriteria, bobot_kriteria, id_user) 
  VALUES 
  ('2', '$bobotLokasi', '1')";
  $con->query($sql2);

  $sql3 = "INSERT INTO kriteria_user (id_kriteria, bobot_kriteria, id_user) 
  VALUES 
  ('3', '$bobotIklim', '1')";
  $con->query($sql3);
  

  // menentukan bobot factor
  $sql4 = "INSERT INTO factor (nama_factor, bobot_factor, id_user) 
  VALUES 
  ('cf', '$bobotCF', '1')";
  $con->query($sql4);

  $sql5 = "INSERT INTO factor (nama_factor, bobot_factor, id_user) 
  VALUES 
  ('sf', '$bobotSF', '1')";
  $con->query($sql5);
  
  // menentukan factor pada sub factor
  $sql6 = "INSERT INTO id_sub_kriteria_user (id_factor, id_user, id_sub_kriteria) 
  VALUES 
  ('$factorPetani', '1', '1')";
  $con->query($sql6);

  $sql7 = "INSERT INTO id_sub_kriteria_user (id_factor, id_user, id_sub_kriteria) 
  VALUES 
  ('$factorPasar', '1', '2')";
  $con->query($sql7);

  $sql8 = "INSERT INTO id_sub_kriteria_user (id_factor, id_user, id_sub_kriteria) 
  VALUES 
  ('$factorPemukiman', '1', '3')";
  $con->query($sql8);

  $sql9 = "INSERT INTO id_sub_kriteria_user (id_factor, id_user, id_sub_kriteria) 
  VALUES 
  ('$factorLuasTanah', '1', '4')";
  $con->query($sql9);

  $sql10 = "INSERT INTO id_sub_kriteria_user (id_factor, id_user, id_sub_kriteria) 
  VALUES 
  ('$factorKetinggian', '1', '5')";
  $con->query($sql10);

  $sql11 = "INSERT INTO id_sub_kriteria_user (id_factor, id_user, id_sub_kriteria) 
  VALUES 
  ('$factorJenis', '1', '6')";
  $con->query($sql11);

  $sql12 = "INSERT INTO id_sub_kriteria_user (id_factor, id_user, id_sub_kriteria) 
  VALUES 
  ('$factorHarga', '1', '7')";
  $con->query($sql12);

  $sql13 = "INSERT INTO id_sub_kriteria_user (id_factor, id_user, id_sub_kriteria) 
  VALUES 
  ('$factorPanas', '1', '8')";
  $con->query($sql13);

  $sql14 = "INSERT INTO id_sub_kriteria_user (id_factor, id_user, id_sub_kriteria) 
  VALUES 
  ('$factorDingin', '1', '9')";
  $con->query($sql14);

  $sql15 = "INSERT INTO id_sub_kriteria_user (id_factor, id_user, id_sub_kriteria) 
  VALUES 
  ('$factorHujan', '1', '10')";
  $con->query($sql15);


  $con->close();
  }

?>