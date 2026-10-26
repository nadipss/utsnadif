<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <title>Studio | Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    
    <!-- ================== BEGIN core-css ================== -->
    <link href="{{ asset('admin-assets/css/vendor.min.css') }}" rel="stylesheet">
    <link href="{{ asset('admin-assets/css/app.min.css') }}" rel="stylesheet">
    <!-- ================== END core-css ================== -->
</head>
<body>
    <!-- BEGIN #app -->
    <div id="app" class="app">
        
        <!-- BEGIN #header -->
        <div id="header" class="app-header">
            <!-- BEGIN mobile-toggler -->
            <div class="mobile-toggler">
                <button type="button" class="menu-toggler" data-toggle="sidebar-mobile">
                    <span class="bar"></span>
                    <span class="bar"></span>
                </button>
            </div>
            <!-- END mobile-toggler -->
            
            <!-- BEGIN brand -->
            <div class="brand">
                <div class="desktop-toggler">
                    <button type="button" class="menu-toggler" data-toggle="sidebar-minify">
                        <span class="bar"></span>
                        <span class="bar"></span>
                    </button>
                </div>
                
                <a href="{{ route('admin.index') }}" class="brand-logo">
                    <img src="{{ asset('admin-assets/img/logo.png') }}" class="invert-dark" alt="" height="20">
                </a>
            </div>
            <!-- END brand -->
            
            <!-- BEGIN menu -->
            <div class="menu">
                <form class="menu-search" method="POST" name="header_search_form">
                    @csrf
                    <div class="menu-search-icon"><i class="fa fa-search"></i></div>
                    <div class="menu-search-input">
                        <input type="text" class="form-control" placeholder="Search menu...">
                    </div>
                </form>
                <div class="menu-item dropdown">
                    <a href="#" data-bs-toggle="dropdown" data-display="static" class="menu-link">
                        <div class="menu-icon"><i class="fa fa-bell nav-icon"></i></div>
                        <div class="menu-label">3</div>
                    </a>
                    <div class="dropdown-menu dropdown-menu-end dropdown-notification">
                        <h6 class="dropdown-header text-body-emphasis mb-1">Notifications</h6>
                        <a href="#" class="dropdown-notification-item">
                            <div class="dropdown-notification-icon">
                                <i class="fa fa-receipt fa-lg fa-fw text-success"></i>
                            </div>
                            <div class="dropdown-notification-info">
                                <div class="title">Your store has a new order for 2 items totaling $1,299.00</div>
                                <div class="time">just now</div>
                            </div>
                            <div class="dropdown-notification-arrow">
                                <i class="fa fa-chevron-right"></i>
                            </div>
                        </a>
                        <div class="p-2 text-center mb-n1">
                            <a href="#" class="text-body-emphasis text-opacity-50 text-decoration-none">See all</a>
                        </div>
                    </div>
                </div>
                <div class="menu-item dropdown">
                    <a href="#" data-bs-toggle="dropdown" data-display="static" class="menu-link">
                        <div class="menu-img online">
                            <img src="{{ asset('admin-assets/img/user/user.jpg') }}" alt="" class="ms-100 mh-100 rounded-circle">
                        </div>
                        <div class="menu-text">johnsmith@studio.com</div>
                    </a>
                    <div class="dropdown-menu dropdown-menu-end me-lg-3">
                        <a class="dropdown-item d-flex align-items-center" href="#">Edit Profile <i class="fa fa-user-circle fa-fw ms-auto text-body text-opacity-50"></i></a>
                        <a class="dropdown-item d-flex align-items-center" href="{{ route('admin.calendar') }}">Calendar <i class="fa fa-calendar-alt fa-fw ms-auto text-body text-opacity-50"></i></a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item d-flex align-items-center" href="#">Log Out <i class="fa fa-toggle-off fa-fw ms-auto text-body text-opacity-50"></i></a>
                    </div>
                </div>
            </div>
            <!-- END menu -->
        </div>
        <!-- END #header -->
        
        <!-- BEGIN #sidebar -->
        <div id="sidebar" class="app-sidebar">
            <!-- BEGIN scrollbar -->
            <div class="app-sidebar-content" data-scrollbar="true" data-height="100%">
                <!-- BEGIN menu -->
                <div class="menu">
                    <div class="menu-header">Navigation</div>
                    <div class="menu-item {{ request()->routeIs('admin.index') ? 'active' : '' }}">
                        <a href="{{ route('admin.index') }}" class="menu-link">
                            <span class="menu-icon"><i class="fa fa-laptop"></i></span>
                            <span class="menu-text">Dashboard</span>
                        </a>
                    </div>
                    <div class="menu-item {{ request()->routeIs('admin.calendar') ? 'active' : '' }}">
                        <a href="{{ route('admin.calendar') }}" class="menu-link">
                            <span class="menu-icon"><i class="fa fa-calendar"></i></span>
                            <span class="menu-text">Calendar</span>
                        </a>
                    </div>
                </div>
                <!-- END menu -->
            </div>
            <!-- END scrollbar -->
            
            <!-- BEGIN mobile-sidebar-backdrop -->
            <button class="app-sidebar-mobile-backdrop" data-dismiss="sidebar-mobile"></button>
            <!-- END mobile-sidebar-backdrop -->
        </div>
        <!-- END #sidebar -->
        
        <!-- Main Content -->
        @yield('content')
        
    </div>
    <!-- END #app -->

    <!-- ================== BEGIN core-js ================== -->
    <script src="{{ asset('admin-assets/js/vendor.min.js') }}"></script>
    <script src="{{ asset('admin-assets/js/app.min.js') }}"></script>
    <!-- ================== END core-js ================== -->

    <!-- ================== BEGIN page-js ================== -->
    <script src="{{ asset('admin-assets/plugins/apexcharts/dist/apexcharts.min.js') }}"></script>
    <script src="{{ asset('admin-assets/js/demo/dashboard.demo.js') }}"></script>
    <!-- ================== END page-js ================== -->
</body>
</html>