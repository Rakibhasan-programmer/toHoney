
<!DOCTYPE html>
<html lang="en" data-footer="true" data-override='{"attributes": {"placement": "vertical", "layout": "boxed" }, "storagePrefix": "ecommerce-platform"}'>
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <title>Acorn Admin Template | Ecommerce Dashboard</title>
    <meta name="description" content="Ecommerce Dashboard" />
    {{--    css--}}
    @include('backend.layouts.inc.style')

</head>

<body>
<div id="root">
    <div id="nav" class="nav-container d-flex">
        <div class="nav-content d-flex">
            <!-- Logo Start -->
            @include('backend.layouts.inc.logo')
            <!-- Logo End -->

            <!-- User Menu Start -->
            @include('backend.layouts.inc.user-menu')
            <!-- User Menu End -->

            <!-- Menu Start -->
            @include('backend.layouts.inc.menu')
            <!-- Menu End -->

            <!-- Mobile Buttons Start -->
            <div class="mobile-buttons-container">
                <!-- Menu Button Start -->
                <a href="#" id="mobileMenuButton" class="menu-button">
                    <i data-cs-icon="menu"></i>
                </a>
                <!-- Menu Button End -->
            </div>
            <!-- Mobile Buttons End -->
        </div>
        <div class="nav-shadow"></div>
    </div>

    <main>
       <div class="container">
           <h1>Start Here</h1>
       </div>
    </main>
    <!-- Layout Footer Start -->
    @include('backend.layouts.inc.footer')
    <!-- Layout Footer End -->
</div>



<!-- Vendor Scripts Start -->
@include('backend.layouts.inc.script')
<!-- Page Specific Scripts End -->
</body>
</html>
