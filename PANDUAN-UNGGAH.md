# Panduan unggah ke syrvrr.github.io

Isi zip ini adalah seluruh situs. Semua tautan relatif, jadi situs langsung jalan begitu berkasnya ada di akar repositori.

## Langkah

1. Buka repositori `syrvrr/syrvrr.github.io` di GitHub.
2. Hapus berkas situs lama (termasuk `index.html` dan folder `assets/img/` yang berisi `person.jpg`). Biarkan `README` atau `LICENSE` bila ada.
3. Ekstrak zip ini di komputer. Klik **Add file → Upload files**, lalu seret **isi** folder hasil ekstrak (bukan foldernya) ke halaman unggah: `index.html`, `404.html`, `favicon.svg`, `robots.txt`, `sitemap.xml`, `.nojekyll`, folder `assets`, `publikasi`, dan `kuliah`.
   - Berkas `.nojekyll` tersembunyi di sebagian sistem. Bila tidak ikut terunggah, buat berkas kosong bernama `.nojekyll` lewat **Add file → Create new file**.
4. Tulis pesan commit, misalnya "Situs baru", lalu **Commit changes**.
5. Buka **Settings → Pages**. Pastikan *Source* = *Deploy from a branch*, cabang `main`, folder `/ (root)`.
6. Tunggu 1 sampai 3 menit, lalu buka https://syrvrr.github.io/.

## Cara pakai di kelas

Buka https://syrvrr.github.io/kuliah/index.html, pilih mata kuliah, lalu pilih pertemuan. Setiap pertemuan membuka simulasi interaktifnya. Pertemuan 8 (UTS) dan 16 (UAS) tampil sebagai baris ujian tanpa berkas.

## Mengubah isi

Situs ini dibangkitkan dari `data/profil.json`, `data/publikasi.json`, dan `data/kuliah.json` dengan `python3 build.py`. Bila Bapak ingin mengubah teks, ubah data lalu jalankan ulang skrip, atau sunting langsung berkas HTML-nya.

Satu hal yang masih perlu Bapak lengkapi: judul Hibah Internal ITSI 2026 di `publikasi/index.html` (cari `LENGKAPI-JUDUL`).

## Uji Lighthouse

Uji di jendela Chrome Incognito agar ekstensi tidak memengaruhi skor. Hasil uji lokal: 100 pada Performance, Accessibility, Best Practices, dan SEO untuk beranda, publikasi, daftar kuliah, halaman mata kuliah, dan simulasi.
