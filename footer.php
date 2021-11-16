
  <footer class="main-footer">
    <div class="float-right d-none d-sm-block">
      <b>Version</b> <?php echo esc_html( get_bloginfo( 'version' ) ); ?>
    </div>
    <strong>Copyright &copy; 2014-2021 <a href="<?php echo esc_html( get_bloginfo( 'url' ) ); ?>"><?php echo esc_html( get_bloginfo( 'name' ) ); ?></a>.</strong> All rights reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="<?php echo get_template_directory_uri(); ?>/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?php echo get_template_directory_uri(); ?>/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo get_template_directory_uri(); ?>/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo get_template_directory_uri(); ?>/dist/js/demo.js"></script>
<?php wp_footer(); ?>
</body>
</html>

