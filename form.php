<?php 
include 'db/db_con.php';
include ('header.php');
include ('sidebar.php');
include ('topbar.php');
if (isset($_POST['create'])) {
    $nowner=$_POST['nowner'];
    $esname=$_POST['esname'];
    $autho=$_POST['autho'];
    $address=$_POST['address'];
    $bnature=$_POST['bnature'];
    $area=$_POST['area'];
    $contact=$_POST['contact'];
    $date=$_POST['date'];
    
    $sql = "INSERT INTO `record`(`nowner`, `esname`, `autho`, `address`, `bnature`, `area`, `contact`, `date`) 
    VALUES   ('$nowner', '$esname', '$autho', '$address', '$bnature', '$area', '$contact', '$date')";

    $result = mysqli_query($con,$sql);

    if ($result){
        echo "<script>window.location.href='form2.php'</script>";
    }else{
        echo "<script>alert('Something is wrong with the insertion of the register.');</script>";
        echo "<script>window.location.href='form2.php'</script>";
    }
    
}
?>
                <!-- Begin Page Content -->
                <div class="container-fluid">
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4" style="font-size: 13px;">
                        <div class="card-header py-3">
                          <div class="pull-left m-0 font-weight-bold text-danger" style="text-align: center;">
                          FIRE SAFETY INSPECTION CERTIFICATE APPLICATION FORM</div>
                        </div>
                        <div class="card-body">
                                <form class="row g-3" method="post" enctype="multipart/form-data">
                                    <div class="form-group col-md-6 m-t-20">
                                        <label>Name of Owner:</label>
                                        <input type="text" name="nowner" class="form-control form-control-line" required > 
                                    </div>
                                    <div class="form-group col-md-6 m-t-20">
                                        <label>Establishment Name:</label>
                                        <input type="text" name="esname" class="form-control form-control-line" required > 
                                    </div>
                                    <div class="form-group col-md-6 m-t-20">
                                        <label>Exact Address:</label>
                                        <input type="text" name="address" class="form-control form-control-line" required > 
                                    </div>
                                    <div class="form-group col-md-6 m-t-20">
                                        <label>Authorized Representative:</label>
                                        <input type="text" name="autho" class="form-control form-control-line" required > 
                                    </div>
                                    <div class="form-group col-md-6 m-t-20">
                                        <label>Business Nature:</label>
                                        <input type="text" name="bnature" class="form-control form-control-line" required > 
                                    </div>
                                    <div class="form-group col-md-6 m-t-20">
                                        <label>Total Floor Area(M2):</label>
                                        <input type="text" name="area" class="form-control form-control-line" required > 
                                    </div>
                                    <div class="form-group col-md-6 m-t-20">
                                        <label>Contact Number:</label>
                                        <input type="text" name="contact" class="form-control form-control-line" minlength="12" maxlength="12" required > 
                                    </div>
                                    <div class="form-group col-md-6 m-t-20">
                                        <label>Date:</label>
                                        <input type="date" name="date" id="example-email2" name="example-email" class="form-control" required> 
                                    </div>
                                    <div class="form-actions col-md-12">
                                        <button type="submit" class="d-none d-sm-inline-block btn btn-sm btn-success" name="create">Submit</button>
                                        <button type="reset" class="d-none d-sm-inline-block btn btn-sm btn-warning btn-default">Clear</button>
                                        <a href="form2.php"><button type="button" class="float-right d-none d-sm-inline-block text-white btn btn-sm bg-info">
                                        Next</button></a>
                                    </div>
                                </form>
                        </div>
                    </div>
<?php include ('footer.php');?>