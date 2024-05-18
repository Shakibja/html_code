
<?PHP
//set_time_limit(300);
include 'connection.php';

if (isset($_POST['submit'])) {

    $NOTICE_DESC = $_POST['NOTICE_DESC'];

    // if ($_FILES['pdfInput']['size'] != 0) {

    //     $target_dir = "upload/notice/";
    //     $target_file = $target_dir . $MEM_NAME . "." . basename($_FILES['pdfInput']['type']);


    //     //echo $target_file;

    //     $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

    //     $extensions_arr = array("pdf");

    //     if (in_array($imageFileType, $extensions_arr)) {



    //         // Upload file
    //         move_uploaded_file($_FILES['pdfInput']['tmp_name'], $target_file);
    //     }
    // }

    if($_FILES['PIC']['size']!=0){

        $target_dir = "upload/epaper/";
    $target_file = $target_dir . $NOTICE_DESC . "." . basename($_FILES['PIC']['type']);


    //echo $target_file;

    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

     $extensions_arr = array("jpg", "jpeg", "png", "gif");

     if (in_array($imageFileType, $extensions_arr)) {



            // Upload file
            move_uploaded_file($_FILES['PIC']['tmp_name'], $target_file);

        }




     }




    $sql = "INSERT INTO test_image(img_desc, img,  STATUS)VALUES ('" . $NOTICE_DESC . "','" . $target_file . "', 'A')";
    print_r($sql);
   

    /*$parseresult=ociparse($conn,$sql);
    oci_execute($parseresult);*/

    /* instead of ociparse */
    if(mysqli_query($conn, $sql)) {
        echo "<br>"."inserted";
        
    } else {
        //echo  "<br>"."not inserted";
        
    }

}



?>


<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>CMK</title>
    <link rel="icon" href="img/logo.png" type="image/ico">
</head>

<body id="page-top">
    <!-- Page Wrapper -->
    <div id="wrapper">
        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">
            <!-- Main Content -->
            <div id="content">
                <!-- Begin Page Content -->
                <div class="container-fluid">
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-body">
                            
                            <div class="form-body">
                                <form action="" method="POST" enctype="multipart/form-data">
                                    <style>
                                        @media only screen and (max-width: 600px) {
                                            #PER_ADDR {
                                                width: 100%; /* Adjust as needed */
                                            }
                                        }

                                        @media only screen and (max-width: 600px) {
                                            #PRE_ADDR {
                                                width: 100%; /* Adjust as needed */
                                            }
                                        }
                                    </style>

                                    <div class="row m-3">
                                        <div class="col-lg-6 col-md-6 col-sm-12">
                                            <div class="col-lg-5 col-md-5 col-sm-12">
                                                <div class="row">
                                                    <div class="col-lg-12 col-md-12 col-sm-12">
                                                        <label for="text" class="text-center font-weight-bold">Notice :</label>

                                                    </div>
                                                    <div class="col-lg-12 col-md-12 col-sm-12">
                                                        <textarea name="NOTICE_DESC" id="NOTICE_DESC" cols="50" rows="3"></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>



                                        <div class="col-lg-6 col-md-6 col-sm-12">
                                            <div class="row ">
                                                <div class="col-lg-12 col-md-12 col-sm-12">
                                                    <label for="text" class="text-center font-weight-bold">Notice <label style="color:red; font-weight:bold">*</label> :</label>
                                                </div>
                                                <div class="col-lg-12 col-md-12 col-sm-12">

                                                    <input type="file"  name="PIC" id="PIC"  />

                                                </div>
                                            </div>
                                        </div>

                                        </div>


                                        <div class="row m-3">
                                            <div class="col-md-12 text-center">
                                            <button type="submit" class="btn btn-success m-3" name='submit' id='submit' onclick="return Validate()" Enabled>
                                                Save
                                            </button>
                                        </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->
            </div>
            <!-- End of Main Content -->
        </div>
        <!-- End of Content Wrapper -->
    </div>
    <!-- End of Page Wrapper -->
    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

</body>

</html>