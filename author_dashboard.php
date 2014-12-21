<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <title>Dashboard</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <!--external css-->
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet" />
     <link rel="stylesheet" type="text/css" href="css/zabuto_calendar.css">
    <link rel="stylesheet" type="text/css" href="js/gritter/css/jquery.gritter.css" />
    <link rel="stylesheet" type="text/css" href="lineicons/style.css">    
    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet">
    <link href="css/style-responsive.css" rel="stylesheet">
     <link rel="stylesheet" href="css/to-do.css">
     <script src="js/chart-master/Chart.js"></script>

    <script type="text/javascript" src="jquery 1.6.4.min.js"></script> 
    <script type="text/javascript" src="jquery-ui.min.js"></script> 
    <script type="text/javascript" src="jquery.multiselect.min.js"></script>

    
      <script type='text/javascript' src="https://github.com/niklasvh/html2canvas/releases/download/0.4.1/html2canvas.js"></script>
    
  
    
      <script type='text/javascript' src="http://www.nihilogic.dk/labs/canvas2image/base64.js"></script>
    
  
    
      <script type='text/javascript' src="http://www.nihilogic.dk/labs/canvas2image/canvas2image.js"></script>
    
   
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
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
        <?php session_start();
                        $dbc=mysqli_connect('localhost','root','','ndb') or die("error connecting to the database");

                      $cid=$_SESSION['login_user'];
                      $query1 = "SELECT * FROM users WHERE username='{$cid}'";
                      $result = mysqli_query($dbc,$query1)or die('no query1');
                      $row = mysqli_fetch_array($result);
                      $name=$row['firstname']." ".$row['lastname'];
                      $url = "profiles/".$row['username'].".jpg";
                      $query2 = "Select * from articles inner join article_writer_r on articles.article_id=article_writer_r.article_id where article_writer_r.writer_username='{$cid}' and articles.article_status=0";
                      $result2=mysqli_query($dbc,$query2)or die('no query2');
                      $row2 = mysqli_fetch_array($result2);
                      $count2=mysqli_num_rows($result2);
                      $query3="Select * from articles inner join article_writer_r on articles.article_id=article_writer_r.article_id where article_writer_r.writer_username='{$cid}' and articles.article_status=1";
                      $result3=mysqli_query($dbc,$query3)or die('no query3');
                      $row3 = mysqli_fetch_array($result3);
                      $count3=mysqli_num_rows($result3);
                      $query4="Select * from articles inner join article_writer_r on articles.article_id=article_writer_r.article_id where article_writer_r.writer_username='{$cid}' and articles.article_status=2";
                      $result4=mysqli_query($dbc,$query4)or die('no query4');
                      $row4 = mysqli_fetch_array($result4);
                      $count4=mysqli_num_rows($result4);
                      $query5="Select * from articles inner join article_writer_r on articles.article_id=article_writer_r.article_id where article_writer_r.writer_username='{$cid}' and articles.article_status=3";
                      $result5=mysqli_query($dbc,$query5)or die('no query5');
                      $row5 = mysqli_fetch_array($result5);
                      $count5=mysqli_num_rows($result5);
                      $query6="Select * from colab_table where main_username='{$cid}' or other_username='{$cid}'";
                      $result6=mysqli_query($dbc,$query6)or die('no query6');
                      $row6 = mysqli_fetch_array($result6);
                      $count6=mysqli_num_rows($result6);
                    ?>
          <div id="sidebar"  class="nav-collapse ">
              <!-- sidebar menu start-->
              <ul class="sidebar-menu" id="nav-accordion">
              
                  <p class="centered"><a href="profile.html"><img src=<?php echo $url?> class="img-circle" width="60"></a></p>
                  <h5 class="centered">
                    <?php echo $name?>



              </h5>
                    
                  <li class="mt">
                      <a href="author_dashboard.html">
                        <span>Dashboard</span>
                      </a>
                  </li>

                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-desktop"></i>
                          <span>UI Elements</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="general.html">General</a></li>
                          <li><a  href="buttons.html">Buttons</a></li>
                          <li><a  href="panels.html">Panels</a></li>
                      </ul>
                  </li>

                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-cogs"></i>
                          <span>Components</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="calendar.html">Calendar</a></li>
                          <li><a  href="gallery.html">Gallery</a></li>
                          <li><a  href="todo_list.html">Todo List</a></li>
                      </ul>
                  </li>
                  <li class="sub-menu">
                      <a class="" href="javascript:;" >
                          <i class="fa fa-book"></i>
                          <span>Extra Pages</span>
                      </a>
                      <ul class="sub">
                          <li class=""><a  href="blank.html">Blank Page</a></li>
                          <li><a  href="login.html">Login</a></li>
                          <li><a  href="lock_screen.html">Lock Screen</a></li>
                      </ul>
                  </li>
                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-tasks"></i>
                          <span>Forms</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="form_component.html">Form Components</a></li>
                      </ul>
                  </li>
                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-th"></i>
                          <span>Data Tables</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="basic_table.html">Basic Table</a></li>
                          <li><a  href="responsive_table.html">Responsive Table</a></li>
                      </ul>
                  </li>
                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class=" fa fa-bar-chart-o"></i>
                          <span>Charts</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="morris.html">Morris</a></li>
                          <li><a  href="chartjs.html">Chartjs</a></li>
                      </ul>
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
          <section class="wrapper">

              <div class="row">

                  <div class="col-lg-9 main-chart">
                  <div class="row mtbox">

                      <div class="col-md-2 col-sm-2 col-md-offset-1 box0">
                        <div class="box1">
                  <span class=" li_paperplane"></span>
                  <h3><?php echo $count2?></h3>
                  <p>Published</p>
                   </div>
                  <p><?php echo $count2?> posts have been published so far!</p>
                      </div>
                      <div class="col-md-2 col-sm-2 box0">
                        <div class="box1">
                  <span class="li_vallet"></span>
                  <h3><?php echo $count3?></h3>
                  <p>Pitched</p>
                        </div>
                  <p><?php echo $count3?> posts are pitched to the editor.</p>
                      </div>
                      <div class="col-md-2 col-sm-2 box0">
                        <div class="box1">
                  <span class=" li_pen"></span>
                  <h3><?php echo $count4?></h3> <p>Edits</p>
                        </div>
                  <p>You have to edit <?php echo $count4?> posts.</p>
                      </div>
                      <div class="col-md-2 col-sm-2 box0">
                        <div class="box1">
                  <span class=" li_note"></span>
                  <h3><?php echo $count5?></h3> <p>Drafts</p>
                        </div>
                  <p><?php echo $count5?> posts await completion.</p>
                      </div>
                      <div class="col-md-2 col-sm-2 box0">
                        <div class="box1">
                  <span class="li_bubble"></span>
                  <h3><?php echo $count6?></h3> <p>Collab(s)</p>
                        </div>
                  <p>You have <?php echo $count6?> Collab Request(s)</p>
                      </div>
                    
                    </div><!-- /row mt -->  
                    <!-- SORTABLE TO DO LIST -->
      
              <div class="row mt mb">
                  <div class="col-md-12">
                      <section class="task-panel tasks-widget">
                    <div class="panel-heading">
                          <div class="pull-left"><h5><i class="fa fa-tasks"></i> <font color="#c75005"> <strong> Pending Tasks- Todo List </strong> </font></h5></div>
                          <br>
                    </div>
                          <div class="panel-body">
                              <div id="ollo" class="task-content">
                                  <ul id="sortable" class="task-list abcda">
                                      <li class="list-primary">
                                          <i class=" fa fa-ellipsis-v"></i>
                                          <div class="task-checkbox">
                                              <input type="checkbox" class="list-child" value=""  />
                                          </div>
                                          <div class="task-title">
                                              <span class="task-title-sp">Dashgum - Admin Panel Theme</span>
                                             <div class="pull-right hidden-phone">
                                                 
                                                  <button class="btn btn-danger btn-xs fa fa-trash-o removecat"></button>
                                              </div>
                                          </div>
                                      </li>

                                      <li class="list-danger">
                                          <i class=" fa fa-ellipsis-v"></i>
                                          <div class="task-checkbox">
                                              <input type="checkbox" class="list-child" value=""  />
                                          </div>
                                          <div class="task-title">
                                              <span class="task-title-sp">Extensive collection of plugins</span>
                                              
                                              <div class="pull-right hidden-phone">
                                                  
                                                  <button class="btn btn-danger btn-xs fa fa-trash-o removecat"></button>
                                              </div>
                                          </div>
                                      </li>
                                      <li class="list-success">
                                          <i class=" fa fa-ellipsis-v"></i>
                                          <div class="task-checkbox">
                                              <input type="checkbox" class="list-child" value=""  />
                                          </div>
                                          <div class="task-title">
                                              <span class="task-title-sp">Free updates always, no extra fees.</span>
                                             
                                              <div class="pull-right hidden-phone">
                                                  
                                                  <button class="btn btn-danger btn-xs fa fa-trash-o removecat"></button>
                                              </div>
                                          </div>
                                      </li>
                                      <li class="list-warning">
                                          <i class=" fa fa-ellipsis-v"></i>
                                          <div class="task-checkbox">
                                              <input type="checkbox" class="list-child" value=""  />
                                          </div>
                                          <div class="task-title">
                                              <span class="task-title-sp">More features coming soon</span>
                                              
                                              <div class="pull-right hidden-phone">
                                                  
                                                  <button class="btn btn-danger btn-xs fa fa-trash-o removecat"></button>
                                              </div>
                                          </div>
                                      </li>
                                                    </ul>
                              </div>
                              
                          </div>
                      </section>
                  </div><!--/col-md-12 -->
              </div><!-- /row -->
                      
                      <div class="row mt">
                      <!-- SERVER STATUS PANELS -->
                        <div class="col-md-4 col-sm-4 mb">
                          
                        </div><!-- /col-md-4-->
                        

                        <div class="col-md-4 col-sm-4 mb">
                          
                        </div><!-- /col-md-4 -->
                        
            <div class="col-md-4 mb">
              
            </div><!-- /col-md-4 -->
                        

                    </div><!-- /row -->
                    
                            
          <div class="row">
            <!-- TWITTER PANEL -->
            <div class="col-md-4 mb">
                          <div>
                            <div class="darkblue-header">
                            </div>
              
                
                          </div><! -- /darkblue panel -->
            </div><!-- /col-md-4 -->
            
            <div class="col-md-4 mb">
              
            </div><!-- /col-md-4 -->
            
            <div class="col-md-4 col-sm-4 mb">
              
            </div><!-- /col-md-4 -->
            
          </div><!-- /row -->
          
          
          
                  </div><!-- /col-lg-9 END SECTION MIDDLE -->
                  
                  
      <!-- **********************************************************************************************************************************************************
      RIGHT SIDEBAR CONTENT
      *********************************************************************************************************************************************************** -->                  
                  
                  <div class="col-lg-3 ds">
                    <!--COMPLETED ACTIONS DONUTS CHART-->
            <h3>ACTIVITY</h3>
                                        
                      <!-- First Action -->
                      <div class="desc">
                        <div class="thumb">
                          <span class="badge bg-theme"><i class="fa fa-clock-o"></i></span>
                        </div>
                        <div class="details">
                          <p><muted>2 Minutes Ago</muted><br/>
                            <a href="#"> James Brown subscribed to your newsletter. </a><br/>
                          </p>
                        </div>
                      </div>
                      <!-- Second Action -->
                      <div class="desc">
                        <div class="thumb">
                          <span class="badge bg-theme"><i class="fa fa-clock-o"></i></span>
                        </div>
                        <div class="details">
                          <p><muted>3 Hours Ago</muted><br/>
                             <a href="#">Diana Kennedy purchased a year subscription. </a><br/>
                          </p>
                        </div>
                      </div>
                      <!-- Third Action -->
                      <div class="desc">
                        <div class="thumb">
                          <span class="badge bg-theme"><i class="fa fa-clock-o"></i></span>
                        </div>
                        <div class="details">
                          <p><muted>7 Hours Ago</muted><br/>
                             <a href="#">Brandon Page purchased a year subscription.</a><br/>
                          </p>
                        </div>
                      </div>
                      <!-- Fourth Action -->
                      <div class="desc">
                        <div class="thumb">
                          <span class="badge bg-theme"><i class="fa fa-clock-o"></i></span>
                        </div>
                        <div class="details">
                          <p><muted>11 Hours Ago</muted><br/>
                             <a href="#">Mark Twain commented your post. </a> <br/>
                          </p>
                        </div>
                      </div>
                      <!-- Fifth Action -->
                      <div class="desc">
                        <div class="thumb">
                          <span class="badge bg-theme"><i class="fa fa-clock-o"></i></span>
                        </div>
                        <div class="details">
                          <p><muted>18 Hours Ago</muted><br/>
                             <a href="#">Daniel Pratt purchased a wallet in your store.</a> <br/>
                          </p>
                        </div>
                      </div>

            
                      
                  </div><!-- /col-lg-3 -->
              </div><! --/row -->
          </section>
      </section>

      <!--main content end-->
      </section>

    <!-- js placed at the end of the document so the pages load faster -->
    <script src="js/jquery.js"></script>
    <script src="js/jquery-1.8.3.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script class="include" type="text/javascript" src="js/jquery.dcjqaccordion.2.7.js"></script>
    <script src="js/jquery.scrollTo.min.js"></script>
    <script src="js/jquery.nicescroll.js" type="text/javascript"></script>
    <script src="js/jquery.sparkline.js"></script>


    <!--common script for all pages-->
    <script src="js/common-scripts.js"></script>
    
    <script type="text/javascript" src="js/gritter/js/jquery.gritter.js"></script>
    <script type="text/javascript" src="js/gritter-conf.js"></script>

    <!--script for this page-->
    <script src="js/sparkline-chart.js"></script>    
  <script src="js/zabuto_calendar.js"></script>  
  
  
  <script type="application/javascript">
        $(document).ready(function () {
            $("#date-popover").popover({html: true, trigger: "manual"});
            $("#date-popover").hide();
            $("#date-popover").click(function (e) {
                $(this).hide();
            });
        
            $("#my-calendar").zabuto_calendar({
                action: function () {
                    return myDateFunction(this.id, false);
                },
                action_nav: function () {
                    return myNavFunction(this.id);
                },
                ajax: {
                    url: "show_data.php?action=1",
                    modal: true
                },
                legend: [
                    {type: "text", label: "Special event", badge: "00"},
                    {type: "block", label: "Regular event", }
                ]
            });
        });
        
        
        function myNavFunction(id) {
            $("#date-popover").hide();
            var nav = $("#" + id).data("navigation");
            var to = $("#" + id).data("to");
            console.log('nav ' + nav + ' to: ' + to.month + '/' + to.year);
        }
    </script>
    <!-- Script for ToDo <li></li>st-->
    <script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>    
    <script src="js/tasks.js" type="text/javascript"></script>

    <script>
      jQuery(document).ready(function() {
          TaskList.initTaskWidget();
      });

      $(function() {
          $( "#sortable" ).sortable();
          $( "#sortable" ).disableSelection();
      });

    </script>
    
    
  <script>
      //custom select box

      $(function(){
          $('select.styled').customSelect();
      });

      $(".removecat").live("click",function(event){

          $(this).parent().parent().parent().remove();
        });



  </script>
