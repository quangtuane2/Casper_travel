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
<!-- Font thư pháp -->
    <link rel="stylesheet" href="{{ asset('public/frontend/font/stylesheet.css') }}">
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
    <link rel="stylesheet" href="{{ asset('public/frontend/css/hueStyles.css') }}">
  </head>

  <body>
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
        <a href="./index.html" class="navbar-brand p-0 logo">
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
          <a href="./login.html" class="btn btn-primary rounded-pill py-2 px-4"
            >Đăng Kí</a
          >
        </div>
      </nav>

      <div class="container-fluid bg-primary py-5 mb-5 hero-header">
        <div class="container py-5">
          <div class="row justify-content-center py-5">
            <div class="col-lg-10 pt-lg-5 mt-lg-5 text-center">
              <h1 class="display-3 text-white mb-3 animated slideInDown location">
                KINH THÀNH HUẾ 
              </h1>
              <p class="fs-4 text-white mb-4 animated slideInDown Main_caption">
                QUẦN THỂ DI TÍCH GIỮA LÒNG CỐ ĐÔ
              </p>
              <p class=" text-white mb-4 animated slideInDown caption">
                Monsterial complex in the middle of the ancient capital
              </p>
              <!-- <div class="position-relative w-75 mx-auto animated slideInDown">
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
                </button> -->
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
          <div
            class="col-lg-6 wow fadeInUp"
            data-wow-delay="0.1s"
            style="min-height: 400px"
          >
            <div class="position-relative h-100">
              <img
                class="img-fluid position-absolute w-100 h-100"
                src="{{ asset('public/frontend/img/chua-thien-mu-o-hue-6.webp') }}"
                alt=""
                style="object-fit: cover"
              />
            </div>
          </div>
          <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s" id="about">
            <h2 class="section-title bg-white text-start text-primary pe-3">
              Chùa Thiên Mụ
            </h2>
            <h1 class="mb-4 description">
              Chùa Thiên Mụ là một điểm check-in không thể bỏ qua khi ghé thăm mảnh đất cố đô này. 
                Nào hãy cùng chúng tôi khám phá điều hấp dẫn và thú vị trong ngôi chùa thiêng liêng 400 năm tuổi này nhé!
            </h1>
            <p class="mb-4">
              Chùa Thiên Mụ là một điểm đến lý tưởng cho du khách muốn khám phá văn hóa và lịch sử của Huế.
                 Nơi đây mang đến cho du khách một cảm giác thanh bình và yên tĩnh, giúp du khách tìm hiểu về văn hóa Phật giáo và những giá trị truyền thống của Việt Nam.
              <p class="mb-4">
            </p>
            <p class="mb-4">
              Chùa Thiên Mụ, còn được gọi là chùa Linh Mụ, là một ngôi chùa cổ kính và nổi tiếng ở Huế, Việt Nam.
                 Nằm trên sườn núi Ngự Bình, bên dòng sông Hương thơ mộng, chùa Thiên Mụ là một trong những biểu tượng văn hóa của cố đô Huế, thu hút du khách trong và ngoài nước.
              
            </p>
            <div class="row gy-2 gx-4 mb-4">
              <div class="col-sm-6">
                <p class="mb-0">
                  <i class="fa fa-arrow-right text-primary me-2"></i>Người lớn: 250.000 VNĐ/ người
                </p>
              </div>
              <div class="col-sm-6">
                <p class="mb-0">
                  <i class="fa fa-arrow-right text-primary me-2"></i>Trẻ em dưới 6 tuổi: Miễn Phí
                </p>
              </div>
              <div class="col-sm-6">
                <p class="mb-0">
                  <i class="fa fa-arrow-right text-primary me-2"></i>Chụp ảnh lấy ngay
                </p>
              </div>
              <div class="col-sm-6">
                <p class="mb-0">
                  <i class="fa fa-arrow-right text-primary me-2"></i>Trải nghiệm cổ phục
                </p>
              </div>
              <div class="col-sm-6">
                <p class="mb-0">
                  <i class="fa fa-arrow-right text-primary me-2"></i>Khám phá vẻ
                  đẹp hoang sơ
                </p>
              </div>
              <div class="col-sm-6">
                <p class="mb-0">
                  <i class="fa fa-arrow-right text-primary me-2"></i>Trải nghiệm cưỡi voi, cưỡi ngựa
                </p>
              </div>
            </div>
            <div class="col-sm-12">
              <p class="mb-0">
                <i class="fa fa-arrow-right text-primary me-2"></i>Địa điểm này ở trong <a href="/#">Gói Du lịch số 1</a>, 
                <a href="/#">Gói du lịch số 2</a>,
                <a href="/#"> Gói du lịch số 3</a>
              </p>
            </div>
              <div class="col-sm-9">
                <a class="btn btn-primary py-3 px-5 mt-2" href="">GÓI 1</a>
                <a class="btn btn-primary py-3 px-5 mt-2" href="">GÓI 2</a>
                <a class="btn btn-primary py-3 px-5 mt-2" href="">GÓI 3</a>
              </div>
            </div>       
          </div>
        </div>
      </div>
    </div>
    <!-- About End -->

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
            <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>0905 970 546</p>
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
                href="https://www.facebook.com/q.tuann05.vn"
                >Quang Tuấn</a
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
