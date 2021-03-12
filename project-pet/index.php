<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PET HOUSE</title>
  <link rel="stylesheet" href="./plugins/bootstrap-4.4.1-dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="./plugins/swiper-5.3.7/package/css/swiper.min.css">
  <link rel="stylesheet" href="./css/style.css">
</head>

<body>
 

  <div class="swiper-container">
    <div class="swiper-wrapper">
      <div class="swiper-slide">
        <img src="./images/banner1.jpg" width="100%">
      </div>
      <div class="swiper-slide">
        <img src="./images/banner2.jpeg" width="100%">
      </div>
      <div class="swiper-slide">
        <img src="./images/banner3.jpg" width="100%">
      </div>
    </div>
  </div>

  <div class="top">
    <div class="container">
      <div class="top-bar">
        <div class="logo">
          <img src="./images/logo.png">
          <div>PET HOUSE</div>
        </div>
        <nav class="d-none d-md-block">
          <a href="#">HOME</a>
          <a href="#about">ABOUT</a>
          <a href="#pets">PETS</a>
          <a href="#contect">CONTACT</a>
          <a href="./login-script/login.php">LOGIN</a>
          <a href="./login-script/logout.php">LOGOUT</a>
          <a href="./tianqi.php">SEARCH</a>
        </nav>
        <div class="d-md-none m-nav" id="menu">
          <svg class="bi bi-list" width="50px" height="50px" viewBox="0 0 16 16" fill="currentColor"
            xmlns="http://www.w3.org/2000/svg" style="color:white">
            <path fill-rule="evenodd"
              d="M2.5 11.5A.5.5 0 0 1 3 11h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4A.5.5 0 0 1 3 7h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4A.5.5 0 0 1 3 3h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z"
              clip-rule="evenodd" />
          </svg>
        </div>
        <div class="m-nav-list" id="list">
          <a href="#">HOME</a>
          <a href="#about">ABOUT</a>
          <a href="#pets">PETS</a>
          <a href="#contect">CONTACT</a>
          <a href="./login-script/login.php">LOGIN</a>
          <a href="./login-script/logout.php">LOGOUT</a>
          <a href="./tianqi.php">SEARCH</a>
        </div>
      </div>
      <div class="content-box">
        <h1>PET HOUSE</h1>
        <p>They were once Mao children living on the street, abandoned </p>
        <p>by their original families, and now they need a</p>
        <p>family that really loves them.</p>
      </div>
    </div>
  </div>

  <div class="container my-5" id="about">
    <div class="card">
      <div class="row no-gutters">
        <div class="col-sm-6 col-lg-4 col-xl-3">
          <img src="./images/about_us.jpg" class="card-img">
        </div>
        <div class="col-sm-6 col-lg-8 col-xl-9">
          <div class="card-body">
            <h5 class="card-title">Brief Introduction</h5>
            <p>We are committed to helping the stray hairy children in thesociety, </p>
            <p class="d-none d-md-block">hoping that they will no longer wander and give themsome warmth. No longer
              hungry.</p>
            <p class="d-none d-md-block">But we hope that every Mao child can findhis own home after this.Of course</p>
            <p class="d-none d-xl-block">in addition to adopting them,you can also donate materials to them through this
              platform.</p>
              <a href="#contect">
                <div class="btn">CONTACT US</div>
              </a>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="requirements">
    <div class="container py-3">
      <div class="row">
        <div class="col-12 col-lg-8">
          <h1>ADOPTION REQUIREMENTS</h1>
          <p>First of all, you must like pets. Compassionate, stable income,</p>
          <p>relatively harmonious family environment.</p>
          <p>You must be able to quarantee that you will not abuse or even abandon these small animals, </p>
          <p>and have no tendency to violence.</p>
          <a href="#contect">
          <div class="btn d-none d-lg-block">CONTACT US</div>
          </a>
        </div>
      </div>
    </div>
  </div>

  <div class="container my-5" id="pets">
    <div class="text-center">
      <h1>PETS PROFILE</h1>
      <p>some pet related information</p>
      <div class="row">
        <div class="col-12 col-md-4 py-3 pets-item">
          <img src="./images/1.jpg" width="100%">
        </div>
        <div class="col-12 col-md-4 py-3 pets-item">
          <img src="./images/2.jpg" width="100%">
        </div>
        <div class="col-12 col-md-4 py-3 pets-item">
          <img src="./images/3.jpg" width="100%">
        </div>
      </div>
      <h4>HOW TO HELP THESECUTE ANIMALS</h4>
      <p>You can choose to adopt them, or contact us to help them.<br />They can also donate food and medicine to them.
      </p>
    </div>
  </div>

  <div class="form-bg" id="contect">
    <div class="container">
      <h1>CONTACT US</h1>
      <div class="container">
        <div class="form-box row">
          <form action="contect.php" method="POST" class="col-12 col-lg-6">
            <input type="text" name="name" placeholder="Name">
            <input type="text" name="email" placeholder="Email">
            <input type="text" name="number" placeholder="Phone number">
            <input type="text" name="message" placeholder="Message" style="height: 160px;">
            <input type="submit" value="SEND">
          </form>
          <div class="from-img d-none d-lg-block col-lg-6">
            <img src="./images/form.jpg" width="100%">
          </div>
        </div>
      </div>
    </div>
  </div>

  <script src="./plugins/swiper-5.3.7/package/js/swiper.min.js"></script>
  <script>
    var swiper = new Swiper('.swiper-container', {
      autoplay: true,
      loop : true,
    });
    const menu = document.getElementById('menu')
    const list = document.getElementById('list')
    menu.onclick = function () {
      if (list.style.display == 'block') {
        list.style.display = 'none'
      } else {
        list.style.display = 'block'
      }
    }
    list.onclick = function () {
      list.style.display = 'none'
    }
  </script>
</body>

</html>