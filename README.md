<h1 align="center">SIAMAWOLU</h1>

## Prerequisites

- Pastikan versi PHP ^7.3.
- Composer dan MySQL sudah terinstall.

## Guide

- Copy file .env.example ke .env

```bash
cp .env.example .env
```

- Sesuaikan isi file .env dengan kredensial database local anda.


```php
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=siamawolu
DB_USERNAME=root
DB_PASSWORD=
```

- Jalankan command composer install.

```bash
composer install
```

- Buat key baru.

```bash
php artisan key:generate
```

- Migrate ke database anda.

```bash
php artisan migrate
```
