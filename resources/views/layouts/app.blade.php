<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'Task List')</title>
    @yield('styles')
</head>

<body>
    <h1>@yield('title')</h1>
    <div>
        @yield('content')
    </div>
</body>

</html>
