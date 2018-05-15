<?PHP require_once("koneksi.php");
$query = "SELECT * FROM surat_masuk";
$result = $conn->query($query) or die($conn->error.__LINE__);?>
<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>aplikasi arsip surat TNBT</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
    <!-- AdminLTE Skins. We have chosen the skin-blue for this starter
          page. However, you can choose any other skin. Make sure you
          apply the skin class to the body tag so the changes take effect.
    -->
    <link rel="stylesheet" href="dist/css/skins/skin-blue.min.css">
  </head>
  <body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">

      <!-- Main Header -->
      <header class="main-header">

        <!-- Logo -->
        <a href="index2.html" class="logo">
          <!-- mini logo for sidebar mini 50x50 pixels -->
          <span class="logo-mini"><b>A</b>LT</span>
          <!-- logo for regular state and mobile devices -->
          <span class="logo-lg">arsip surat <b>TNBT</b></span>
        </a>

        <!-- Header Navbar -->
        <nav class="navbar navbar-static-top" role="navigation">
          <!-- Sidebar toggle button-->
          <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
          </a>
          <!-- Navbar Right Menu -->
          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
              <!-- Messages: style can be found in dropdown.less-->
              <!-- Notifications Menu -->
              <!-- Tasks Menu -->

              <!-- User Account Menu -->
              <li class="dropdown user user-menu">
                <!-- Menu Toggle Button -->
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <!-- The user image in the navbar-->
                  <img src="dist/img/user2-160x160.gif" class="user-image" alt="User Image">
                  <!-- hidden-xs hides the username on small devices so only the image appears. -->
                  <span class="hidden-xs">Admin</span>
                </a>
                <ul class="dropdown-menu">
                  <!-- The user image in the menu -->
                  <li class="user-header">
                    <img src="dist/img/user2-160x160.gif" class="img-circle" alt="User Image">
                    <p>
                      Alexander Pierce - Web Developer
                      <small>Member since Nov. 2012</small>
                    </p>
                  </li>
                  <!-- Menu Body -->
                  <li class="user-body">
                    <div class="col-xs-4 text-center">
                      <a href="#">Followers</a>
                    </div>
                    <div class="col-xs-4 text-center">
                      <a href="#">Sales</a>
                    </div>
                    <div class="col-xs-4 text-center">
                      <a href="#">Friends</a>
                    </div>
                  </li>
                  <!-- Menu Footer-->
                  <li class="user-footer">
                    <div class="pull-left">
                      <a href="#" class="btn btn-default btn-flat">Profile</a>
                    </div>
                    <div class="pull-right">
                      <a href="#" class="btn btn-default btn-flat">Sign out</a>
                    </div>
                  </li>
                </ul>
              </li>
              <!-- Control Sidebar Toggle Button -->
              <li>
                <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
              </li>
            </ul>
          </div>
        </nav>
      </header>
      <!-- Left side column. contains the logo and sidebar -->
      <aside class="main-sidebar">

        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">

          <!-- Sidebar user panel (optional) -->
          <div class="user-panel">
            <div class="pull-left image">
              <img src="dist/img/user2-160x160.gif" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
              <p>Admin</p>
            </div>
          </div>

          <!-- search form (Optional) -->
          <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
              <input type="text" name="q" class="form-control" placeholder="Search...">
              <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i></button>
              </span>
            </div>
          </form>
          <!-- /.search form -->

          <!-- Sidebar Menu -->
          <ul class="sidebar-menu">
            <li class="header">HEADER</li>
            <!-- Optionally, you can add icons to the links -->
            <li><a href="index.php"><i class="fa fa-link"></i> <span>Home</span></a></li>
            <li class="treeview active"><a href="#"><i class="fa fa-link"></i> <span>Surat Masuk</span></a>
              <ul class="treeview-menu">
                <li><a href="input_masuk.php"><i class="fa fa-circle-o"></i> Input Surat Masuk</a></li>
                <li><a href="daftar_surat_masuk.php"><i class="fa fa-circle-o"></i> Daftar Surat Masuk</a></li>
                <li><a href="grafik_masuk.php"><i class="fa fa-circle-o"></i> Grafik surat masuk</a></li>
              </ul>
            </li>
            <li class="treeview"><a href="#"><i class="fa fa-link"></i> <span>Surat Keluar</span></a>
              <ul class="treeview-menu">
                <li><a href="#"><i class="fa fa-circle-o"></i> Input Surat Keluar</a></li>
                <li><a href="#"><i class="fa fa-circle-o"></i> Daftar Surat Keluar</a></li>
              </ul>
            </li>
            <li><a href="#"><i class="fa fa-link"></i> <span>Logout</span></a></li>           
<!--            
            <li class="treeview">
              <a href="#"><i class="fa fa-link"></i> <span>Multilevel</span> <i class="fa fa-angle-left pull-right"></i></a>
              <ul class="treeview-menu">
                <li><a href="#">Link in level 2</a></li>
                <li><a href="#">Link in level 2</a></li>
              </ul>
            </li>

untuk multi level menu sidebar
-->
          </ul><!-- /.sidebar-menu -->
        </section>
        <!-- /.sidebar -->
      </aside>

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Surat Masuk
            <small>Optional description</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li>
            <li class="active">Here</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">

          <!-- Your Page Content Here -->

<div class="row">
<div class="col-md-12">

<div class="box box-primary">
<div class="box-header">
    <h3 class="box-title">Data Table</h3>                                    
</div><!-- /.box-header -->
<div class="box-body table-responsive">
<?PHP if($result->num_rows > 0){
echo'
<table id="example1" class="table table-bordered table-striped">
<thead>
<tr>
<th>ID</th>
<th>NAMA SURAT</th>
<th>NO SURAT</th>
<th>PENGIRIM</th>
<th>aksi</th>
</tr>
</thead>
<tbody>';
while($rows = $result->fetch_assoc()){
  extract($rows);
  echo'
<tr>
<td>'.$id.'</td>
<td>'.$nama_file.'</td>
<td>'.$no_masuk.'</td>
<td>'.$pengirim.'</td>
<td align="center" id="td"><a href="'.$file.'">download</a> <a href="edit_masuk.php?id='.$id.'"><button class="btn btn-sm btn-info"><i class="fa fa-pencil"></i></button></a>
<a href="hapus_masuk.php?id='.$id.'" onclick=\"return confirm("Apakah anda yakin menghapus data ?")\"><button class="btn btn-sm btn-danger"><i class="fa fa-trash"></button></i></a>
</td>
</tr>';}
echo'
</tbody>';} else {echo'Data tidak ditemukan atau kosong';}?>


</table>
                                </div><!-- /.box-body -->
                            </div><!-- /.box -->
</div>
</div>
        </section><!-- /.content -->
      </div><!-- /.content-wrapper --></div>
</div>
      <!-- Main Footer -->


 
    <script src="plugins/jQuery/jQuery-2.1.4.min.js"></script>
    <script src="dist/js/app.min.js"></script>

<script src="asset/jquery-1.7.2.min.js"></script>
<script src="asset/datatables/jquery.dataTables.min.js"></script>
<script src="asset/datatables/dataTables.bootstrap.min.js"></script>
<link rel="stylesheet" href="asset/datatables/dataTables.bootstrap.css">

<script type="text/javascript">
  $(function () {
    $("#example1").DataTable();
  });
  </script>         
  </body>
</html>
