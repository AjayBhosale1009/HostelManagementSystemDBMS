<?php
    session_start();
    include('../includes/dbconn.php');
    include('../includes/check-login.php');
    check_login();
?>

<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/png" sizes="16x16" href="../assets/images/favicon.png">
    <title>Hostel Management System</title>
    <link href="../assets/extra-libs/c3/c3.min.css" rel="stylesheet">
    <link href="../assets/libs/chartist/dist/chartist.min.css" rel="stylesheet">
    <link href="../assets/extra-libs/datatables.net-bs4/css/dataTables.bootstrap4.css" rel="stylesheet">
    <link href="../dist/css/style.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"> <!-- Font Awesome Icons -->
</head>

<body>
    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>

    <div id="main-wrapper" data-theme="light" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
        data-sidebar-position="fixed" data-header-position="fixed" data-boxed-layout="full">
        
        <header class="topbar" data-navbarbg="skin6">
            <?php include 'includes/navigation.php' ?>
        </header>
        
        <aside class="left-sidebar" data-sidebarbg="skin6">
            <div class="scroll-sidebar" data-sidebarbg="skin6">
                <?php include 'includes/sidebar.php' ?>
            </div>
        </aside>
        
        <div class="page-wrapper">
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-7 align-self-center">
                        <?php include 'includes/greetings-a.php' ?>
                    </div>
                </div>
            </div>
            
            <div class="container-fluid">
                <div class="card-group">
                    <!-- Registered Students Card -->
                    <div class="card border-right">
                        <div class="card-body">
                            <div class="d-flex d-lg-flex d-md-block align-items-center">
                                <div>
                                    <div class="d-inline-flex align-items-center">
                                        <h2 class="text-dark mb-1 font-weight-medium"><?php include 'counters/student-count.php' ?></h2>
                                    </div>
                                    <h6 class="text-muted font-weight-normal mb-0 w-100 text-truncate">Registered Students</h6>
                                </div>
                                <div class="ml-auto mt-md-3 mt-lg-0">
                                    <span class="opacity-7 text-muted"><i data-feather="user-plus"></i></span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Total Rooms Card -->
                    <div class="card border-right">
                        <div class="card-body">
                            <div class="d-flex d-lg-flex d-md-block align-items-center">
                                <div>
                                    <h2 class="text-dark mb-1 w-100 text-truncate font-weight-medium"><?php include 'counters/room-count.php' ?></h2>
                                    <h6 class="text-muted font-weight-normal mb-0 w-100 text-truncate">Total Rooms</h6>
                                </div>
                                <div class="ml-auto mt-md-3 mt-lg-0">
                                    <span class="opacity-7 text-muted"><i data-feather="grid"></i></span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Booked Rooms Card -->
                    <div class="card border-right">
                        <div class="card-body">
                            <div class="d-flex d-lg-flex d-md-block align-items-center">
                                <div>
                                    <div class="d-inline-flex align-items-center">
                                        <h2 class="text-dark mb-1 font-weight-medium"><?php include 'counters/booked-count.php' ?></h2>
                                    </div>
                                    <h6 class="text-muted font-weight-normal mb-0 w-100 text-truncate">Booked Rooms</h6>
                                </div>
                                <div class="ml-auto mt-md-3 mt-lg-0">
                                    <span class="opacity-7 text-muted"><i data-feather="book-open"></i></span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Featured Courses Card -->
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex d-lg-flex d-md-block align-items-center">
                                <div>
                                    <h2 class="text-dark mb-1 font-weight-medium"><?php include 'counters/course-count.php' ?></h2>
                                    <h6 class="text-muted font-weight-normal mb-0 w-100 text-truncate">Featured Courses</h6>
                                </div>
                                <div class="ml-auto mt-md-3 mt-lg-0">
                                    <span class="opacity-7 text-muted"><i data-feather="globe"></i></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Hostel Facilities Section -->
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Hostel Facilities</h4>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="facility-card mb-3 p-3" style="background-color: #f4f4f4; border-radius: 10px;">
                                    <i class="fas fa-water fa-2x text-primary"></i>
                                    <span class="ml-3">24-hour Warm Water</span>
                                </div>
                                <div class="facility-card mb-3 p-3" style="background-color: #f4f4f4; border-radius: 10px;">
                                    <i class="fas fa-utensils fa-2x text-danger"></i>
                                    <span class="ml-3">Mess Facility with 3 Meals per Day</span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="facility-card mb-3 p-3" style="background-color: #f4f4f4; border-radius: 10px;">
                                    <i class="fas fa-tshirt fa-2x text-success"></i>
                                    <span class="ml-3">Washing Machine</span>
                                </div>
                                <div class="facility-card mb-3 p-3" style="background-color: #f4f4f4; border-radius: 10px;">
                                    <i class="fas fa-wifi fa-2x text-info"></i>
                                    <span class="ml-3">Free Wi-Fi</span>
                                </div>
                                <div class="facility-card mb-3 p-3" style="background-color: #f4f4f4; border-radius: 10px;">
                                    <i class="fas fa-dumbbell fa-2x text-warning"></i>
                                    <span class="ml-3">Open Gym</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- User Activity Table
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="zero_config" class="table table-striped table-bordered no-wrap">
                                    <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Student's Email</th>
                                            <th scope="col">Last Activity</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php	
                                        $aid=$_SESSION['id'];
                                        $ret="SELECT * from userlog ORDER BY loginTime DESC";
                                        $stmt= $mysqli->prepare($ret);
                                        $stmt->execute();
                                        $res=$stmt->get_result();
                                        $cnt=1;
                                        while($row=$res->fetch_object()) {
                                    ?>
                                        <tr>
                                            <td><?php echo $cnt; ?></td>
                                            <td><?php echo $row->userEmail; ?></td>
                                            <td><?php echo $row->loginTime; ?></td>
                                        </tr>
                                    <?php
                                        $cnt=$cnt+1;
                                        } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->

            <?php include '../includes/footer.php' ?>
        </div>
    </div>

    <script src="../assets/libs/jquery/dist/jquery.min.js"></script>
    <script src="../assets/libs/popper.js/dist/umd/popper.min.js"></script>
    <script src="../assets/libs/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="../dist/js/app-style-switcher.js"></script>
    <script src="../dist/js/feather.min.js"></script>
    <script src="../assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js"></script>
    <script src="../dist/js/sidebarmenu.js"></script>
    <script src="../dist/js/custom.min.js"></script>
    <script src="../assets/extra-libs/c3/d3.min.js"></script>
    <script src="../assets/extra-libs/c3/c3.min.js"></script>
    <script src="../assets/libs/chartist/dist/chartist.min.js"></script>
    <script src="../assets/libs/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.min.js"></script>
    <script src="../assets/extra-libs/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="../dist/js/pages/datatable/datatable-basic.init.js"></script>
</body>
</html>
