<aside class="main-sidebar sidebar-primary elevation-4">
    <!-- Brand Logo -->
    <a id="sidh" href="index3.html" class="brand-link">
      <img src="dist/img/vincu.png" alt="vincu Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span id="vincu" class="brand-text font-weight-light">VINCULUM</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
    
      <!-- <li class="nav-item menu-open"> -->
            <br><br><br><br>
         
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="./index.html" class="nav-link active">
                 <button id="bottone1"><strong>Accueil</strong></button>
                </a>
              </li>
              <li class="nav-item">
                <!-- <a href="./liste.php" class="nav-link"> -->
                  <!-- <i class="far fa-circle nav-icon"></i> -->
                  <a href="{{ route('clients.create') }}"><button id="bottone1"><strong>Clients</strong></button></a>
                  
                <!-- </a> -->
              </li>
              <li class="nav-item">
                <a href="./index2.html" class="nav-link">
                  <!-- <i class="far fa-circle nav-icon"></i> -->
                  <button id="bottone1"><strong>Factures</strong></button>
                </a>
              </li>

              <li class="nav-item">
                <a href="./index2.html" class="nav-link">
                  <!-- <i class="far fa-circle nav-icon"></i> -->
                  <button id="bottone1"><strong>Paramètres</strong></button>
                </a>
              </li>


              <li class="nav-item">
                <a href="./index2.html" class="nav-link">
                  <!-- <i class="far fa-circle nav-icon"></i> -->
                  <button id="bottone1"><strong>Déconnexion</strong></button>
                </a>
              </li>


      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          
               <!-- /.sidebar -->
  </aside>
      <div>
        <img id="acc2" src="dist/img/acc2.jpg" alt="acc2" width="600" height="500">
      </div>

    <!-- /.content-header -->

    <!-- Main content -->
   
  <!-- /.content-wrapper -->
  <footer id="sidh" class="main-footer">
    <strong id="foc">Copyright © 2023  Vinculum-DEV |  Tous les droits sont réservés.</strong>
  
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="plugins/moment/moment.min.js"></script>
<script src="plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard.js"></script>
</body>
</html>