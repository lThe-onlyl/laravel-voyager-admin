# Laravel Voyager Admin Panel

Laravel project demonstrating an admin panel built with **Laravel** and **Voyager**. The project includes CRUD management for products and categories, model relationships, and custom dashboard widgets.

## Features

- Voyager admin panel
- Authentication and administrator account
- Product CRUD
- Category CRUD
- Product–category relationship
- Product and category counters on the dashboard
- Custom Voyager dashboard widgets
- MySQL database

## Technologies

- PHP 8.2
- Laravel 10
- Voyager 1.7
- MySQL
- Composer
- Blade
- Bootstrap

## Installation

Clone the repository and install dependencies:

```bash
git clone https://github.com/lThe-onlyl/laravel-voyager-admin.git
cd laravel-voyager-admin
composer install
```

Create the environment file:

```bash
cp .env.example .env
```

Generate the application key:

```bash
php artisan key:generate
```

Configure your MySQL database in `.env`, then run:

```bash
php artisan migrate
```

Start the development server:

```bash
php artisan serve
```

Open the application in your browser and log in through the Voyager admin panel.

## Project Structure

```text
app/
├── Admin/
│   └── Widgets/
│       ├── CategoriesWidget.php
│       └── ProductsWidget.php
├── Models/
│   ├── Category.php
│   └── Product.php
database/
└── migrations/
```

## Database Relationships

A **Category** can have multiple products, while each **Product** belongs to one category.

```text
Category
   │
   └── hasMany
          │
       Product
```

The relationship is implemented through `products.category_id`.

## Dashboard Widgets

The Voyager dashboard contains custom widgets displaying:

- Total number of products
- Total number of categories

Each widget also provides a link to its corresponding BREAD management page.
