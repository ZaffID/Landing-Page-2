<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sirius Florist</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-50 flex flex-col min-h-screen">
    <!-- Header -->
    <div class="bg-orange-500 p-4">
        <div class="flex justify-between items-center text-white">
            <!-- Left side - Links -->
            <div class="flex space-x-4">
                <a href="#">Keranjang</a>
                <a href="#">Bantuan</a>
                <a href="#">Tentang</a>
            </div>

            <!-- Center - Search bar -->
            <div class="flex-grow">
                <div class="relative w-full max-w-lg mx-auto">
                    <input class="border rounded-full w-full px-4 py-2" type="text" placeholder="Cari produk...">
                    <img src="assets/images/search.png" alt="search" class="absolute right-4 top-3 w-5 h-5"/>
                </div>
            </div>

            <!-- Right side (empty to balance the layout) -->
            <div class="w-24"></div> <!-- Empty div to balance the flexbox -->
        </div>
    </div>

    <!-- Welcome Section -->
    <div class="text-center mt-8">
        <h1 class="text-3xl font-bold">Welcome!</h1>
        <p class="text-gray-600 mt-2">get your loved ones some flowers</p>
    </div>

    <!-- Content Section -->
    <div class="flex justify-center space-x-8 mt-8">
        <div class="card w-64 p-4 border rounded-lg shadow-md">
            <img src="assets/images/flower1.png" alt="Bunga 1" class="w-full h-64 object-cover rounded-lg">
            <h2 class="text-xl font-bold mt-2">Bunga 1</h2>
            <p>Deskripsi!</p>
        </div>
        <div class="card w-64 p-4 border rounded-lg shadow-md">
            <img src="assets/images/flower2.png" alt="Bunga 2" class="w-full h-64 object-cover rounded-lg">
            <h2 class="text-xl font-bold mt-2">Bunga 2</h2>
            <p>Deskripsi!</p>
        </div>
        <div class="card w-64 p-4 border rounded-lg shadow-md">
            <img src="assets/images/flower3.png" alt="Bunga 3" class="w-full h-64 object-cover rounded-lg">
            <h2 class="text-xl font-bold mt-2">Bunga 3</h2>
            <p>Deskripsi!</p>
        </div>
        <div class="card w-64 p-4 border rounded-lg shadow-md">
            <img src="assets/images/flower-custom.png" alt="Custom Bouquet" class="w-full h-64 object-cover rounded-lg">
            <h2 class="text-xl font-bold mt-2">Custom Bouquet</h2>
            <p>Custom</p>
        </div>
    </div>

    <!-- Footer -->
    <footer class="bg-orange-500 text-center text-white py-4 mt-auto">
        <p>&copy; 2024 Flower Shop. All rights reserved.</p>
    </footer>

</body>

</html>