<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework. You can also check out [Laravel Learn](https://laravel.com/learn), where you will be guided through building a modern Laravel application.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains thousands of video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the [Laravel Partners program](https://partners.laravel.com).

### Premium Partners

- **[Vehikl](https://vehikl.com)**
- **[Tighten Co.](https://tighten.co)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Curotec](https://www.curotec.com/services/technologies/laravel)**
- **[DevSquad](https://devsquad.com/hire-laravel-developers)**
- **[Redberry](https://redberry.international/laravel-development)**
- **[Active Logic](https://activelogic.com)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).

---

## Project — Student Management (Local setup & run)

This repository contains a small Student Management web app built with Laravel. The instructions below are tailored for a Windows development machine using XAMPP and PowerShell (the environment used in this workspace).

### Prerequisites

- PHP 8.0+ (installed via XAMPP or standalone)
- Composer
- Node.js (16+) and npm
- MySQL (bundled with XAMPP)
- Git

### Quick setup (Windows / XAMPP + PowerShell)

1. Clone the repository (if you haven't already):

```powershell
git clone https://github.com/guruwangchuk7/StudentManagementSystem_laravel.git
cd StudentManagementSystem_laravel
```

2. Install PHP dependencies via Composer:

```powershell
composer install
```

3. Copy the example env and generate an app key:

```powershell
copy .env.example .env
php artisan key:generate
```

4. Configure your database (MySQL)

- Open the `.env` file and set DB_DATABASE, DB_USERNAME, DB_PASSWORD to match your XAMPP MySQL credentials (default: DB_USERNAME=root and no password unless you've configured one).

5. Run database migrations and seeders:

```powershell
php artisan migrate --seed
```

6. Install Node dependencies and build assets (development):

```powershell
npm install
npm run dev
```

For a production build:

```powershell
npm run build
```

7. Serve the application (local dev server) or use XAMPP's Apache

To use Laravel's built-in server (recommended for dev):

```powershell
php artisan serve
# then open http://127.0.0.1:8000
```

Or point your Apache document root to the `public` folder when using XAMPP.

### Running tests

This project includes PHPUnit tests. Run them with:

```powershell
vendor\bin\phpunit
```

### Notes

- If you use Git on Windows, you may see warnings about CRLF->LF normalization when committing; this is normal. Configure `core.autocrlf` as desired.
- The `.gitignore` already excludes `vendor`, `node_modules`, and `.env`.
- If you run into permission or environment issues, ensure PHP and Composer are available in your PATH and that MySQL is running.

If you'd like, I can also add a step-by-step script or PowerShell helper to automate the setup (create database, run migrations, and start the server).
