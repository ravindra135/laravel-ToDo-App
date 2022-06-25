<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ToDO - Laravel App</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}">
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet" />
</head>
<body class="font-nun">
    {{-- Navbar --}}
    {{-- <x-navbar/> --}}

    {{-- Content --}}
    <div class="flex">
        {{-- Sidebar --}}
        <x-sidebar/>

        {{-- Main-Content --}}
        @yield('content')
        
        {{-- <div class="w-full h-full bg-indigo-500 p-4 m-8 overflow-y-auto">
            
        </div> --}}
    </div>
    
    {{-- Scripts --}}
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>