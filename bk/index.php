<!DOCTYPE html>
<html lang="en">

<head>
    <title>Chatbot Admin Panel</title>
    <!-- HTML5 Shim and Respond.js IE9 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
      <![endif]-->
      <!-- Meta -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <meta name="description" content="CodedThemes">
      <meta name="keywords" content=" Admin , Responsive, Landing, Bootstrap, App, Template, Mobile, iOS, Android, apple, creative app">
      <meta name="author" content="CodedThemes">
      <!-- Favicon icon -->
      <link rel="icon" href="https://dev.datanetiix.com/chatbot_qa/images/favicon.ico" type="image/x-icon">
      <!-- Google font-->
      <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600" rel="stylesheet">
      <!-- Required Fremwork -->
      <link rel="stylesheet" type="text/css" href="assets/css/bootstrap/css/bootstrap.min.css">
      <!-- themify-icons line icon -->
      <link rel="stylesheet" type="text/css" href="assets/icon/themify-icons/themify-icons.css">
      <!-- ico font -->
      <link rel="stylesheet" type="text/css" href="assets/icon/icofont/css/icofont.css">
      <!-- Style.css -->
      <link rel="stylesheet" type="text/css" href="assets/css/style.css">
      <link rel="stylesheet" type="text/css" href="assets/css/jquery.mCustomScrollbar.css">

      <script src="https://cdn.anychart.com/releases/v8/js/anychart-base.min.js"></script>
  <script src="https://cdn.anychart.com/releases/v8/js/anychart-ui.min.js"></script>
  <script src="https://cdn.anychart.com/releases/v8/js/anychart-exports.min.js"></script>
  <link href="https://cdn.anychart.com/releases/v8/css/anychart-ui.min.css" type="text/css" rel="stylesheet">
  <link href="https://cdn.anychart.com/releases/v8/fonts/css/anychart-font.min.css" type="text/css" rel="stylesheet">
  <style type="text/css">

    html,
    body,
    #container {
      width: 100%;
      height: 100%;
      margin: 0;
      padding: 0;
    }
  
</style>
  </head>
<?php
   // Start the session
   session_start();

   if(!isset($_SESSION['login_user'])){
      header("location: login.php");
      die();
   }
   $login_session = $_SESSION['login_user'];
   include('function.php');
   $allUserCount = allUserCount();
