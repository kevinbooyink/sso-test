<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <meta name="theme-color" content="#000000" />
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <title>@isset($title){{$title}} - @endisset {{config('app.name')}}</title>
    </head>
    <body>
        <main id="content">
            <div>
                @yield('content')
            </div>
        </main>
    </body>
</html>