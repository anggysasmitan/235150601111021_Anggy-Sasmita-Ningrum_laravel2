<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <div class="min-h-screen flex items-center justify-center bg-gray-100">
        <form action="{{ route('register') }}" method="POST" class="bg-white shadow-md rounded px-8 py-6">
            @csrf
            <h2 class="text-2xl font-bold mb-4 text-center">Register</h2>
            <div class="mb-4">
                <label for="name" class="block text-gray-700">Name</label>
                <input type="text" name="name" id="name" class="border w-full py-2 px-3 rounded" required>
            </div>
            <div class="mb-4">
                <label for="email" class="block text-gray-700">Email</label>
                <input type="email" name="email" id="email" class="border w-full py-2 px-3 rounded" required>
            </div>
            <div class="mb-4">
                <label for="password" class="block text-gray-700">Password</label>
                <input type="password" name="password" id="password" class="border w-full py-2 px-3 rounded" required>
            </div>
            <div class="flex justify-end mt-6">
                <button type="submit" class="bg-purple-600 text-white py-2 px-6 rounded-lg hover:bg-purple-700">
                    Register
                </button>
            </div>
        </form>
    </div>
</body>
</html>
