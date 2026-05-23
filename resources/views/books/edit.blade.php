<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Buku</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-100">

<div class="container mx-auto p-8">

    <div class="bg-white p-8 rounded-lg shadow">

        <h1 class="text-3xl font-bold mb-6">Edit Buku</h1>

        <form action="{{ route('books.update', $book->id) }}"
              method="POST"
              enctype="multipart/form-data">

            @csrf
            @method('PUT')

            <div class="mb-4">
                <label class="block mb-2">Judul Buku</label>
                <input type="text" name="title"
                       value="{{ $book->title }}"
                       class="w-full border rounded px-4 py-2">
            </div>

            <div class="mb-4">
                <label class="block mb-2">Penulis</label>
                <input type="text" name="author"
                       value="{{ $book->author }}"
                       class="w-full border rounded px-4 py-2">
            </div>

            <div class="mb-4">
                <label class="block mb-2">Penerbit</label>
                <input type="text" name="publisher"
                       value="{{ $book->publisher }}"
                       class="w-full border rounded px-4 py-2">
            </div>

            <div class="mb-4">
                <label class="block mb-2">Tahun</label>
                <input type="number" name="year"
                       value="{{ $book->year }}"
                       class="w-full border rounded px-4 py-2">
            </div>

            <div class="mb-4">
                <label class="block mb-2">Kategori</label>
                <input type="text" name="category"
                       value="{{ $book->category }}"
                       class="w-full border rounded px-4 py-2">
            </div>

            <div class="mb-4">
                <label class="block mb-2">Deskripsi</label>
                <textarea name="description"
                          class="w-full border rounded px-4 py-2">{{ $book->description }}</textarea>
            </div>

            <div class="mb-4">
                <label class="block mb-2">Cover Buku</label>

                <img src="{{ asset('storage/' . $book->cover) }}"
                     class="w-32 mb-4 rounded">

                <input type="file" name="cover"
                       class="w-full border rounded px-4 py-2">
            </div>

            <button class="bg-green-500 text-white px-6 py-2 rounded">
                Update
            </button>

        </form>

    </div>

</div>

</body>
</html>