?>
  <body>
    <!-- Pre-loader start -->
    <div class="theme-loader">
        <div class="ball-scale">
            <div class='contain'>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">

                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- Pre-loader end -->
    <div id="pcoded" class="pcoded">
        <div class="pcoded-overlay-box"></div>
        <div class="pcoded-container navbar-wrapper">

            <?php

                include('include/nav.php')
            ?>
            <div class="pcoded-main-container">
                <div class="pcoded-wrapper">
                     <?php

                        include('include/sidebar_nav.php')
                    ?>

                    <div class="pcoded-content">
                        <div class="pcoded-inner-content">
                            <div class="main-body">
                                <div class="page-wrapper">

                                    <div class="page-body">
                                        <div class="row">
                                            <!-- card1 start -->
                                            <div class="col-md-6 col-xl-3">
                                                <div class="card widget-card-1">
                                                    <div class="card-block-small">
                                                        <i class="icofont icofont-pie-chart bg-c-blue card1-icon"></i>
                                                        <span class="text-c-blue f-w-600">Existing Client</span>
                                                        <h4><?php echo $allUserCount['existing_client']; ?></h4>
                                                        <div>
                                                            <span class="f-left m-t-10 text-muted">
                                                                <i class="text-c-blue f-16 icofont icofont-tag m-r-10"></i>Total Count
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- card1 end -->
                                            <!-- card1 start -->
                                            <div class="col-md-6 col-xl-3">
                                                <div class="card widget-card-1">
                                                    <div class="card-block-small">
                                                        <i class="icofont icofont-ui-home bg-c-pink card1-icon"></i>
                                                        <span class="text-c-pink f-w-600">Job Seeker</span>
                                                        <h4><?php echo $allUserCount['job_seeker']; ?></h4>
                                                        <div>
                                                            <span class="f-left m-t-10 text-muted">
                                                                <i class="text-c-pink f-16 icofont icofont-tag m-r-10"></i>Total Count
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- card1 end -->

  

  
                                            <!-- card1 start -->
                                            <div class="col-md-6 col-xl-3">
                                                <div class="card widget-card-1">
                                                    <div class="card-block-small">
                                                        <i class="icofont icofont-warning-alt bg-c-green card1-icon"></i>
                                                        <span class="text-c-green f-w-600">New Client</span>
                                                        <h4><?php echo $allUserCount['new_client']; ?></h4>
                                                        <div>
                                                            <span class="f-left m-t-10 text-muted">
                                                                <i class="text-c-green f-16 icofont icofont-tag m-r-10"></i>Total Count
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- card1 end -->
                                            <!-- card1 start -->
                                            <div class="col-md-6 col-xl-3">
                                                <div class="card widget-card-1">
                                                    <div class="card-block-small">
                                                        <i class="icofont icofont-social-dribbble bg-c-yellow card1-icon"></i>
                                                        <span class="text-c-yellow f-w-600">Over all users</span>
                                                        <h4><?php echo $allUserCount['overall_count']; ?></h4>
                                                        <div>
                                                            <span class="f-left m-t-10 text-muted">
                                                                <i class="text-c-yellow f-16 icofont icofont-tag m-r-10"></i>Over all users count
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- card1 end -->
                                            <!-- Bar Chart start -->
                                            <div class="col-md-12 col-lg-12">




                                                <div class="col-sm-12">
                                                <div class="card">
                                                  

                                                        <div class="card-block">
                                                            <h4 class="sub-title">Search</h4>
                                                            <form>
                                                                <div class="form-group row">
                                                                        <label class="col-sm-1 col-form-label">Select Year</label>
                                                                        <div class="col-sm-2">
                                                                            <select name="select" class="form-control">
                                                                                <option value="<?php echo date('Y') ?>"><?php echo date('Y') ?></option>
                                                                                <option value="2023">2023</option>
                                                                                <option value="2022">2022</option>
                                                                                <option value="2021">2021</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                            </form>
                                                        </div>
                                                </div>
                                            </div>
                                              
                                            <div id="container" style="height:517px;"   ></div>
                                        
                                            </div>
                                            <!-- Bar Chart Ends -->
                                            <!-- Statestics Start -->
                                           <!--  <div class="col-md-12 col-xl-8">
                                                <div class="card">
                                                    <div class="card-header">
                                                        <h5>Statestics</h5>
                                                        <div class="card-header-left ">
                                                        </div>
                                                        <div class="card-header-right">
                                                            <ul class="list-unstyled card-option">
                                                                <li><i class="icofont icofont-simple-left "></i></li>
                                                                <li><i class="icofont icofont-maximize full-card"></i></li>
                                                                <li><i class="icofont icofont-minus minimize-card"></i></li>
                                                                <li><i class="icofont icofont-refresh reload-card"></i></li>
                                                                <li><i class="icofont icofont-error close-card"></i></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="card-block">
                                                        <div id="statestics-chart" style="height:517px;"></div>
                                                    </div>
                                                </div>
                                            </div> -->



                                            <!-- <div class="col-md-12 col-xl-4">
                                                    <div class="card fb-card">
                                                        <div class="card-header">
                                                            <i class="icofont icofont-social-facebook"></i>
                                                            <div class="d-inline-block">
                                                                <h5>facebook</h5>
                                                                <span>blog page timeline</span>
                                                            </div>
                                                        </div>
                                                        <div class="card-block text-center">
                                                            <div class="row">
                                                                <div class="col-6 b-r-default">
                                                                    <h2>23</h2>
                                                                    <p class="text-muted">Active</p>
                                                                </div>
                                                                <div class="col-6">
                                                                    <h2>23</h2>
                                                                    <p class="text-muted">Comment</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card dribble-card">
                                                        <div class="card-header">
                                                            <i class="icofont icofont-social-dribbble"></i>
                                                            <div class="d-inline-block">
                                                                <h5>dribble</h5>
                                                                <span>Product page analysis</span>
                                                            </div>
                                                        </div>
                                                        <div class="card-block text-center">
                                                            <div class="row">
                                                                <div class="col-6 b-r-default">
                                                                    <h2>23</h2>
                                                                    <p class="text-muted">Live</p>
                                                                </div>
                                                                <div class="col-6">
                                                                    <h2>23</h2>
                                                                    <p class="text-muted">Message</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card twitter-card">
                                                        <div class="card-header">
                                                            <i class="icofont icofont-social-twitter"></i>
                                                            <div class="d-inline-block">
                                                                <h5>twitter</h5>
                                                                <span>current new timeline</span>
                                                            </div>
                                                        </div>
                                                        <div class="card-block text-center">
                                                            <div class="row">
                                                                <div class="col-6 b-r-default">
                                                                    <h2>25</h2>
                                                                    <p class="text-muted">new tweet</p>
                                                                </div>
                                                                <div class="col-6">
                                                                    <h2>450+</h2>
                                                                    <p class="text-muted">Follower</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div> -->
                                           
                                            <!-- Email Sent End -->
                                            <!-- Data widget start -->
                                           <!--  <div class="col-md-12 col-xl-6">
                                                <div class="card project-task">
                                                    <div class="card-header">
                                                        <div class="card-header-left ">
                                                            <h5>Time spent : project &amp; task</h5>
                                                        </div>
                                                        <div class="card-header-right">
                                                            <ul class="list-unstyled card-option">
                                                                <li><i class="icofont icofont-simple-left "></i></li>
                                                                <li><i class="icofont icofont-maximize full-card"></i></li>
                                                                <li><i class="icofont icofont-minus minimize-card"></i></li>
                                                                <li><i class="icofont icofont-refresh reload-card"></i></li>
                                                                <li><i class="icofont icofont-error close-card"></i></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="card-block p-b-10">
                                                        <div class="table-responsive">
                                                            <table class="table table-hover">
                                                                <thead>
                                                                    <tr>
                                                                        <th>Project & Task</th>
                                                                        <th>Time Spents</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <tr>
                                                                        <td>
                                                                            <div class="task-contain">
                                                                                <h6 class="bg-c-blue d-inline-block text-center">U</h6>
                                                                                <p class="d-inline-block m-l-20">UI Design</p>
                                                                            </div>
                                                                        </td>
                                                                        <td>
                                                                            <p class="d-inline-block m-r-20">4 : 36</p>
                                                                            <div class="progress d-inline-block">
                                                                                <div class="progress-bar bg-c-blue" role="progressbar" aria-valuemin="0" aria-valuemax="100" style="width:80%">
                                                                                </div>
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>
                                                                            <div class="task-contain">
                                                                                <h6 class="bg-c-pink d-inline-block text-center">R</h6>
                                                                                <p class="d-inline-block m-l-20">Redesign Android App</p>
                                                                            </div>
                                                                        </td>
                                                                        <td>
                                                                            <p class="d-inline-block m-r-20">4 : 36</p>
                                                                            <div class="progress d-inline-block">
                                                                                <div class="progress-bar bg-c-pink" role="progressbar" aria-valuemin="0" aria-valuemax="100" style="width:60%">
                                                                                </div>
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>
                                                                            <div class="task-contain">
                                                                                <h6 class="bg-c-yellow d-inline-block text-center">L</h6>
                                                                                <p class="d-inline-block m-l-20">Logo Design</p>
                                                                            </div>
                                                                        </td>
                                                                        <td>
                                                                            <p class="d-inline-block m-r-20">4 : 36</p>
                                                                            <div class="progress d-inline-block">
                                                                                <div class="progress-bar bg-c-yellow" role="progressbar" aria-valuemin="0" aria-valuemax="100" style="width:50%">
                                                                                </div>
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>
                                                                            <div class="task-contain">
                                                                                <h6 class="bg-c-green d-inline-block text-center">A</h6>
                                                                                <p class="d-inline-block m-l-20">Appestia landing Page</p>
                                                                            </div>
                                                                        </td>
                                                                        <td>
                                                                            <p class="d-inline-block m-r-20">4 : 36</p>
                                                                            <div class="progress d-inline-block">
                                                                                <div class="progress-bar bg-c-green" role="progressbar" aria-valuemin="0" aria-valuemax="100" style="width:50%">
                                                                                </div>
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>
                                                                            <div class="task-contain">
                                                                                <h6 class="bg-c-blue d-inline-block text-center">L</h6>
                                                                                <p class="d-inline-block m-l-20">Logo Design</p>
                                                                            </div>
                                                                        </td>
                                                                        <td>
                                                                            <p class="d-inline-block m-r-20">4 : 36</p>
                                                                            <div class="progress d-inline-block">
                                                                                <div class="progress-bar bg-c-blue" role="progressbar" aria-valuemin="0" aria-valuemax="100" style="width:50%">
                                                                                </div>
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12 col-xl-6">
                                                <div class="card add-task-card">
                                                    <div class="card-header">
                                                        <div class="card-header-left">
                                                            <h5>To do list</h5>
                                                        </div>
                                                        <div class="card-header-right">
                                                            <button class="btn btn-card btn-primary">Add task </button>
                                                        </div>
                                                    </div>
                                                    <div class="card-block">
                                                        <div class="to-do-list">
                                                            <div class="checkbox-fade fade-in-primary d-block">
                                                                <label class="check-task d-block">
                                                                    <input type="checkbox" value="">
                                                                    <span class="cr">
                                                                        <i class="cr-icon icofont icofont-ui-check txt-default"></i>
                                                                    </span>
                                                                    <span><h6>Schedule Meeting with Compnes <span class="label bg-c-green m-l-10 f-10">2 week</span></h6></span>
                                                                    <div class="task-card-img m-l-40">
                                                                        <a href="#!"><img src="assets/images/avatar-2.jpg" data-toggle="tooltip" title="Lary Doe" alt="" class="img-40"></a>
                                                                        <a href="#!"><img src="assets/images/avatar-3.jpg" data-toggle="tooltip" title="Alia" alt="" class="img-40 m-l-10"></a>
                                                                    </div>
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="to-do-list">
                                                            <div class="checkbox-fade fade-in-primary d-block">
                                                                <label class="check-task d-block">
                                                                    <input type="checkbox" value="">
                                                                    <span class="cr">
                                                                        <i class="cr-icon icofont icofont-ui-check txt-default"></i>
                                                                    </span>
                                                                    <span><h6>Meeting With HOD's and borad</h6><p class="text-muted m-l-40">23 january 2003</p></span>
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="to-do-list">
                                                            <div class="checkbox-fade fade-in-primary d-block">
                                                                <label class="check-task d-block">
                                                                    <input type="checkbox" value="">
                                                                    <span class="cr">
                                                                        <i class="cr-icon icofont icofont-ui-check txt-default"></i>
                                                                    </span>
                                                                    <span><h6>Create template, admin with responsive<span class="label bg-c-pink m-l-10">2 week</span></h6></span>
                                                                    <div class="task-card-img m-l-40">
                                                                        <a href="#!"><img src="assets/images/avatar-2.jpg" data-toggle="tooltip" title="Alia" alt="" class="img-40"></a>
                                                                        <a href="#!"><img src="assets/images/avatar-3.jpg" data-toggle="tooltip" title="Suzen" alt="" class="img-40 m-l-10"></a>
                                                                        <a href="#!"><img src="assets/images/avatar-4.jpg" data-toggle="tooltip" title="Lary Doe" alt="" class="img-40 m-l-10"></a>
                                                                        <a href="#!"><img src="assets/images/avatar-2.jpg" data-toggle="tooltip" title="Josephin Doe" alt="" class="img-40 m-l-10"></a>
                                                                    </div>
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="to-do-list">
                                                            <div class="checkbox-fade fade-in-primary d-block">
                                                                <label class="check-task d-block">
                                                                    <input type="checkbox" value="">
                                                                    <span class="cr">
                                                                        <i class="cr-icon icofont icofont-ui-check txt-default"></i>
                                                                    </span>
                                                                    <span><h6>Meeting With HOD's and borad</h6>
                                                                        <p class="text-muted m-l-40">23 january 2003</p></span>
                                                                        <div class="task-card-img m-l-40">
                                                                            <a href="#!"><img src="assets/images/avatar-2.jpg" data-toggle="tooltip" title="Lary Doe" alt="" class="img-40"></a>
                                                                            <a href="#!"><img src="assets/images/avatar-3.jpg" data-toggle="tooltip" title="Alia" alt="" class="img-40 m-l-10"></a>
                                                                            <a href="#!"><img src="assets/images/avatar-2.jpg" data-toggle="tooltip" title="Josephin Doe" alt="" class="img-40 m-l-10"></a>
                                                                        </div>
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Data widget End -->
                                                
                                            </div> 
                                        </div>
                                    </div>



                                    <div id="styleSelector">

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- <div class="fixed-button">
                    <a href="https://codedthemes.com/item/guru-able-admin-template/" target="_blank" class="btn btn-md btn-primary">
                      <i class="fa fa-shopping-cart" aria-hidden="true"></i> Upgrade To Pro
                    </a>
                </div> -->
            </div>
        </div>

        <!-- Warning Section Starts -->
        <!-- Older IE warning message -->
    <!--[if lt IE 9]>
