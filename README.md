# E-commerce API

<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About E-commerce API

This is a RESTful API for an e-commerce platform built with Laravel. The API provides endpoints for managing products, categories, and user authentication.

### Features

- **User Authentication**: Register, login, logout functionality using Laravel Sanctum
- **Product Management**: CRUD operations for products
- **Category Management**: CRUD operations for product categories
- **RESTful API Design**: Consistent JSON responses with appropriate HTTP status codes

## API Endpoints

### Authentication
- `POST /api/register` - Register a new user
- `POST /api/login` - Login user
- `POST /api/logout` - Logout user (requires authentication)
- `GET /api/me` - Get authenticated user info (requires authentication)

### Categories
- `GET /api/categories` - List all categories
- `GET /api/categories/{id}` - Get a specific category
- `POST /api/categories` - Create a new category
- `PUT /api/categories/{id}` - Update a category
- `DELETE /api/categories/{id}` - Delete a category

### Products
- `GET /api/products` - List all products
- `GET /api/products/{id}` - Get a specific product
- `POST /api/products` - Create a new product
- `PUT /api/products/{id}` - Update a product
- `DELETE /api/products/{id}` - Delete a product

## Getting Started

### Prerequisites
- PHP >= 8.2
- Composer
- Database (MySQL, PostgreSQL, or SQLite)

### Installation

1. Clone the repository
```bash
git clone <repository-url>
```

2. Install dependencies
```bash
composer install
```

3. Copy the example environment file and generate application key
```bash
cp .env.example .env
php artisan key:generate
```

4. Configure your database in the .env file

5. Run migrations and seed the database
```bash
php artisan migrate --seed
```

6. Start the server
```bash
php artisan serve
```

## Testing
Run the test suite with:
```bash
php artisan test
```

## License

This project is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).