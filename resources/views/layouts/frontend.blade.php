<!DOCTYPE html>
<html lang="en">
<head>
    @include('includes.meta')
    <title>@yield('title')</title>
    @stack('before-style')
    @include('includes.style')
    @stack('after-style')
    <link rel="icon" type="image" href="{{ url('images/logo.jpg') }}">
</head>
<body style="font-family: 'Poppins', sans-serif;">
    @include('includes.header')
    @yield('content')
    @include('includes.footer')
    

    @stack('before-script')
    @include('includes.script')
    @stack('after-script')
</body>
</html>