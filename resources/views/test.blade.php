<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>TEST</title>
    </head>
    <body>
        <h1>Hello, TEST</h1>
        <p>This is a test view.</p>
        <a href="{{ route('test1') }}">Go to Test 1</a>

    </body>
</html>
