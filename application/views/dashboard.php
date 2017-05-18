<?php
$user = $this->session->userdata('username');
$level = $this->session->userdata('level');
$this->load->view('layout-header');
if($level=='Admin'){
  $this->load->view('dashboard-admin');
}
if($level=='Super Admin'){
  $this->load->view('dashboard-superadmin');
}
$this->load->view('layout-footer');
?>
