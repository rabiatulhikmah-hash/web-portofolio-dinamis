

## Nama : Rabiatul Hikmah
## NIM : 2409116049

---

## 🌸 Personal Portfolio Website 

Project ini dikembangkan sebagai pemenuhan tugas **Praktikum Mini Project 2**. Fokus utama pada tahap ini adalah transformasi website dari statis (HTML/Vue.js) menjadi **dinamis (PHP)**. Seluruh data utama pada website kini dikelola melalui database MySQL, memungkinkan pembaruan konten tanpa mengubah kode sumber.

Pengembangan ini mencakup implementasi koneksi database, penanganan query SQL, dan teknik rendering data menggunakan PHP untuk merender komponen Bootstrap 5 secara otomatis.

---

## 📁 Struktur File

```text
portofolio/
│
├── index.php          # Halaman utama (Home, About, Skills, Certificates)
├── experience.php     # Halaman khusus Experience
├── koneksi.php        # Konfigurasi koneksi ke Database MySQL
├── style.css          # File styling custom
├── README.md          # Dokumentasi proyek
├── img/
│   └── rabi.jpg       # Asset foto profil
└── certificates/
    ├── ASLEB.pdf
    ├── inforsa.png
    └── kepanitiaan.pdf
```

---

## 🗄️ Implementasi Database

Website ini menggunakan database MySQL dengan nama: **portfolio_db**

### 📋 Struktur Tabel

**1. Tabel `skills`**

| Kolom | Tipe Data | Fungsi |
| :--- | :--- | :--- |
| id | INT (PK, AI) | Primary Key |
| nama_skill | VARCHAR(50) | Nama keterampilan |
| level | INT | Persentase kemampuan (dipakai untuk lebar progress bar) |

**2. Tabel `experience`**

| Kolom | Tipe Data | Fungsi |
| :--- | :--- | :--- |
| id | INT (PK, AI) | Primary Key |
| tahun | VARCHAR(10) | Tahun pengalaman |
| role | VARCHAR(150) | Posisi atau jabatan |
| organisasi | VARCHAR(150) | Nama organisasi |
| deskripsi | TEXT | Deskripsi kegiatan |

**3. Tabel `certificates`**

| Kolom | Tipe Data | Fungsi |
| :--- | :--- | :--- |
| id | INT (PK, AI) | Primary Key |
| judul | VARCHAR(200) | Judul sertifikat |
| provider | VARCHAR(100) | Lembaga penerbit |
| tahun | VARCHAR(10) | Tahun terbit |
| status | VARCHAR(50) | Status (misal: Completed) |
| icon | VARCHAR(50) | Class Bootstrap Icons (dinamis) |
| link | VARCHAR(200) | Path ke file sertifikat |

---

## 🔄 Alur Data (Backend)

- 🔌 **Koneksi** — Menggunakan `mysqli_connect()` pada `koneksi.php` untuk menghubungkan PHP ke database MySQL
- 📥 **Fetching Data** — `SELECT * FROM [nama_tabel]` digunakan untuk mengambil data dari database
- 🔁 **Looping Render** — `while ($data = mysqli_fetch_assoc($query))` mencetak data secara berulang ke dalam elemen HTML

---

## 🚀 Teknologi yang Digunakan

| Teknologi | Keterangan |
| :--- | :--- |
| PHP 8 | Server-side scripting untuk pemrosesan data dinamis |
| MySQL | Database Management System untuk penyimpanan data |
| HTML5 & CSS3 | Struktur halaman dan styling custom |
| Bootstrap 5.3 | Framework CSS untuk Grid System dan komponen responsif |
| Bootstrap Icons 1.11 | Representasi visual pada card sertifikat dan timeline |

---

## 🛠️ Penjelasan Fitur Per Section

### 🏠 Hero Section
Menampilkan foto profil, nama, dan tagline. Data profil bersifat statis (hardcoded di PHP) karena hanya ada satu data yang tidak berubah.

```php
$profil = [
  'nama'    => 'Rabiatul Hikmah',
  'tagline' => 'Information Systems Student · Universitas Mulawarman',
  'foto'    => 'img/rabi.jpg'
];
```

### 🙋 About Me & Skills
Layout dua kolom — kiri berisi deskripsi diri, kanan berisi progress bar skills yang lebarnya diatur otomatis dari kolom `level` di database.

```php
$skills = mysqli_query($koneksi, 'SELECT * FROM skills');

while ($skill = mysqli_fetch_assoc($skills)) {
  // lebar progress bar = nilai level dari database
  // style="width: <?= $skill['level'] ?>%"
}
```

### 🕒 Experience
Ditampilkan di halaman `experience.php` tersendiri dalam bentuk grid card. Data diambil dari tabel `experience`, diurutkan dari tahun terbaru.

```php
$experience = mysqli_query($koneksi, 'SELECT * FROM experience ORDER BY tahun DESC');

while ($exp = mysqli_fetch_assoc($experience)) {
  // render card per pengalaman
}
```

### 🎓 Certificates
Grid card sertifikat dengan ikon Bootstrap Icons yang diambil dinamis dari kolom `icon` di database, sehingga ikon bisa berbeda tiap sertifikat tanpa mengubah kode.

```php
$certificates = mysqli_query($koneksi, 'SELECT * FROM certificates');

while ($cert = mysqli_fetch_assoc($certificates)) {
  // <i class="<?= $cert['icon'] ?>"></i>
}
```

## 🖼️ Tampilan Website

### 1. Hero Section
<p align="center">
  <img src="https://github.com/user-attachments/assets/87ea800f-ee3e-455a-8e7e-a676525ec2e0" width="700"/>
</p>


---

### 2. About Me & Skills
<p align="center">
  <img src="https://github.com/user-attachments/assets/97d552dc-e801-4636-aa4a-30fac349dbc2" width="700"/>
</p>

---

### 3. Certificates
<p align="center">
  <img src="https://github.com/user-attachments/assets/f96efc62-20f3-4d83-a4c8-07ad528dd374" width="700"/>
</p>

---

### 4. Footer
<p align="center">
  <img src="https://github.com/user-attachments/assets/ec272fd2-d3b3-431b-ba12-ba94bdf25e8a" width="700"/>
</p>