<div class="ie-warning">
    <h1>Warning!!</h1>
    <p>You are using an outdated version of Internet Explorer, please upgrade <br/>to any of the following web browsers to access this website.</p>
    <div class="iew-container">
        <ul class="iew-download">
            <li>
                <a href="http://www.google.com/chrome/">
                    <img src="assets/images/browser/chrome.png" alt="Chrome">
                    <div>Chrome</div>
                </a>
            </li>
            <li>
                <a href="https://www.mozilla.org/en-US/firefox/new/">
                    <img src="assets/images/browser/firefox.png" alt="Firefox">
                    <div>Firefox</div>
                </a>
            </li>
            <li>
                <a href="http://www.opera.com">
                    <img src="assets/images/browser/opera.png" alt="Opera">
                    <div>Opera</div>
                </a>
            </li>
            <li>
                <a href="https://www.apple.com/safari/">
                    <img src="assets/images/browser/safari.png" alt="Safari">
                    <div>Safari</div>
                </a>
            </li>
            <li>
                <a href="http://windows.microsoft.com/en-us/internet-explorer/download-ie">
                    <img src="assets/images/browser/ie.png" alt="">
                    <div>IE (9 & above)</div>
                </a>
            </li>
        </ul>
    </div>
    <p>Sorry for the inconvenience!</p>
