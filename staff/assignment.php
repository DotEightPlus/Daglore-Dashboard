<?php include("functions/top.php");

//get staff class
$sql="SELECT * from staff WHERE `staffid` = '".$_SESSION['staff_id']."'";
$result_set=query($sql);
$row= mysqli_fetch_array($result_set);

$_SESSION['ws'] = $row['staffclass'];
?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Upload Assignment</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="./">Dashboard</a></li>
                        <li class="breadcrumb-item active">Upload Result</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->



    <!-- Main content -->
    <section class="content">
        <!-- right column -->
        <div class="col-md-12">
            <!-- general form elements disabled -->
            <div class="card card-warning">

                <div class="card-body">
                    <form name="" role="form">
                        <div class="form-group">
                            <label>Upload assignment file</label>
                            <div class="input-group">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="fileToUpload">
                                    <label class="custom-file-label" for="fileToUpload">Choose file</label>
                                </div>

                            </div>


                            <p class="text-danger">Make sure you recheck all details typed in before uploading</p>

                            <button type="button" id="uplagn" class="btn float-left btn-danger btn-outline-light">Upload
                                Assignment</button>
                    </form>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
            <!-- general form elements disabled -->

        </div>
        <!--/.col (right) -->

        <?php
        $data = $_SESSION['ws'];
 $sql= "SELECT * FROM `assignment` WHERE `class` = '$data'";
 $result_set=query($sql);
 while($row= mysqli_fetch_array($result_set))
 {
  if(row_count($result_set) == "") {
            
          } else {
          ?>


        <section id="preview" class="content">
            <!-- right column -->
            <div class="col-md-12">
                <div class="card card-dark">
                    <div class="card-header">
                        <h3 class="card-title">Assignment Uploaded</h3>

                        <div class="card-tools">
                            <button type="button" id="del" data-toggle="modal" data-target="#modal-reset"
                                data-toggle="tooltip" title="Reset this result" class="btn btn-tool"><i
                                    class="fas fa-recycle"></i>
                            </button>
                            <button type="button" id="del" data-toggle="modal" data-target="#modal-delete"
                                data-toggle="tooltip" title="Delete a result" class="btn btn-tool"><i
                                    class="fas fa-trash"></i>
                            </button>
                            <button type="button" data-toggle="tooltip" title="Maximize" class="btn btn-tool"
                                data-card-widget="maximize"><i class="fas fa-expand"></i>
                            </button>
                            <button type="button" data-toggle="tooltip" title="Minimize" class="btn btn-tool"
                                data-card-widget="collapse"><i class="fas fa-minus"></i>
                            </button>
                        </div>
                    </div>
                    <!-- /.card-header -->
                    <!-- /.card-header -->
                    <div class="card-body table-responsive p-0">
                        <table class="table table-hover text-nowrap table-bordered table-striped">
                            <thead>
                                <tr class="text-center">
                                    <th>Assignment file</th>
                                    <th>Date Uploaded</th>

                                </tr>
                            </thead>
                            <tbody>
                                <?php
 $sql= "SELECT * FROM `assignment` WHERE `class` = '$data'";
 $result_set=query($sql);
  while($row= mysqli_fetch_array($result_set))
 {
  ?>
                                <tr class="text-center">
                                    <td><?php echo $row['file']; 
                      echo '
                      <a style="color: red;" href="./assedit?id='.$row['id'].'"><br/>Edit</a>';
                      ?>
                                    </td>
                                    <td><?php echo $row['date'] ?></td>



                                </tr>
                                <?php
                  }
                  if(row_count($result_set) == 0) {

  echo "<span style='color:red'>No records found</span>";
 }
                  ?>
                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- /.card -->
            </div>
        </section>
        <?php
}
}
?>

    </section>
    <!-- /.content -->




</div>
<!-- /.content-wrapper -->
<?php include("include/footer.php"); ?>

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
<!-- DataTables -->
<script src="plugins/datatables/jquery.dataTables.min.js"></script>
<script src="plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<script src="plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>
<script type="text/javascript">
$(document).ready(function() {
    bsCustomFileInput.init();
});
</script>
<script src="ajax.js"></script>
<!-- SweetAlert2 -->
<script src="plugins/sweetalert2/sweetalert2.min.js"></script>
<!-- Toastr -->
<script src="plugins/toastr/toastr.min.js"></script>
<script type="text/javascript">
$(function() {
    const Toast = Swal.mixin({
        toast: true,
        position: 'top-end',
        showConfirmButton: false,
        timer: 3000
    });
});
</script>

</body>

</html>