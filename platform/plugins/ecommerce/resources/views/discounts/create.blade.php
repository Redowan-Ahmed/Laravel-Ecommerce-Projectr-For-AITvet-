@extends(BaseHelper::getAdminMasterLayoutTemplate())
@section('content')
    {!! Form::open() !!}
    <div id="main-discount">
        <div class="max-width-1200">
            <discount-component
                currency="{{ get_application_currency()->symbol }}"
                date-format="{{ config('core.base.general.date_format.date') }}"
            ></discount-component>
        </div>
    </div>
    {!! Form::close() !!}
@stop

@push('header')
    <script>
        'use strict';

        window.trans = window.trans || {};

        window.trans.discount = JSON.parse('{!! addslashes(json_encode(trans('plugins/ecommerce::discount'))) !!}');

        $(document).ready(function() {
            $(document).on('click', 'body', function(e) {
                let container = $('.box-search-advance');

                if (!container.is(e.target) && container.has(e.target).length === 0) {
                    container.find('.panel').addClass('hidden');
                }
            });
        });
    </script>

    {!! $jsValidation !!}
@endpush
