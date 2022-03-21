<!DOCTYPE html>

<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">



        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}}
        </style>

          <link rel="icon" href="img/favicon.ico">
          <meta name="generator" content="Hugo 0.87.0" />
          <meta http-equiv="content-type" content="text/html; charset=UTF-8">
          <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1">
          <meta name="description" content="Nifty is a responsive admin dashboard template based on Bootstrap 5 framework. There are a lot of useful components.">
          <title>Packages</title>

          <!-- STYLESHEETS -->
          <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-- -->

          <!-- Fonts [ OPTIONAL ] -->
          <link href="https://api.mapbox.com/mapbox-gl-js/v2.7.0/mapbox-gl.css" rel="stylesheet">
          <link rel="preconnect" href="https://fonts.googleapis.com">
          <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
          <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;700&family=Ubuntu:wght@400;500;700&display=swap" rel="stylesheet">
          <link href="https://cdn.jsdelivr.net/npm/mc-datepicker/dist/mc-calendar.min.css" rel="stylesheet" />
          <!-- Bootstrap CSS [ REQUIRED ] -->
          <link rel="stylesheet" href="/assets/css/bootstrap.min.css">

          <!-- Nifty CSS [ REQUIRED ] -->
          <link rel="stylesheet" href="/assets/css/nifty.min.css">

          <!-- Nifty Demo Icons [ OPTIONAL ] -->
          <link rel="stylesheet" href="/assets/css/demo-purpose/demo-icons.min.css">

          <!-- Demo purpose CSS [ DEMO ] -->
          <link rel="stylesheet" href="/assets/css/demo-purpose/demo-settings.min.css">

          <link rel="stylesheet" href="/assets/premium/icon-sets/icons/line-icons/premium-line-icons.min.css">

          <link href="/assets/plugins/select2/css/select2.min.css" rel="stylesheet">

          <link href="/assets/colorbox-master/example1/colorbox.css" rel="stylesheet">
    </head>


    <body class="jumping">

        <div id="root" class="root mn--max hd--expanded">

          <section id="root" class="content">

            <?php echo $__env->yieldContent('content'); ?>


              <!-- FOOTER -->
              <footer class="content__boxed mt-auto">
                  <div class="content__wrap py-3 py-md-1 d-flex flex-column flex-md-row align-items-md-center">
                      <div class="text-nowrap mb-4 mb-md-0">Copyright &copy; 2022 <a href="#" class="ms-1 btn-link fw-bold">Ibermedia</a></div>
                      
                  </div>
              </footer>
              <!--END FOOTER -->

          </section>

          <header class="header">
            <div class="header__inner">

              <!--BRAND-->
              <div class="header__brand">
                <div class="brand-wrap">

                  <!-- Brand logo -->
                  <a href="/" class="stretched-link">
                      <img src="/assets/img/ibermedia.png" alt="" class="Nifty logo" width="140">
                  </a>

                </div>

              </div>
              <!--END BRAND-->
              <div class="header__content">

                <!-- Content Header - Left Side: -->
                <div class="header__content-start">

                </div>
                <div class="header__content-end">

                    <!-- Mega Dropdown -->
                    <div class="dropdown">



                    </div>
                    <!-- End - Mega Dropdown -->

                    <!-- Notification Dropdown -->
                    <div class="dropdown">

                        <!-- Toggler -->
                        <button class="header__btn btn btn-icon btn-sm" type="button" data-bs-toggle="dropdown" aria-label="Notification dropdown" aria-expanded="false">
                            <span class="d-block position-relative">
                                <i class="demo-psi-bell"></i>
                                <span class="badge badge-super rounded bg-danger p-1">

                                    <span class="visually-hidden">unread messages</span>
                                </span>
                            </span>
                        </button>

                        <!-- Notification dropdown menu -->
                        <div class="dropdown-menu dropdown-menu-end w-md-300px">
                            <div class="border-bottom px-3 py-2 mb-3">
                                <h5>Notifications</h5>
                            </div>

                            <div class="list-group list-group-borderless">

                                <!-- List item -->
                                <div class="list-group-item list-group-item-action d-flex align-items-start mb-3">
                                    <div class="flex-shrink-0 me-3">
                                        <i class="demo-psi-data-settings text-muted fs-2"></i>
                                    </div>
                                    <div class="flex-grow-1 ">
                                        <a href="#" class="h6 d-block mb-0 stretched-link text-decoration-none">Your storage is full</a>
                                        <small class="text-muted">Local storage is nearly full.</small>
                                    </div>
                                </div>

                                <!-- List item -->
                                <div class="list-group-item list-group-item-action d-flex align-items-start mb-3">
                                    <div class="flex-shrink-0 me-3">
                                        <i class="demo-psi-file-edit text-blue-200 fs-2"></i>
                                    </div>
                                    <div class="flex-grow-1 ">
                                        <a href="#" class="h6 d-block mb-0 stretched-link text-decoration-none">Writing a New Article</a>
                                        <small class="text-muted">Wrote a news article for the John Mike</small>
                                    </div>
                                </div>

                                <!-- List item -->
                                <div class="list-group-item list-group-item-action d-flex align-items-start mb-3">
                                    <div class="flex-shrink-0 me-3">
                                        <i class="demo-psi-speech-bubble-7 text-green-300 fs-2"></i>
                                    </div>
                                    <div class="flex-grow-1 ">
                                        <div class="d-flex justify-content-between align-items-start">
                                            <a href="#" class="h6 mb-0 stretched-link text-decoration-none">Comment sorting</a>
                                            <span class="badge bg-info rounded ms-auto">NEW</span>
                                        </div>
                                        <small class="text-muted">You have 1,256 unsorted comments.</small>
                                    </div>
                                </div>

                                <!-- List item -->
                                <div class="list-group-item list-group-item-action d-flex align-items-start mb-3">
                                    <div class="flex-shrink-0 me-3">
                                        <img class="img-xs rounded-circle" src="/assets/img/profile-photos/7.png" alt="Profile Picture" loading="lazy">
                                    </div>
                                    <div class="flex-grow-1 ">
                                        <a href="#" class="h6 d-block mb-0 stretched-link text-decoration-none">Lucy Sent you a message</a>
                                        <small class="text-muted">30 minutes ago</small>
                                    </div>
                                </div>

                                <!-- List item -->
                                <div class="list-group-item list-group-item-action d-flex align-items-start mb-3">
                                    <div class="flex-shrink-0 me-3">
                                        <img class="img-xs rounded-circle" src="/assets/img/profile-photos/3.png" alt="Profile Picture" loading="lazy">
                                    </div>
                                    <div class="flex-grow-1 ">
                                        <a href="#" class="h6 d-block mb-0 stretched-link text-decoration-none">Jackson Sent you a message</a>
                                        <small class="text-muted">1 hours ago</small>
                                    </div>
                                </div>

                                <div class="text-center mb-2">
                                    <a href="#" class="btn-link">Show all Notifications</a>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- End - Notification dropdown -->

                </div>

              </div>

            </div>

          </header>

          <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
          <!-- END - HEADER -->

          <!-- MAIN NAVIGATION -->
          <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->

          <nav id="mainnav-container" class="mainnav">
            <div class="mainnav__inner">

              <!-- Navigation menu -->
              <div class="mainnav__top-content scrollable-content pb-5">
                <!-- Profile Widget -->
                <div class="mainnav__profile mt-3 d-flex3">

                    <div class="mt-2 d-mn-max"></div>

                    <!-- Profile picture  -->
                    <div class="mininav-toggle text-center py-2">
                        <img width="50" class="mainnav__avatar img-md rounded-circle border" src="/assets/img/profile-photos/7.png" alt="Profile Picture">
                    </div>

                    <div class="mininav-content collapse d-mn-max">
                        <div class="d-grid">

                            <!-- User name and position -->
                            <button class="d-block btn shadow-none p-2" data-bs-toggle="collapse" data-bs-target="#usernav" aria-expanded="false" aria-controls="usernav">
                                <span class="dropdown-toggle d-flex justify-content-center align-items-center">
                                    <h6 class="mb-0 me-3">Nombre Usuario</h6>
                                </span>
                                <small class="text-muted">
                                  Tipo de Usuario

                                  </small>
                            </button>

                            <!-- Desplegable de Usuario -->
                            <div id="usernav" class="nav flex-column collapse">
                                <a href="#" class="nav-link">
                                    <i class="demo-pli-male fs-5 me-2"></i>
                                    <span class="ms-1">Perfil</span>
                                </a>
                                <a href="#" class="nav-link">
                                    <i class="demo-pli-unlock fs-5 me-2"></i>
                                    <span class="ms-1">Logout</span>
                                </a>
                            </div>

                        </div>
                    </div>

                </div>
                <!-- End - Profile widget -->
                <!-- Navigation Category -->
                <div class="mainnav__categoriy py-1">
                    <h6 class="mainnav__caption mt-0 px-3 fw-bold">Categoria 1</h6>
                    <ul class="mainnav__menu nav flex-column">

                      <!-- Regular menu link -->
                      <li class="nav-item">
                          <a href="/" class="nav-link mininav-toggle"><i class="demo-pli-male fs-5 me-2"></i>

                              <span class="nav-label mininav-content ms-1">Usuarios</span>
                          </a>
                      </li>
                      <!-- END : Regular menu link -->

                      <!-- Regular menu link -->
                      <li class="nav-item">
                          <a href="" class="nav-link mininav-toggle"><i class="demo-pli-folder fs-5 me-2"></i>

                              <span class="nav-label mininav-content ms-1">Expedientes</span>
                          </a>
                      </li>
                      <!-- END : Regular menu link -->

                      <li class="nav-item">
                          <a href="" class="nav-link mininav-toggle"><i class="demo-pli-camera-2 fs-5 me-2"></i>

                              <span class="nav-label mininav-content ms-1">Inspecciones</span>
                          </a>
                      </li>
                      <!-- END : Regular menu link -->

                    </ul>
                </div>
                <!-- END : Navigation Category -->



              </div>
              <div class="mainnav__bottom-content border-top pb-2">
                  <ul id="mainnav" class="mainnav__menu nav flex-column">
                      <li class="nav-item has-sub">
                          <a href="#" class="nav-link mininav-toggle collapsed" aria-expanded="false">
                              <i class="demo-pli-unlock fs-5 me-2"></i>
                              <span class="nav-label ms-1">Logout</span>
                          </a>

                      </li>
                  </ul>
              </div>

            </div>

          </nav>

          <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
          <!-- END - MAIN NAVIGATION -->
        </div>
        <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
        <!-- END - PAGE CONTAINER -->

        <!-- SCROLL TO TOP BUTTON -->
        <div class="scroll-container">
            <a href="#root" class="scroll-page rounded-circle ratio ratio-1x1" aria-label="Scroll button"></a>
        </div>
        <!-- JAVASCRIPTS -->
        <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->

        <!-- Popper JS [ OPTIONAL ] -->
        <script src="/assets/vendors/popperjs/popper.min.js" defer></script>

        <!-- Bootstrap JS [ OPTIONAL ] -->
        <script src="/assets/vendors/bootstrap/bootstrap.min.js" defer></script>

        <!-- Nifty JS [ OPTIONAL ] -->
        <script src="/assets/js/nifty.js" defer></script>

        <!-- Nifty Settings [ DEMO ] -->
        <script src="/assets/js/demo-purpose-only.js" defer></script>
        <script src="/assets/js/jquery/jquery-3.5.1.min.js"></script>
        <script src="/assets/plugins/select2/js/select2.min.js" type="text/javascript" defer></script>
        
        <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.27.0/moment.min.js"></script>
        <!-- Colorbox -->
        <script src="/assets/colorbox-master/jquery.colorbox.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/mc-datepicker/dist/mc-calendar.min.js"></script>
        <!-- Chart JS Scripts [ OPTIONAL ] -->
        

        <!-- Initialize [ SAMPLE ] -->
        

        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
        <script src="https://api.mapbox.com/mapbox-gl-js/v2.7.0/mapbox-gl.js"></script>
        <script src='https://api.mapbox.com/mapbox.js/plugins/leaflet-omnivore/v0.2.0/leaflet-omnivore.min.js'></script>

        
        <script src="/assets/js/buscador.js"></script>

    </body>
</html>
<?php /**PATH C:\xampp7.3\htdocs\proyecto-packages-laravel\resources\views/welcome.blade.php ENDPATH**/ ?>