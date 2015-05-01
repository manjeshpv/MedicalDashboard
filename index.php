<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Arpit Soni">
    <meta name="keyword" content="Medical Dashboard">
    <link rel="shortcut icon" href="img/favicon.png">

    <title>Bluetooth Device Dashboard</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap-reset.css" rel="stylesheet">
    <!--external css-->
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link href="assets/jquery-easy-pie-chart/jquery.easy-pie-chart.css" rel="stylesheet" type="text/css" media="screen"/>
    <link href="assets/morris.js-0.4.3/morris.css" rel="stylesheet">

      <!--right slidebar-->
    <link href="css/slidebars.css" rel="stylesheet">

    <!-- Custom styles for index page -->

    <link href="css/style.css" rel="stylesheet">
    <link href="css/style-responsive.css" rel="stylesheet" />



    <!-- HTML5 shim and Respond.js IE8 support of HTML5 tooltipss and media queries -->
    <!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
      <script src="js/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

  <section id="container" >
      <!--header start-->
      <header class="header white-bg">
              <div class="sidebar-toggle-box">
                  <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
              </div>
            <!--logo start-->
            <a href="index.html" class="logo">Company<span>Logo</span></a>
            <!--logo end-->
               <div class="nav notify-row" id="top_menu">
                <!--  notification start -->
                <ul class="nav top-menu">
                    <!-- settings start -->
                    <li class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <i class="fa fa-tasks"></i>
                            <span class="badge bg-success">6</span>
                        </a>
                         <!--<ul class="dropdown-menu extended tasks-bar">
                            <div class="notify-arrow notify-arrow-green"></div>
                            <li>
                                <p class="green">You have 6 pending tasks</p>
                            </li>
                            <li>
                                <a href="#">
                                    <div class="task-info">
                                        <div class="desc">Dashboard v1.3</div>
                                        <div class="percent">40%</div>
                                    </div>
                                    <div class="progress progress-striped">
                                        <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                                            <span class="sr-only">40% Complete (success)</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <div class="task-info">
                                        <div class="desc">Database Update</div>
                                        <div class="percent">60%</div>
                                    </div>
                                    <div class="progress progress-striped">
                                        <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                                            <span class="sr-only">60% Complete (warning)</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <div class="task-info">
                                        <div class="desc">Iphone Development</div>
                                        <div class="percent">87%</div>
                                    </div>
                                    <div class="progress progress-striped">
                                        <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 87%">
                                            <span class="sr-only">87% Complete</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <div class="task-info">
                                        <div class="desc">Mobile App</div>
                                        <div class="percent">33%</div>
                                    </div>
                                    <div class="progress progress-striped">
                                        <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 33%">
                                            <span class="sr-only">33% Complete (danger)</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <div class="task-info">
                                        <div class="desc">Dashboard v1.3</div>
                                        <div class="percent">45%</div>
                                    </div>
                                    <div class="progress progress-striped active">
                                        <div class="progress-bar"  role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 45%">
                                            <span class="sr-only">45% Complete</span>
                                        </div>
                                    </div>

                                </a>
                            </li>
                            <li class="external">
                                <a href="#">See All Tasks</a>
                            </li>
                        </ul>-->
                    </li>
                    <!-- settings end -->
                    <!-- inbox dropdown start-->
                    <li id="header_inbox_bar" class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <i class="fa fa-envelope-o"></i>
                            <span class="badge bg-important">5</span>
                        </a>
                         <ul class="dropdown-menu extended inbox">
                            <div class="notify-arrow notify-arrow-red"></div>
                            <li>
                                <p class="red">You have 5 new messages</p>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="photo"><img alt="avatar" src="./img/avatar-mini.jpg"></span>
                                    <span class="subject">
                                    <span class="from">Jonathan Smith</span>
                                    <span class="time">Just now</span>
                                    </span>
                                    <span class="message">
                                        Hello, this is an example msg.
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="photo"><img alt="avatar" src="./img/avatar-mini2.jpg"></span>
                                    <span class="subject">
                                    <span class="from">Jhon Doe</span>
                                    <span class="time">10 mins</span>
                                    </span>
                                    <span class="message">
                                     Hi, Jhon Doe how are you ?
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="photo"><img alt="avatar" src="./img/avatar-mini3.jpg"></span>
                                    <span class="subject">
                                    <span class="from">Jason Stathum</span>
                                    <span class="time">3 hrs</span>
                                    </span>
                                    <span class="message">
                                        This is awesome dashboard.
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="photo"><img alt="avatar" src="./img/avatar-mini4.jpg"></span>
                                    <span class="subject">
                                    <span class="from">Jondi Rose</span>
                                    <span class="time">Just now</span>
                                    </span>
                                    <span class="message">
                                        Hello, this is Mark Loudermilk
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a href="#">See all messages</a>
                            </li>
                        </ul>
                    </li>
                    <!-- inbox dropdown end -->
                    <!-- notification dropdown start-->
                    <li id="header_notification_bar" class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">

                            <i class="fa fa-bell-o"></i>
                            <span class="badge bg-warning">7</span>
                        </a>
                         <ul class="dropdown-menu extended notification">
                            <div class="notify-arrow notify-arrow-yellow"></div>
                            <li>
                                <p class="yellow">You have 7 new notifications</p>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="label label-danger"><i class="fa fa-bolt"></i></span>
                                    Server #3 overloaded.
                                    <span class="small italic">34 mins</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="label label-warning"><i class="fa fa-bell"></i></span>
                                    Server #10 not respoding.
                                    <span class="small italic">1 Hours</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="label label-danger"><i class="fa fa-bolt"></i></span>
                                    Database overloaded 24%.
                                    <span class="small italic">4 hrs</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="label label-success"><i class="fa fa-plus"></i></span>
                                    New user registered.
                                    <span class="small italic">Just now</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="label label-info"><i class="fa fa-bullhorn"></i></span>
                                    Application error.
                                    <span class="small italic">10 mins</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">See all notifications</a>
                            </li>
                        </ul>
                    </li>
                    <!-- notification dropdown end -->
                    <!-- Help Dropdown starts-->
                    <li id="header_notification_bar" class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">

                            <i class="fa fa-question"></i>
                        </a>
                        <!-- <ul class="dropdown-menu extended notification">
                            <div class="notify-arrow notify-arrow-yellow"></div>
                            <li>
                                <p class="yellow">You have 7 new notifications</p>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="label label-danger"><i class="fa fa-bolt"></i></span>
                                    Server #3 overloaded.
                                    <span class="small italic">34 mins</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="label label-warning"><i class="fa fa-bell"></i></span>
                                    Server #10 not respoding.
                                    <span class="small italic">1 Hours</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="label label-danger"><i class="fa fa-bolt"></i></span>
                                    Database overloaded 24%.
                                    <span class="small italic">4 hrs</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="label label-success"><i class="fa fa-plus"></i></span>
                                    New user registered.
                                    <span class="small italic">Just now</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="label label-info"><i class="fa fa-bullhorn"></i></span>
                                    Application error.
                                    <span class="small italic">10 mins</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">See all notifications</a>
                            </li>
                        </ul> -->
                    </li>
                    <!-- Help Dropdown ends-->
                </ul>
                <!--  notification end -->
            </div>
            <div class="top-nav ">
                <!--search & user info start-->
                <ul class="nav pull-right top-menu">
                    <li>
                        <input type="text" class="form-control search" placeholder="Search">
                    </li>
                    <!-- user login dropdown start -->
                    <li class="dropdown language">
                      <a data-close-others="true" data-hover="dropdown" data-toggle="dropdown" class="dropdown-toggle" href="#">
                          <img src="img/flags/us.png" alt="">
                          <span class="username">US</span>
                          <b class="caret"></b>
                      </a>
                      <ul class="dropdown-menu">
                          <li><a href="#"><img src="img/flags/es.png" alt=""> Spanish</a></li>
                          <li><a href="#"><img src="img/flags/de.png" alt=""> German</a></li>
                          <li><a href="#"><img src="img/flags/ru.png" alt=""> Russian</a></li>
                          <li><a href="#"><img src="img/flags/fr.png" alt=""> French</a></li>
                      </ul>
                    </li>
                    <li class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <img alt="" src="img/avatar1_small.jpg">
                            <span class="username">Mark Loudermilk</span>
                            <b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu extended logout">
                            <div class="log-arrow-up"></div>
                            <li><a href="profile.html"><i class=" fa fa-suitcase"></i>Profile</a></li>
                            <li><a href="#"><i class="fa fa-cog"></i> Settings</a></li>
                            <li><a href="#"><i class="fa fa-bell-o"></i> Notification</a></li>
                            <li><a href="login.html"><i class="fa fa-key"></i> Log Out</a></li>
                        </ul>
                    </li>
                    <li class="sb-toggle-right">
                        <i class="fa fa-users tooltips" data-placement="bottom" data-original-title="Family Members"></i>
                    </li>
                    <!-- user login dropdown end -->
                </ul>
                <!--search & user info end-->
            </div>
        </header>
      <!--header end-->
      <!--sidebar start-->
      <aside>
          <div id="sidebar"  class="nav-collapse ">
              <!-- sidebar menu start-->
              <ul class="sidebar-menu" id="nav-accordion">
                  <li>
                      <a class="active" href="index.html">
                          <i class="fa fa-dashboard"></i>
                          <span>Dashboard</span>
                      </a>
                  </li>

                  <li>
                      <a href="medical_data.html" >
                          <i class="fa fa-user-md"></i>
                          <span>Medical Data</span>
                      </a>
                  </li>

                  <li>
                      <a href="diet.html" >
                          <i class="fa fa-cutlery"></i>
                          <span>Diet</span>
                      </a>
                  </li>

                  <li>
                      <a href="workout.html" >
                          <i class="fa fa-cogs"></i>
                          <span>Workout</span>
                      </a>
                  </li>
                  <li>
                      <a target="_blank" href="http://creative.aargss.com/SocialMedia/">
                          <i class="fa fa-user"></i>
                          <span>Social</span>
                      </a>
                     
                  </li>
                  <li>
                      <a href="journals.html" >
                          <i class="fa fa-th"></i>
                          <span>Journals</span>
                      </a>
                  </li>
                  <li>
                      <a href="#" >
                          <i class=" fa fa-leanpub"></i>
                          <span>Learn</span>
                      </a>
                  </li>
                  <li>
                      <a href="videos.html" >
                          <i class=" fa fa-video-camera"></i>
                          <span>Videos</span>
                      </a>
                  </li>
                  <li>
                      <a href="symptom_checker.html" >
                          <i class="fa fa-shopping-cart"></i>
                          <span>Symptom</span>
                      </a>
                  </li>
                  <li>
                      <a href="#" >
                          <i class="fa fa-map-marker"></i>
                          <span>Recipes</span>
                      </a>
                  </li>
                  <li>
                      <a href="print_card.html">
                          <i class="fa fa-print"></i>
                          <span>Print Card</span>
                      </a>
                  </li>
                  <li>
                      <a href="email_doc.html" >
                          <i class="fa fa-envelope-o"></i>
                          <span>Email Doctor</span>
                      </a>
                  </li>
                  <li>
                      <a  href="#">
                          <i class="fa fa-archive"></i>
                          <span>Store</span>
                      </a>
                  </li>
                  <li>
                      <a href="mental_health.html" >
                          <i class="fa fa-sitemap"></i>
                          <span>Mental Health</span>
                      </a>
                  </li>
                  <li>
                      <a href="coaching.html" >
                          <i class="fa fa-sitemap"></i>
                          <span>Coaching</span>
                      </a>
                  </li>
                  <li>
                      <a href="literature.html" >
                          <i class="fa fa-sitemap"></i>
                          <span>Literature</span>
                      </a>
                  </li>
                  </li>
                  <li>
                      <a href="entertainment.html" >
                          <i class="fa fa-sitemap"></i>
                          <span>Entertainment</span>
                      </a>
                  </li>
              </ul>
              <!-- sidebar menu end-->
          </div>
      </aside>
      <!--sidebar end-->
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">
              <!--Page Name-->
              <div class="row">
                <div class="col-md-12 page-name">
                  
                  <h1><i class="fa fa-dashboard"></i>Dashboard</h1>
                </div>
              </div>
              <!--state overview start-->
              <div class="row state-overview margin-top-10">
                <!--Icons Section Starts-->
                <div class="col-md-6">
                  <div class="col-lg-3 col-sm-6">
                      <section class="panel">
                          <a class="symbol pink" href="medical_data.html">
                              <i class="fa fa-user-md"></i>
                              <p>Medical Data</p>
                          </a>
                          
                      </section>
                  </div>
                  <div class="col-lg-3 col-sm-6">
                      <section class="panel">
                          <a class="symbol violet" href="diet.html">
                              <i class="fa fa-cutlery"></i>
                               <p>Diet</p>
                          </a>
                         
                      </section>
                  </div>
                  <div class="col-lg-3 col-sm-6">
                      <section class="panel">
                          <a class="symbol orange" href="workout.html">
                              <i class="fa fa-cogs"></i>
                               <p>Workout</p>
                          </a>
                          
                      </section>
                  </div>
                  <div class="col-lg-3 col-sm-6">
                      <section class="panel">
                          <a class="symbol blue" target="_blank" href="http://creative.aargss.com/SocialMedia/">
                              <i class="fa fa-user"></i>
                               <p>Social</p>
                          </a>
                          
                      </section>
                  </div>
                   <div class="col-lg-3 col-sm-6">
                      <section class="panel">
                          <a class="symbol yellow" href="journals.html">
                              <i class="fa fa-th"></i>
                              <p>Journals</p>
                          </a>
                          
                      </section>
                  </div>
                  <div class="col-lg-3 col-sm-6">
                      <section class="panel">
                          <a class="symbol orange" href="#">
                              <i class="fa fa-leanpub"></i>
                               <p>Learn</p>
                          </a>
                         
                      </section>
                  </div>
                  <div class="col-lg-3 col-sm-6">
                      <section class="panel">
                          <a class="symbol green" href="video.html">
                              <i class="fa fa-video-camera"></i>
                               <p>Video</p>
                          </a>
                          
                      </section>
                  </div>
                  <div class="col-lg-3 col-sm-6">
                      <section class="panel">
                          <a class="symbol red" href="symptom_checker.html">
                              <i class="fa fa-bar-chart-o"></i>
                               <p>Symptom</p>
                          </a>
                          
                      </section>
                  </div>
                   <div class="col-lg-3 col-sm-6">
                      <section class="panel">
                          <a class="symbol terques" href="#">
                              <i class="fa fa-user"></i>
                              <p>Recipes</p>
                          </a>
                          
                      </section>
                  </div>
                  <div class="col-lg-3 col-sm-6">
                      <section class="panel">
                          <a class="symbol green" href="print_card.html">
                              <i class="fa fa-print"></i>
                               <p>Print Card</p>
                          </a>
                         
                      </section>
                  </div>
                  <div class="col-lg-3 col-sm-6">
                      <section class="panel">
                          <a class="symbol blue" href="email_doc.html">
                              <i class="fa fa-envelope-o"></i>
                               <p>Email Doctor</p>
                          </a>
                          
                      </section>
                  </div>
                  <div class="col-lg-3 col-sm-6">
                      <section class="panel">
                          <a class="symbol terques" href="">
                              <i class="fa fa-archive"></i>
                               <p>Store</p>
                          </a>
                          
                      </section>
                  </div>
                   <div class="col-lg-3 col-sm-6">
                      <section class="panel">
                          <a class="symbol violet" href="mental_health.html">
                              <i class="fa fa-user"></i>
                              <p>Mental Health</p>
                          </a>
                          
                      </section>
                  </div>
                  <div class="col-lg-3 col-sm-6">
                      <section class="panel">
                          <a class="symbol yellow" href="coaching.html">
                              <i class="fa fa-tags"></i>
                               <p>Coaching</p>
                          </a>
                         
                      </section>
                  </div>
                  <div class="col-lg-3 col-sm-6">
                      <section class="panel">
                          <a class="symbol red" href="literature.html">
                              <i class="fa fa-shopping-cart"></i>
                              <p>Literature</p>
                          </a>
                          
                      </section>
                  </div>
                  <div class="col-lg-3 col-sm-6">
                      <section class="panel">
                          <a class="symbol pink" href="entertainment.html">
                              <i class="fa fa-bar-chart-o"></i>
                               <p>Entertainment</p>
                          </a>
                          
                      </section>
                  </div>
                  <div class="col-md-6">   
                        <section class="panel panel-info">
                              <div class="weather-bg">
                                <div class="panel-heading">
                                     <h3 class="panel-title">Software Information</h3>
                                </div>
                                  <div class="panel-body">
                                      <div class="row">
                                          <ul>
                                            <li><span>Version:</span><span>1234567</span></li>
                                            <li><span>Description:</span><span>1234567</span></li>
                                            <li><span>BIOS:</span><span>1234567</span></li>
                                          </ul>  
                                      </div>
                                  </div>
                              </div>
                          </section>
                     </div>
                     <div class="col-md-6">   
                        <section class="panel panel-info">
                              <div class="weather-bg">
                                  <div class="panel-heading">
                                     <h3 class="panel-title">System Information</h3>
                                  </div>
                                  <div class="panel-body">
                                      <div class="row">
                                         <ul>
                                            <li><span>Time: </span><span>12:17 AM</span></li>
                                            <li><span id="ipAddress">IP Address:</span><span></span></li>
                                            <li><span>Security: </span><span>Enabled</span></li>
                                          </ul>  
                                      </div>
                                  </div>
                              </div>
                          </section>
                     </div>
                </div>
                <!--Icons Section Ends-->
                <!--Right Info Section Starts-->
                <div class="col-md-6">
                  <div class="col-md-12">
                    <div class="col-md-8 system-status">
                      <h4 class="margin-top-10">System Status</h4>
                      <h5 class="green-font">Device is working well <span class="glyphicon glyphicon-ok" aria-hidden="true"></span></h5>
                    </div>
                    <div class="col-md-4 margin-top-10">
                      <button type="button" class="btn btn-primary" aria-label="Left Align">
                        <span class="glyphicon glyphicon-align-left" aria-hidden="true"></span>
                      </button>
                      <button type="button" class="btn btn-primary" aria-label="Left Align">
                        <span class="glyphicon glyphicon-repeat" aria-hidden="true"></span>
                      </button>
                      <button type="button" class="btn btn-primary" aria-label="Left Align">
                        <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
                      </button>
                    </div>
                  </div>
                  <div class="col-md-12 pad20" role="tabpanel">
                      <!-- Nav tabs -->
                      <ul class="nav nav-tabs" role="tablist">
                        <li role="presentation" class="active"><a href="#heart-rate" aria-controls="heart-rate" role="tab" data-toggle="tab"><i class="fa fa-heartbeat"></i> Heart Rate</a></li>
                        <li role="presentation"><a href="#oxygen-level" aria-controls="oxygen-level" role="tab" data-toggle="tab"><i class="fa fa-circle-thin"></i> Oxygen Level</a></li>
                        <li role="presentation"><a href="#blood-pressure" aria-controls="blood-pressure" role="tab" data-toggle="tab"><i class="fa fa-tint"></i> Blood Pressure</a></li>
                        <li role="presentation"><a href="#weight" aria-controls="weight" role="tab" data-toggle="tab"><i class="fa fa-cubes"></i> Weight</a></li>
                        <li role="presentation"><a href="#bloodSugar" aria-controls="bloodSugar" role="tab" data-toggle="tab"><i class="fa fa-cube"></i> Blood Sugar</a></li>
                      </ul>
                      <!-- Tab panes -->
                      <div class="tab-content">
                        <!--Heart Rate Map Starts-->
                        <div role="tabpanel" class="tab-pane active" id="heart-rate">
                          <div class="panel terques-chart">
                            <div class="panel-body chart-texture">
                                <div class="chart">
                                    <div class="heading">
                                        <span>Current Heart Rate: 72</span>
                                    </div>
                                    <div class="sparkline" data-type="line" data-resize="true" data-height="75" data-width="90%" data-line-width="1" data-line-color="#fff" data-spot-color="#fff" data-fill-color="" data-highlight-line-color="#fff" data-spot-radius="4" data-data="[200,135,667,333,526,996,564,123,890,564,455]"></div>
                                </div>
                            </div>
                            <div class="chart-tittle">
                                <span class="title">Last Heart Rate Recorded: 70</span>
                            </div>
                          </div>
                        </div>
                        <!--Heart Rate Map Ends-->
                        <!--Oxygen Level Map Starts-->
                        <div role="tabpanel" class="tab-pane" id="oxygen-level">
                           <div class="panel green-chart">
                              <div class="panel-body">
                                  <div class="chart">
                                      <div class="heading">
                                          <span>Current Oxygen Level: xyz</span>
                                      </div>
                                      <div id="barchart"></div>
                                  </div>
                              </div>
                              <div class="chart-tittle">
                                  <span class="title">Last Recorded Oxygen Level: </span>
                              </div>
                           </div>
                        </div>
                        <!--Oxygen Level Map Ends-->
                        <!--Blood Pressure Map Starts-->
                        <div role="tabpanel" class="tab-pane" id="blood-pressure">
                           <div class="panel terques-chart">
                            <div class="panel-body chart-texture">
                                <div class="chart">
                                    <div class="heading">
                                        <span>Current Blood Pressure</span>
                                        <strong>72</strong>
                                    </div>
                                    <div class="sparkline" data-type="line" data-resize="true" data-height="75" data-width="90%" data-line-width="1" data-line-color="#fff" data-spot-color="#fff" data-fill-color="" data-highlight-line-color="#fff" data-spot-radius="4" data-data="[200,135,667,333,526,996,564,123,890,564,455]"></div>
                                </div>
                            </div>
                            <div class="chart-tittle">
                                <span class="title">Last Recorded Blood Pressure: abc</span>
                            </div>
                          </div>
                        </div>
                        <!--Blood Pressure Map Ends-->
                        <!--Weight Map Starts-->
                        <div role="tabpanel" class="tab-pane" id="weight">
                          <div class="panel green-chart">
                          <div class="panel-body">
                              <div class="chart">
                                  <div class="heading">
                                      <span>Current Weight: 70Kgs</span>
                                  </div>
                                  <div id="barchart"></div>
                              </div>
                          </div>
                          <div class="chart-tittle">
                              <span class="title">Last Recorded Weight: 78Kgs</span>
                          </div>
                         </div>
                        </div>
                        <!--Weight Map Ends-->
                          <!--Blood Sugar Map Starts-->
                        <div role="tabpanel" class="tab-pane" id="bloodSugar">
                          <div class="panel green-chart">
                          <div class="panel-body">
                              <div class="chart">
                                  <div class="heading">
                                      <span>Current Blood Sugar: 70</span>
                                  </div>
                                  <div id="barchart"></div>
                              </div>
                          </div>
                          <div class="chart-tittle">
                              <span class="title">Last Recorded Blood Sugar: 78</span>
                          </div>
                         </div>
                        </div>
                        <!--Blood Sugar Map Ends-->
                      </div>
                  </div>
                   <div class="col-md-12">
                        <ul class="device-info">
                          <li>
                            <a href=""><i class="fa fa-hand-o-right fa-lg"></i> The storage pool 'SP3' is faulted dur to failure</a>
                          </li>
                           <li>
                            <a href=""> <i class="fa fa-hand-o-right fa-lg"></i> Support access is currently enabled</a>
                          </li>
                           <li>
                            <a href=""><i class="fa fa-hand-o-right fa-lg"></i> Your device software has been upgraded to version 2.5.3.2625</a>
                          </li>
                        </ul>
                    </div>
                    <!--Morris Chart Starts-->
                      <div class="col-lg-12 margin-top-10">
                          <section class="panel">
                              <header class="panel-heading panel-title green">
                                  Pedometer Output
                              </header>
                              <div class="panel-body">
                                  <div id="pedoMeter" class="graph"></div>
                              </div>
                          </section>
                      </div>
                    <!--Morris Chart Ends-->
                </div>  
                <!--Right Info Section Ends-->
              </div>
              <!--state overview end-->
          </section>
      </section>
      <!--main content end-->

      <!-- Right Slidebar start -->
      <div class="sb-slidebar sb-right sb-style-overlay">
          <h5 class="side-title">Family Members</h5>
          <ul class="quick-chat-list">
              <li class="online">
                  <div class="media">
                      <a href="#" class="pull-left media-thumb">
                          <img alt="" src="img/chat-avatar2.jpg" class="media-object">
                      </a>
                      <div class="media-body">
                        <div class="media-status">
                          <a href="#"><i class="fa fa-cog"></i></a>
                          <a href="#"><i class="fa fa-trash-o"></i></a>
                        </div>
                        <strong>John Doe</strong>
                        <small>Dream Land, AU</small>  
                      </div>
                  </div><!-- media -->
              </li>
              <li class="online">
                  <div class="media">
                      <a href="#" class="pull-left media-thumb">
                          <img alt="" src="img/chat-avatar.jpg" class="media-object">
                      </a>
                      <div class="media-body">
                          <div class="media-status">
                            <a href="#"><i class="fa fa-cog"></i></a>
                            <a href="#"><i class="fa fa-trash-o"></i></a>
                            <!-- <span class=" badge bg-important">3</span> -->
                          </div>
                          <strong>Jonathan Smith</strong>
                          <small>United States</small>
                      </div>
                  </div><!-- media -->
              </li>

              <li class="online">
                  <div class="media">
                      <a href="#" class="pull-left media-thumb">
                          <img alt="" src="img/pro-ac-1.png" class="media-object">
                      </a>
                      <div class="media-body">
                          <div class="media-status">
                            <a href="#"><i class="fa fa-cog"></i></a>
                            <a href="#"><i class="fa fa-trash-o"></i></a>
                            <!-- <span class=" badge bg-success">5</span> -->
                          </div>
                          <strong>Jane Doe</strong>
                          <small>ABC, USA</small>
                      </div>
                  </div><!-- media -->
              </li>
              <li class="online">
                  <div class="media">
                      <a href="#" class="pull-left media-thumb">
                          <img alt="" src="img/avatar1.jpg" class="media-object">
                      </a>
                      <div class="media-body">
                        <div class="media-status">
                            <a href="#"><i class="fa fa-cog"></i></a>
                            <a href="#"><i class="fa fa-trash-o"></i></a>
                            <!-- <span class=" badge bg-success">5</span> -->
                        </div>
                        <strong>Anjelina Joli</strong>
                        <small>Fockland, UK</small>
                      </div>
                  </div><!-- media -->
              </li>
              <li class="online">
                  <div class="media">
                      <a href="#" class="pull-left media-thumb">
                          <img alt="" src="img/mail-avatar.jpg" class="media-object">
                      </a>
                      <div class="media-body">
                          <div class="media-status">
                            <a href="#"><i class="fa fa-cog"></i></a>
                            <a href="#"><i class="fa fa-trash-o"></i></a>
                            <!-- <span class=" badge bg-warning">7</span> -->
                          </div>
                          <strong>Mr Tasi</strong>
                          <small>Dream Land, USA</small>
                      </div>
                  </div><!-- media -->
              </li>
          </ul>
      </div>
      <!-- Right Slidebar end -->

      <!--footer start-->
      <footer class="site-footer">
          <div class="text-center">
              2015 &copy; all rights reserved.
              <a href="#" class="go-top">
                  <i class="fa fa-angle-up"></i>
              </a>
          </div>
      </footer>
      <!--footer end-->
  </section>

    <!-- js placed at the end of the document so the pages load faster -->
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script class="include" type="text/javascript" src="js/jquery.dcjqaccordion.2.7.js"></script>
    <script src="js/jquery.scrollTo.min.js"></script>
    <script src="js/jquery.nicescroll.js" type="text/javascript"></script>
    <script src="js/jquery.sparkline.js" type="text/javascript"></script>
    <script src="assets/jquery-easy-pie-chart/jquery.easy-pie-chart.js"></script>
    <script src="js/owl.carousel.js" ></script>
    <script src="js/jquery.customSelect.min.js" ></script>
    <script src="js/respond.min.js" ></script>
    <script src="assets/morris.js-0.4.3/morris.min.js" type="text/javascript"></script>
    <script src="assets/morris.js-0.4.3/raphael-min.js" type="text/javascript"></script>

    <!--right slidebar-->
    <script src="js/slidebars.min.js"></script>

    <!--common script for all pages-->
    <script src="js/common-scripts.js"></script>

    <!--script for this page-->
    <script src="js/sparkline-chart.js"></script>
    <script src="js/easy-pie-chart.js"></script>
    <script src="js/count.js"></script>
    <script src="js/morris-script.js"></script>

  <script>

      $(function(){
          //$('select.styled').customSelect();
          $("#ipAddress").html("IP Address: "+ myip);
      });

  </script>
  <script type="text/javascript" src="http://l2.io/ip.js?var=myip"></script>

  </body>
</html>