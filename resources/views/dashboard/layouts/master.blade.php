<!DOCTYPE html>
<html lang="en">
  <!-- Mirrored from colorlib.com/polygon/admindek/default/form-validation.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 12 Dec 2019 16:09:14 GMT -->
  <!-- Added by HTTrack --><meta
    http-equiv="content-type"
    content="text/html;charset=UTF-8"
  /><!-- /Added by HTTrack -->
  <head>
    <title>Dashboard | @yield('title')</title>

    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui"
    />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta
      name="description"
      content="Admindek Bootstrap admin template made using Bootstrap 4 and it has huge amount of ready made feature, UI components, pages which completely fulfills any dashboard needs."
    />
    <meta
      name="keywords"
      content="bootstrap, bootstrap admin template, admin theme, admin dashboard, dashboard template, admin template, responsive"
    />
    <meta name="author" content="colorlib" />

    <link
      rel="icon"
      href="https://colorlib.com/polygon/admindek/files/assets/images/favicon.ico"
      type="image/x-icon"
    />
    <link
      href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800"
      rel="stylesheet"
    />
    <link
      href="https://fonts.googleapis.com/css?family=Quicksand:500,700"
      rel="stylesheet"
    />
   <!-- summer note -->
   <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous"> -->
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="{{url('dashboard/css/bootstrap.min.css')}}" />
    <link
      rel="stylesheet"
      href="{{url('dashboard/css/waves.min.css')}}"
      type="text/css"
      media="all"
    />
    <link rel="stylesheet" type="text/css" href="{{url('dashboard/css/feather.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{url('dashboard/css/sweetalert.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{url('dashboard/css/themify-icons.css')}}" />

    <link rel="stylesheet" type="text/css" href="{{url('dashboard/css/icofont.css')}}" />

    <link rel="stylesheet" type="text/css" href="{{url('dashboard/css/font-awesome.min.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{url('dashboard/css/component.css')}}" />
    <link rel="stylesheet" href="{{url('dashboard/css/select2.min.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{url('dashboard/css/style.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{url('dashboard/css/pages.css')}}" />

    <!-- custom css -->
    <link rel="stylesheet" href="{{url('dashboard/assets/css/style.css')}}" />

    @yield('css')
  </head>
  <body>
    <div class="loader-bg">
      <div class="loader-bar"></div>
    </div>

    <div id="pcoded" class="pcoded">
      <div class="pcoded-overlay-box"></div>
      <div class="pcoded-container navbar-wrapper">
        @include('dashboard.layouts.header')

        <div class="pcoded-main-container">
          <div class="pcoded-wrapper">
           @include('dashboard.layouts.sidebar')

          @yield('content')

            <div id="styleSelector"></div>
          </div>
        </div>
      </div>
    </div>

    <!-- <script type="88add89075ed2b878b934720-text/javascript" src="{{url('dashboard/js/jquery.min.js')}}"></script> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <!-- summer note -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.js"></script>
    <!-- -----------------------------Custom Js ------------------------------------ -->
    <script src="{{url('dashboard/assets/js/script.js')}}"></script>
    <script
      type="88add89075ed2b878b934720-text/javascript"
      src="{{url('dashboard/js/jquery-ui.min.js')}}"
    ></script>
    <script
      type="88add89075ed2b878b934720-text/javascript"
      src="{{url('dashboard/js/popper.min.js')}}"
    ></script>
    <script
      type="88add89075ed2b878b934720-text/javascript"
      src="{{url('dashboard/js/bootstrap.min.js')}}"
    ></script>

    <script
      src="{{url('dashboard/js/waves.min.js')}}"
      type="88add89075ed2b878b934720-text/javascript"
    ></script>

    <script
      type="88add89075ed2b878b934720-text/javascript"
      src="{{url('dashboard/js/jquery.slimscroll.js')}}"
    ></script>

    <script
      type="88add89075ed2b878b934720-text/javascript"
      src="{{url('dashboard/js/modernizr.js')}}"
    ></script>
    <script
      type="88add89075ed2b878b934720-text/javascript"
      src="{{url('dashboard/js/css-scrollbars.js')}}"
    ></script>

    <script
      type="d28fd8086f5eb18f81d8672a-text/javascript"
      src="{{url('dashboard/js/sweetalert.min.js')}}"
    ></script>
    <script
      type="d28fd8086f5eb18f81d8672a-text/javascript"
      src="{{url('dashboard/js/modal.js')}}"
    ></script>
    <script
      src="{{url('dashboard/js/classie.js')}}"
      type="d28fd8086f5eb18f81d8672a-text/javascript"
    ></script>
    <script
      type="d28fd8086f5eb18f81d8672a-text/javascript"
      src="{{url('dashboard/js/modaleffects.js')}}"
    ></script>
    <script
      src="{{url('dashboard/js/pcoded.min.js')}}"
      type="d28fd8086f5eb18f81d8672a-text/javascript"
    ></script>

    <script
      type="88add89075ed2b878b934720-text/javascript"
      src="{{url('dashboard/js/select2.full.min.js')}}"
    ></script>

    <script
      type="88add89075ed2b878b934720-text/javascript"
      src="{{url('dashboard/js/bootstrap-multiselect.js')}}"
    ></script>
    <script
      type="88add89075ed2b878b934720-text/javascript"
      src="{{url('dashboard/js/jquery.multi-select.js')}}"
    ></script>
    <script
      type="88add89075ed2b878b934720-text/javascript"
      src="{{url('dashboard/js/jquery.quicksearch.js')}}"
    ></script>

    <script
      type="88add89075ed2b878b934720-text/javascript"
      src="{{url('dashboard/js/select2-custom.js')}}"
    ></script>
    <script
      src="{{url('dashboard/js/pcoded.min.js')}}"
      type="88add89075ed2b878b934720-text/javascript"
    ></script>
    <script
      src="{{url('dashboard/js/vertical-layout.min.js')}}"
      type="88add89075ed2b878b934720-text/javascript"
    ></script>
    <script
      src="{{url('dashboard/js/jquery.mcustomscrollbar.concat.min.js')}}"
      type="88add89075ed2b878b934720-text/javascript"
    ></script>
    <script
      type="88add89075ed2b878b934720-text/javascript"
      src="{{url('dashboard/js/script.js')}}"
    ></script>

    <script
      async
      src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"
      type="88add89075ed2b878b934720-text/javascript"
    ></script>
    <script type="88add89075ed2b878b934720-text/javascript">
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'UA-23581568-13');
    </script>
    <script
      src="{{url('dashboard/js/rocket-loader.min.js')}}"
      data-cf-settings="88add89075ed2b878b934720-|49"
      defer=""
    ></script>


    @yield('js')
  </body>

  <!-- Mirrored from colorlib.com/polygon/admindek/default/form-validation.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 12 Dec 2019 16:09:15 GMT -->
</html>
