<!DOCTYPE html>
<html>
<head>
    <title>Products</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100">
    <div class="container mx-auto p-4">
        <h1 class="text-2xl font-bold mb-4">Products</h1>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
            @foreach($products as $product)
                <div class="bg-white p-4 rounded-lg shadow-lg">
                    <h2 class="text-xl font-semibold mb-2">{{ $product['name'] }}</h2>
                    <p class="text-gray-600 mb-2">{{ $product['description'] }}</p>
                    <p class="text-lg font-bold">$ {{ number_format($product['price'], 2)}}</p>
                </div>
            @endforeach
        </div>
    </div>
</body>
</html>
