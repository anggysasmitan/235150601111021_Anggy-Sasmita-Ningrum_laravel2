<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Blog</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <div class="min-h-screen bg-gray-100 py-10">
        <div class="max-w-4xl mx-auto bg-white p-6 shadow rounded-lg">
            <h1 class="text-3xl font-bold mb-4">{{ $blog->judul }}</h1>
            <p>{{ $blog->isi }}</p>
            <div class="flex justify-end space-x-4 mt-6">
                <a href="/blogs/{{ $blog->id }}/edit" class="bg-blue-500 text-white px-4 py-2 rounded-lg hover:bg-blue-600">
                    Edit
                </a>
                <form action="/blogs/{{ $blog->id }}" method="POST" onsubmit="return confirm('Yakin ingin menghapus?')">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="bg-red-500 text-white px-4 py-2 rounded-lg hover:bg-red-600">
                        Delete
                    </button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
