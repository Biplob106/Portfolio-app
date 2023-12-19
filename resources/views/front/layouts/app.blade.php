<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Personal Portfolio Website</title>
  @include('front.layouts.styles')

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">

</head>
<body>

    <div id="preloader">
        <div id="preloader_inner"></div>
    </div>
    @include('front.layouts.nav')

    @yield('content')
    <!-- footer -->
    @include('front.layouts.footer')
    <a href="" class="scrollup">
        <i class="fas fa-chevron-up"></i>
    </a>

    
    @include('front.layouts.scripts')
    
</body>
</html>