<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">

    <link rel="icon" type="image/png" href="uploads/favicon.png">

    <title>Admin Panel</title>
    <!-- styles Include -->
    @include('admin.layouts.styles')

    <!-- scripts include -->
   @include('admin.layouts.scripts')
</head>

<body>
<div id="app">
    <div class="main-wrapper">
    <!-- Navbar Section Add -->
       @include('admin.layouts.navbar')

    <!-- sidebar section Add -->
        @include('admin.layouts.sidebar')

        <div class="main-content">
            <section class="section">
                <div class="section-header">
                    <h1>@yield('heading')</h1>
                </div>
               @yield('content')
            </section>
        </div>

    </div>
</div>
<!-- footer Scripts include -->
@include('admin.layouts.footerScripts')
</body>
</html>