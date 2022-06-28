<!DOCTYPE html>
<!-- Template Name: Clip-One - Responsive Admin Template build with Twitter Bootstrap 3.x Version: 1.3 Author: ClipTheme -->
<!--[if IE 8]><html class="ie8 no-js" lang="en"><![endif]-->
<!--[if IE 9]><html class="ie9 no-js" lang="en"><![endif]-->
<!--[if !IE]><!-->
<html lang="en" class="no-js">
<!--<![endif]-->
<!-- start: HEAD -->

<head>
    <title>Absen-Meeting</title>
    <!-- start: META -->
    <meta charset="utf-8" />
    <!--[if IE]><meta http-equiv='X-UA-Compatible' content="IE=edge,IE=9,IE=8,chrome=1" /><![endif]-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta content="" name="description" />
    <meta content="" name="author" />
    <!-- end: META -->
    <!-- start: MAIN CSS -->
    <link rel="stylesheet" href="/assets/plugins/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="/assets/plugins/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="/assets/fonts/style.css">
    <link rel="stylesheet" href="/assets/css/main.css">
    <link rel="stylesheet" href="/assets/css/mycss.css">
    <link rel="stylesheet" href="/assets/css/main-responsive.css">
    <link rel="stylesheet" href="/assets/plugins/iCheck/skins/all.css">
    <link rel="stylesheet" href="/assets/plugins/bootstrap-colorpalette/css/bootstrap-colorpalette.css">
    <link rel="stylesheet" href="/assets/plugins/perfect-scrollbar/src/perfect-scrollbar.css">
    <link rel="stylesheet" href="/assets/css/theme_light.css" type="text/css" id="skin_color">
    <link rel="stylesheet" href="/assets/css/print.css" type="text/css" media="print" />
    <!--[if IE 7]>
		<link rel="stylesheet" href="/assets/plugins/font-awesome/css/font-awesome-ie7.min.css">
		<![endif]-->
    <!-- end: MAIN CSS -->
    <!-- start: CSS REQUIRED FOR THIS PAGE ONLY -->
    <link rel="stylesheet" href="/assets/plugins/ladda-bootstrap/dist/ladda-themeless.min.css">
    <link rel="stylesheet" href="/assets/plugins/bootstrap-switch/static/stylesheets/bootstrap-switch.css">
    <link rel="stylesheet" href="/assets/plugins/bootstrap-social-buttons/social-buttons-3.css">
    <link rel="stylesheet" href="/assets/plugins/css3-animation/animations.css">
    <link rel="stylesheet" type="text/css" href="assets/plugins/select2/select2.css" />
    <link rel="stylesheet" href="assets/plugins/DataTables/media/css/DT_bootstrap.css" />
    <!-- end: CSS REQUIRED FOR THIS PAGE ONLY -->
    <link rel="shortcut icon" href="favicon.ico" />
</head>
<!-- end: HEAD -->
<!-- start: BODY -->

