<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>TEST 1</title>
    </head>
    <body>
        <h1>Hello, TEST 1</h1>
        <p>This is a test 1 view.</p>
        <a href="{{ route('home') }}">Go to Test</a>

    </body>
</html>
