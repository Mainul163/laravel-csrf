<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    <style>
    <style>body {
        font-family: 'Nunito', sans-serif;
    }
    </style>
</head>

<body class="antialiased">
    <div
        class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
        <ul>
            <li><a href="{{url('about')}}">about</a></li><br />
            <li><a href="{{url('home')}}">home</a></li>
        </ul>



        <form action="{{url('about')}}" method="POST">
            <input type="hidden" name="_token" value="{{ csrf_token() }}" />

            <input type="text" name="name" placeholder="write your name"><br>
            <input type="email" name="email" placeholder="write your email"><br><br>
            <button type="submit">Submit</button>
        </form>
    </div>
</body>

</html>