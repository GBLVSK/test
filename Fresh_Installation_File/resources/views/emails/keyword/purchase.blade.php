@component('mail::message')
{!! $content !!}
@component('mail::button', ['url' => $url])
{{ __('locale.labels.view') }}
@endcomponent

{{ __('locale.labels.thanks') }},<br>
{{ config('app.name') }}
@endcomponent
