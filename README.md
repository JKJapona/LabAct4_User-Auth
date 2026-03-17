# 📘 Laboratory Activity 4: Custom User Authentication

## 🎯 Project Objectives
* Create custom login and registration functionality.
* Manually handle user sessions and authentication logic.
* Protect specific routes using Laravel Middleware.
* Display authenticated user data on a private dashboard.

---

## 🗺️ File Location Map (Auth Related)
Laravel has many files, but these are the only ones modified for this activity:

```text
laravel-project/
├── app/
│   └── Http/
│       └── Controllers/
│           └── AuthController.php      <-- [Logic] Handles Register, Login, and Logout
├── database/
│   └── migrations/
│       └── xxxx_create_users_table.php <-- [Database] Schema for the 'users' table
├── resources/
│   └── views/
│       ├── auth/
│       │   ├── login.blade.php        <-- [View] HTML Login Form
│       │   └── register.blade.php     <-- [View] HTML Registration Form
│       └── dashboard.blade.php         <-- [View] Authenticated User Panel
├── routes/
│   └── web.php                         <-- [Routes] Map URLs to Controller methods
└── .env                                <-- [Environment] Database credentials