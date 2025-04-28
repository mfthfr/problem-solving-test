# problem-solving-test
Problem Solving Test-Miftah Farid Ramdhani


## Penjelasan kompleksitas untuk soal 3

Ukuran kompleksitas dari kodingan ini adalah O(n).
Pada kodingan tersebut saya menggunakan konsep stack untuk mengecek keseimbangan tanda kurung.
Setiap karakter dari input string akan diperiksa satu per satu. Jika karakter adalah tanda buka,
maka dimasukkan ke dalam stack. Jika karakter adalah tanda tutup, maka akan di cek apakah
pasangan teratas dari stack cocok atau tidak. Jika cocok, maka lanjutkan tapi jika tidak cocok,
langsung return "NO"

Selain itu, karena setiap karakter hanya diproses satu kali(baik untuk masuk atau keluar dari stack),
maka kompleksitas waktunya adalah O(n), dimana n adalah jumlah karakter dalam string input.
Untuk kompleksitas ruang, penggunaan stack juga sebanding dengan jumlah karakter,
sehingga kompleksitas ruangnya O(n).