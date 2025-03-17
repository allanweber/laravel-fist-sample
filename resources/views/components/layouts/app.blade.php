<!DOCTYPE html>
<html lang="en">
<head>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <header class="flex items-center justify-center py-2 text-lg border-b">
        My App
    </header>
    <main class="flex items-center justify-center py-10">
        {{ $slot }}
    </main>
</body>
</html>
