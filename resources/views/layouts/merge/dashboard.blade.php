<!doctype html>
<html class="no-js" lang="{{ str_replace('_', '-', app()->getLocale()) }}">

@include('layouts._include.header')

<body>

    @include('layouts._include.aside')

    <!-- Start Welcome area -->
    <div class="all-content-wrapper">

        @yield('content')

    </div>

    @include('layouts._include.footer')

</body>
</html>
