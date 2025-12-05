-- Mengambil semua data siswa
SELECT * FROM siswa;

-- Mengambil data siswa hanya kolom tertentu
SELECT nama_siswa, nis FROM siswa;

-- Tampilkan nama_siswa dan nis saja dari tabel siswa.
SELECT nama_siswa, nis FROM siswa;

-- Tampilkan siswa yang hobi-nya 'Membaca'.
SELECT * FROM siswa WHERE hobi_siswa = 'Membaca';

-- Tampilkan siswa yang lahir setelah tahun 2010.
SELECT * FROM siswa WHERE YEAR(tanggal_lahir) > 2010;

-- Tampilkan 3 siswa pertama berdasarkan id.
SELECT * FROM siswa
ORDER BY id ASC
LIMIT 3;

-- Tampilkan siswa dengan nama mengandung huruf 'a'.
SELECT * FROM siswa WHERE nama_siswa LIKE '%a%';

-- Urutkan siswa berdasarkan nama dari A–Z.
SELECT * FROM siswa ORDER BY nama_siswa ASC;

-- Urutkan siswa berdasarkan tanggal lahir paling muda → paling tua.
SELECT * FROM siswa ORDER BY tanggal_lahir DESC;

-- Tampilkan siswa yang nomor teleponnya dimulai dengan '0812'.
SELECT * FROM siswa WHERE no_telp LIKE '0812%';

-- Tampilkan siswa yang alamatnya mengandung kata 'Jl'.
SELECT * FROM siswa WHERE alamat LIKE '%Jl%';

-- Tampilkan siswa yang hobinya bukan 'Sepak Bola'.
SELECT * FROM siswa WHERE hobi_siswa <> 'Sepak Bola';

-- Hitung jumlah siswa yang memiliki hobi 'Menggambar'.
SELECT COUNT(*) AS jumlah_siswa_menggambar
FROM siswa 
WHERE hobi = 'Menggambar';