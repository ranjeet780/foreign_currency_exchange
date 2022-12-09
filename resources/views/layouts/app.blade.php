<!DOCTYPE html>
<html lang="en">
<!-- Basic -->

<head>
@include('home.includes.head')

</head>

<body id="home" data-spy="scroll" data-target="#navbar-wd" data-offset="98">

    <!-- LOADER -->
    <div id="preloader">
        <div class="loader">
            <img src="images/loader.gif" alt="#" />
        </div>
    </div>
    <!-- end loader -->
    <!-- END LOADER -->

    <!-- Start header -->
    <header class="top-header">
        
    @include('home.includes.header')

    </header>
    <!-- End header -->

    @yield('content')
    @include('home.includes.footer')


    <a href="#" id="scroll-to-top" class="hvr-radial-out"><i class="fa fa-angle-up"></i></a>
    @include('home.includes.scripts')

   
</body>

</html>