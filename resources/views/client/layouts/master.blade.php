<!doctype html>
<html class="no-js" data-theme="light" lang="en">
<head>

    @include('client.layouts.partials.css');

</head>
<body>
    <header class="th-header header-layout1">
        @include('client.layouts.partials.header-top');
        @include('client.layouts.partials.header-nav');

    </header>

    @yield('content')

    <footer class="footer-wrapper footer-layout1" data-bg-src="/client/demo/assets/img/bg/footer_bg_1.png">
        @include('client.layouts.partials.footer');
    </footer>
    <div class="scroll-top"><svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98"
                style="transition: stroke-dashoffset 10ms linear 0s; stroke-dasharray: 307.919, 307.919; stroke-dashoffset: 307.919;">
            </path>
        </svg></div>

    @include('client.layouts.partials.js');
</body>
</html>
