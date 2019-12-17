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
                Bobot Factor
              </header>
              <table class="table table-bordered">
                <thead>
                  <tr>
                    <th>#</th>
                    <th>Nilai Bobot</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>Core Factor</td>
                    <td>55%</td>

                  </tr>
                  <tr>
                      <td>Secondary Factor</td>
                      <td>45%</td>
  
                    </tr>
                </tbody>
              </table>
            </section>
          </div>
        </div>

        <div class="col-sm-12">
            <section class="panel">
              <header class="panel-heading">
                Bobot Kriteria
              </header>
              <table class="table table-bordered">
                <thead>
                  <tr>
                    <th>#</th>
                    <th>Nilai Bobot</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>Jarak</td>
                    <td>40%</td>

                  </tr>
                  <tr>
                    <td>Lokasi</td>
                    <td>35%</td>
                  </tr>
                  <tr>
                    <td>Iklim</td>
                    <td>25%</td>
                  </tr>
                </tbody>
              </table>
            </section>
          </div>
        </div>
        
        <div class="row">
            <div class="col-lg-12">
              <section class="panel">
                <header class="panel-heading">
                  Hasil Kriteria Jarak Terpilih
                </header>
                <div class="panel-body">
                      
                    <div class="form-group">
                          <label class="control-label col-lg-2" for="inputSuccess">Jarak Lahan dengan petani (meter)</label>
                          <div class="col-lg-10">
                              <span class="form-control m-bot15"> 1000-2000 </span>

                          </div>
                      
                          <label class="control-label col-lg-2" for="inputSuccess">Jarak lahan dengan pasar (meter)</label>
                          <div class="col-lg-10">
                              <span class="form-control m-bot15"> 501-1000 </span>

                          </div>

                          <label class="control-label col-lg-2" for="inputSuccess">Jarak lahan dengan pemukiman (meter)</label>
                          <div class="col-lg-10">
                              <span class="form-control m-bot15"> 2000 < </span>

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
                     Hasil Kriteria Lokasi Terpilih
                  </header>
                  <div class="panel-body">
                        
                      <div class="form-group" >
                            <label class="control-label col-lg-2" for="inputSuccess">Luas Tanah (meter persegi)</label>
                            <div class="col-lg-10">
                                <span class="form-control m-bot15"> 50-100m2 </span>

                            </div>
                        
                            <label class="control-label col-lg-2" for="inputSuccess">Ketinggian Lingkungan (mdpl)</label>
                            <div class="col-lg-10">
                                <span class="form-control m-bot15"> < 100 </span>

                            </div>
  
                            <label class="control-label col-lg-2" for="inputSuccess">Jenis Tanah</label>
                            <div class="col-lg-10 ">
                                <span class="form-control m-bot15"> Pasir </span>
                            </div>

                            <div class="mt-4">
                            <label class="control-label col-lg-2 mt-2" for="inputSuccess">Harga Tanah</label>
                            <div class="col-lg-10 mt-2">
                                <span class="form-control m-bot15"> 10jt-20jt </span>

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
                      Hasil Kriteria Iklim Terpilih
                    </header>
                    <div class="panel-body">
                          
                        <div class="form-group">
                              <label class="control-label col-lg-2" for="inputSuccess">Panas (meter)</label>
                              <div class="col-lg-10">
                                  <span class="form-control m-bot15"> 30-40 C </span>

                              </div>
                          
                              <label class="control-label col-lg-2" for="inputSuccess">Dingin (meter)</label>
                              <div class="col-lg-10">
                                  <span class="form-control m-bot15"> 5-10 C </span>

                              </div>
    
                              <label class="control-label col-lg-2" for="inputSuccess">Curah Hujan (meter)</label>
                              <div class="col-lg-10">
                                <span class="form-control m-bot15"> Sedang </span>
                              </div>
    
                          </div>
                          
                    </div>
                  </section>
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
