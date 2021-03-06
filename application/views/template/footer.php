<!-- REQUIRED JS SCRIPTS -->
 <!-- Main Footer -->
    <footer class="main-footer">
        <strong>Copyright &copy; 2014-2015 <a href="http://almsaeedstudio.com">Almsaeed Studio</a>.</strong> All rights reserved.
      </footer>
    </div><!-- ./wrapper -->
    
    <!-- jQuery 2.1.4 -->
    <script src="<?= base_url(). 'asset/plugins/jQuery/jQuery-2.1.4.min.js'; ?>"></script>
    <!-- Bootstrap 3.3.5 -->
    <script src="<?= base_url(). 'asset/bootstrap/js/bootstrap.min.js'; ?>"></script>
    <!-- AdminLTE App -->
    <script src="<?= base_url(). 'asset/dist/js/app.min.js'; ?>"></script>
    <!-- Slimscroll -->
    <script src="<?= base_url(). 'asset/plugins/slimScroll/jquery.slimscroll.min.js'; ?>"></script>
    <!-- FastClick -->
    <script src="<?= base_url(). 'plugins/fastclick/fastclick.min.js'; ?>"></script>
    <!--Date Picker-->
    <script src="<?= base_url(). 'asset/bootstrap/js/daterangepicker.js'; ?>"></script>
    <script src="<?= base_url(). 'asset/bootstrap/js/moment.js'; ?>"></script>
    <script src="<?= base_url(). 'asset/bootstrap/js/moment.min.js'; ?>"></script>
    <script src="<?= base_url(). 'asset/bootstrap/js/bootstrap-datepicker.js'; ?>"></script>

    <!--JS Edit Siswa-->
    <SCRIPT TYPE="text/javascript">
      $('#editSiswa').on('shown.bs.modal', function(e) {
              var idsiswa = $(e.relatedTarget).data('idsiswa');
              $(e.currentTarget).find('input[name="idsiswa"]').val(idsiswa);
              var nim = $(e.relatedTarget).data('nim');
              $(e.currentTarget).find('input[name="nim"]').val(nim);
              var namasiswa = $(e.relatedTarget).data('namasiswa');
              $(e.currentTarget).find('input[name="nama"]').val(namasiswa);
              var namawali = $(e.relatedTarget).data('namawali');
              $(e.currentTarget).find('input[name="wali"]').val(namawali);
              var alamat = $(e.relatedTarget).data('alamat');
              $(e.currentTarget).find('textarea[name="alamat"]').val(alamat);
              var tmlahir = $(e.relatedTarget).data('tmlahir');
              $(e.currentTarget).find('input[name="tempat"]').val(tmlahir);
              var tgllahir = $(e.relatedTarget).data('tgllahir');
              $(e.currentTarget).find('input[name="tgl"]').val(tgllahir);
              });
    </SCRIPT>

    <SCRIPT TYPE="text/javascript">
      $('#detailSiswa').on('shown.bs.modal', function(e) {
              var idsiswa = $(e.relatedTarget).data('idsiswa');
              $(e.currentTarget).find('input[name="idsiswa"]').val(idsiswa);

              var nim = $(e.relatedTarget).data('nim');
              $(e.currentTarget).find('input[name="nim"]').val(nim);

              var namasiswa = $(e.relatedTarget).data('namasiswa');
              $(e.currentTarget).find('input[name="nama"]').val(namasiswa);

              var namawali = $(e.relatedTarget).data('namawali');
              $(e.currentTarget).find('input[name="wali"]').val(namawali);
              
              var alamat = $(e.relatedTarget).data('alamat');
              $(e.currentTarget).find('textarea[name="alamat"]').val(alamat);
              
              var tmlahir = $(e.relatedTarget).data('tmlahir');
              $(e.currentTarget).find('input[name="tempat"]').val(tmlahir);
              
              var tgllahir = $(e.relatedTarget).data('tgllahir');
              $(e.currentTarget).find('input[name="tgl"]').val(tgllahir);
              
              var namakelas = $(e.relatedTarget).data('namakelas');
              $(e.currentTarget).find('input[name="kelas"]').val(namakelas);
              
              var gender = $(e.relatedTarget).data('gender');
              $(e.currentTarget).find('input[name="jenis"]').val(gender);
              });
    </SCRIPT>

    <!--Js Date Time Picker-->
    <script type="text/javascript">
    $(".input-group.date").datepicker({ autoclose: true, todayHighlight: true });
    </script>



    <!-- Optionally, you can add Slimscroll and FastClick plugins.
         Both of these plugins are recommended to enhance the
         user experience. Slimscroll is required when using the
         fixed layout. -->
  </body>
</html>
