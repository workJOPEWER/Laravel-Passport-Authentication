<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

1. Clone this repo

2. Install composer packages

3. Create and setup .env file
make a copy of .env.example and rename to .env
$ copy .env.example .env
$ php artisan key:generate
put database credentials in .env file

4. Migrate and insert records
$ php artisan migrate
$ php artisan tinker
User::factory()->count(10)->create();
\App\Models\Post::factory()->count(100)->create();

5.Generate secure access tokens
$ php artisan passport:install
put passport client login endpoint, id and secret in .env file
PASSPORT_LOGIN_ENDPOINT=""
PASSPORT_CLIENT_ID=
PASSPORT_CLIENT_SECRET=""