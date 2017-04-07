<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>{{ Theme::getTitle() }} - {{config('app.name')}}</title>
        <meta name="keyword" content="{{ Theme::getMetaKeyword() }}">
        <meta name="description" content="{{ Theme::getMetaDescription() }}">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" href="{{asset('apple-touch-icon.png')}}">
        <link href="{{ theme_asset('css/vendor.css') }}" rel="stylesheet">

        {!! Theme::asset()->styles() !!}
        {!! Theme::asset()->scripts() !!}
    </head>
    <body>
        <div class="inner-pages">
        {!! Theme::partial('header') !!}
        {!! Theme::content() !!}
        {!! Theme::partial('footer') !!}
        </div>
        <script src="{{ theme_asset('js/vendor.js') }}"></script>
        <script src="{{ theme_asset('js/main.js') }}"></script>
        {!! Theme::asset()->container('footer')->scripts() !!}
        {!! Theme::asset()->container('extra')->scripts() !!}
    </body>
</html>
