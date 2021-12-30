<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Pong Bootstrap</title>
  <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>/assets/css/bootstrap.min.css">

  <link rel="icon" href="<?php base_url() ?>/img/p.png">


</head>
<style>
  * {
    font-family: "Noto Sans Lao";
  }

  body {
    margin: 0;
    padding: 0;

  }

  .nav {

    transition: all .5s ease-in-out;
  }

  .scroll {
    background-color: transparent;
    background-color: rgba(0, 0, 0, 0.692);
  }

  .nav a {
    margin-right: 20px;
    color: #5459eb !important;
    font-weight: bold;
    border-bottom: 2px solid transparent;
  }

  .nav a:hover {
    border-bottom: 2px solid #1bdef7;

  }

  .active a {
    border-bottom: 2px solid #1bdef7;

  }


  @media (max-width: 990px) {
    .navbar {
      background-color: rgba(0, 0, 0, 0.692);
    }

    .portfolio-hover-content {
      display: none;
    }
  }



  .masthead {
    background-image:
      url("<?php base_url() ?>/img/header-bg.jpg");
    background-size: cover;
    overflow: hidden;
    position: relative;


  }

  .wb {
    margin-top: 150px;
    display: block;
  }

  .divider-custom {
    display: flex;
    align-self: center;


  }

  .divider-custom-icon {
    margin-left: 5px;
    margin-right: 5px;
  }

  .divider-custom-line {
    border-bottom: 5px solid white;
    border-radius: 5px;
    width: 100px;
    height: 5px;

  }

  .fa-stack {
    color: #1bdef7;
  }

  .portfolio-hover i {
    text-align: center;
    position: absolute;
    margin-left: 12rem;
    margin-top: 7rem;
    visibility: hidden;

  }

  .portfolio-item:hover i {
    color: #3309eb;
    visibility: visible;
  }

  .img-hover:hover {
    opacity: 0.4;
  }
</style>

