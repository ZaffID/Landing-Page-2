<!DOCTYPE html>
<html lang="en">
    <head>
        <link rel="icon" href="assets/images/logo.png" sizes="192x192" type="image/png">
        <title>Login</title>
        <!-- Menambahkan CDN Tailwind CSS -->
        <script src="https://cdn.tailwindcss.com"></script>
    </head>
    
    <body class="bg-orange-400 flex justify-center items-center h-screen">
        <div class="bg-white p-8 rounded-lg shadow-lg w-full max-w-sm">
            <form id="loginForm">
                <h2 class="text-2xl font-bold mb-6 text-center">
                    Login
                </h2>
                <div class="mb-4">
                    <label for="username" class="block text-gray-700 font-semibold">Username:</label>
                    <input type="text" name="username" id="username" class="w-full p-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-orange-600">
                </div>
                <div class="mb-4">
                    <label for="password" class="block text-gray-700 font-semibold">Password:</label>
                    <input type="password" name="password" id="password" class="w-full p-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-orange-600">
                </div>
                <button type="submit" class="w-full bg-orange-400 text-white py-2 rounded hover:bg-orange-600 transition duration-300">LOGIN</button>
            </form>
            
            <!-- Tambahan tombol Login as Guest -->
            <a href="{{ route('home') }}" class="block mt-4 w-full text-center bg-gray-200 text-gray-700 py-2 rounded hover:bg-gray-300 transition duration-300">Login as Guest</a>
        </div>
        <script src="assets/js/script.js"></script>
    </body>
</html>