</div>
<![endif]-->
<!-- Warning Section Ends -->
<!-- Required Jquery -->
<script type="text/javascript" src="assets/js/jquery/jquery.min.js"></script>
<script type="text/javascript" src="assets/js/jquery-ui/jquery-ui.min.js"></script>
<script type="text/javascript" src="assets/js/popper.js/popper.min.js"></script>
<script type="text/javascript" src="assets/js/bootstrap/js/bootstrap.min.js"></script>
<!-- jquery slimscroll js -->
<script type="text/javascript" src="assets/js/jquery-slimscroll/jquery.slimscroll.js"></script>
<!-- modernizr js -->
<script type="text/javascript" src="assets/js/modernizr/modernizr.js"></script>
<!-- am chart -->
<script src="assets/pages/widget/amchart/amcharts.min.js"></script>
<script src="assets/pages/widget/amchart/serial.min.js"></script>
<!-- Todo js -->
<script type="text/javascript " src="assets/pages/todo/todo.js "></script>
<!-- Custom js -->
<script type="text/javascript" src="assets/pages/dashboard/custom-dashboard.js"></script>
<script type="text/javascript" src="assets/js/script.js"></script>
<script type="text/javascript " src="assets/js/SmoothScroll.js"></script>
<script src="assets/js/pcoded.min.js"></script>
<script src="assets/js/demo-12.js"></script>
<script src="assets/js/jquery.mCustomScrollbar.concat.min.js"></script>
<script>
var $window = $(window);
var nav = $('.fixed-button');
    $window.scroll(function(){
        if ($window.scrollTop() >= 200) {
         nav.addClass('active');
     }
     else {
         nav.removeClass('active');
     }
 });
