# 📚 Buku Digital

Aplikasi Buku Digital adalah sistem manajemen perpustakaan atau koleksi buku digital sederhana yang dibangun menggunakan **Laravel**. Proyek ini dilengkapi dengan fitur CRUD untuk mengelola data buku dan menggunakan **Tailwind CSS** untuk antarmuka pengguna yang modern dan responsif.

## 🚀 Teknologi yang Digunakan

- **Framework PHP:** [Laravel](https://laravel.com/)
- **Frontend / Styling:** [Tailwind CSS](https://tailwindcss.com/)
- **Asset Bundler:** [Vite](https://vitejs.dev/)
- **Database:** SQLite / MySQL / PostgreSQL (dapat dikonfigurasi)

## 📋 Persyaratan Sistem

Pastikan sistem Anda memenuhi persyaratan berikut sebelum menjalankan proyek ini:
- PHP >= 8.3
- Composer
- Node.js & NPM
- Database server (jika menggunakan MySQL/PostgreSQL)

## 🛠️ Cara Instalasi dan Menjalankan Proyek

Ikuti langkah-langkah di bawah ini untuk menjalankan aplikasi di lingkungan lokal Anda:

1. **Clone repository ini** (jika menggunakan Git) atau pastikan Anda berada di direktori proyek:
   ```bash
   cd buku-digital
   ```

2. **Instal dependensi PHP menggunakan Composer:**
   ```bash
   composer install
   ```

3. **Instal dependensi Node.js (Frontend):**
   ```bash
   npm install
   ```

4. **Siapkan file environment:**
   Salin file `.env.example` menjadi `.env`
   ```bash
   cp .env.example .env
   ```

5. **Generate Application Key:**
   ```bash
   php artisan key:generate
   ```

6. **Konfigurasi Database:**
   Buka file `.env` dan sesuaikan konfigurasi database Anda. Jika Anda ingin menggunakan SQLite dengan cepat, cukup pastikan DB_CONNECTION diatur ke `sqlite` (Laravel akan membuat file databasenya otomatis jika belum ada saat migrasi).

7. **Jalankan Migrasi Database:**
   Perintah ini akan membuat tabel-tabel yang dibutuhkan, seperti tabel `books` dan `users`.
   ```bash
   php artisan migrate
   ```

8. **Build Aset Frontend (Tailwind CSS via Vite):**
   ```bash
   npm run build
   ```
   *Atau jalankan `npm run dev` jika Anda sedang melakukan pengembangan (development).*

9. **Jalankan Local Development Server:**
   ```bash
   php artisan serve
   ```

Aplikasi sekarang dapat diakses melalui browser di: `http://localhost:8000`

## 📂 Struktur Utama Proyek

- `app/Models/Book.php` - Model utama untuk mengelola data buku.
- `app/Http/Controllers/BookController.php` - Controller untuk mengatur logika CRUD buku.
- `resources/views/` - Berisi file blade template untuk tampilan antarmuka (UI).

## 📄 Lisensi

Proyek ini bersifat *open-source* dan dilisensikan di bawah [MIT license](https://opensource.org/licenses/MIT).
