<?php $this->load->view('setting/forms/mtik_server_modal'); ?>
<!-- start of footer -->
<div class="footer">
        <p class="text-center">
        Copyright 2018 - Jazz Senggigi Hotel Mataram.
        </p>
</div>
<!-- load main.js -->
<script src="<?php echo base_url('assets/js/main.js'); ?>"></script>
<!-- load js based on page loaded -->
<?php if ($this->uri->segment(1) == 'rooms') { ?>
  <script src="<?php echo base_url('assets/js/rooms.js'); ?>"></script>
<?php } ?>

<?php if ($this->uri->segment(1) == 'reservation') { ?>
  <script src="<?php echo base_url('assets/js/reservation.js'); ?>"></script>
<?php } ?>
</body>
</html>