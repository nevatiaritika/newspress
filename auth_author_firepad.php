<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <title>Newspress Generic Blank Page</title>
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <!--external css-->
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet" />
    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet">
    <link href="css/style-responsive.css" rel="stylesheet">
    <!-- Firebase -->
  <script src="https://cdn.firebase.com/js/client/2.0.2/firebase.js"></script>

  <!-- CodeMirror -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/4.5.0/codemirror.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/codemirror/4.5.0/codemirror.css" />

  <!-- Firepad -->
  <link rel="stylesheet" href="https://cdn.firebase.com/libs/firepad/1.1.0/firepad.css" />
  <script src="https://cdn.firebase.com/libs/firepad/1.1.0/firepad.min.js"></script>

  <!-- Include example userlist script / CSS.
       Can be downloaded from: https://github.com/firebase/firepad/tree/master/examples/ -->
  <script src="js/firepad.js"></script>
  <link rel="stylesheet" href="css/firepad.css"/>

  <style>
    html { height: 100%; }
    body { margin: 0; height: 100%; }
    /* Height / width / positioning can be customized for your use case.
       For demo purposes, we make the user list 175px and firepad fill the rest of the page. */
    #userlist 
    {
      position: absolute; left: 700; top: 10; bottom: 100; height: 100px;
      width: 200px;
      
    }
    #firepad {
      margin-left: 50px;
      position: absolute; left: 200px; top:-15px; height: 700px;

    }
    #jugaad
    {
      margin-top: 700px;
    }
  </style>

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
      
          <div id="sidebar"  class="nav-collapse ">
              <!-- sidebar menu start-->
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
          	<h3>Writer</h3>
          	<div class="row mt">
          		<div class="col-lg-12 "><!--
              -->
          		<div id="userlist"></div>
              <div id="firepad"></div>
            	</div>
            </div>
             
              <div class="row">
              <div class="col-lg-12" id="jugaad">
              <div class="col-md-3">
    <form method="POST" action="save.php">
    <label>
      Category*
    </label>
    <select name="category">
      <option value="1">News</option>
      <option value="2">Tehnology</option>
      <option value="3">Politics</option>
    </select>
  </div>
  <div class="col-md-3">
    <label>
      Type*
    </label>
    <input type="text" name="type">
  </div>
  <div class="col-md-3">
    <label>
      Collaborators
    </label>
    <input type="text" name="collabotators">
  </div>
  <div class="col-md-3">
  <input type="submit" name="submit" value="Save"/>
  </div>
    </form>
              </div>
          	</div> 
  
			
		</section><!--/wrapper -->
      </section><!-- /MAIN CONTENT -->

      <!--main content end-->
      
  </section>

    <!-- js placed at the end of the document so the pages load faster -->
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery-ui-1.9.2.custom.min.js"></script>
    <script src="js/jquery.ui.touch-punch.min.js"></script>
    <script class="include" type="text/javascript" src="js/jquery.dcjqaccordion.2.7.js"></script>
    <script src="js/jquery.scrollTo.min.js"></script>
    <script src="js/jquery.nicescroll.js" type="text/javascript"></script>


    <!--common script for all pages-->
    <script src="js/common-scripts.js"></script>

    <!--script for this page-->
    
  <script>
      //custom select box

      $(function(){
          $('select.styled').customSelect();
      });

  </script>
<!-- Firepad Script-->
<script>
    function init() {
      //// Initialize Firebase.
      var firepadRef = getExampleRef();
      // TODO: Replace above line with:
      // var firepadRef = new Firebase('<YOUR FIREBASE URL>');
      //// Create CodeMirror (with lineWrapping on).
      var codeMirror = CodeMirror(document.getElementById('firepad'), { lineWrapping: true });
      // Create a random ID to use as our user ID (we must give this to firepad and FirepadUserList).
      var userId = Math.floor(Math.random() * 9999999999).toString();
      //// Create Firepad (with rich text features and our desired userId).
      var firepad = Firepad.fromCodeMirror(firepadRef, codeMirror,
          { richTextToolbar: true, richTextShortcuts: true, userId: userId});
      //// Create FirepadUserList (with our desired userId).
      var firepadUserList = FirepadUserList.fromDiv(firepadRef.child('users'),
          document.getElementById('userlist'), userId);
      //// Initialize contents.
      firepad.on('ready', function() {
        if (firepad.isHistoryEmpty()) {
          firepad.setText('Check out the user list to the left!');
        }
      });
    }
    // Helper to get hash from end of URL or generate a random one.
    function getExampleRef() {
      var ref = new Firebase('https://firepad.firebaseio-demo.com');
      var hash = window.location.hash.replace(/#/g, '');
      if (hash) {
        ref = ref.child(hash);
      } else {
        ref = ref.push(); // generate unique location.
        window.location = window.location + '#' + ref.key(); // add it as a hash to the URL.
      }
      if (typeof console !== 'undefined')
        console.log('Firebase data: ', ref.toString());
      return ref;
    }
    init();
  </script>
  <script>
 
var ery = location.href.split('#');
 
document.cookies = 'anchor=' + ery[1];
 
</script>
  </body>
</html>
