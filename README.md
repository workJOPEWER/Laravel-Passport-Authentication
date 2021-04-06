<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

<h4>Clone this repo</h4>

<h4>Install composer packages</h4>
$ composer install

<h4>Create and setup .env file</h4>
make a copy of .env.example and rename to .env
$ copy .env.example .env
$ php artisan key:generate
put database credentials in .env file

<h4> Migrate and insert records</h4>
$ php artisan migrate
$ php artisan tinker
User::factory()->count(10)->create();
\App\Models\Post::factory()->count(100)->create();

<h4>Generate secure access tokens</h4>
$ php artisan passport:install
put passport client login endpoint, id and secret in .env file
PASSPORT_LOGIN_ENDPOINT=""
PASSPORT_CLIENT_ID=
PASSPORT_CLIENT_SECRET=""