<?php
$user = $this->session->userdata('username');
$level = $this->session->userdata('level');
if (!isset($user)) {
  header("location:login");
}
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
          <!-- START X-NAVIGATION VERTICAL -->
          <ul class="x-navigation x-navigation-horizontal">
              <li class="xn-logo">
                  <a href="index.html">ATLANT</a>
                  <a href="#" class="x-navigation-control"></a>
              </li>
              <?php
              if($level=='Admin'){
                $this->load->view('menu-admin');
              }
              if($level=='Super Admin'){
                $this->load->view('menu-superadmin');
              }
              ?>
          </ul>
          <!-- END X-NAVIGATION VERTICAL -->
        <div class="page-container page-content">
