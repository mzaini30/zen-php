# Zen PHP

Tools supaya cepat membuat website

## Latar belakang

Jadi, dengan website ini, kamu bisa membuat website dengan cepat. Cepat banget ya. Beneran. Soalnya, kamu nggak usah dah tuh mikirin REST APInya. Udah jadi otomatis. Bagus banget kan buat kamu yang kebanyakan order minta dibuatkan website?

Tapi, ini untuk pemakaian _offline_ aja ya. Kalau untuk online nggak bagus karena **banyak celah keamanan** di website ini.

Dan kenapa aku menggunakan PHP, nggak Node JS? Tentu karena penginstalannya mudah. Cukup download php aja lalu taroh di C: atau kalau pakai Linux, cukup `apt install php`. Kalau Node JS kan harus pakai internet untuk download package-packagenya.

## Tanpa `.htaccess`

Karena nggak pakai htaccess, jadi bisa pakai PHP built in.

## Getting started

```bash
composer update
```

## Database

Menggunakan format JSON. Letaknya di `vendor/zlob/php-json-server/db/db.json`

Untuk lebih lengkapnya, baca aja [Zlob/php-json-server](https://github.com/Zlob/php-json-server/blob/master/README.md)

## Menggunakan Pug (untuk development)

Letakkan file-file Pugmu di folder `pug`. Lalu, dia akan menggenerate ke folder `public` jika kita menjalankan `./dev.sh`

## Meletakkan semua file HTML dan PHP 

Letakkan di folder `public`.

Contoh nama file:

```
index.html 
halo/dunia.php 
kucing.html 
```

Cara memanggil:

```
situs.com/
situs.com/halo/dunia
situs.com/kucing
```

Kalau untuk aset lainnya, bisa juga diletakkan di `public`. Tapi, folder `public` dan ekstensi file harus disebutkan. Contoh:

```
situs.com/public/gambar.jpg
```

## TODO 

- [ ] Upload file
- [ ] QR Code generator
- [ ] Memperbaiki `?` di JSON Server yang nggak jalan
- [ ] Token Auth