<link href="{{ asset('assets/css/loader.css') }}" rel="stylesheet" type="text/css"/>
<script src="{{ asset('assets/js/loader.js') }}"></script>
<!-- BEGIN GLOBAL MANDATORY STYLES -->
<link href="https://fonts.googleapis.com/css?family=Quicksand:400,500,600,700&display=swap" rel="stylesheet">
<link href="{{ asset('bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css"/>
<link href="{{ asset('assets/css/plugins.css') }}" rel="stylesheet" type="text/css"/>
<link href="{{ asset('assets/css/structure.css') }}" rel="stylesheet" type="text/css" class="structure"/>
<!-- END GLOBAL MANDATORY STYLES -->

<!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM STYLES -->
{{--<link href="{{ asset('plugins/apex/apexcharts.css') }}" rel="stylesheet" type="text/css">--}}
{{--<link href="{{ asset('assets/css/dashboard/dash_2.css') }}" rel="stylesheet" type="text/css" class="dashboard-sales"/>--}}

<link href="{{ asset('plugins/font-icons/fontawesome/css/fontawesome.css') }}" rel="stylesheet" type="text/css">
<link href="{{ asset('css/fontawesome.css') }}" rel="stylesheet" type="text/css">
<link href="{{ asset('assets/css/elements/avatar.css') }}" rel="stylesheet" type="text/css">
<link href="{{ asset('plugins/sweetalerts/sweetalert.css') }}" rel="stylesheet" type="text/css">
<link href="{{ asset('plugins/notification/snackbar/snackbar.min.css') }}" rel="stylesheet" type="text/css">
<link href="{{ asset('css/custom.css') }}" rel="stylesheet" type="text/css">
<link href="{{ asset('assets/css/widgets/modules-widgets.css') }}" rel="stylesheet" type="text/css">
<link href="{{ asset('assets/css/forms/theme-checkbox-radio.css') }}" rel="stylesheet" type="text/css">

<style>
    aside{
        display: none !important;
    }

    .page-item.active .page-link {
        z-index: 3;
        color: #FFF;
        background-color: #3B3F5C;
        border-color: #3B3F5C;
    }
    
    @media (max-width: 480px) {
        .mtmobile {
            margin-top: 20px !important;
        }
        .mbmobile {
            margin-bottom: 10px !important;
        }
        .hideonsm {
            display: none !important;
        }
        .inblock {
            display: block;
        }
    }
</style>
<!-- END PAGE LEVEL PLUGINS/CUSTOM STYLES -->

@livewireStyles
