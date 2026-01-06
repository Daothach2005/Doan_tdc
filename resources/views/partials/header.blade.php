<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang Chủ</title>
    <!-- Font Awesome cho icon search -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('css/header.css') }}">

</head>

<body>

    <!-- Top Header Bar -->
    <div class="top-header">
        <div class="container-fluid p-0">
            <div class="top-nav">
                <div class="top-nav-item">
                    <a href="#" class="top-nav-link">TRANG CHỦ TDC</a>
                </div>
                <div class="top-nav-item">
                    <a href="#" class="top-nav-link">TUYỂN SINH</a>
                </div>
                <div class="top-nav-item">
                    <a href="#" class="top-nav-link">LIÊN HỆ</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Main Header -->
    <header class="main-header">
        <div class="container-fluid">
            <div class="header-container">
                <!-- Logo Section -->
                <div class="logo-section">
                    <img src="{{ asset('images/doan-hoi-covien.png') }}" alt="Logo" class="logo-img">
                </div>

                <!-- Mobile Toggle -->
                <button class="mobile-toggle" onclick="toggleMenu()">☰</button>

                <!-- Search Container - Ngoài hamburger -->
                <div class="main-search-container">
                    <i class="fas fa-search main-search-icon"></i>
                    <input type="text" class="main-search-input" placeholder="Tìm kiếm..."
                        aria-label="Tìm kiếm trên trang">
                </div>

                <!-- Navigation Menu -->
                <nav class="nav-menu" id="navMenu">
                    <div class="nav-item">
                        <a href="#" class="nav-link dropdown">GIỚI THIỆU</a>
                        <div class="dropdown-menu">
                            <a href="#" class="dropdown-item">Về trường</a>
                            <a href="#" class="dropdown-item">Lịch sử</a>
                            <a href="#" class="dropdown-item">Tầm nhìn - Sứ mệnh</a>
                            <a href="#" class="dropdown-item">Ban lãnh đạo</a>
                        </div>
                    </div>

                    <div class="nav-item">
                        <a href="#" class="nav-link dropdown">THÔNG BÁO</a>
                        <div class="dropdown-menu">
                            <a href="#" class="dropdown-item">Thông báo chung</a>
                            <a href="#" class="dropdown-item">Thông báo tuyển sinh</a>
                            <a href="#" class="dropdown-item">Lịch thi</a>
                        </div>
                    </div>

                    <div class="nav-item">
                        <a href="#" class="nav-link dropdown">VĂN BẢN</a>
                        <div class="dropdown-menu">
                            <a href="#" class="dropdown-item">Văn bản pháp quy</a>
                            <a href="#" class="dropdown-item">Quy chế</a>
                            <a href="#" class="dropdown-item">Biểu mẫu</a>
                        </div>
                    </div>

                    <div class="nav-item">
                        <a href="#" class="nav-link dropdown">TIN TỨC</a>
                        <div class="dropdown-menu">
                            <a href="#" class="dropdown-item">Tin tức chung</a>
                            <a href="#" class="dropdown-item">Hoạt động sinh viên</a>
                            <a href="#" class="dropdown-item">Sự kiện nổi bật</a>
                            <a href="#" class="dropdown-item">Thành tích</a>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </header>

    <script>
        function toggleMenu() {
            const menu = document.getElementById('navMenu');
            
            if (menu.classList.contains('show')) {
                // Đóng menu
                menu.classList.remove('show');
                // Ẩn menu sau khi animation hoàn thành
                setTimeout(() => {
                    if (!menu.classList.contains('show')) {
                        menu.style.display = 'none';
                    }
                }, 300);
            } else {
                // Mở menu
                menu.style.display = 'flex';
                // Trigger animation sau một frame
                requestAnimationFrame(() => {
                    menu.classList.add('show');
                });
            }
        }

        // Xử lý dropdown click trên mobile
        function toggleDropdown(event) {
            event.preventDefault();
            const navItem = event.target.closest('.nav-item');
            const dropdown = navItem.querySelector('.dropdown-menu');
            
            // Đóng tất cả dropdown khác
            document.querySelectorAll('.nav-item').forEach(item => {
                if (item !== navItem) {
                    item.classList.remove('dropdown-open');
                }
            });
            
            // Toggle dropdown hiện tại
            navItem.classList.toggle('dropdown-open');
        }

        // Khởi tạo event listeners khi DOM loaded
        document.addEventListener('DOMContentLoaded', function() {
            // Thêm click event cho dropdown links trên mobile
            const dropdownLinks = document.querySelectorAll('.nav-link.dropdown');
            dropdownLinks.forEach(link => {
                link.addEventListener('click', toggleDropdown);
            });
        });

        // Đóng menu khi click bên ngoài
        document.addEventListener('click', function(event) {
            const menu = document.getElementById('navMenu');
            const toggle = document.querySelector('.mobile-toggle');
            
            if (!menu.contains(event.target) && !toggle.contains(event.target)) {
                if (menu.classList.contains('show')) {
                    menu.classList.remove('show');
                    setTimeout(() => {
                        if (!menu.classList.contains('show')) {
                            menu.style.display = 'none';
                        }
                    }, 300);
                }
            }
        });
    </script>
</body>

</html>
