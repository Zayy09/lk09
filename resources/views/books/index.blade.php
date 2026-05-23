<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Buku</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-100">

<div class="container mx-auto p-8">

    <div class="flex justify-between items-center mb-6">
        <h1 class="text-3xl font-bold">Data Buku Digital</h1>

        <a href="{{ route('books.create') }}"
           class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">
            + Tambah Buku
        </a>
    </div>

    <div class="bg-white shadow rounded-lg overflow-hidden">
        <table class="w-full">
            <thead class="bg-gray-200">
                <tr>
                    <th class="p-3">Cover</th>
                    <th class="p-3">Judul</th>
                    <th class="p-3">Penulis</th>
                    <th class="p-3">Kategori</th>
                    <th class="p-3">Tahun</th>
                    <th class="p-3">Aksi</th>
                </tr>
            </thead>

            <tbody>
                @foreach ($books as $book)
                <tr class="border-b">

                    <td class="p-3">
                        <img src="{{ asset('storage/' . $book->cover) }}"
                             class="w-20 h-28 object-cover rounded">
                    </td>

                    <td class="p-3">{{ $book->title }}</td>
                    <td class="p-3">{{ $book->author }}</td>
                    <td class="p-3">{{ $book->category }}</td>
                    <td class="p-3">{{ $book->year }}</td>

                    <td class="p-3 flex gap-2">

                        <a href="{{ route('books.edit', $book->id) }}"
                           class="bg-yellow-400 text-white px-3 py-1 rounded">
                            Edit
                        </a>

                        <form action="{{ route('books.destroy', $book->id) }}"
                              method="POST">

                            @csrf
                            @method('DELETE')

                            <button class="bg-red-500 text-white px-3 py-1 rounded">
                                Hapus
                            </button>

                        </form>

                    </td>

                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

</div>

</body>
</html>