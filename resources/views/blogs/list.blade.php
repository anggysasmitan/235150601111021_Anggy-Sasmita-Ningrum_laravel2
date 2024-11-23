<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List Blog</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <div class="min-h-screen bg-gray-100 py-10">
        <div class="flex justify-center space-x-4 my-6">
            <a href="/tambah" class="bg-pink-500 text-white px-6 py-3 rounded-lg hover:bg-pink-700">
                Tambah Blog
            </a>
            <form action="{{ route('logout') }}" method="POST">
                @csrf
                <button type="submit" class="bg-red-500 text-white px-6 py-3 rounded-lg hover:bg-red-700">
                    Logout
                </button>
            </form>
        </div>
        <div class="max-w-4xl mx-auto bg-white p-6 shadow rounded-lg">
            <h2 class="text-2xl font-bold mb-4 text-center">Berikut adalah daftar blog yang tersedia</h2>
            <ul>
                @foreach ($blogs as $blog)
                    <li class="border-b py-2">
                        <a href="/blogs/{{ $blog->id }}" class="text-blue-500 hover:underline">{{ $blog->judul }}</a>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
</body>
</html>
