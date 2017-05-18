</div>
</div>
<!-- END PAGE CONTENT -->

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
</body>
</html>