</script>
<script>
    // anychart.onDocumentReady(function () {
    //   // create data set on our data
    //   var chartData = {
    //     title: '',
    //     header: ['#', 'new client', 'job seeker', 'exist client'],
    //     rows: [
    //       ['jan', 0, 0, 0],
    //       ['feb', 0, 0, 0],
    //       ['March', 1, 22, 25],
    //       ['Apr', 12, 22, 25],
    //       ['May', 15, 26, 29],
    //       ['Jun', 16, 20, 28],
    //       ['Juy', 18, 19, 22],
    //       ['Aug', 18, 22, 25],
    //     ]
    //   };

    //   // create column chart
    //   var chart = anychart.column();

    //   // set chart data
    //   chart.data(chartData);

    //   // turn on chart animation
    //   chart.animation(true);

    //   chart.yAxis().labels().format('{%Value}{groupsSeparator: }');

    //   // set titles for Y-axis
    //   chart.yAxis().title('Count');

    //   chart
    //     .labels()
    //     .enabled(true)
    //     .position('center-top')
    //     .anchor('center-bottom')
    //     .format('{%Value}{groupsSeparator: }');
    //   chart.hovered().labels(false);

    //   // turn on legend and tune it
    //   chart.legend().enabled(true).fontSize(13).padding([0, 0, 20, 0]);

    //   // interactivity settings and tooltip position
    //   chart.interactivity().hoverMode('single');

    //   chart
    //     .tooltip()
    //     .positionMode('point')
    //     .position('center-top')
    //     .anchor('center-bottom')
    //     .offsetX(0)
    //     .offsetY(5)
    //     .titleFormat('{%X}')
    //     .format('{%SeriesName} : {%Value}{groupsSeparator: }');

    //   // set container id for the chart
    //   chart.container('container');

    //   // initiate chart drawing
    //   chart.draw();
    // });
  
