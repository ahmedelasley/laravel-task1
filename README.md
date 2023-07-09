## Laravel Task

**Created By :** Ahmed Elasley
**Website :** ahmedelasley.com
**Email :** ahmedelasley@gmail.com

Task 
Login Screen
Home Screen include : slider & news
no one can see details of news details screen before login
## Installation

To get started, clone this repository.

```
git clone https://github.com/ahmedelasley/laravel-task1.git
```

Next, copy your `.env.example` file as `.env` and configure your Database connection.

```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=YOUR-DATABASE-NAME
DB_USERNAME=YOUR-DATABASE-USERNAME
DB_PASSWORD=YOUR-DATABASE-PASSWROD
```

## Run Packages and helpers

You have to all used packages and load helpers as below.

```
composer install
npm install
npm run dev
npm run build
```

## Generate new application key

You have to generate new application key as below.

```
php artisan key:generate
```

## Run Migrations and Seeders

You have to run all the migration files included with the project and also run seeders as below.

```
php artisan migrate
php artisan db:seed
```