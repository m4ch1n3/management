@extends('orchestra/foundation::layouts.page')

@section('navbar')
    {{--    @include('blupl/printmedia::widgets.header')--}}
@endsection

@section('content')
    @include('blupl/management::form.management')
@stop



@push('orchestra.footer')
@include('blupl/management::common._inputScript')
<script type="text/javascript" src="{{ asset('packages/blucms/foundation/js/wizard/jquery.smartWizard.js') }}"></script>

<script type="text/javascript">
    $(document).ready(function () {
        // Smart Wizard
        $('#wizard').smartWizard();

        function onFinishCallback() {
            $('#wizard').smartWizard('showMessage', 'Finish Clicked');
            //alert('Finish Clicked');
        }
    });

    $(document).ready(function () {
        // Smart Wizard
        $('#wizard_verticle').smartWizard({
            transitionEffect: 'slide'
        });

    });

    $(document).ready(function () {
        $('.form-active').on('click', function() {
            var filed = $(this).parents('fieldset');
            filed.prop("disabled", false);
            $(this).hide();
        });
    });
</script>



@endpush

@push('orchestra.header')
@include('blupl/printmedia::form.style')

<style>
    .help-block {
        color: red;
        position: absolute;
        right: 10px;
        margin-top: 35px;
        font-size: 10px;
    }
</style>
@endpush
