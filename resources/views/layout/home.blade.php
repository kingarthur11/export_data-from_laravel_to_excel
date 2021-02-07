<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>Document</title>
</head>
<body class="bg-gray-200">
    <nav class="p-6 bg-white flex justify-between">
        <ul class="flex items-center">
            <li>
                <a href="" class="p-4">Home</a>
            </li>
            <li>
                <a href=""class="p-4">DashBoard</a>
            </li>
            <li>
                <a href=""class="p-4">Home</a>
            </li>
            <li>
                <a href=""class="p-4">Post</a>
            </li>
        </ul>
        <ul class="flex items-center">
            <li>
                <a href="" class="p-4">Arthur</a>
            </li>
            <li>
                <a href="" class="p-4">login</a>
            </li>
            <li>
                <a href="/employee" class="p-4">Add Data</a>
            </li>
            <li>
                <a href="/export-excel" class="p-4">Print Excel Sheet</a>
            </li>
        </ul>
    </nav>
    @yield('content')
</body>
</html>