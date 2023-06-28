rr917987@gmail.com / 12345678

- tao project
composer create-project --prefer-dist laravel/laravel chatapp

- cài đặt sanctum xác thực API
composer require laravel/sanctum

- sử dụng sanctum
php artisan vendor:publish --provider="Laravel\Sanctum\SanctumServiceProvider"

- laravel/jetstream cung cấp các tính năng chức năng cho việc xây dựng ứng dụng web như đăng ký, đăng nhập, xác thực hai
yếu tố, phục hồi mật khẩu, đăng xuất và quản lý hồ sơ người dùng
composer require laravel/jetstream

- tích hợp Inertia thư viện JavaScript cho phép bạn xây dựng các ứng dụng web đơn trang (SPA) mà không cần phải viết lại
mã HTML và CSS cho từng trang. Thay vào đó, Inertia sử dụng các thành phần Vue.js hoặc React để hiển thị nội dung của
trang
php artisan jetstream:install inertia

- pusher
https://dashboard.pusher.com/

- điền thông tin app keys vào file .env

- cài đặt package pusher/pusher-php-server
composer require pusher/pusher-php-server

- cài đặt package laravel-echo và pusher-js
npm install --save laravel-echo pusher-js

- tạo ra các class event mới trong thư mục app/Events
php artisan event:generate