<body>
    <!-- start: HEADER -->
    <div class="navbar navbar-inverse navbar-fixed-top">
        <!-- start: TOP NAVIGATION CONTAINER -->
        <div class="container">
            <div class="navbar-header" style="min-height: 49px;">
                <!-- start: RESPONSIVE MENU TOGGLER -->
                <button data-target=".navbar-collapse" data-toggle="collapse" class="navbar-toggle" type="button">
                    <span class="clip-list-2"></span>
                </button>
                <!-- end: RESPONSIVE MENU TOGGLER -->
                <!-- start: LOGO -->
                <a class="navbar-brand">
                    e-OFFICE
                </a>
                <!-- end: LOGO -->
            </div>
            <div class="navbar-tools">
                <!-- start: TOP NAVIGATION MENU -->
                <ul class="nav navbar-right">
                    <!-- start: USER DROPDOWN -->
                    <li class="dropdown current-user">
                        <a data-toggle="dropdown" data-hover="dropdown" class="dropdown-toggle" data-close-others="true" href="#">
                            <img src="/assets/images/avatar-1-small.jpg" class="circle-img" alt="">
                            <span class="username">Peter Clark</span>
                            <i class="clip-chevron-down"></i>
                        </a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="pages_user_profile.html">
                                    <i class="clip-user-2"></i>
                                    &nbsp;My Profile
                                </a>
                            </li>
                            <li>
                                <a href="pages_calendar.html">
                                    <i class="clip-calendar"></i>
                                    &nbsp;My Calendar
                                </a>
                            <li>
                                <a href="pages_messages.html">
                                    <i class="clip-bubble-4"></i>
                                    &nbsp;My Messages (3)
                                </a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a href="utility_lock_screen.html"><i class="clip-locked"></i>
                                    &nbsp;Lock Screen </a>
                            </li>
                            <li>
                                <a href="login_example1.html">
                                    <i class="clip-exit"></i>
                                    &nbsp;Log Out
                                </a>
                            </li>
                        </ul>
                    </li>
                    <!-- end: USER DROPDOWN -->
                </ul>
                <ul class="nav navbar-right">
                    <!-- start: TO-DO DROPDOWN -->
                    <li class="dropdown">
                        <a data-toggle="dropdown" data-hover="dropdown" class="dropdown-toggle" data-close-others="true" href="#">
                            <i class="clip-list-5"></i>
                            <span class="badge"> 12</span>
                        </a>
                        <ul class="dropdown-menu todo">
                            <li>
                                <span class="dropdown-menu-title"> You have 12 pending tasks</span>
                            </li>
                            <li>
                                <div class="drop-down-wrapper">
                                    <ul>
                                        <li>
                                            <a class="todo-actions" href="javascript:void(0)">
                                                <i class="fa fa-square-o"></i>
                                                <span class="desc" style="opacity: 1; text-decoration: none;">Staff Meeting</span>
                                                <span class="label label-danger" style="opacity: 1;"> today</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="todo-actions" href="javascript:void(0)">
                                                <i class="fa fa-square-o"></i>
                                                <span class="desc" style="opacity: 1; text-decoration: none;"> New frontend layout</span>
                                                <span class="label label-danger" style="opacity: 1;"> today</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="todo-actions" href="javascript:void(0)">
                                                <i class="fa fa-square-o"></i>
                                                <span class="desc"> Hire developers</span>
                                                <span class="label label-warning"> tommorow</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="todo-actions" href="javascript:void(0)">
                                                <i class="fa fa-square-o"></i>
                                                <span class="desc">Staff Meeting</span>
                                                <span class="label label-warning"> tommorow</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="todo-actions" href="javascript:void(0)">
                                                <i class="fa fa-square-o"></i>
                                                <span class="desc"> New frontend layout</span>
                                                <span class="label label-success"> this week</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="todo-actions" href="javascript:void(0)">
                                                <i class="fa fa-square-o"></i>
                                                <span class="desc"> Hire developers</span>
                                                <span class="label label-success"> this week</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="todo-actions" href="javascript:void(0)">
                                                <i class="fa fa-square-o"></i>
                                                <span class="desc"> New frontend layout</span>
                                                <span class="label label-info"> this month</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="todo-actions" href="javascript:void(0)">
                                                <i class="fa fa-square-o"></i>
                                                <span class="desc"> Hire developers</span>
                                                <span class="label label-info"> this month</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="todo-actions" href="javascript:void(0)">
                                                <i class="fa fa-square-o"></i>
                                                <span class="desc" style="opacity: 1; text-decoration: none;">Staff Meeting</span>
                                                <span class="label label-danger" style="opacity: 1;"> today</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="todo-actions" href="javascript:void(0)">
                                                <i class="fa fa-square-o"></i>
                                                <span class="desc" style="opacity: 1; text-decoration: none;"> New frontend layout</span>
                                                <span class="label label-danger" style="opacity: 1;"> today</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="todo-actions" href="javascript:void(0)">
                                                <i class="fa fa-square-o"></i>
                                                <span class="desc"> Hire developers</span>
                                                <span class="label label-warning"> tommorow</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="view-all">
                                <a href="javascript:void(0)">
                                    See all tasks <i class="fa fa-arrow-circle-o-right"></i>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <!-- end: TO-DO DROPDOWN-->
                </ul>
                <ul class="navbar-right" style="margin-left: -20px;">
                </ul>
                <ul class="navbar-right" style="margin-left: 20px; margin-top:-2px">
                    <a type="button" href="/" class="btn btn-default" style="color:rgba(12, 59, 227, 0.919);margin-top: 10px; box-shadow: 0 6px 6px rgba(0, 0, 0, 0.6);">
                        <i class="clip-windows8" style="font-size: 18px;"></i>
                        &nbsp; Aplikasi
                    </a>
                </ul>
                <!-- end: TOP NAVIGATION MENU -->
            </div>
        </div>
        <!-- end: TOP NAVIGATION CONTAINER -->
    </div>
    <!-- end: HEADER -->
    <!-- start: MAIN CONTAINER -->
    <div class="main-container page-full-width">
        <!-- start: PAGE -->
        <div class="main-content">
            <div class="container mybackground">
                <!-- start: PAGE CONTENT -->
                <?= $this->renderSection('content'); ?>
                <!-- end: PAGE CONTENT-->
            </div>
        </div>
        <!-- end: PAGE -->
    </div>
    <!-- end: MAIN CONTAINER -->
    <!-- start: FOOTER -->
    <?= $this->include('layouts/loader') ?>

    <div class="footer">
        <div class="footer-inner">
            2022 &copy; e-Office | Digital Tranformasi & Inovasi
        </div>
    </div>
    <!-- end: FOOTER -->

    <!-- start: MAIN JAVASCRIPTS -->
    <!--[if lt IE 9]>
		<script src="/assets/plugins/respond.min.js"></script>
		<script src="/assets/plugins/excanvas.min.js"></script>
		<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
		<![endif]-->
    <!--[if gte IE 9]><!-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
    <!--<![endif]-->
    <script src="/assets/plugins/jquery-ui/jquery-ui-1.10.2.custom.min.js"></script>
    <script src="/assets/plugins/bootstrap/js/bootstrap.min.js"></script>
    <script src="/assets/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js"></script>
    <script src="/assets/plugins/blockUI/jquery.blockUI.js"></script>
    <script src="/assets/plugins/iCheck/jquery.icheck.min.js"></script>
    <script src="/assets/plugins/perfect-scrollbar/src/jquery.mousewheel.js"></script>
    <script src="/assets/plugins/perfect-scrollbar/src/perfect-scrollbar.js"></script>
    <script src="/assets/plugins/less/less-1.5.0.min.js"></script>
    <script src="/assets/plugins/jquery-cookie/jquery.cookie.js"></script>
    <script src="/assets/plugins/bootstrap-colorpalette/js/bootstrap-colorpalette.js"></script>
    <script src="/assets/js/main.js"></script>
    <!-- end: MAIN JAVASCRIPTS -->
    <!-- start: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
    <script src="/assets/js/index.js"></script>
    <script src="/assets/plugins/ladda-bootstrap/dist/spin.min.js"></script>
    <script src="/assets/plugins/ladda-bootstrap/dist/ladda.min.js"></script>
    <script src="/assets/plugins/bootstrap-switch/static/js/bootstrap-switch.min.js"></script>
    <script src="/assets/js/ui-buttons.js"></script>
    <script src="/assets/js/ui-animation.js"></script>
    <script type="text/javascript" src="assets/plugins/select2/select2.min.js"></script>
    <script type="text/javascript" src="assets/plugins/DataTables/media/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="assets/plugins/DataTables/media/js/DT_bootstrap.js"></script>
    <script src="assets/js/table-data.js"></script>
    <script src="assets/js/form-validation.js"></script>
    <script src="assets/plugins/jquery-validation/dist/jquery.validate.min.js"></script>
    <!-- end: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
    <script>
        jQuery(document).ready(function() {
            Main.init();
            Animation.init();
            TableData.init();
            FormValidator.init();
        });
    </script>
</body>
<!-- end: BODY -->

</html>