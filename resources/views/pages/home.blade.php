@extends('layouts.app')

@section('title', 'Trang chủ')

@section('content')

    <head>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
        <link rel="stylesheet" href="{{ asset('css/home.css') }}">
    </head>
    <!-- Carousel -->
    <div id="demo" class="carousel slide" data-bs-ride="carousel" data-bs-interval="4000" data-bs-pause="hover">

        <!-- Indicators/dots -->
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active" aria-current="true"
                aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#demo" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#demo" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>

        <!-- The slideshow/carousel -->
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{ asset('images/TDC1.png') }}" alt="TDC Image 1" class="d-block" style="width:100%">
            </div>
            <div class="carousel-item">
                <img src="{{ asset('images/tdc2.jpg') }}" alt="TDC Image 2" class="d-block" style="width:100%">
            </div>
            <div class="carousel-item">
                <img src="{{ asset('images/tdc3.png') }}" alt="TDC Image 3" class="d-block" style="width:100%">
            </div>
        </div>

        <!-- Left and right controls/icons -->
        <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <!-- News Section -->
    <div class="container-fluid news-section py-5">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="news-header d-flex justify-content-between align-items-center mb-4">
                        <h2 class="news-title">Tin tức - Sự kiện</h2>
                        <a href="#" class="view-more-link">Xem thêm <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>

            <div class="row">
                <!-- Main News Article -->
                <div class="col-lg-6 mb-4">
                    <div class="main-news-card">
                        <div class="news-image-container">
                            <img src="{{ asset('images/tdc2.jpg') }}" alt="TDC News" class="img-fluid news-main-image">
                        </div>
                        <div class="news-content p-4">
                            <span class="news-date">
                                <i class="far fa-calendar-alt"></i> 06/01/2026
                            </span>
                            <h3 class="news-main-title">CÔNG TRÌNH PHÂN VIỆC TẠI PHƯỚC HẢI TRONG KHUÔN KHỔ CHIẾN DỊCH XUÂN
                                TÌNH NGUYỆN 2026</h3>
                            <span class="news-tag hot-tag">HOT</span>
                            <p class="news-excerpt">
                                Trong khuôn khổ Chiến dịch Xuân tình nguyện 2026 tại Mặt trận xã Phước Hải, các
                                chiến sĩ Trường Cao đẳng Công nghệ Thủ Đức đã phối hợp cùng địa phương triển
                                khai lắp đặt hệ thống camera an ninh, góp phần hỗ trợ công tác đảm bảo an ninh
                                trật tự trên địa bàn.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Side News Articles -->
                <div class="col-lg-6">
                    <div class="side-news-list">
                        <!-- News Item 1 -->
                        <div class="side-news-item d-flex mb-3">
                            <div class="side-news-image">
                                <img src="{{ asset('images/tdc2.jpg') }}" alt="TDC" class="img-fluid">
                            </div>
                            <div class="side-news-content">
                                <h4 class="side-news-title">XUÂN TÌNH NGUYỆN 2026 | THƯỚC PHIM LỊCH SỬ - NGỌN LỬA TU HÀO
                                </h4>
                                <span class="news-date">
                                    <i class="far fa-calendar-alt"></i> 06/01/2026
                                </span>
                            </div>
                        </div>
                        <!-- News Item 1 -->
                        <div class="side-news-item d-flex mb-3">
                            <div class="side-news-image">
                                <img src="{{ asset('images/tdc2.jpg') }}" alt="TDC" class="img-fluid">
                            </div>
                            <div class="side-news-content">
                                <h4 class="side-news-title">XUÂN TÌNH NGUYỆN 2026 | THƯỚC PHIM LỊCH SỬ - NGỌN LỬA TU HÀO
                                </h4>
                                <span class="news-date">
                                    <i class="far fa-calendar-alt"></i> 06/01/2026
                                </span>
                            </div>
                        </div>

                        <!-- News Item 1 -->
                        <div class="side-news-item d-flex mb-3">
                            <div class="side-news-image">
                                <img src="{{ asset('images/tdc2.jpg') }}" alt="TDC" class="img-fluid">
                            </div>
                            <div class="side-news-content">
                                <h4 class="side-news-title">XUÂN TÌNH NGUYỆN 2026 | THƯỚC PHIM LỊCH SỬ - NGỌN LỬA TU HÀO
                                </h4>
                                <span class="news-date">
                                    <i class="far fa-calendar-alt"></i> 06/01/2026
                                </span>
                            </div>
                        </div>

                        <!-- News Item 1 -->
                        <div class="side-news-item d-flex mb-3">
                            <div class="side-news-image">
                                <img src="{{ asset('images/tdc2.jpg') }}" alt="TDC" class="img-fluid">
                            </div>
                            <div class="side-news-content">
                                <h4 class="side-news-title">XUÂN TÌNH NGUYỆN 2026 | THƯỚC PHIM LỊCH SỬ - NGỌN LỬA TU HÀO
                                </h4>
                                <span class="news-date">
                                    <i class="far fa-calendar-alt"></i> 06/01/2026
                                </span>
                            </div>
                        </div>
                                           
                    </div>
                </div>
            </div>
            
            <!-- Mobile View More Button - Only visible on mobile -->
            <div class="row d-lg-none">
                <div class="col-12">
                    <div class="text-center mt-4 mobile-view-more">
                        <a href="#" class="view-more-link-mobile">Xem thêm <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Q&A Section -->
    <div class="container-fluid qa-section py-5">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center mb-5">
                    <h2 class="qa-title">HỎI CHỮ THẮP ĐỒ</h2>
                </div>
            </div>

            <!-- Q&A Carousel -->
            <div id="qaCarousel" class="carousel slide qa-carousel" data-bs-ride="carousel" data-bs-interval="4000">
                <!-- Indicators -->
                <div class="carousel-indicators qa-indicators">
                    <button type="button" data-bs-target="#qaCarousel" data-bs-slide-to="0" class="active"></button>
                    <button type="button" data-bs-target="#qaCarousel" data-bs-slide-to="1"></button>
                </div>

                <!-- Carousel Inner - Thêm chiều cao cố định -->
                <div class="carousel-inner">
                    <!-- Slide 1 -->
                    <div class="carousel-item active">
                        <div class="row justify-content-center g-4"> <!-- g-4 để có khoảng cách đẹp -->
                            <!-- Card 1 -->
                            <div class="col-lg-4 col-md-6">
                                <div class="qa-card h-100 shadow-sm">
                                    <div class="qa-image-container position-relative overflow-hidden">
                                        <img src="{{ asset('images/tdc2.jpg') }}" alt="Hoạt động 1" class="qa-bg-image">
                                    </div>
                                    <div class="qa-content p-3">
                                        <div class="qa-date-badge">
                                            <span class="qa-day">27</span>
                                            <span class="qa-month">Tháng 11</span>
                                        </div>
                                        <h4 class="qa-card-title mt-3">VẬN ĐỘNG QUYÊN GÓP HỖ TRỢ ĐỒI BỊU NƯỚC ANH THƯ</h4>
                                        <span class="qa-tag hot-tag">HOT</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Slide 2: Tương tự, áp dụng cho các card còn lại -->
                    <div class="carousel-item">
                        <div class="row justify-content-center g-4">
                            <!-- Card 1 -->
                            <div class="col-lg-4 col-md-6">
                                <div class="qa-card h-100 shadow-sm">
                                    <div class="qa-image-container position-relative overflow-hidden">
                                        <img src="{{ asset('images/tdc2.jpg') }}" alt="Hoạt động 1" class="qa-bg-image">
                                    </div>
                                    <div class="qa-content p-3">
                                        <div class="qa-date-badge">
                                            <span class="qa-day">27</span>
                                            <span class="qa-month">Tháng 11</span>
                                        </div>
                                        <h4 class="qa-card-title mt-3">VẬN ĐỘNG QUYÊN GÓP HỖ TRỢ ĐỒI BỊU NƯỚC ANH THƯ</h4>
                                        <span class="qa-tag hot-tag">HOT</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Controls -->
                <button class="carousel-control-prev qa-control-prev" type="button" data-bs-target="#qaCarousel"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon"></span>
                </button>
                <button class="carousel-control-next qa-control-next" type="button" data-bs-target="#qaCarousel"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon"></span>
                </button>
            </div>
        </div>
    </div>

    <!-- Bootstrap 5 JS Bundle (đã bao gồm Popper) - QUAN TRỌNG: Phải đặt cuối body -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
@endsection