<body>

  <nav class="nav navbar navbar-expand-lg navbar-dark fixed-top bg-color" id="nav">
    <div class="container">
      <a class="navbar-brand" href="#page-top"><img src="<?php base_url() ?>/img/p.png" width="35px" height="35px" /></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        Menu
        <i class="fas fa-bars ms-1"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav text-uppercase ms-auto py-4 py-lg-0">
          <li class="nav-item "><a class="nav-link" href="#home">ໜ້າຫຼັກ</a></li>
          <li class="nav-item"><a class="nav-link" href="#services">ບໍລິການ</a></li>
          <li class="nav-item"><a class="nav-link" href="#portfolio">ຜົນງານ</a></li>
          <li class="nav-item"><a class="nav-link" href="#contact">ຕິດຕໍໍ່ງານ</a></li>
          <li class="nav-item"><a class="nav-link" href="#about">ກ່ຽວກັບເຮົາ</a></li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Masthead-->
  <section class="page-section" id="home">
    <header class="masthead text-white text-center " style="height: 600px;">
      <div class="container d-flex align-items-center flex-column wb">
        <!-- Masthead Avatar Image-->
        <img class="masthead-avatar mb-4 d-sm-block" src="<?php base_url() ?>/img/man.png" width="20%" height="20%" />
        <!-- Masthead Heading-->
        <h1 class="masthead-heading text-uppercase mb-0  d-sm-block">Pong Bootstrap</h1>
        <!-- Icon Divider-->
        <div class="divider-custom divider-light ">
          <div class="divider-custom-line my-2"></div>
          <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
          <div class="divider-custom-line my-2"></div>
        </div>
        <!-- Masthead Subheading-->
        <p class="masthead-subheading font-weight-light mb-0  d-sm-block">Graphic Artist - Web Designer - Illustrator</p>
      </div>
    </header>
  </section>



  <!-- Services-->
  <section class="page-section" id="services" >
    <div class="container py-4">
      <div class="text-center">
        <h2 class="section-heading fs-1">ການບໍລິການ</h2>
        <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
      </div>
      <div class="row text-center">
        <div class="col-md-4">
          <span class="fa-stack fa-4x">
            <i class="fas fa-circle fa-stack-2x text-primary"></i>
            <i class="fas fa-shopping-cart fa-stack-1x fa-inverse"></i>
          </span>
          <h4 class="my-3">ອີ-ຄອມເມີຊ</h4>
          <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedit.</p>
        </div>
        <div class="col-md-4">
          <span class="fa-stack fa-4x">
            <i class="fas fa-circle fa-stack-2x text-primary"></i>
            <i class="fas fa-laptop fa-stack-1x fa-inverse"></i>
          </span>
          <h4 class="my-3">ການອອກແບບເວັບ</h4>
          <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedit.</p>
        </div>
        <div class="col-md-4">
          <span class="fa-stack fa-4x">
            <i class="fas fa-circle fa-stack-2x text-primary"></i>
            <i class="fas fa-lock fa-stack-1x fa-inverse"></i>
          </span>
          <h4 class="my-3">ຄວາມປອດໄພເວັບ</h4>
          <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedit.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Portfolio Grid-->
  <section class="page-section bg-light" id="portfolio" >
    <div class="container py-4">
      <div class="text-center">
        <h2 class="section-heading fs-1">ຜົນງານ</h2>
        <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
      </div>
      <div class="row my-5">
        <div class="col-lg-4 col-sm-6 mb-4">
          <!-- Portfolio item 1-->
          <div class="portfolio-item">
            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal1">
              <div class="portfolio-hover">
                <div class="portfolio-hover-content "><i class="fas fa-plus fa-3x "></i></div>
              </div>
              <img class="img-fluid img-hover" src="https://github.com/StartBootstrap/startbootstrap-agency/blob/master/dist/assets/img/portfolio/1.jpg?raw=true" alt="..." />
            </a>
            <div class="portfolio-caption rounded-bottom bg-white border border-2 text-center border-top-0">
              <div class="portfolio-caption-heading">Threads</div>
              <div class="portfolio-caption-subheading text-muted">Illustration</div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-sm-6 mb-4">
          <!-- Portfolio item 2-->
          <div class="portfolio-item">
            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal2">
              <div class="portfolio-hover">
                <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
              </div>
              <img class="img-fluid img-hover" src="https://github.com/StartBootstrap/startbootstrap-agency/blob/master/dist/assets/img/portfolio/2.jpg?raw=true" alt="..." />
            </a>
            <div class="portfolio-caption rounded-bottom bg-white border border-2 text-center border-top-0">
              <div class="portfolio-caption-heading">Explore</div>
              <div class="portfolio-caption-subheading text-muted">Graphic Design</div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-sm-6 mb-4">
          <!-- Portfolio item 3-->
          <div class="portfolio-item">
            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal3">
              <div class="portfolio-hover">
                <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
              </div>
              <img class="img-fluid img-hover" src="https://github.com/StartBootstrap/startbootstrap-agency/blob/master/dist/assets/img/portfolio/3.jpg?raw=true" alt="..." />
            </a>
            <div class="portfolio-caption rounded-bottom bg-white border border-2 text-center border-top-0">
              <div class="portfolio-caption-heading">Finish</div>
              <div class="portfolio-caption-subheading text-muted">Identity</div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-sm-6 mb-4 mb-lg-0">
          <!-- Portfolio item 4-->
          <div class="portfolio-item">
            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal4">
              <div class="portfolio-hover">
                <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
              </div>
              <img class="img-fluid img-hover" src="https://github.com/StartBootstrap/startbootstrap-agency/blob/master/dist/assets/img/portfolio/4.jpg?raw=true" alt="..." />
            </a>
            <div class="portfolio-caption rounded-bottom bg-white border border-2 text-center border-top-0">
              <div class="portfolio-caption-heading">Lines</div>
              <div class="portfolio-caption-subheading text-muted">Branding</div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-sm-6 mb-4 mb-sm-0">
          <!-- Portfolio item 5-->
          <div class="portfolio-item">
            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal5">
              <div class="portfolio-hover">
                <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
              </div>
              <img class="img-fluid img-hover" src="https://github.com/StartBootstrap/startbootstrap-agency/blob/master/dist/assets/img/portfolio/5.jpg?raw=true" alt="..." />
            </a>
            <div class="portfolio-caption rounded-bottom bg-white border border-2 text-center border-top-0">
              <div class="portfolio-caption-heading">Southwest</div>
              <div class="portfolio-caption-subheading text-muted">Website Design</div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-sm-6">
          <!-- Portfolio item 6-->
          <div class="portfolio-item">
            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal6">
              <div class="portfolio-hover">
                <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
              </div>
              <img class="img-fluid img-hover" src="https://github.com/StartBootstrap/startbootstrap-agency/blob/master/dist/assets/img/portfolio/6.jpg?raw=true" alt="..." />
            </a>
            <div class="portfolio-caption rounded-bottom bg-white border border-2 text-center border-top-0">
              <div class="portfolio-caption-heading">Window</div>
              <div class="portfolio-caption-subheading text-muted">Photography</div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Contact-->
  <section class="page-section " id="contact">
    <div class="container my-2">
      <div class="text-center py-2">
        <h2 class="section-heading fs-1">ຕິດຕໍ່ເຮົາ</h2>
        <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
      </div>
      <form id="contactForm">
        <div class="row align-items-stretch mb-5">
          <div class="col-md-6">
            <div class="form-group">
              <!-- Name input-->
              <label for="name">ຊື່:</label>
              <input class="form-control" id="name" type="text" placeholder="Your Name *" />

            </div>
            <div class="form-group">
              <!-- Email address input-->
              <label for="mail">ອີເມວ:</label>
              <input class="form-control" id="email" type="email" placeholder="Your Email *" />
            </div>
            <div class="form-group mb-md-0">
              <!-- Phone number input-->
              <label for="phone">ເບີໂທ:</label>
              <input class="form-control" id="phone" type="tel" placeholder="Your Phone *" />
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group form-group-textarea mb-md-0">
              <!-- Message input-->
              <label for="message">ຂໍ້ຄວາມ:</label>
              <textarea class="form-control" id="message" placeholder="Your Message *"></textarea>
            </div>
          </div>
        </div>
        <div class="text-center"><button class="btn btn-primary btn-xl text-uppercase " id="submitButton" type="submit">ສົ່ງຂໍ້ຄວາມ</button></div>
      </form>
    </div>
  </section>

  <section class="page-section text-white mb-0" id="about" style="background-color: rgba(0, 46, 254, 0.83);height: 600px;">
            <div class="container py-4">
                <!-- About Section Heading-->
                <h2 class="page-section-heading text-center text-white fs-1">ກ່ຽວກັບ</h2>
                <!-- Icon Divider-->
                <div class="divider-custom divider-light  d-flex justify-content-center">
                    <div class="divider-custom-line my-2"></div>
                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                    <div class="divider-custom-line my-2"></div>
                </div>
                <!-- About Section Content-->
                <div class="row">
                    <div class="col-lg-4 ms-auto"><p class="lead">ເປັນຫົວຂໍ້ bootstrap ຟຣີທີ່ສ້າງຂຶ້ນໂດຍ Pong Keosithong. Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas, eius. Lorem ipsum dolor sit amet.</p></div>
                    <div class="col-lg-4 me-auto"><p class="lead">ການໃຊ້ codeigniter ກັບ bootstrap . Lorem, ipsum dolor sit amet consectetur adipisicing elit. Saepe, minima.</p></div>
                </div>
                <!-- About Section Button-->
                <div class="text-center mt-4">
                    <a class="btn btn-xl btn-outline-light" href="https://github.com/Pong-kst/codeigniter-bootstrap.git">
                        <i class="fas fa-download me-2"></i>
                        ເບິ່ງໂຄ້ດໄດ້ທີ່ນີ້!
                    </a>
                </div>
            </div>
            <hr style="border: 1px solid red;">
            <div class="container text-center my-5">
                <div class="row">
                    <!-- Footer Location-->
                    <div class="col-lg-4 mb-5 mb-lg-0">
                        <h4 class=" mb-4">ສະຖານທີ່</h4>
                        <p class="lead mb-0 fw-light">
                            0092 ປ໋ອງ ແກ້ວສີທອງ
                            <br />
                            ມະຫາວິທະຍາໄລແຫ່ງຊາດ
                        </p>
                    </div>
                    <!-- Footer Social Icons-->
                    <div class="col-lg-4 mb-5 mb-lg-0">
                        <h4 class=" mb-4">ຕິດຕາມຜົນງານ</h4>
                        <a class="btn btn-outline-light btn-social mx-1" href="#!"><i class="fab fa-fw fa-facebook-f"></i></a>
                        <a class="btn btn-outline-light btn-social mx-1" href="#!"><i class="fab fa-fw fa-twitter"></i></a>
                        <a class="btn btn-outline-light btn-social mx-1" href="#!"><i class="fab fa-fw fa-linkedin-in"></i></a>
                        <a class="btn btn-outline-light btn-social mx-1" href="#!"><i class="fab fa-fw fa-dribbble"></i></a>
                    </div>
                    <!-- Footer About Text-->
                    <div class="col-lg-4">
                        <h4 class="text-uppercase mb-4">ກ່ຽວກັບ Pongbootstrap</h4>
                        <p class="lead mb-0 fw-light">
                            Pong Boostrap ແມ່ນບໍ່ເສຍຄ່າ , Lorem ipsum dolor sit, amet consectetur adipisicing elit. Porro, ut!
                            
                        </p>
                    </div>
                </div>
            </div>
        </section>
  <!-- Copyright Section-->
  <footer class="copyright py-4 text-center text-white "style="background-color: rgba(0, 0, 0, 0.692);">
    <div class="container" ><small>Copyright &copy; Pong Keosithong 2021</small></div>
  </footer>



  <!-- Portfolio Modals-->
  <!-- Portfolio item 1 -->
  <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="close-modal text-end fs-2 m-2" data-bs-dismiss="modal"><i class="fas fa-times"></i></div>
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-8">
              <div class="modal-body text-center">
                <!-- Project details-->
                <h2 class="text-uppercase">ຊື່ໂຄງການ</h2>
                <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                <img class="img-fluid d-block mx-auto" src="https://github.com/StartBootstrap/startbootstrap-agency/blob/master/dist/assets/img/portfolio/1.jpg?raw=true" alt="..." />
                <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                <ul class="list-inline">
                  <li>
                    <strong>ລູກຄ້າ:</strong>
                    Threads
                  </li>
                  <li>
                    <strong>ປະເພດ:</strong>
                    Illustration
                  </li>
                </ul>
                <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                  <i class="fas fa-times me-1"></i>
                  ປິດ
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Portfolio item 2 -->
  <div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="close-modal text-end fs-2 m-2" data-bs-dismiss="modal"><i class="fas fa-times"></i></div>
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-8">
              <div class="modal-body text-center">
                <!-- Project details-->
                <h2 class="text-uppercase">ຊື່ໂຄງການ</h2>
                <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                <img class="img-fluid d-block mx-auto" src="https://github.com/StartBootstrap/startbootstrap-agency/blob/master/dist/assets/img/portfolio/2.jpg?raw=true" alt="..." />
                <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                <ul class="list-inline">
                  <li>
                    <strong>ລູກຄ້າ:</strong>
                    Explore
                  </li>
                  <li>
                    <strong>ປະເພດ:</strong>
                    Graphic Design
                  </li>
                </ul>
                <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                  <i class="fas fa-times me-1"></i>
                  ປິດ
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Portfolio item 3 -->
  <div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="close-modal text-end fs-2 m-2" data-bs-dismiss="modal"><i class="fas fa-times"></i></div>
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-8">
              <div class="modal-body text-center">
                <!-- Project details-->
                <h2 class="text-uppercase">ຊື່ໂຄງການ</h2>
                <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                <img class="img-fluid d-block mx-auto" src="https://github.com/StartBootstrap/startbootstrap-agency/blob/master/dist/assets/img/portfolio/3.jpg?raw=true" alt="..." />
                <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                <ul class="list-inline">
                  <li>
                    <strong>ລູກຄ້າ:</strong>
                    Finish
                  </li>
                  <li>
                    <strong>ປະເພດ:</strong>
                    Identity
                  </li>
                </ul>
                <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                  <i class="fas fa-times me-1"></i>
                  ປິດ
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Portfolio item 4 -->
  <div class="portfolio-modal modal fade" id="portfolioModal4" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="close-modal text-end fs-2 m-2" data-bs-dismiss="modal"><i class="fas fa-times"></i></div>
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-8">
              <div class="modal-body text-center">
                <!-- Project details-->
                <h2 class="text-uppercase">ຊື່ໂຄງການ</h2>
                <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                <img class="img-fluid d-block mx-auto" src="https://github.com/StartBootstrap/startbootstrap-agency/blob/master/dist/assets/img/portfolio/4.jpg?raw=true" alt="..." />
                <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                <ul class="list-inline">
                  <li>
                    <strong>ລູກຄ້າ:</strong>
                    Lines
                  </li>
                  <li>
                    <strong>ປະເພດ:</strong>
                    Branding
                  </li>
                </ul>
                <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                  <i class="fas fa-times me-1"></i>
                  ປິດ
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Portfolio item 5 -->
  <div class="portfolio-modal modal fade" id="portfolioModal5" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="close-modal text-end fs-2 m-2" data-bs-dismiss="modal"><i class="fas fa-times"></i></div>
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-8">
              <div class="modal-body text-center">
                <!-- Project details-->
                <h2 class="text-uppercase">ຊື່ໂຄງການ</h2>
                <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                <img class="img-fluid d-block mx-auto" src="https://github.com/StartBootstrap/startbootstrap-agency/blob/master/dist/assets/img/portfolio/5.jpg?raw=true" alt="..." />
                <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                <ul class="list-inline">
                  <li>
                    <strong>ລູກຄ້າ:</strong>
                    Southwest
                  </li>
                  <li>
                    <strong>ປະເພດ:</strong>
                    Website Design
                  </li>
                </ul>
                <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                  <i class="fas fa-times me-1"></i>
                  ປິດ
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Portfolio item 6 -->
  <div class="portfolio-modal modal fade" id="portfolioModal6" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="close-modal text-end fs-2 m-2" data-bs-dismiss="modal"><i class="fas fa-times"></i></div>
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-8">
              <div class="modal-body text-center">
                <!-- Project details-->
                <h2 class="text-uppercase">ຊື່ໂຄງການ</h2>
                <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                <img class="img-fluid d-block mx-auto" src="https://github.com/StartBootstrap/startbootstrap-agency/blob/master/dist/assets/img/portfolio/6.jpg?raw=true" alt="..." />
                <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                <ul class="list-inline">
                  <li>
                    <strong>ລູກຄ້າ:</strong>
                    Window
                  </li>
                  <li>
                    <strong>ປະເພດ:</strong>
                    Photography
                  </li>
                </ul>
                <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                  <i class="fas fa-times me-1"></i>
                  ປິດ
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>




  <script src="<?php base_url() ?>/assets/js/activenav.js"></script>

  <script src="<?php base_url() ?>/assets/js/changcolornav.js"></script>

</body>

</html>