<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    </head>
    <body>
        {{-- <div id="application">
            <app></app>
        </div> --}}

        <h2>الصفحة الرئيسية</h2>

        <a href="{{ route('todolist') }}">عرض القائمة</a>

    </body>
    <script src="{{ mix("js/app.js") }}"></script>
</html>
