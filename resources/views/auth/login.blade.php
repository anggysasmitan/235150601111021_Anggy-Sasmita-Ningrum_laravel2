<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gradient-to-tr from-purple-300 via-pink-200 to-orange-200 min-h-screen flex items-center justify-center">
    <div class="w-full max-w-md bg-white shadow-lg rounded-2xl px-8 py-10">
        <h2 class="text-3xl font-bold text-center text-purple-800 mb-6">Selamat Datang</h2>
        <p class="text-center text-gray-500 mb-8">Silakan masuk ke akun Anda</p>

        <form action="/login" method="POST" class="space-y-6">
            @csrf

        
            <div>
                <label for="email" class="block text-sm font-medium text-purple-800">Email</label>
                <input type="email" name="email" id="email"
                    class="mt-2 w-full px-4 py-2 rounded-lg border border-purple-300 shadow-sm focus:ring-purple-500 focus:border-purple-500 text-gray-800"
                    placeholder="Masukkan email Anda" required>
            </div>
            <div>
                <label for="password" class="block text-sm font-medium text-purple-800">Password</label>
                <input type="password" name="password" id="password"
                    class="mt-2 w-full px-4 py-2 rounded-lg border border-purple-300 shadow-sm focus:ring-purple-500 focus:border-purple-500 text-gray-800"
                    placeholder="Masukkan password Anda" required>
            </div>
            <div class="flex flex-col items-center">
                <button type="submit"
                    class="w-full bg-gradient-to-r from-purple-500 to-pink-500 text-white font-bold px-8 py-3 rounded-lg hover:bg-purple-700 focus:ring-2 focus:ring-purple-500 focus:outline-none transition">
                    Masuk
                </button>
                <a href="/register" class="mt-4 text-sm text-purple-600 hover:text-purple-800 transition">
                    Belum punya akun? Daftar sekarang
                </a>
            </div>
        </form>
    </div>
</body>

</html>
