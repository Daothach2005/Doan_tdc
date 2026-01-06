<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TRƯỜNG CAO ĐẲNG CÔNG NGHỆ THỦ ĐỨC - TDC</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, Helvetica, sans-serif;
            color: #fff;
            background: #005BAC;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }

        /* Banner Section */
        .banner {
            background: #005BAC;
            padding: 60px 5% 100px;
            position: relative;
            flex: 1;
            display: flex;
            align-items: center;
        }

        .content-wrapper {
            display: flex;
            align-items: center;
            justify-content: space-between;
            max-width: 1300px;
            margin: 0 auto;
            width: 100%;
        }

        .logo-section {
            flex: 0 0 auto;
        }

        .logo {
            width: 320px;
            height: auto;
        }

        .text-section {
            flex: 1;
            padding-left: 80px;
            text-align: left;
        }

        .text-section h2 {
            font-size: 36px;
            margin-bottom: 20px;
            line-height: 1.4;
            font-weight: bold;
        }

        .text-section p {
            font-size: 22px;
            line-height: 1.7;
            max-width: 800px;
            font-style: italic;
            font-weight: 500;
        }

        /* Đường kẻ ngang phân cách */
        .divider {
            width: 100%;
            height: 6px;
            background: linear-gradient(to right, transparent, #1e90ff, #ffd700, #1e90ff, transparent);
            margin: 0 auto;
            box-shadow: 0 2px 10px rgba(30, 144, 255, 0.5);
        }

        .divider-container {
            padding: 40px 0;
            background: #005BAC;
            text-align: center;
        }

        /* Footer */
        .footer {
            background: #007BFF
            padding: 70px 5% 0;
            margin-top: auto;
        }

        .footer-container {
            max-width: 1200px;
            margin: 0 auto;
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            gap: 50px;
            padding-bottom: 80px;
        }

        .footer-column {
            flex: 1;
            min-width: 300px;
        }

        .footer-column h3 {
            font-size: 24px;
            margin-bottom: 25px;
            padding-bottom: 12px;
            border-bottom: 3px solid #1e90ff;
            display: inline-block;
            position: relative;
        }

        .footer-column h3::after {
            content: '';
            position: absolute;
            bottom: -3px;
            left: 0;
            width: 70px;
            height: 3px;
            background: #ffd700;
        }

        .footer-column p,
        .footer-column a {
            color: #e0f0ff;
            line-height: 2;
            font-size: 18px;
            margin-bottom: 12px;
        }

        .footer-column strong {
            font-size: 18px;
        }

        .footer-column a:hover {
            color: #ffd700;
            text-decoration: underline;
        }

        .hotline-item {
            display: flex;
            align-items: center;
            margin-bottom: 20px;
        }

        .hotline-item i {
            color: #ffd700;
            font-size: 24px;
            margin-right: 15px;
            width: 35px;
        }

        .hotline-item>div>div:first-child {
            font-size: 18px;
            margin-bottom: 4px;
        }

        .hotline-text {
            color: #ffd700;
            font-weight: bold;
            font-size: 20px;
        }

        .social-icons {
            margin-top: 35px;
            display: flex;
            gap: 18px;
        }

        .social-icons a {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 55px;
            height: 55px;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 50%;
            color: white;
            font-size: 28px;
            transition: all 0.3s ease;
        }

        .social-icons a:hover {
            background: #1e90ff;
            transform: translateY(-5px);
            box-shadow: 0 5px 15px rgba(30, 144, 255, 0.4);
        }

        /* Phần Copyright mới - dạng ribbon giống ảnh */
        .copyright-ribbon {
            height: 60px;
            background: #007BFF;
            /* Màu xanh dương giống ảnh */
            position: relative;
            display: flex;
            align-items: center;
            overflow: hidden;
            box-shadow: 0 -2px 10px rgba(0, 0, 0, 0.2);
        }

        .copyright-left {
            flex: 1;
            padding-left: 5%;
            font-size: 18px;
            color: white;
            text-align: left;
            white-space: nowrap;
        }

        .copyright-left strong {
            font-size: 20px;
        }

        .copyright-right {
            background: white;
            color: #333;
            padding: 0 5% 0 80px;
            font-size: 16px;
            clip-path: polygon(20% 0, 100% 0, 100% 100%, 0% 100%);
            display: flex;
            align-items: center;
            height: 100%;
            position: absolute;
            right: 0;
            left: 50%;
        }

        /* Responsive */
        @media (max-width: 992px) {
            .content-wrapper {
                flex-direction: column;
                text-align: center;
            }

            .logo-section {
                margin-bottom: 40px;
            }

            .text-section {
                padding-left: 0;
                text-align: center;
            }

            .text-section p {
                margin: 0 auto;
            }
        }

        @media (max-width: 768px) {
            .logo {
                width: 260px;
            }

            .text-section h2 {
                font-size: 28px;
            }

            .text-section p {
                font-size: 18px;
            }

            .banner {
                padding: 40px 5% 80px;
            }

            .divider-container {
                padding: 30px 0;
            }

            .footer {
                padding: 60px 5% 0;
            }

            .footer-container {
                flex-direction: column;
                text-align: center;
                padding-bottom: 100px;
            }

            .footer-column h3::after {
                left: 50%;
                transform: translateX(-50%);
            }

            .copyright-ribbon {
                height: 100px;
                flex-direction: column;
            }

            .copyright-left {
                padding: 15px 5%;
                text-align: center;
                font-size: 16px;
            }

            .copyright-left strong {
                font-size: 18px;
            }

            .copyright-right {
                position: relative;
                left: auto;
                right: auto;
                clip-path: none;
                padding: 15px 5%;
                text-align: center;
                color: #333;
                height: 50px;
            }
        }
    </style>
</head>

<body>

    <!-- Banner Section -->
    <section class="banner">
        <div class="content-wrapper">
            <div class="logo-section">
                <img src="{{ asset('images/logo.png') }}" alt="Logo TDC" class="logo">
            </div>

            <div class="text-section">
                <h2>Sứ mệnh:</h2>
                <p>Đào tạo nguồn nhân lực có đạo đức và năng lực, yêu nghề, sáng tạo, thích ứng với môi trường lao động
                    trong nước và quốc tế, có ý thức học tập suốt đời.</p>

                <h2>Tầm nhìn:</h2>
                <p>Là trường Cao đẳng chất lượng cao có nhiều ngành nghề đạt chuẩn khu vực và quốc tế.</p>
            </div>
        </div>
    </section>

    <!-- Đường kẻ ngang phân cách -->
    <div class="divider-container">
        <div class="divider"></div>
    </div>

    <!-- Footer -->
    <footer class="footer">
        <div class="footer-container">
            <div class="footer-column">
                <h3>Thông Tin Trường</h3>
                <p><strong>Địa chỉ:</strong> 53 Võ Văn Ngân, Phường Linh Chiểu, Thành phố Thủ Đức, TP. Hồ Chí Minh</p>
                <p><strong>Điện thoại:</strong> 028.3896.6825 - 028.3897.0023</p>
                <p><strong>Fax:</strong> 028.3896.2474</p>
                <p><strong>Website:</strong> <a href="https://tdc.edu.vn">www.tdc.edu.vn</a></p>
                <p><strong>Email:</strong> tdc@mail.tdc.edu.vn - tdc@tdc.edu.vn</p>
            </div>

            <div class="footer-column">
                <h3>Hotline Liên Hệ</h3>
                <div class="hotline-item">
                    <i class="fas fa-phone-alt"></i>
                    <div>
                        <div>Phòng Tổ chức - Hành chính</div>
                        <div class="hotline-text">0283.896.6825</div>
                    </div>
                </div>
                <div class="hotline-item">
                    <i class="fas fa-phone-alt"></i>
                    <div>
                        <div>Phòng Tuyển sinh - Đào tạo</div>
                        <div class="hotline-text">0283.897.0023</div>
                    </div>
                </div>
                <div class="hotline-item">
                    <i class="fas fa-phone-alt"></i>
                    <div>
                        <div>Phòng Thanh tra GD - CTSV</div>
                        <div class="hotline-text">0282.215.8640</div>
                    </div>
                </div>
                <div class="hotline-item">
                    <i class="fas fa-phone-alt"></i>
                    <div>
                        <div>Phòng Kế hoạch - Tài chính</div>
                        <div class="hotline-text">0286.282.0044</div>
                    </div>
                </div>

                <div class="social-icons">
                    <a href="#" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" aria-label="YouTube"><i class="fab fa-youtube"></i></a>
                    <a href="#" aria-label="TikTok"><i class="fab fa-tiktok"></i></a>
                </div>
            </div>
        </div>


    </footer>
    <!-- Phần Copyright ribbon giống ảnh -->
    <div class="copyright-ribbon">
        <div class="copyright-left">
            © 2025 <strong>TRƯỜNG CAO ĐẲNG CÔNG NGHỆ THỦ ĐỨC</strong>
        </div>
        <div class="copyright-right d-flex justify-content-center align-items-center">
            Đang truy cập: 5 | Tổng lượt truy cập: 1495
        </div>

    </div>

</body>

</html>