</script>
<?php
$current_year = date('Y');
?>

  <!-- existing_client -->
<script type="text/javascript">
$(document).ready(function() {
    //$('#loginform').submit(function(e) {
        //e.preventDefault();
        $.ajax({
            type: "POST",
            url: 'ajaxcall.php',
            data: { action: 'allusersmonthwise', year: '<?php echo $current_year;?>' },
            success: function(response)
            {
                //console.log('response',response);
                var jsonData = JSON.parse(response);
                existing_client_fn(jsonData)
           }
       });
     //});
});
</script>

<script>
    function existing_client_fn(json)
    {
        var splashMonth = new Array();
        //var splashCount = new Array();'
       
         $.each(json,function(key,value){
    splashMonth.push(value.month_name);
    //splashCount.push(value.Count);
});
         //console.log('splashMonth',splashMonth)

        anychart.onDocumentReady(function () {
      // create data set on our data

                   var arr = [];
       var arr1 = [];
       var arr2 = [];
      // var arr3 = [];

        $.each(json, function(key, val){
            arr.push([['"'+val.month_name+'"']+','+[val.Count]]);
            arr1.push([val.month_name]);
            arr2.push([val.Count]);
       
    });
    //return arr;
        //arr3 ="["+"'"+arr1[0]+"'" +','+arr2[0] + "]";
 // console.log('json1',arr1 );
 // console.log('json2',arr2);

 // console.log(arr3);




      var chartData = {
        title: '',
        header: ['#', 'Exist Client', 'New Client', 'Job Seeker'],
        rows : [
            [arr1[0].toString(),arr2[0], arr2[12], arr2[24]],
            [arr1[1].toString(),arr2[1], arr2[13], arr2[25]],
            [arr1[2].toString(),arr2[2], arr2[14], arr2[26]],
            [arr1[3].toString(),arr2[3], arr2[15], arr2[27]],
            [arr1[4].toString(),arr2[4], arr2[16], arr2[28]],
            [arr1[5].toString(),arr2[5], arr2[17], arr2[29]],
            [arr1[6].toString(),arr2[6], arr2[18], arr2[30]],
            [arr1[7].toString(),arr2[7], arr2[19], arr2[31]],
            [arr1[8].toString(),arr2[8], arr2[20], arr2[32]],
            [arr1[9].toString(),arr2[9], arr2[21], arr2[33]],
            [arr1[10].toString(),arr2[10], arr2[22], arr2[34]],
            [arr1[11].toString(),arr2[11], arr2[23], arr2[35]]
            ]
        // rows: [
        //   ['jan', 0, 0, 0],
        //   ['feb', 0, 0, 0],
        //   ['March', 1, 22, 25],
        //   ['Apr', 12, 22, 25],
        //   ['May', 15, 26, 29],
        //   ['Jun', 16, 20, 28],
        //   ['Juy', 18, 19, 22],
        //   ['Aug', 18, 22, 25],
        // ]
      };

      // create column chart
      var chart = anychart.column();

      // set chart data
      chart.data(chartData);

      // turn on chart animation
      chart.animation(true);

      chart.yAxis().labels().format('{%Value}{groupsSeparator: }');

      // set titles for Y-axis
      chart.yAxis().title('Count');

      chart
        .labels()
        .enabled(true)
        .position('center-top')
        .anchor('center-bottom')
        .format('{%Value}{groupsSeparator: }');
      chart.hovered().labels(false);

      // turn on legend and tune it
      chart.legend().enabled(true).fontSize(13).padding([0, 0, 20, 0]);

      // interactivity settings and tooltip position
      chart.interactivity().hoverMode('single');

      chart
        .tooltip()
        .positionMode('point')
        .position('center-top')
        .anchor('center-bottom')
        .offsetX(0)
        .offsetY(5)
        .titleFormat('{%X}')
        .format('{%SeriesName} : {%Value}{groupsSeparator: }');

      // set container id for the chart
      chart.container('container');

      // initiate chart drawing
      chart.draw();
    });
    }
    
  
</script>
  <!-- existing_client end -->
</body>

</html>
