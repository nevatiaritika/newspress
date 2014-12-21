<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="author" content="">


    <title>Newspress Generic Blank Page</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <!--external css-->
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet" />
    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet">
    <link href="css/style-responsive.css" rel="stylesheet">
    <!-- DataTables CSS -->
    <link href="css/plugins/dataTables.bootstrap.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="css/sb-admin-2.css" rel="stylesheet">
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery-ui-1.9.2.custom.min.js"></script>
    <script src="js/jquery.ui.touch-punch.min.js"></script>
    <script class="include" type="text/javascript" src="js/jquery.dcjqaccordion.2.7.js"></script>
    <script src="js/jquery.scrollTo.min.js"></script>
    <script src="js/jquery.nicescroll.js" type="text/javascript"></script>
    <!--common script for all pages-->
    <script src="js/common-scripts.js"></script>
    <!-- DataTables JavaScript -->
    <script src="js/plugins/dataTables/jquery.dataTables.js"></script>
    <script src="js/plugins/dataTables/dataTables.bootstrap.js"></script>
    <!-- Custom Theme JavaScript -->
    <script src="js/sb-admin-2.js"></script>
    <!-- Page-Level Demo Scripts - Tables - Use for reference -->
    <script>
    $(document).ready(function() {
        $('#dataTables-example').dataTable();
    });
    </script>
    <script>
      $(function(){
          $('select.styled').customSelect();
      });
    </script>

  </head>

  <body>

  <section id="container" >
      <!-- **********************************************************************************************************************************************************
      TOP BAR CONTENT & NOTIFICATIONS
      *********************************************************************************************************************************************************** -->
      <!--header start-->
      <header class="header black-bg">
              <div class="sidebar-toggle-box">
                  <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
              </div>
            <!--logo start-->
            <a href="index.html" class="logo"><b>News<span>press</span></b></a>

            <!--logo end-->
            <div class="nav notify-row" id="top_menu">
              
            </div>
            <div class="top-menu">
              <ul class="nav pull-right top-menu">
                    <li><a class="logout" href="login.html">Logout</a></li>
              </ul>
            </div>
        </header>
      <!--header end-->
      
      <!-- **********************************************************************************************************************************************************
      MAIN SIDEBAR MENU
      *********************************************************************************************************************************************************** -->
      <!--sidebar start-->
      <aside>
          <div id="sidebar"  class="nav-collapse ">
              <!-- sidebar menu start-->
              <ul class="sidebar-menu" id="nav-accordion">
              
                <ul class="sidebar-menu" id="nav-accordion">
              
                 <li class="mt">
                      <a href="auth_dashboard.php">
                        <span>Dashboard</span>
                      </a>
                  </li>
                  <li class="mt">
                      <a href="auth_author_firepad.php">
                        <span>Write</span>
                      </a>
                  </li>
                  <li class="mt">
                      <a href="chat.php">
                        <span>Chat</span>
                      </a>
                  </li>
                  <li class="mt">
                      <a href="auth_authordrafts.php">
                        <span>View Drafts</span>
                      </a>
                  </li>
                  <li class="mt">
                      <a href="auth_allarticles.php">
                        <span>View all articles</span>
                      </a>
                  </li>

                

              </ul>
              <!-- sidebar menu end-->
          </div>
      </aside>
      <!--sidebar end-->
      
      <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper site-min-height">
            <h3><i class="fa fa-angle-right"></i> Blank Page</h3>
            <div class="row mt">
              <div class="col-lg-12">
                      <!--here-->
                      <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>Date</th>
                                            <th>Name</th>
                                            <th>Category</th>
                                            <th>Type</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                    session_start();
                                    $cid=$_SESSION['login_user'];
                                                  $db = mysqli_connect ( 'localhost', 'root','', 'ndb' ) or die ( "Can't connect to database!" );
                                                  mysql_select_db('ndb');
                                                  $query="SELECT * from alltexts WHERE username='$cid' ";
                                                  $stmt = mysqli_prepare ( $db, $query );
                                                  $result = mysqli_query($db,$query);
                                                  while ($row = mysqli_fetch_array($result)) {
                                              ?>
                                        <tr class="odd gradeX">
                                            <td><?php echo $row[2];?></td>
                                            <td><a href=<?php echo $abc;?>><?php echo $row[6]; ?></a></td>
                                            <td><?php echo $row[2]; ?></td>
                                            <td class="center"><?php echo $row[3] ?></td>
                                            <td class="center"><?php echo $row[4] ?></td>
                                        </tr>
                                        <?php
                                            }
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.table-responsive -->
                                                   </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->




              </div>
            </div>
      
    </section><!--/wrapper -->
      </section><!-- /MAIN CONTENT -->

      <!--main content end-->
      
  </section>

    

  </body>
</html>
