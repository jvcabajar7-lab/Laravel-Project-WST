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

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

In addition, [Laracasts](https://laracasts.com) contains thousands of video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

You can also watch bite-sized lessons with real-world projects on [Laravel Learn](https://laravel.com/learn), where you will be guided through building a Laravel application from scratch while learning PHP fundamentals.

## Agentic Development

Laravel's predictable structure and conventions make it ideal for AI coding agents like Claude Code, Cursor, and GitHub Copilot. Install [Laravel Boost](https://laravel.com/docs/ai) to supercharge your AI workflow:

```bash
composer require laravel/boost --dev

php artisan boost:install
```

Boost provides your agent 15+ tools and skills that help agents build Laravel applications while following best practices.

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).

# PERSONAL TASK MANAGER

Project Code: WST21-PM-2026-SF


Student Name: CABAJAR, JOHN VINCENT M.


Course & Year: BSIT 2 SECTION 5


Database Used: SQLite

## Features Implemented
- Add Task
- View Tasks
- Edit Task / Toggle Status
- Delete Task
- Update Status (Pending / Completed)

## How to Run the Project
1. Clone the repository.
2. Run `composer install`.
3. Create database file: `touch database/database.sqlite`
4. Set `DB_CONNECTION=sqlite` in `.env`.
5. Run migrations: `php artisan migrate`
6. Start development server: `php artisan serve`

## System Output Screenshots

### Task Manager Output
<img width="1917" height="1140" alt="task-list png" src="https://github.com/user-attachments/assets/e6f10b8b-d101-407f-964a-e07d9325f6d4" />

### Step 1: Viewing the Task List
Below is the main page where all current tasks are listed:
<img width="1872" height="1142" alt="view-task" src="https://github.com/user-attachments/assets/3ec008e3-1624-4635-915d-65709b4054aa" />



### Step 2: Adding a New Task
This shows the form filled out to create a new task:
<img width="1897" height="1126" alt="addnew-task" src="https://github.com/user-attachments/assets/23cdf96b-1bc0-4a33-a888-35a8e769db3e" />



### Step 3: Updating / Toggling Task Status
Here is the output after marking a task as completed or updating it:
<img width="1896" height="1145" alt="updating-task" src="https://github.com/user-attachments/assets/a0b4ac5b-8637-4093-bef6-4fa57822c434" />



### Step 4: Deleting a Task
This displays the screen after deleting a task from the system:
<img width="1896" height="1131" alt="delete-task" src="https://github.com/user-attachments/assets/d749496f-d0bd-41ee-9293-3c64b3ee8139" />

