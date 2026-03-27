# Pemrograman-berbasis-Web

## Nama : Rabiatul Hikmah  
## Nim : 2409116049  

---

## 🌸 Personal Portfolio Website (Dinamis)

Project ini dikembangkan sebagai pemenuhan tugas **Praktikum Mini Project 2**. Fokus utama pada tahap ini adalah transformasi website dari statis (HTML) menjadi **Dinamis (PHP)**. Seluruh data utama pada website kini dikelola melalui database MySQL, memungkinkan pembaruan konten tanpa mengubah kode sumber.

Pengembangan ini mencakup implementasi koneksi database, penanganan query SQL, dan teknik *data binding* menggunakan PHP untuk merender komponen Bootstrap 5 secara otomatis.

---

## 📁 Struktur File

```text
portofolio/
│
├── index.php          # Halaman utama dengan logika PHP Dinamis
├── koneksi.php        # Konfigurasi koneksi ke Database MySQL
├── style.css          # File styling custom (UI & Timeline)
├── README.md          # Dokumentasi proyek
├── portofolio.sql     # File Export Database (Backup Data)
├── img/
│   └── rabi.jpg       # Asset foto profil
└── certificates/      # Folder penyimpanan file sertifikat (PDF/JPG)
    ├── ASLEB.pdf
    ├── inforsa.png
    └── kepanitiaan.pdf
```


## Implementasi Database

Website ini menggunakan database **MySQL** dengan nama:

`portofolio`

### 📋 Struktur Tabel

#### 1. Tabel `skills`

| Kolom        | Tipe Data | Fungsi |
|--------------|----------|--------|
| id           | INT (PK) | Primary Key |
| nama_skill   | VARCHAR  | Nama keterampilan |
| level        | INT      | Persentase kemampuan |

Digunakan untuk mengatur **progress bar skills secara dinamis**.

---

#### 2. Tabel `experience`

| Kolom        | Tipe Data | Fungsi |
|--------------|----------|--------|
| id           | INT (PK) | Primary Key |
| tahun        | VARCHAR  | Tahun pengalaman |
| role         | VARCHAR  | Posisi/jabatan |
| organisasi   | VARCHAR  | Nama organisasi |
| deskripsi    | TEXT     | Deskripsi kegiatan |

Digunakan untuk menampilkan **timeline pengalaman**.

---

#### 3. Tabel `certificates`

| Kolom     | Tipe Data | Fungsi |
|-----------|----------|--------|
| id        | INT (PK) | Primary Key |
| judul     | VARCHAR  | Judul sertifikat |
| provider  | VARCHAR  | Penerbit |
| tahun     | VARCHAR  | Tahun |
| icon      | VARCHAR  | Class Bootstrap Icon |

Digunakan untuk menampilkan **kartu sertifikat dengan ikon dinamis**.

---

## 🔄 Alur Data (Backend)

###  Koneksi Database

Menggunakan file `koneksi.php` dengan fungsi:

```php
mysqli_connect()
