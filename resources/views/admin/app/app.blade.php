<!DOCTYPE html>
<html lang="en">

{{-- head Code Here --}} @include('admin.includes.head')

<body class="no-skin">
    @include('admin.includes.header')

    <div class="main-container ace-save-state" id="main-container">
        <script type="text/javascript">
            try {
                ace.settings.loadState('main-container')
            } catch (e) {}
        </script>

        <div id="sidebar" class="sidebar  responsive ace-save-state">
            <script type="text/javascript">
                try {
                    ace.settings.loadState('sidebar')
                } catch (e) {}
            </script>

            @include('admin.includes.sidebar')

            <div class="main-content">
                @yield('contant')

            </div>


            @include('admin.includes.footer')

            <a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-sm btn-inverse">
                <i class="ace-icon fa fa-angle-double-up icon-only bigger-110"></i>
            </a>
        </div>
        <!-- /.main-container -->

        @include('admin.includes.javascript')
</body>

</html>