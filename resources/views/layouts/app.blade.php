<!DOCTYPE html>
<html lang="en">
    <head>
        
        <!-- Head -->
        @include('layouts.components.head')
        <!-- Close Head -->

    </head>

    <body>

        <!-- Top Bar Start -->
        <div class="topbar">
            
            <!-- Navbar -->
            @include('layouts.components.navbar') 
            <!-- end navbar-->
        
        </div>
        <!-- Top Bar End -->
        
        
        <div class="page-wrapper-img">
            <div class="page-wrapper-img-inner">
                
                <!-- After Navbar-->
                @include('layouts.components.afternavbar')
                <!-- Close After Navbar-->

            </div>
        </div>
        
        <div class="page-wrapper">
            <div class="page-wrapper-inner">

                <!-- Left Sidenav -->
                @include('layouts.components.sidebar')
                <!-- end left-sidenav-->

                <!-- Page Content-->
                @include('layouts.components.mainContent')                
                <!-- end page content -->
            </div>
        </div>
        <!-- end page-wrapper -->

        <!-- Script -->
        @include('layouts.components.script')
        <!-- End Script -->
        
    </body>
</html>