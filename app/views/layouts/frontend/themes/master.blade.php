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
</body>