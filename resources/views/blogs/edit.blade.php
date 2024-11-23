<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Blog</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gradient-to-r from-indigo-200 via-purple-200 to-pink-100 min-h-screen flex items-center justify-center">
    <div class="max-w-4xl w-full bg-white rounded-2xl shadow-xl p-8">
        <h1 class="text-3xl font-extrabold text-gray-800 mb-6 text-center">Silahkan Edit Blog Anda ^^</h1>
        <form action="/blogs/{{ $blog->id }}" method="POST" enctype="multipart/form-data" class="grid grid-cols-1 md:grid-cols-2 gap-6">
            @csrf
            @method('PUT')
            
         
            <div class="col-span-1 md:col-span-2">
                <label for="judul" class="block text-sm font-medium text-purple-800">Judul</label>
                <input type="text" name="judul" id="judul" value="{{ $blog->judul }}"
                    class="mt-2 w-full px-4 py-2 rounded-lg border border-purple-300 shadow-sm focus:ring-purple-500 focus:border-purple-500 text-gray-800"
                    placeholder="Masukkan judul blog" required>
            </div>
            <div class="col-span-1 md:col-span-2">
                <label for="isi" class="block text-sm font-medium text-purple-800">Isi</label>
                <textarea name="isi" id="isi" rows="5"
                    class="mt-2 w-full px-4 py-2 rounded-lg border border-purple-300 shadow-sm focus:ring-purple-500 focus:border-purple-500 text-gray-800"
                    placeholder="Tulis isi blog Anda..." required>{{ $blog->isi }}</textarea>
            </div>
            <div>
                <label for="gambar" class="block text-sm font-medium text-purple-800">Gambar</label>
                <input type="file" name="gambar" id="gambar"
                    class="mt-2 block w-full rounded-lg border border-purple-300 shadow-sm focus:ring-purple-500 focus:border-purple-500 px-4 py-2">
                @if ($blog->gambar)
                <img src="{{ asset('storage/' . $blog->gambar) }}" alt="Gambar Blog"
                    class="mt-4 rounded-lg w-full md:w-32 h-32 object-cover shadow border border-gray-300">
                @endif
            </div>
            <div class="col-span-1 md:col-span-2 flex justify-end">
                <button type="submit"
                    class="bg-gradient-to-r from-purple-500 to-pink-500 text-white font-bold px-8 py-3 rounded-lg hover:bg-purple-700 focus:ring-2 focus:ring-purple-500 focus:outline-none transition">
                    Simpan Perubahan
                </button>
            </div>
        </form>
    </div>
</body>

</html>
