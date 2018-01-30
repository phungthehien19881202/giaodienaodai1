<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title> @yield('title')</title>
    <base href="{{asset('')}}">
    <link href="source/css/bootstrap.min.css" rel="stylesheet">
    <link href="source/css/font-awesome.min.css" rel="stylesheet">
    <link href="source/css/prettyPhoto.css" rel="stylesheet">
    <link href="source/css/price-range.css" rel="stylesheet">
    <link href="source/css/animate.css" rel="stylesheet">
  <link href="source/css/main6.css" rel="stylesheet">
  <link href="source/css/responsive1.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->       
    <link rel="shortcut icon" href="source/images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="source/images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="source/images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="source/images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="source/images/ico/apple-touch-icon-57-precomposed.png">
</head><!--/head-->

<body>
  @include('header')
  
 @yield('slide')
  <section class="khoisp">
    <div class="container">
      <div class="row">
        @include('left_content')
        
        @yield('content')
      </div>
    </div>
  </section>
  
  @include('footer')
  

  
    <script src="source/js/jquery.js"></script>
  <script src="source/js/bootstrap.min.js"></script>
  <script src="source/js/jquery.scrollUp.min.js"></script>
  <script src="source/js/price-range.js"></script>
    <script src="source/js/jquery.prettyPhoto.js"></script>
    <script src="source/js/main.js"></script>
</body>
</html>