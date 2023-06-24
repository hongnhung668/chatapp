rr917987@gmail.com / 12345678

- tao project
composer create-project --prefer-dist laravel/laravel chatapp

- cài đặt sanctum xác thực API
composer require laravel/sanctum

- sử dụng sanctum
php artisan vendor:publish --provider="Laravel\Sanctum\SanctumServiceProvider"

- laravel/jetstream cung cấp các tính năng chức năng cho việc xây dựng ứng dụng web như đăng ký, đăng nhập, xác thực hai yếu tố, phục hồi mật khẩu, đăng xuất và quản lý hồ sơ người dùng
composer require laravel/jetstream

- tích hợp Inertia thư viện JavaScript cho phép bạn xây dựng các ứng dụng web đơn trang (SPA) mà không cần phải viết lại mã HTML và CSS cho từng trang. Thay vào đó, Inertia sử dụng các thành phần Vue.js hoặc React để hiển thị nội dung của trang
php artisan jetstream:install inertia

- xuất bản (publish) các file view của gói Jetstream trong Laravel. Khi chạy lệnh này, Laravel sẽ tạo ra các file view của Jetstream trong thư mục resources/views/vendor/jetstream
php artisan vendor:publish --tag=jetstream-views