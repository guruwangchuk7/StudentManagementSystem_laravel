<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Management System</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="flex items-center justify-center min-h-screen bg-white text-gray-900 font-sans antialiased">

    <main class="text-center space-y-6 px-6">
        <h1 class="text-4xl sm:text-5xl font-semibold tracking-tight">
            Student Management System
        </h1>
        <p class="text-gray-500 text-base sm:text-lg max-w-md mx-auto leading-relaxed">
            Manage your students with simplicity and clarity.
        </p>

        <a href="{{ route('dashboard') }}"
           class="inline-block mt-4 px-6 py-3 bg-gray-900 text-white rounded-full text-sm sm:text-base 
                  hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-gray-400 transition-all">
            Go to Dashboard →
        </a>
    </main>

</body>
</html>
