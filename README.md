<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## Student CRUD Application

---

### Overview
This is a simple CRUD (Create, Read, Update, Delete) application built with Laravel. It manages student information, including their names and courses. The project demonstrates fundamental CRUD operations and the use of Laravel's powerful features, such as routing, Eloquent ORM, and Blade templating.

### Features
- **Add Students:** Easily add new students with their name and course details.
- **View Students:** List all students with options to edit or delete each entry.
- **Edit Students:** Update existing student information.
- **Delete Students:** Remove students from the list.
- **Validation:** Ensures that all student entries are complete and correctly formatted.
- **User Feedback:** Provides success and error messages for user actions.

### Technologies Used
- **Backend:** Laravel 10
- **Frontend:** HTML, CSS, Blade Templates
- **Database:** MySQL
- **Other:** Eloquent ORM, Laravel Migrations, Artisan Commands

### Installation and Setup
1. **Clone the repository:**
    ```bash
    git clone https://github.com/your-username/student-crud-app.git
    cd student-crud-app
    ```
2. **Install dependencies:**
    ```bash
    composer install
    npm install
    ```
3. **Setup environment:**
    - Copy the `.env.example` file to `.env`
    - Update the database credentials and other necessary configuration in the `.env` file
4. **Run migrations:**
    ```bash
    php artisan migrate
    ```
5. **Serve the application:**
    ```bash
    php artisan serve
    ```

### Usage
- Visit `http://localhost:8000/students` to view and manage students.

### Contributing
Contributions are welcome! Please fork the repository and create a pull request with your changes.
## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
