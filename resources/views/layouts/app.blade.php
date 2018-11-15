<!doctype html>
<html lang="en">
    <head>

        @include('header.header')
        

    </head>

 <body class="body">
    <!-- WRAPPER -->
    <div id="wrapper">
    
 

        @yield('content')
    </div>
    <!-- END WRAPPER -->


<!--modals-->
    @include('modals.delete')
    @include('modals.update')
    @include('modals.details')

    @include('modals.addnew')
   

    
    @include('layouts.head')
    @include('layouts.foot')


    

        

</body>
</html>