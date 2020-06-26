<?php
$user = $this->session->userdata('username');
$level = $this->session->userdata('level');
if (!isset($user)) {
  header("location:Login");
}
$p=htmlentities($this->input->get('p'));
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- META SECTION -->
        <title>Atlant - Responsive Bootstrap Admin Template</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />

        <link rel="icon" href="assets/favicon.ico" type="image/x-icon" />
        <!-- END META SECTION -->

        <!-- CSS INCLUDE -->
        <link rel="stylesheet" type="text/css" id="theme" href="assets/css/theme-default.css"/>
        <!-- EOF CSS INCLUDE -->
    </head>
    <body>
        <!-- START PAGE CONTAINER -->
        <div class="page-container page-navigation-top">
            <!-- PAGE CONTENT -->
            <div class="page-content">

                <!-- START X-NAVIGATION VERTICAL -->
                <ul class="x-navigation x-navigation-horizontal">
                    <li class="xn-logo">
                        <a href="index.html">ATLANT</a>
                        <a href="#" class="x-navigation-control"></a>
                    </li>
                    <?php
                    if($level=='Super Admin'){
                      $this->load->view('menu-superadmin');
                    }
                    if($level=='Admin'){
                      $this->load->view('menu-admin');
                    }
                    ?>
                </ul>
                <!-- END X-NAVIGATION VERTICAL -->
                <!-- START BREADCRUMB -->
                <ul class="breadcrumb">
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Layouts</a></li>
                    <li class="active">Navigation Top</li>
                </ul>
                <!-- END BREADCRUMB -->
                <?php
                $file="$p";
                $cek=strlen($p);
                if ($cek>30||!file_exists($file)||empty($p)) {
                  if($level=='Super Admin'){
                    $this->load->view('dashboard-superadmin');
                  }
                  if($level=='Admin'){
                    $this->load->view('dashboard-admin');
                  }
                } else {
                  include ($file);
                }
                ?>
            </div>
            <!-- END PAGE CONTENT -->
        </div>
        <!-- END PAGE CONTAINER -->

        <!-- MESSAGE BOX-->
        <div class="message-box animated fadeIn" data-sound="alert" id="mb-signout">
            <div class="mb-container">
                <div class="mb-middle">
                    <div class="mb-title"><span class="fa fa-sign-out"></span> Log <strong>Out</strong> ?</div>
                    <div class="mb-content">
                        <p>Kamu yakin ingin keluar dari sistem?</p>
                    </div>
                    <div class="mb-footer">
                        <div class="pull-right">
                            <a href="<?php echo base_url('login/logout')?>" class="btn btn-success">Iya</a>
                            <button class="btn btn-default mb-control-close">Tidak</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END MESSAGE BOX-->

        <!-- START PRELOADS -->
        <audio id="audio-alert" src="assets/audio/alert.mp3" preload="auto"></audio>
        <audio id="audio-fail" src="assets/audio/fail.mp3" preload="auto"></audio>
        <!-- END PRELOADS -->

    <!-- START SCRIPTS -->
        <!-- START PLUGINS -->
        <script type="text/javascript" src="assets/js/plugins/jquery/jquery.min.js"></script>
        <script type="text/javascript" src="assets/js/plugins/jquery/jquery-ui.min.js"></script>
        <script type="text/javascript" src="assets/js/plugins/bootstrap/bootstrap.min.js"></script>
        <!-- END PLUGINS -->

        <!-- THIS PAGE PLUGINS -->
        <script type='text/javascript' src='assets/js/plugins/icheck/icheck.min.js'></script>
        <script type="text/javascript" src="assets/js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js"></script>
        <!-- END PAGE PLUGINS -->

        <!-- START TEMPLATE -->
        <script type="text/javascript" src="assets/js/settings.js"></script>

        <script type="text/javascript" src="assets/js/plugins.js"></script>
        <script type="text/javascript" src="assets/js/actions.js"></script>
        <!-- END TEMPLATE -->
    <!-- END SCRIPTS -->
    </body>
</html>
