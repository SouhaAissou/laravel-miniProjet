<!DOCTYPE html>
<html>
<head>
    <title>Student Laravel 9 CRUD</title>
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
</head>
<body>
    <nav>
        <ul>
            <li id="logo"><a href="{{ url('/student') }}">CRUD</a></li>
            <li style="text-align: left;"><a href="{{ url('/student/create') }}">Add New</a></li>
        </ul>
    </nav>
   
<div class="container">
    @yield('content')
</div>
   
</body>
</html>