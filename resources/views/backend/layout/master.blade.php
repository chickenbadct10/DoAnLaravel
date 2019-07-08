<html style="height: auto;">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title>@yield('title')</title>

    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="{{asset('css/all.min.css')}}">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="{{asset('vendor/overlayScrollbars/css/OverlayScrollbars.min.css')}}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{asset('css/adminlte.min.css')}}">
    <!-- Font -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">


    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  <style type="text/css">/* Chart.js */
  @keyframes chartjs-render-animation{from{opacity:.99}to{opacity:1}}.chartjs-render-monitor{animation:chartjs-render-animation 1ms}.chartjs-size-monitor,.chartjs-size-monitor-expand,.chartjs-size-monitor-shrink{position:absolute;direction:ltr;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1}.chartjs-size-monitor-expand>div{position:absolute;width:1000000px;height:1000000px;left:0;top:0}.chartjs-size-monitor-shrink>div{position:absolute;width:200%;height:200%;left:0;top:0}</style></head>
  <body class="sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed" style="height: auto;">
  <div class="wrapper">
    <!-- onclude Navbar -->
    @include('backend.layout.partials.navbar')

    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    @include('backend.layout.partials.sidebar')

    <div class="content-wrapper" style="min-height: 960px;">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            @yield('title-chucnang')
          </h1>
        </section>
        <!-- Main content -->
        <section class="content">
          <!-- /.row -->
        <div class="col-md-12 col-sm-12 col-xs-12">
            @yield('content')
        </div>
    <div style="padding-bottom: 15px; max-width: 100%; overflow: hidden;"><script src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script><ins class="adsbygoogle" style="display: block; height: 90px;" data-ad-client="ca-pub-6272584992356792" data-ad-slot="5657143564" data-ad-format="auto" data-full-width-responsive="true" data-adsbygoogle-status="done"><ins id="aswift_0_expand" style="display:inline-table;border:none;height:90px;margin:0;padding:0;position:relative;visibility:visible;width:941px;background-color:transparent;"><ins id="aswift_0_anchor" style="display:block;border:none;height:90px;margin:0;padding:0;position:relative;visibility:visible;width:941px;background-color:transparent;"><iframe width="941" height="90" frameborder="0" marginwidth="0" marginheight="0" vspace="0" hspace="0" allowtransparency="true" scrolling="no" allowfullscreen="true" onload="var i=this.id,s=window.google_iframe_oncopy,H=s&amp;&amp;s.handlers,h=H&amp;&amp;H[i],w=this.contentWindow,d;try{d=w.document}catch(e){}if(h&amp;&amp;d&amp;&amp;(!d.body||!d.body.firstChild)){if(h.call){setTimeout(h,0)}else if(h.match){try{h=s.upd(h,i)}catch(e){}w.location.replace(h)}}" id="aswift_0" name="aswift_0" style="left:0;position:absolute;top:0;border:0px;width:941px;height:90px;"></iframe></ins></ins></ins><script>(adsbygoogle = window.adsbygoogle || []).push({});</script></div></section>
        <!-- /.content -->
      </div>
    <!-- Main Footer -->
    @include('backend.layout.partials.footer')
  <!-- REQUIRED SCRIPTS -->
  <!-- jQuery -->
  <script src="{{asset('jquery/jquery.min.js')}}"></script>
  <!-- Bootstrap -->
  <script src="{{asset('vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <!-- overlayScrollbars -->
  <script src="{{asset('vendor/overlayScrollbars/js/jquery.overlayScrollbars.min.js')}}"></script>
  <!-- AdminLTE App -->
  <script src="{{asset('vendor/js/adminlte.js')}}"></script>

  <!-- OPTIONAL SCRIPTS -->
  <script src="{{asset('vendor/js/demo.js')}}"></script>

  <!-- PAGE PLUGINS -->
  <!-- jQuery Mapael -->
  <script src="{{asset('vendor/js/jquery.mousewheel.js')}}"></script>
  <script src="{{asset('vendor/js/raphael.min.js')}}"></script>
  <script src="{{asset('vendor/js/jquery.mapael.min.js')}}"></script>
  <script src="{{asset('vendor/js/world_countries.min.js')}}"></script>
  <!-- ChartJS -->
  <script src="{{asset('vendor/js/Chart.min.js')}}"></script>

  <!-- PAGE SCRIPTS -->
  <script src="{{asset('vendor/js/dashboard2.js')}}"></script>


  </body></html>
