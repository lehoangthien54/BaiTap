<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('assets/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assetsfontawesome/css/all.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/layoutsite.css')}}">
    <script src="{{ asset('assets/jquery/jquery-3.7.1.min.js')}}"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia">

    @yield('header')
</head>
<body>
  <header class="section_header bg-light py-2 fixed-top"">
    <div class="container">
        <div class="row">
            <div class="col-md-2">
                <a href="index.html">
                    <img src="assets/images/logo.webp" class="img-fluid" alt="">
                </a>
            </div>
            <div class="col-md-8 ">
                <ul class="nav">
                    <li class="nav-item">
                      <a class="nav-link active" aria-current="page" href="home">Trang chủ</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link text-black" href="#">Về chúng tôi</a>
                    </li>
                    <div class="dropdown">
                        <a class="btn dropdown-toggle" href="san-pham" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                          Sản phẩm
                        </a>
                        <ul class="dropdown-menu font-monospace">
                          <li><a class="dropdown-item" href="san-pham">Áo</a></li>
                          <li><a class="dropdown-item" href="#">Quần</a></li>
                          <li><a class="dropdown-item" href="#">Giày & Phụ kiện</a></li>
                          <li><a class="dropdown-item" href="#">Collection</a></li>
                          <li><a class="dropdown-item" href="#">Best Saler</a></li>
                        </ul>
                    </div>
                    <li class="nav-item">
                      <a class="nav-link text-yellow" href="#">Sale</a>
                    </li>
                    <div class="dropdown">
                        <button class="btn dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                         Tin tức
                        </button>
                        <ul class="dropdown-menu">
                          <li><a class="dropdown-item" href="#">hot</a></li>
                          <li><a class="dropdown-item" href="#">mới</a></li>
                          <li><a class="dropdown-item" href="#">quan tâm</a></li>
                        </ul>
                    </div>
                    <div class="dropdown">
                        <button class="btn dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                         Khách hàng
                        </button>
                        <ul class="dropdown-menu">
                          <li><a class="dropdown-item" href="#">Đăng nhập<a></li>
                          <li><a class="dropdown-item" href="#">Đăng xuất</a></li>
                          <li><a class="dropdown-item" href="#">Đăng kí tài khoản</a></li>
                        </ul>
                    </div>
                    <li class="nav-item">
                        <a class="nav-link text-black" href="lien-he">Liên hệ</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link text-black" href="#">Cửa hàng</a>
                      </li>
                  </ul>
            </div>
            <div class="col-md-2">
                <ul class="nav pt-3">
                    <li class="nav-item px-2 position-relative">
                        <i class="fa-solid fa-magnifying-glass"></i>
                    </li>
                    <li class="nav-item px-2 position-relative">
                        <i class="fa-regular fa-user"></i>
                    </li>
                    <li class="nav-item px-2 position-relative">
                        <i class="fa-regular fa-heart"></i>
                            <span class="position-absolute top-0 start-90 translate-middle badge rounded-pill bg-danger">
                              +3
                              <span class="visually-hidden">unread messages</span>
                            </span>
                    </li>
                    <li class="nav-item px-2 position-relative">
                        <i class="fa-regular fa-bell"></i>
                        <span class="position-absolute top-0 start-90 translate-middle badge rounded-pill bg-danger">
                            +3
                            <span class="visually-hidden">unread messages</span>
                        </span>
                    </li>
                    <li class="nav-item px-2 position-relative">
                        <i class="fa-brands fa-shopify"></i>
                        <span class="position-absolute top-0 start-90 translate-middle badge rounded-pill bg-danger">
                            +0
                            <span class="visually-hidden">unread messages</span>
                        </span>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</header>


<main>
    @yield('content')
</main>



    <footer class="section_footer bg-dark text-white pt-4">
      <div class="row footer">
        <div class="col-md-4 footerInfo">
          <h4>THÔNG TIN</h4>
          <p>Chúng tôi luôn trân trọng và mong đợi nhận được mọi ý kiến đóng góp từ khách hàng để có thể nâng cấp trải nghiệm dịch vụ và sản phẩm tốt hơn nữa.</p>
          <ul class="list-unstyled justify-content-end">
            <li><i class="fa-brands fa-facebook"></i>
              Lê Hoàng Thiện
            </li>
            <li><i class="fa-brands fa-instagram"></i>
              thienle
            </li>
            <li><i class="fa-brands fa-youtube"></i>
              Thien Vlog
            </li>
            <li><i class="fa-brands fa-github"></i>
              Thiện VIP
            </li>
          </ul>
        </div>
        <div class="col-md-4 footerInfo">
          <h4>CHÍNH SÁCH</h4>
          <ul>
            <li><a href="#">Chính sách thành viên</a></li>
            <li><a href="#">Chính sách vận chuyển</a></li>
            <li><a href="#">Chăm sóc khách hàng</a></li>
            <li><a href="#">Phương thức thanh toán</a></li>
            <li><a href="#">Chính sách đổi trả / bảo hành</a></li>
          </ul>
        </div>
        <div class="col-md-4 footerInfo">
          <h4>Liên Hệ</h4>
          <p id="address">123 Street, District 1, ABC city</p>
          <p id="phone">Phone: 123456789</p>
          <p id="email">Email: contactinfo@gmail.com</p>
        </div>
      </div>
      <hr class="m-0 p-0">
      <div class="col-12 text-center">
        <p>Bản quyền thuộc về Thiện Lê</p>
      </div>	
   
  </body>
    </footer>
    <script src="{{asset('assets/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('assets/js/layoutsite.js')}}"></script>

    @yield('footer')
</body>
</html>