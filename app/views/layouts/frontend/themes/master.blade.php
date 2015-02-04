<!DOCTYPE html>
<html lang="en">
<head>
@include('layouts.frontend.themes.define-head')
</head>
<body>
    <!-- Start Header -->
    @include('layouts.frontend.themes.header')
    <!-- End Header -->
    
    <!-- Start content -->
    <div class="container">
        <div class="row">
            @yield('content')
        </div>
    </div>
    
    <!-- End content -->
    
    <!--Core JavaScript file  -->
    <script src="<?= asset('js/jquery-1.10.2.js'); ?>"></script>
    <!--bootstrap JavaScript file  -->
    <script src="<?= asset('js/bootstrap.js') ?>"></script>
</body>