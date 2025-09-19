<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>

    <div class="bg-gray-700 p-4 text-center">
        <a href="{{ route('showroom') }}" class="text-white font-bold mr-4">Showroom</a>
        <a href="{{ route('contact') }}" class="text-white font-bold">Contact</a>
    </div>

    <div class="p-4">
        <h1 class="text-2xl font-bold mb-4">Contact:</h1>
        
        <div class="space-y-2 mb-6">
            <p><strong>Bedrijfsnaam:</strong> {{ $data->company->name }}</p>
            <p><strong>Adres:</strong> {{ $data->company->address }}</p>
            <p><strong>Telefoon:</strong> {{ $data->company->phone }}</p>
            <p><strong>Email:</strong> {{ $data->company->email }}</p>
        </div>

        <div class="border p-4 rounded">
            <h2 class="text-xl font-bold mb-3">Neem contact op</h2>
            
            <form class="space-y-3">
                <div>
                    <label class="block font-medium">Naam</label>
                    <input type="text" class="w-full p-2 border rounded">
                </div>
                
                <div>
                    <label class="block font-medium">Email</label>
                    <input type="email" class="w-full p-2 border rounded">
                </div>
                
                <div>
                    <label class="block font-medium">Onderwerp</label>
                    <input type="text" class="w-full p-2 border rounded">
                </div>
                
                <div>
                    <label class="block font-medium">Bericht</label>
                    <textarea class="w-full p-2 border rounded" rows="4"></textarea>
                </div>
                
                <button type="submit" class="bg-blue-700 text-white px-4 py-2 rounded">
                    Verstuur bericht
                </button>
            </form>
        </div>
    </div>
</body>
</html>