<script>
  
function hello(){

   // alert("Oye "+document.getElementById('sortable').innerHTML);
document.getElementById('sortabe').innerHTML="<li>Hello</li>"+document.getElementById('sortable').innerHTML;
alert(""+getElementById('sortabe').innerHTML);
/*
 var numberList = document.getElementById("sortable");

    document.getElementById('addinputs').innerHTML=<p>Hello</p>+document.getElementById('addinputs').innerHTML;

    var li= document.createElement("li");
    li.class='fa fa-ellipsis-v';
var div1 = document.createElement('div');
div1.class = 'task-checkbox';
var input = document.createElement('input');
input.type = 'checkbox';
var div2 = document.createElement('div');
div2.class = 'task-title';
var span =document.createElement('span');
span.class="task-title-sp";
span.innerHTML = document.getElementById('addinputs').value;
var div3 = document.createElement('div');
div3.class = 'pull-right hidden-phone';
var button =document.createElement('button');
button.class="btn btn-danger btn-xs fa fa-trash-o removecat";
div3.innerHTML=button;
div2.innerHTML=span+div3;
li.innerHTML=i+div1+div2;
alert(""+li.innerHTML);

            numberList.appendChild(li);
            
                    //add text node to li element
            newNumberListItem.appendChild(numberListValue);

                    //add new list element built in previous steps to unordered list
                    //called numberList*/
}





</script>
  </body>
</html>