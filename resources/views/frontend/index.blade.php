<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <title>Casper Travel</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta content="" name="keywords" />
    <meta content="" name="description" />

    <!-- Favicon -->
    <link href="{{ asset('public/frontend/img/logo.png') }}" rel="icon" />

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&display=swap"
      rel="stylesheet"
    />

    <!-- Montserrats -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap"
      rel="stylesheet"
    />

    <!-- Icon Font Stylesheet -->
    <link
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css"
      rel="stylesheet"
    />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css"
      rel="stylesheet"
    />

    <!-- Libraries Stylesheet -->
    <link href="{{ asset('public/frontend/lib/animate/animate.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('public/frontend/lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet" />
    <link
      href="{{ asset('public/frontend/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css') }}"
      rel="stylesheet"
    />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('public/frontend/css/bootstrap.min.css') }}" rel="stylesheet" />

    <!-- Template Stylesheet -->
    <link href="{{ asset('public/frontend/css/style.css') }}" rel="stylesheet" />
  </head>

  <body>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
  <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <!-- loader -->
    <div class="loader"></div>
    <!-- Topbar Start -->
    <div class="container-fluid bg-dark px-5 d-none d-lg-block">
      <div class="row gx-0">
        <div class="col-lg-8 text-center text-lg-start mb-2 mb-lg-0">
          <div class="d-inline-flex align-items-center" style="height: 45px">
            <small class="me-3 text-light"
              ><i class="fa fa-map-marker-alt me-2"></i>470 Trần Đại Nghĩa, Quận
              Ngũ Hành Sơn, T.P Đà Nẵng, Việt Nam</small
            >
            <small class="me-3 text-light"
              ><i class="fa fa-phone-alt me-2"></i>0905 970 546</small
            >
            <small class="text-light"
              ><i class="fa fa-envelope-open me-2"></i
              >tuantq.23it@vku.udn.vn</small
            >
          </div>
        </div>
        <div class="col-lg-4 text-center text-lg-end">
          <div class="d-inline-flex align-items-center" style="height: 45px">
            <a
              class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2"
              href=""
              ><i class="fab fa-twitter fw-normal"></i
            ></a>
            <a
              class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2"
              href=""
              ><i class="fab fa-facebook-f fw-normal"></i
            ></a>
            <a
              class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2"
              href=""
              ><i class="fab fa-linkedin-in fw-normal"></i
            ></a>
            <a
              class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2"
              href=""
              ><i class="fab fa-instagram fw-normal"></i
            ></a>
            <a
              class="btn btn-sm btn-outline-light btn-sm-square rounded-circle"
              href=""
              ><i class="fab fa-youtube fw-normal"></i
            ></a>
          </div>
        </div>
      </div>
    </div>
    <!-- Topbar End -->

    <!-- Navbar & Hero Start -->
    <div class="container-fluid position-relative p-0">
      <nav
        class="navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-3 py-lg-0"
      >
        <a href="" class="navbar-brand p-0 logo">
          <img src="{{ asset('public/frontend/img/logo.png') }}" alt="Logo" />
        </a>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarCollapse"
        >
          <span class="fa fa-bars"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
          <div class="navbar-nav ms-auto py-0">
            <a href="index.html" class="nav-item nav-link active">Trang chủ</a>
            <a href="#about" class="nav-item nav-link">Về chúng tôi</a>
            <a href="#service" class="nav-item nav-link">Dịch vụ</a>
            <a href="#destination" class="nav-item nav-link">Điểm đến</a>
            <div class="nav-item dropdown">
              <a
                href="#"
                class="nav-link dropdown-toggle"
                data-bs-toggle="dropdown"
                >Thêm</a
              >
              <div class="dropdown-menu m-0">
                <a href="#destination" class="dropdown-item">Điểm đến</a>
                <a href="#booking" class="dropdown-item">Đặt vé</a>
                <a href="#travel_guides" class="dropdown-item"
                  >Đội ngũ hướng dẫn viên</a
                >
              </div>
            </div>
            <a href="#contact" class="nav-item nav-link">Liên hệ</a>
          </div>
          <a href="./login_register/index.html" class="btn btn-primary rounded-pill py-2 px-4"
            >Đăng nhập</a
          >
        </div>
      </nav>

      <div class="container-fluid bg-primary py-5 mb-5 hero-header">
        <div class="container py-5">
          <div class="row justify-content-center py-5">
            <div class="col-lg-10 pt-lg-5 mt-lg-5 text-center">
              <h1 class="display-3 text-white mb-3 animated slideInDown">
                HÃY KHÁM PHÁ VỚI CHÚNG TÔI
              </h1>
              <p class="fs-4 text-white mb-4 animated slideInDown">
                tất cả sự tươi đẹp đang chờ đón các bạn
              </p>
              <div class="position-relative w-75 mx-auto animated slideInDown">
                <input
                  class="form-control border-0 rounded-pill w-100 py-3 ps-4 pe-5"
                  type="text"
                  placeholder="Vi Du: Thua Thien Hue"
                />
                <button
                  type="button"
                  class="btn btn-primary rounded-pill py-2 px-4 position-absolute top-0 end-0 me-2"
                  style="margin-top: 7px"
                >
                  Search
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Navbar & Hero End -->

    <!-- About Start -->
    <div class="container-xxl py-5 about">
      <div class="container">
        <div class="row g-5">
          <!-- <div
            class="col-lg-5 wow fadeInUp"
            data-wow-delay="0.1s"
            style="min-height: 400px"
          >
            <div class="position-relative h-100">
              <img
                class="img-fluid position-absolute w-100 h-100"
                src="./img/dulich.jfif"
                alt=""
                style="object-fit: cover"
              />
            </div>
          </div> -->
          <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s" id="about">
            <h2 class="section-title bg-white text-start text-primary pe-3">
              Về chúng tôi
            </h2>
            <h1 class="mb-4">
              Chào mừng đến với <span class="text-primary">Casper Travel</span>
            </h1>
            <p class="mb-4">
              Chúng tôi hân hạnh được mang đến cho các bạn những trải nghiệm độc
              đáo đến từ khắp mọi miền tổ quốc.
            </p>
            <p class="mb-4">
              Với quan điểm
              <span class="desc">Trải nghiệm của du khách là hàng đầu</span>
              chúng tôi nguyện cống hiến hết mình, phục vụ chuyên nghiệp, tận
              tâm, vì trải nghiệm của chính khách hàng.
            </p>
            <div class="row gy-2 gx-4 mb-4">
              <div class="col-sm-6">
                <p class="mb-0">
                  <i class="fa fa-arrow-right text-primary me-2"></i>Dịch vụ
                  hàng đầu
                </p>
              </div>
              <div class="col-sm-6">
                <p class="mb-0">
                  <i class="fa fa-arrow-right text-primary me-2"></i>Tùy ý chọn
                  chỗ ở
                </p>
              </div>
              <div class="col-sm-6">
                <p class="mb-0">
                  <i class="fa fa-arrow-right text-primary me-2"></i>Hòa mình
                  vào thiên nhiên
                </p>
              </div>
              <div class="col-sm-6">
                <p class="mb-0">
                  <i class="fa fa-arrow-right text-primary me-2"></i>Kết nối với
                  văn hóa địa phương
                </p>
              </div>
              <div class="col-sm-6">
                <p class="mb-0">
                  <i class="fa fa-arrow-right text-primary me-2"></i>Khám phá vẻ
                  đẹp tự nhiên
                </p>
              </div>
              <div class="col-sm-6">
                <p class="mb-0">
                  <i class="fa fa-arrow-right text-primary me-2"></i>Phương tiện
                  luôn sẵn sàng
                </p>
              </div>
            </div>
            <a class="btn btn-primary py-3 px-5 mt-2" href="">Tìm Hiểu Thêm</a>
          </div>
          <div
            class="col-lg-5 wow fadeInUp"
            data-wow-delay="0.1s"
            style="min-height: 400px"
          >
            <div class="position-relative h-100">
              <img
                class="img-fluid position-absolute w-100 h-100"
                src="{{ asset('public/frontend/img/dulich.jfif') }}"
                alt=""
                style="object-fit: cover"
              />
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- About End -->

    <!-- Service Start -->
    <div class="container-xxl py-5">
      <div class="container">
        <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
          <h2
            class="section-title bg-white text-center text-primary px-3"
            id="service"
          >
            DỊCH VỤ
          </h2>
          <h3 class="mb-5">DỊCH VỤ ĐƯỢC CUNG CẤP</h3>
        </div>
        <div class="row g-4 service">
          <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
            <div class="service-item rounded pt-3">
              <div class="p-4">
                <i class="fa fa-3x fa-globe text-primary mb-4"></i>
                <h2>Hỗ trợ ở khắp mọi nơi</h2>
                <p>
                  Chúng tôi luôn sẵn sàng hồ trợ khi du khách cần từ những điều
                  nhỏ nhặt nhất đến những ngoài lề khác.
                </p>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
            <div class="service-item rounded pt-3">
              <div class="p-4">
                <i class="fa fa-3x fa-hotel text-primary mb-4"></i>
                <h2>Khách sạn hàng đầu</h2>
                <p>
                  Chúng tôi lựa chọn những khách sạn có chất lượng hàng đầu phù
                  hợp với yêu cầu của quý khách.
                </p>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">
            <div class="service-item rounded pt-3">
              <div class="p-4">
                <i class="fa fa-3x fa-user text-primary mb-4"></i>
                <h2>Hướng dẫn viên du lịch</h2>
                <p>
                  Chúng tôi có một đội ngũ hướng dẫn viên giàu kiến thức, kinh
                  nghiệm và trải nghiệm để phục vụ du khách
                </p>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.7s">
            <div class="service-item rounded pt-3">
              <div class="p-4">
                <i class="fa fa-3x fa-cog text-primary mb-4"></i>
                <h2>Trải nghiệm hàng đầu</h2>
                <p>
                  Chúng tôi chọn những trải nghiệm tích cực, bên cạnh đó là
                  những trải nghiệm từ yêu cầu của du khách
                </p>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
            <div class="service-item rounded pt-3">
              <div class="p-4">
                <i class="fa fa-3x fa-globe text-primary mb-4"></i>
                <h2>Du lịch văn hóa, xã hội</h2>
                <p>
                  Tham quan các di tích lịch sử, bảo tàng, lễ hội truyền thống,
                  và các chương trình biểu diễn nghệ thuật địa phương
                </p>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
            <div class="service-item rounded pt-3">
              <div class="p-4">
                <i class="fa fa-3x fa-hotel text-primary mb-4"></i>
                <h2>Du lịch nghỉ dưỡng</h2>
                <p>
                  Nghỉ tại các resort biển, khu nghỉ dưỡng suối khoáng nóng,
                  spa, và tham gia các hoạt động giải trí như golf, bơi lội, và
                  yoga
                </p>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">
            <div class="service-item rounded pt-3">
              <div class="p-4">
                <i class="fa fa-3x fa-user text-primary mb-4"></i>
                <h2>Du lịch sinh thái trải nghiệm</h2>
                <p>
                  Tham quan các khu bảo tồn thiên nhiên, công viên quốc gia,
                  tham gia các hoạt động như trekking và camping.
                </p>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.7s">
            <div class="service-item rounded pt-3">
              <div class="p-4">
                <i class="fa fa-3x fa-cog text-primary mb-4"></i>
                <h2>Du lịch mạo hiểm lí thú</h2>
                <p>
                  Du lịch mạo hiểm dành cho người yêu thích thử thách và cảm
                  giác mạnh, liên quan đến các hoạt động ngoài trời
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Service End -->

    <!-- Destination Start -->
    <div class="container-xxl py-5 destination" id="destination">
      <div class="container">
        <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
          <h2 class="section-title bg-white text-center text-primary px-3">
            Điểm Đến
          </h2>
          <h3 class="mb-5">ĐIỂM ĐẾN PHỔ BIẾN</h3>
        </div>
        <div class="row g-3">
          <div class="col-lg-7 col-md-6">
            <div class="row g-3">
              <div class="col-lg-12 col-md-12 wow zoomIn" data-wow-delay="0.1s">
                <a
                  class="position-relative d-block overflow-hidden"
                  href="{{url('/')}}"
                >
                  <img
                    class="img-fluid"
                    src="{{ asset('public/frontend/img/lang_tu_duc_hue-03.jpg') }}"
                    alt=""
                  />
                  <div
                    class="bg-white text-danger fw-bold position-absolute top-0 start-0 m-3 py-1 px-2"
                  >
                    30% OFF
                  </div>
                  <div
                    class="bg-white text-primary fw-bold position-absolute bottom-0 end-0 m-3 py-1 px-2"
                  >
                    Lăng Tự Đức
                  </div>
                </a>
              </div>
              <div class="col-lg-6 col-md-12 wow zoomIn" data-wow-delay="0.3s">
                <a
                  class="position-relative d-block overflow-hidden"
                  href="./hue.html"
                >
                  <img
                    class="img-fluid"
                    src="{{ asset('public/frontend/img/hue-4912504_640.jpg') }}"
                    alt=""
                  />
                  <div
                    class="bg-white text-danger fw-bold position-absolute top-0 start-0 m-3 py-1 px-2"
                  >
                    25% OFF
                  </div>
                  <div
                    class="bg-white text-primary fw-bold position-absolute bottom-0 end-0 m-3 py-1 px-2"
                  >
                    Đại Nội - Huế
                  </div>
                </a>
              </div>
              <div class="col-lg-6 col-md-12 wow zoomIn" data-wow-delay="0.5s">
                <a
                  class="position-relative d-block overflow-hidden"
                  href="./ThienVienTrucLam.html"
                >
                  <img
                    class="img-fluid"
                    src="{{ asset('public/frontend/img/thienvientruclam.jpg') }}"
                    alt=""
                  />
                  <div
                    class="bg-white text-danger fw-bold position-absolute top-0 start-0 m-3 py-1 px-2"
                  >
                    35% OFF
                  </div>
                  <div
                    class="bg-white text-primary fw-bold position-absolute bottom-0 end-0 m-3 py-1 px-2"
                  >
                    Thiền Viện Trúc Lâm
                  </div>
                </a>
              </div>
            </div>
          </div>
          <div
            class="col-lg-5 col-md-6 wow zoomIn"
            data-wow-delay="0.7s"
            style="min-height: 350px"
          >
            <a class="position-relative d-block h-100 overflow-hidden" href="">
              <img
                class="img-fluid position-absolute w-100 h-100"
                src="{{ asset('public/frontend/img/chua-thien-mu-o-hue-6.webp') }}"
                alt=""
                style="object-fit: cover"
              />
              <div
                class="bg-white text-danger fw-bold position-absolute top-0 start-0 m-3 py-1 px-2"
              >
                20% OFF
              </div>
              <div
                class="bg-white text-primary fw-bold position-absolute bottom-0 end-0 m-3 py-1 px-2"
              >
                Chùa Thiên Mụ
              </div>
            </a>
          </div>
        </div>
      </div>
    </div>
    <!-- Destination Start -->

    <!-- Package Start -->
    <div class="container-xxl py-5">
      <div class="container">
        <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
          <h2 class="section-title bg-white text-center text-primary px-3">
            Gói dịch vụ
          </h2>
          <h3 class="mb-5">MỘT SỐ GÓI CƠ BẢN</h3>
        </div>
        <div class="row g-4 justify-content-center">
          <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
            <div class="package-item">
              <div class="overflow-hidden">
                <img class="img-fluid" src="{{ asset('public/frontend/img/package-1.jpg') }}" alt="" />
              </div>
              <div class="d-flex border-bottom">
                <small class="flex-fill text-center border-end py-2"
                  ><i class="fa fa-map-marker-alt text-primary me-2"></i>GÓI
                  1</small
                >
                <small class="flex-fill text-center border-end py-2"
                  ><i class="fa fa-calendar-alt text-primary me-2"></i>3
                  ngày</small
                >
                <small class="flex-fill text-center py-2"
                  ><i class="fa fa-user text-primary me-2"></i>2 người</small
                >
              </div>
              <div class="text-center p-4">
                <h3 class="mb-0">4.000.000 VNĐ</h3>
                <div class="mb-3">
                  <small class="fa fa-star text-primary"></small>
                  <small class="fa fa-star text-primary"></small>
                  <small class="fa fa-star text-primary"></small>
                  <small class="fa fa-star text-primary"></small>
                  <small class="fa fa-star text-primary"></small>
                </div>
                <p>Du lịch khắp đà nẵng với nhiều địa điểm vui chơi giải trí</p>
                <div class="d-flex justify-content-center mb-2">
                  <a
                    href="./combo1.html"
                    class="btn btn-sm btn-primary px-3 border-end"
                    style="border-radius: 30px 0 0 30px"
                    >Tìm hiểu thêm</a
                  >
                  <a
                    href="./booking.html"
                    class="btn btn-sm btn-primary px-3"
                    style="border-radius: 0 30px 30px 0"
                    >Đặt vé ngay ...</a
                  >
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
            <div class="package-item">
              <div class="overflow-hidden">
                <img class="img-fluid" src="{{ asset('public/frontend/img/package-2.jpg') }}" alt="" />
              </div>
              <div class="d-flex border-bottom">
                <small class="flex-fill text-center border-end py-2"
                  ><i class="fa fa-map-marker-alt text-primary me-2"></i
                  >Huế</small
                >
                <small class="flex-fill text-center border-end py-2"
                  ><i class="fa fa-calendar-alt text-primary me-2"></i>3
                  ngày</small
                >
                <small class="flex-fill text-center py-2"
                  ><i class="fa fa-user text-primary me-2"></i>2 người</small
                >
              </div>
              <div class="text-center p-4">
                <h3 class="mb-0">3.000.000 VNĐ</h3>
                <div class="mb-3">
                  <small class="fa fa-star text-primary"></small>
                  <small class="fa fa-star text-primary"></small>
                  <small class="fa fa-star text-primary"></small>
                  <small class="fa fa-star text-primary"></small>
                  <small class="fa fa-star text-primary"></small>
                </div>
                <p>
                  Trải nghiệm các di tích lịch sử văn hóa, làng nghề truyền
                  thống, vui chơi giải trí
                </p>
                <div class="d-flex justify-content-center mb-2">
                  <a
                    href="./combo1.html"
                    class="btn btn-sm btn-primary px-3 border-end"
                    style="border-radius: 30px 0 0 30px"
                    >Tìm hiểu thêm</a
                  >
                  <a
                    href="./booking.html"
                    class="btn btn-sm btn-primary px-3"
                    style="border-radius: 0 30px 30px 0"
                    >Đặt vé ngay ...</a
                  >
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
            <div class="package-item">
              <div class="overflow-hidden">
                <img class="img-fluid" src="{{ asset('public/frontend/img/phuquoc.jpg') }}" alt="" />
              </div>
              <div class="d-flex border-bottom">
                <small class="flex-fill text-center border-end py-2"
                  ><i class="fa fa-map-marker-alt text-primary me-2"></i>Phú
                  Quốc</small
                >
                <small class="flex-fill text-center border-end py-2"
                  ><i class="fa fa-calendar-alt text-primary me-2"></i>3
                  ngày</small
                >
                <small class="flex-fill text-center py-2"
                  ><i class="fa fa-user text-primary me-2"></i>2 Người</small
                >
              </div>
              <div class="text-center p-4">
                <h3 class="mb-0">7.000.000 VNĐ</h3>
                <div class="mb-3">
                  <small class="fa fa-star text-primary"></small>
                  <small class="fa fa-star text-primary"></small>
                  <small class="fa fa-star text-primary"></small>
                  <small class="fa fa-star text-primary"></small>
                  <small class="fa fa-star text-primary"></small>
                </div>
                <p>
                  Trải nghiệm du lịch nghỉ dưỡng, kết hợp vui chơi giải trí với
                  mức giá vừa phải.
                </p>
                <div class="d-flex justify-content-center mb-2">
                  <a
                    href="./combo1.html"
                    class="btn btn-sm btn-primary px-3 border-end"
                    style="border-radius: 30px 0 0 30px"
                    >Tìm hiểu thêm</a
                  >
                  <a
                    href="./booking.html"
                    class="btn btn-sm btn-primary px-3"
                    style="border-radius: 0 30px 30px 0"
                    >Đặt vé ngay ...</a
                  >
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Package End -->

    <!-- Booking Start -->
    <div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
      <div class="container">
        <div class="booking p-5" id="booking">
          <div class="row g-5 align-items-center">
            <div class="col-md-6 text-white">
              <h2 class="text-white text-uppercase">ĐẶT VÉ</h2>
              <h3 class="text-white mb-4">ĐẶT VÉ TRỰC TUYẾN</h3>
              <p class="mb-4">
                Đặt vé ngay hôm nay để có những ưu đãi tốt nhất, dịch vụ hàng
                đầu cho chuyến nghỉ dưỡng của bản thân và gia đình.
              </p>
              <p class="mb-4">
                Chúng tôi luôn sẵn sàng hỗ trợ các bạn, tư vấn nhiệt tình, phù
                hợp với tất cả mọi người. Với quan điểm
                <span class="desc">Trải nghiệm của du khách là hàng đầu</span>
                chúng tôi nguyện cống hiến hết mình, phục vụ chuyên nghiệp, tận
                tâm, vì trải nghiệm của chính khách hàng.
              </p>
              <a class="btn btn-outline-light py-3 px-5 mt-2" href=""
                >Tìm Hiểu Thêm</a
              >
            </div>
            <div class="col-md-6" id="booking">
              <h1 class="text-white mb-4">Đặt chuyến ngay</h1>
              <form>
                <div class="row g-3">
                  <div class="col-md-6">
                    <div class="form-floating">
                      <input
                        type="text"
                        class="form-control bg-transparent"
                        id="name"
                        placeholder="Your Name"
                      />
                      <label for="name">Nguyễn Văn Thái Bảo</label>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-floating">
                      <input
                        type="email"
                        class="form-control bg-transparent"
                        id="email"
                        placeholder="Your Email"
                      />
                      <label for="email">tuantq.23it@vku.udn.vn</label>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div
                      class="form-floating date"
                      id="date3"
                      data-target-input="nearest"
                    >
                      <input
                        type="text"
                        class="form-control bg-transparent datetimepicker-input"
                        id="datetime"
                        placeholder="Date & Time"
                        data-target="#date3"
                        data-toggle="datetimepicker"
                      />
                      <label for="datetime">Thời gian</label>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-floating">
                      <select class="form-select bg-transparent" id="select1">
                        <option value="1">Đà Nẵng</option>
                        <option value="2">Huế</option>
                        <option value="3">Phú Quốc</option>
                        <option value="3">Tự chọn</option>
                      </select>
                      <label for="select1">Địa Điểm</label>
                    </div>
                  </div>
                  <div class="col-12">
                    <div class="form-floating">
                      <textarea
                        class="form-control bg-transparent"
                        placeholder="Special Request"
                        id="message"
                        style="height: 100px"
                      ></textarea>
                      <label for="message">Yêu cầu</label>
                    </div>
                  </div>
                  <div class="col-12">
                    <a href="./booking.html">
                      <button
                        class="btn btn-outline-light w-100 py-3"
                        type="submit"
                      >
                        <a href="./booking.html">Đặt vé ngay</a>
                      </button>
                    </a>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Booking Start -->

    <!-- Process Start -->
    <div class="container-xxl py-5">
      <div class="container">
        <div class="text-center pb-4 wow fadeInUp" data-wow-delay="0.1s">
          <h2 class="section-title bg-white text-center text-primary px-3">
            Quá trình đặt vé
          </h2>
          <h3 class="mb-5">Qua 3 bước đơn giản</h3>
        </div>
        <div class="row gy-5 gx-4 justify-content-center">
          <div
            class="col-lg-4 col-sm-6 text-center pt-4 wow fadeInUp"
            data-wow-delay="0.1s"
          >
            <div class="position-relative border border-primary pt-5 pb-4 px-4">
              <div
                class="d-inline-flex align-items-center justify-content-center bg-primary rounded-circle position-absolute top-0 start-50 translate-middle shadow"
                style="width: 100px; height: 100px"
              >
                <i class="fa fa-globe fa-3x text-white"></i>
              </div>
              <h2 class="mt-4">Chọn điểm đến</h2>
              <hr class="w-25 mx-auto bg-primary mb-1" />
              <hr class="w-50 mx-auto bg-primary mt-0" />
              <p class="mb-0">
                Chọn điểm đến mà bạn yêu thích hoặc yêu cầu lịch trình tự chọn
              </p>
            </div>
          </div>
          <div
            class="col-lg-4 col-sm-6 text-center pt-4 wow fadeInUp"
            data-wow-delay="0.3s"
          >
            <div class="position-relative border border-primary pt-5 pb-4 px-4">
              <div
                class="d-inline-flex align-items-center justify-content-center bg-primary rounded-circle position-absolute top-0 start-50 translate-middle shadow"
                style="width: 100px; height: 100px"
              >
                <i class="fa fa-dollar-sign fa-3x text-white"></i>
              </div>
              <h2 class="mt-4">Thanh toán</h2>
              <hr class="w-25 mx-auto bg-primary mb-1" />
              <hr class="w-50 mx-auto bg-primary mt-0" />
              <p class="mb-0">
                Trực tuyến một phần hoặc tất cả sau đó sẽ thanh toán đầy đủ
              </p>
            </div>
          </div>
          <div
            class="col-lg-4 col-sm-6 text-center pt-4 wow fadeInUp"
            data-wow-delay="0.5s"
          >
            <div class="position-relative border border-primary pt-5 pb-4 px-4">
              <div
                class="d-inline-flex align-items-center justify-content-center bg-primary rounded-circle position-absolute top-0 start-50 translate-middle shadow"
                style="width: 100px; height: 100px"
              >
                <i class="fa fa-plane fa-3x text-white"></i>
              </div>
              <h2 class="mt-4">Ngày khởi hành</h2>
              <hr class="w-25 mx-auto bg-primary mb-1" />
              <hr class="w-50 mx-auto bg-primary mt-0" />
              <p class="mb-0">
                Tự chọn thời gian xuất phát, địa điểm xuất phát
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Process Start -->

    <!-- Team Start -->
    <div class="container-xxl py-5" id="travel_guides">
      <div class="container">
        <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
          <h2 class="section-title bg-white text-center text-primary px-3">
            Đội ngũ hướng dẫn viên
          </h2>
          <h3 class="mb-5">
            chúng tôi có đội ngũ hướng dẫn viên dày dặn kinh nghiệm
          </h3>
        </div>
        <div class="row g-4">
          <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
            <div class="team-item">
              <div class="overflow-hidden">
                <img
                  class="img-fluid"
                  src="{{ asset('public/frontend/img/nguyen van thai bao.jpg') }}"
                  alt=""
                />
              </div>
              <div
                class="position-relative d-flex justify-content-center"
                style="margin-top: -19px"
              >
                <a
                  class="btn btn-square mx-1"
                  href="https://www.facebook.com/vanthaibao.nguyen.295"
                  target="_blank"
                  ><i class="fab fa-facebook-f"></i
                ></a>
                <a class="btn btn-square mx-1" href=""
                  ><i class="fab fa-twitter"></i
                ></a>
                <a class="btn btn-square mx-1" href=""
                  ><i class="fab fa-instagram"></i
                ></a>
              </div>
              <div class="text-center p-4">
                <h2 class="mb-0">Nguyễn Văn Thái Bảo</h2>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
            <div class="team-item">
              <div class="overflow-hidden">
                <img class="img-fluid" src="{{ asset('public/frontend/img/thuan.jpg') }}" alt="" />
              </div>
              <div
                class="position-relative d-flex justify-content-center"
                style="margin-top: -19px"
              >
                <a class="btn btn-square mx-1" href=""
                  ><i class="fab fa-facebook-f"></i
                ></a>
                <a class="btn btn-square mx-1" href=""
                  ><i class="fab fa-twitter"></i
                ></a>
                <a class="btn btn-square mx-1" href=""
                  ><i class="fab fa-instagram"></i
                ></a>
              </div>
              <div class="text-center p-4">
                <h2 class="mb-0">Lê Văn Minh Thuận</h2>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
            <div class="team-item">
              <div class="overflow-hidden">
                <img class="img-fluid" src="{{ asset('public/frontend/img/tuan.jpg') }}" alt="" />
              </div>
              <div
                class="position-relative d-flex justify-content-center"
                style="margin-top: -19px"
              >
                <a class="btn btn-square mx-1" href=""
                  ><i class="fab fa-facebook-f"></i
                ></a>
                <a class="btn btn-square mx-1" href=""
                  ><i class="fab fa-twitter"></i
                ></a>
                <a class="btn btn-square mx-1" href=""
                  ><i class="fab fa-instagram"></i
                ></a>
              </div>
              <div class="text-center p-4">
                <h2 class="mb-0">Trần Quang Tuấn</h2>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
            <div class="team-item">
              <div class="overflow-hidden">
                <img class="img-fluid" src="{{ asset('public/frontend/img/lac.jpg') }}" alt="" />
              </div>
              <div
                class="position-relative d-flex justify-content-center"
                style="margin-top: -19px"
              >
                <a class="btn btn-square mx-1" href=""
                  ><i class="fab fa-facebook-f"></i
                ></a>
                <a class="btn btn-square mx-1" href=""
                  ><i class="fab fa-twitter"></i
                ></a>
                <a class="btn btn-square mx-1" href=""
                  ><i class="fab fa-instagram"></i
                ></a>
              </div>
              <div class="text-center p-4">
                <h2 class="mb-0">Đào Văn Nhật Hưng</h2>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Team End -->

    <!-- Testimonial Start -->
    <div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
      <div class="container">
        <div class="text-center">
          <h2 class="section-title bg-white text-center text-primary px-3">
            Phản hồi
          </h2>
          <h3 class="mb-5">Phản hồi từ khách hàng</h3>
        </div>
        <div class="owl-carousel testimonial-carousel position-relative">
          <div class="testimonial-item bg-white text-center border p-4">
            <img
              class="bg-white rounded-circle shadow p-1 mx-auto mb-3"
              src="{{ asset('public/frontend/img/anhkhachang.jpg') }}"
              style="width: 80px; height: 80px"
            />
            <h2 class="mb-0">Anh Minh, Chị Vy</h2>
            <p>Huế, Việt Nam</p>
            <p class="mb-0">
              Chúng tôi rất hài lòng về dịch vụ du lịch ở đây, hướng dẫn viên
              rất có kinh nghiệm và kiến thức!
            </p>
          </div>
          <div class="testimonial-item bg-white text-center border p-4">
            <img
              class="bg-white rounded-circle shadow p-1 mx-auto mb-3"
              src="{{ asset('public/frontend/img/thuan.jpg') }}"
              style="width: 80px; height: 80px"
            />
            <h2 class="mb-0">Minh Thuận</h2>
            <p>Huế, Việt Nam</p>
            <p class="mt-2 mb-0">
              Chúng tôi rất hài lòng về dịch vụ du lịch ở đây, hướng dẫn viên
              rất có kinh nghiệm và kiến thức!
            </p>
          </div>
          <div class="testimonial-item bg-white text-center border p-4">
            <img
              class="bg-white rounded-circle shadow p-1 mx-auto mb-3"
              src="{{ asset('public/frontend/img/tuan.jpg') }}"
              style="width: 80px; height: 80px"
            />
            <h2 class="mb-0">Quang Tuấn</h2>
            <p>Quảng Nam, Việt Nam</p>
            <p class="mt-2 mb-0">
              Chúng tôi rất hài lòng về dịch vụ du lịch ở đây, hướng dẫn viên
              rất có kinh nghiệm và kiến thức!
            </p>
          </div>
          <div class="testimonial-item bg-white text-center border p-4">
            <img
              class="bg-white rounded-circle shadow p-1 mx-auto mb-3"
              src="{{ asset('public/frontend/img/lac.jpg') }}"
              style="width: 80px; height: 80px"
            />
            <h2 class="mb-0">Nhật Hưng</h2>
            <p>Quảng Trị, Việt Nam</p>
            <p class="mt-2 mb-0">
              Chúng tôi rất hài lòng về dịch vụ du lịch ở đây, hướng dẫn viên
              rất có kinh nghiệm và kiến thức!
            </p>
          </div>
          <div class="testimonial-item bg-white text-center border p-4">
            <img
              class="bg-white rounded-circle shadow p-1 mx-auto mb-3"
              src="{{ asset('public/frontend/img/lac.jpg') }}"
              style="width: 80px; height: 80px"
            />
            <h2 class="mb-0">Nhật Hưng</h2>
            <p>Quảng Trị, Việt Nam</p>
            <p class="mt-2 mb-0">
              Chúng tôi rất hài lòng về dịch vụ du lịch ở đây, hướng dẫn viên
              rất có kinh nghiệm và kiến thức!
            </p>
          </div>
          <div class="testimonial-item bg-white text-center border p-4">
            <img
              class="bg-white rounded-circle shadow p-1 mx-auto mb-3"
              src="{{ asset('public/frontend/img/lac.jpg') }}"
              style="width: 80px; height: 80px"
            />
            <h2 class="mb-0">Nhật Hưng</h2>
            <p>Quảng Trị, Việt Nam</p>
            <p class="mt-2 mb-0">
              Chúng tôi rất hài lòng về dịch vụ du lịch ở đây, hướng dẫn viên
              rất có kinh nghiệm và kiến thức!
            </p>
          </div>
        </div>
      </div>
    </div>
    <!-- Testimonial End -->

    <!-- Footer Start -->
    <div
      class="container-fluid bg-dark text-light footer pt-5 mt-5 wow fadeIn"
      id="contact"
      data-wow-delay="0.1s"
    >
      <div class="container py-5">
        <div class="row g-5">
          <div class="col-lg-3 col-md-6">
            <h4 class="text-white mb-3">Company</h4>
            <a class="btn btn-link" href="">About Us</a>
            <a class="btn btn-link" href="">Contact Us</a>
            <a class="btn btn-link" href="">Privacy Policy</a>
            <a class="btn btn-link" href="">Terms & Condition</a>
            <a class="btn btn-link" href="">FAQs & Help</a>
          </div>
          <div class="col-lg-3 col-md-6">
            <h4 class="text-white mb-3">Contact</h4>
            <p class="mb-2">
              <i class="fa fa-map-marker-alt me-3"></i>470 Trần Đại Nghĩa, Quận
              Ngũ Hành Sơn, T.P Đà Nẵng, Việt Nam
            </p>
            <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>0976 781 028</p>
            <p class="mb-2">
              <i class="fa fa-envelope me-3"></i>tuantq.23it@vku.udn.vn
            </p>
            <div class="d-flex pt-2">
              <a class="btn btn-outline-light btn-social" href=""
                ><i class="fab fa-twitter"></i
              ></a>
              <a class="btn btn-outline-light btn-social" href=""
                ><i class="fab fa-facebook-f"></i
              ></a>
              <a class="btn btn-outline-light btn-social" href=""
                ><i class="fab fa-youtube"></i
              ></a>
              <a class="btn btn-outline-light btn-social" href=""
                ><i class="fab fa-linkedin-in"></i
              ></a>
            </div>
          </div>
          <div class="col-lg-3 col-md-6">
            <h4 class="text-white mb-3">Gallery</h4>
            <div class="row g-2 pt-2">
              <div class="col-4">
                <img
                  class="img-fluid bg-light p-1"
                  src="{{ asset('public/frontend/img/package-1.jpg') }}"
                  alt=""
                />
              </div>
              <div class="col-4">
                <img
                  class="img-fluid bg-light p-1"
                  src="{{ asset('public/frontend/img/package-2.jpg') }}"
                  alt=""
                />
              </div>
              <div class="col-4">
                <img
                  class="img-fluid bg-light p-1"
                  src="{{ asset('public/frontend/img/package-3.jpg') }}"
                  alt=""
                />
              </div>
              <div class="col-4">
                <img
                  class="img-fluid bg-light p-1"
                  src="{{ asset('public/frontend/img/package-2.jpg') }}"
                  alt=""
                />
              </div>
              <div class="col-4">
                <img
                  class="img-fluid bg-light p-1"
                  src="{{ asset('public/frontend/img/package-3.jpg') }}"
                  alt=""
                />
              </div>
              <div class="col-4">
                <img
                  class="img-fluid bg-light p-1"
                  src="{{ asset('public/frontend/img/package-1.jpg') }}"
                  alt=""
                />
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6">
            <h4 class="text-white mb-3">Newsletter</h4>
            <p>Chúng tôi hân hạnh được phục vụ quý khách!</p>
            <div class="position-relative mx-auto" style="max-width: 400px">
              <input
                class="form-control border-primary w-100 py-3 ps-4 pe-5"
                type="text"
                placeholder="Your email"
                style="border-radius: 8px"
              />
              <button
                type="button"
                class="btn btn-primary py-2 position-absolute top-0 end-0 mt-2 me-2"
              >
                <a href="login.html" style="color: #fff">SignUp</a>
              </button>
            </div>
          </div>
        </div>
      </div>
      <div class="container">
        <div class="copyright">
          <div class="row">
            <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
              &copy; <a class="border-bottom" href="#">Casper Travel</a>, All
              Right Reserved. Designed By
              <a
                class="border-bottom"
                href="https://www.facebook.com/vanthaibao.nguyen.295"
                >Thai Bao</a
              >
            </div>
            <div class="col-md-6 text-center text-md-end">
              <div class="footer-menu">
                <a href="">Home</a>
                <a href="">Cookies</a>
                <a href="">Help</a>
                <a href="">FQAs</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Footer End -->

    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"
      ><i class="bi bi-arrow-up"></i
    ></a>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('public/frontend/lib/wow/wow.min.js') }}"></script>
    <script src="{{ asset('public/frontend/lib/easing/easing.min.js') }}"></script>
    <script src="{{ asset('public/frontend/lib/waypoints/waypoints.min.js') }}"></script>
    <script src="{{ asset('public/frontend/lib/owlcarousel/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('public/frontend/lib/tempusdominus/js/moment.min.js') }}"></script>
    <script src="{{ asset('public/frontend/lib/tempusdominus/js/moment-timezone.min.js') }}"></script>
    <script src="{{ asset('public/frontend/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js') }}"></script>

    <!-- Template Javascript -->
    <script src="{{ asset('public/frontend/js/main.js') }}"></script>

    <!-- Javascript loader -->
    <script>
      window.addEventListener("load", () => {
        const loader = document.querySelector(".loader");

        loader.classList.add("loader--hidden");

        loader.addEventListener("transitionend", () => {
          document.body.removeChild(document.querySelector(".loader"));
        });
      });
    </script>

    <!-- Swiper JS -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script> -->

    <!-- Initialize Swiper -->
    <script>
      var swiper = new Swiper(".mySwiper", {
        spaceBetween: 30,
        centeredSlides: true,
        autoplay: {
          delay: 2500,
          disableOnInteraction: false,
        },
      });
    </script>
  </body>
</html>
