<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Showroom</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <div class="bg-gray-700 p-4 text-center">
        <a href="{{ route('showroom') }}" class="text-white font-bold mr-4">Showroom</a>
        <a href="{{ route('contact') }}" class="text-white font-bold">Contact</a>
    </div>

    <div class="p-4">
        <h1 class="text-2xl font-bold mb-4">De showroom:</h1>
        
        <div class="grid grid-cols-1 sm:grid-cols-3 lg:grid-cols-4 gap-4">
            @foreach($data->showroom as $car)
                <div class="border p-3 rounded">
                    <div class="hidden sm:block">
                        <div class="font-bold">{{ $car['brand'] }} {{ $car['model'] }}</div>
                        <div class="bg-gray-200 h-32 flex items-center justify-center my-2">
                            <span>Afbeelding</span>
                        </div>
                        <div class="flex justify-between">
                            <span class="font-bold">€{{ number_format($car['price'], 0, ',', '.') }},-</span>
                            <a href="{{ route('contact') }}" class="bg-blue-700 text-white px-3 py-1 rounded text-sm">
                                Bekijk details
                            </a>
                        </div>
                    </div>

                    <div class="sm:hidden">
                        <div class="font-bold">{{ $car['brand'] }} {{ $car['model'] }}</div>
                        <div class="relative">
                            <div class="bg-gray-200 h-32 flex items-center justify-center my-2">
                                <span>Afbeelding</span>
                            </div>
                            <div class="absolute bottom-2 right-2 bg-black text-white px-2 py-1 rounded text-sm">
                                €{{ number_format($car['price'], 0, ',', '.') }},-
                            </div>
                        </div>
                    </div>
                    
                    <a href="{{ route('contact') }}" class="sm:hidden absolute inset-0"></a>
                </div>
            @endforeach
        </div>
    </div>
</body>
</html>