# 🚀 Aplikasi Pendaftaran Siswa (CRUD SPA + PHP API)

---

# 🌐 Live Demo

Anda dapat mengakses dan mencoba aplikasi versi baru (Single Page App) ini secara langsung melalui tautan berikut:

**[https://mandytjandra.infinityfreeapp.com/index.html](https://mandytjandratugas8.infinityfreeapp.com/)**

---

# 💻 Tentang Proyek Ini

Ini adalah proyek aplikasi pendaftaran siswa yang telah di-refactor dari arsitektur PHP tradisional menjadi **Single Page Application (SPA)** modern.

Aplikasi ini sekarang memiliki *frontend* dan *backend* yang terpisah (*decoupled*):

* **Frontend (`index.html`):** Satu halaman yang dibuat dengan HTML, CSS, dan **JavaScript murni (ES6+)**. Halaman ini bertanggung jawab untuk menampilkan UI, mengambil data dari API (menggunakan `fetch`), dan mengirim data formulir secara dinamis tanpa perlu me-refresh halaman.
* **Backend (API):** Sebuah API sederhana yang dibuat dengan PHP natif. Bertanggung jawab untuk terhubung ke database MySQL, mengelola logika bisnis (CRUD), dan mengirim/menerima data dalam format **JSON**.

## 🚀 Fitur Utama

* **Single Page Application (SPA):** Semua fungsionalitas (Create, Read, Update, Delete) terjadi di satu halaman (`index.html`) secara dinamis.
* **Asynchronous CRUD:**
    * **Create:** Mendaftar siswa baru melalui formulir. Daftar siswa di bawahnya akan otomatis diperbarui.
    * **Read:** Menampilkan semua data siswa yang ada di database.
    * **Update:** Mengedit data siswa melalui *pop-up modal* interaktif tanpa pindah halaman.
    * **Delete:** Menghapus data siswa dengan konfirmasi `confirm()` dan me-refresh daftar secara otomatis.
* **API Berbasis JSON:** Komunikasi antara frontend dan backend sepenuhnya menggunakan JSON.

## 🛠️ Teknologi yang Digunakan

### Frontend

* HTML5
* CSS3 (Styling dasar)
* **JavaScript (ES6+)**
    * `Fetch API` untuk komunikasi HTTP
    * `Async/Await` untuk mengelola *asynchronous request*
    * `DOM Manipulation` untuk membangun UI secara dinamis

### Backend

* PHP (Natif)
* MySQL (Database)

### Arsitektur

* Decoupled (Frontend & Backend terpisah)
* RESTful API (JSON)

## 📸 Tangkapan Layar Aplikasi Baru
<img width="620" height="611" alt="image" src="https://github.com/user-attachments/assets/65bf173c-fbc4-4677-bd6d-ca4ccfe8e00e" />

### 1. Halaman Aplikasi Utama (`index.html`)
<img width="622" height="633" alt="image" src="https://github.com/user-attachments/assets/d572f4e3-58af-4810-9b00-973a8fcb43d5" />

> *Halaman `index.html` yang baru menampilkan formulir pendaftaran dan daftar siswa secara bersamaan. Semua aksi terjadi di sini.*

### 2. Fitur Edit Siswa (Modal Pop-up)
<img width="633" height="646" alt="image" src="https://github.com/user-attachments/assets/e3f8e1b3-de0e-4000-afa4-8cefbc1a7af4" />

> *Saat tombol "Edit" ditekan, sebuah modal pop-up akan muncul dengan data siswa yang sudah terisi, siap untuk diperbarui.*

## 👤 Author

Dibuat oleh **Mandy Alphafyn Imanuel Tjandra (5025241173)**
