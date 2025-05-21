# Laravel 12 + Filament 3 with Docker

Ini adalah proyek Laravel 12 dengan panel admin berbasis [Filament 3](https://filamentphp.com/), dikemas dalam lingkungan **Docker** yang siap pakai untuk pengembangan.

---

## Struktur Proyek

```
├── docker-compose.yml
├── Dockerfile
├── entrypoint.sh
├── .env                ← untuk docker-compose
├── src/                ← Laravel project
│   ├── .env            ← konfigurasi Laravel
│   └── ...
```

## Cara Menjalankan

### 1. **Kloning Repository & Masuk Folder Proyek**

```bash
git clone <url-repo>
cd nama-folder
```

### 2. **Sesuaikan Konfigurasi**

Dan file `src/.env` (untuk Laravel):

```env
DB_CONNECTION=mysql
DB_HOST=mysql
DB_PORT=3306
DB_DATABASE=laravel
DB_USERNAME=laravel
DB_PASSWORD=laravel
```

### 3. **Jalankan Docker**

```bash
docker-compose up --build -d
```

### 4. **Jalankan Migrasi & Seeder**

```bash
docker exec -it laravel_app php artisan migrate --force
docker exec -it laravel_app php artisan db:seed --force
```

### 5. **Buat User Admin Filament**

```bash
docker exec -it laravel_app php artisan make:filament-user
```

Ikuti prompt untuk mengisi **nama, email, dan password admin**.

## Akses Aplikasi

- Laravel: [http://localhost:8000](http://localhost:8000)
- Filament Admin: [http://localhost:8000/admin](http://localhost:8000/admin)

## Fitur Utama

- Laravel 12
- Filament 3 Admin Panel (CRUD Barang)
- Docker + docker-compose
- Seeder user admin dari `.env`
- Otomatis install dependency saat build
