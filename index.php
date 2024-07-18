<?php include('include/header.php'); ?>
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

                        include('include/sidebar_nav.php');
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
                                                                        <div class="col-sm-3">
                                                                            <select name="select_year" id="select_year" class="form-control">
                                                                               <option value="<?php echo date('Y') ?>"><?php echo date('Y') ?></option>
                                                                            </select>
                                                                        </div>
                                                                    
                                                                        <label class="col-sm-1 col-form-label">Vertical</label>
                                                                        <div class="col-sm-6">
                                                                            <select name="vertical" id="vertical"  multiple="multiple" class="form-control" placeholder="Multi select Vertical">
                                                                                <option value="Data and AI">Data and AI</option>  
                                                                                <option value="IT Infrastructure">IT Infrastructure</option>  
                                                                                <option value="Microsoft dynamics">Microsoft dynamics</option>  
                                                                                <option value="Custom app">Custom app</option>  
                                                                                <option value="Sales force">Salesforce</option>  
                                                                                <option value="Others">Others</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group row">
                                                                        <label class="col-sm-1 col-form-label">From Date</label>
                                                                        <div class="col-sm-3">
                                                                            <input type="date" class="form-control" id="from_date" name="from_date">
                                                                        </div>
                                                                    
                                                                        <label class="col-sm-1 col-form-label">To Date</label>
                                                                        <div class="col-sm-3">
                                                                            <input type="date" class="form-control" id="to_date" name="to_date"> 
                                                                            <code id="error_code"></code>
                                                                        </div>
                                                                    </div>
                                                            </form>
                                                        </div>
                                                </div>
                                            </div>
                                              
                                            <div id="container" style="height:517px;"    ></div>
                                        
                                            </div>
                                            
                                                
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
                
            </div>
        </div>

        

</body>
<?php include('include/footer.php'); ?>
  <!-- dashboard -->
<script src="js/dashboard.js" type="text/javascript"> </script>
  <!-- dashboard end -->

</html>
