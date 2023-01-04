<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Homepage</title>
  <!-- NAVBAR -->
  <link rel="stylesheet" href="index.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" />
  <!-- CAROUSEL -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://getbootstrap.com/docs/5.2/assets/css/docs.css" rel="stylesheet">
  <!-- TESTIMONIAL -->
  <link rel="stylesheet" href="./testimonial/swiper-bundle.min.css" />
  <link rel="stylesheet" href="./testimonial/style.css">
  <!-- ICONS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <?php include 'modal.php'; ?>
</head>

<body>
  <!-- NAVBAR -->
  <div class="website-info">
    <p>Sangohi, Karnal, Haryana, 132001</p>
    <p>virkpuran@gmail.com</p>
  </div>
  <nav>
    <div class="logo">Virk Vegetable&Fruit</div>
    <input type="checkbox" id="click">
    <label for="click" class="menu-btn">
      <i class="fas fa-bars"></i>
    </label>
    <ul>
      <li><a class="active" href="index.php">Home</a></li>
      <li><a href="about.html">About</a></li>
      <li><a href="gallery.php">Gallery</a></li>
      <li><a href="contactus.html">Contact Us</a></li>
      <li><a href="paynow.html">Pay Now</a></li>
      <div class="language">
        <a id="google_translate_element"></a>
      </div>
      <!-- <button>Get enquiry</button> -->
      
    </ul>
  </nav>
  <!-- NAVBAR -->
  <!-- CAROUSEL -->
  <div id="container" class="z">
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="false">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
          aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
          aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
          aria-label="Slide 3"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="./carousel-images/c-1.jpeg" class="d-block w-100" alt="...">
          <div class="carousel-caption d-none d-md-block slide-text">
            <h5>Best Variety & Taste</h5>
            <!-- <p>Some representative placeholder content for the first slide.</p> -->
          </div>
        </div>
        <div class="carousel-item">
          <img src="./carousel-images/c-2.png" class="d-block w-100" alt="...">
          <div class="carousel-caption d-none d-md-block slide-text">
            <h5>Pure & Fresh Vegetables</h5>
            <!-- <p>Some representative placeholder content for the second slide.</p> -->
          </div>
        </div>
        <div class="carousel-item">
          <img src="./carousel-images/c-3.png" class="d-block w-100" alt="...">
          <div class="carousel-caption d-none d-md-block slide-text">
            <h5>Natural Flavour & Taste</h5>
            <!-- <p>Some representative placeholder content for the third slide.</p> -->
          </div>
        </div>
      </div>
      <button class="carousel-control-prev button-top-down" type="button" data-bs-target="#carouselExampleCaptions"
        data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next button-top-down" type="button" data-bs-target="#carouselExampleCaptions"
        data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
  </div>
  <!-- CAROUSEL -->
  <!-- THIRD SECTION -->
  <div id="third-section">
    <div class="third-section-card">
      <div class="third-section-div-one">
        <p>Great Taste & Quality</p>
        <p>in our market now</p>
        <p>no compromise in taste</p>
      </div>
    </div>
    <div class="third-section-card">
      <div class="third-section-div-two">
        <p>Hygienic Processing</p>
        <p>in farms</p>
        <p>fresh stocks available</p>
      </div>
    </div>
    <div class="third-section-card">
      <div class="third-section-div-three">
        <p>Delivering Products</p>
        <p>with zero damage</p>
        <p>save 20% and free delivery</p>
      </div>
    </div>
  </div>
  <!-- THIRD SECTION -->
  <!-- FOURTH-SECTION -->
  <div class="fourth-section">
    <div class="fourth-section-card">
      <div class="fourth-section-card-div">
        <img src="./fourth-section-images/black-cruise.webp" alt="">
        <p class="fourth-section-card-div-p">Free Shipping</p>
        <p class="fourth-section-card-div-p-two">Free shipping on all order</p>
      </div>
    </div>
    <div class="fourth-section-card">
      <div class="fourth-section-card-div">
        <img src="https://cdn-icons-png.flaticon.com/512/7173/7173884.png" alt="">
        <p class="fourth-section-card-div-p">Member Discount</p>
        <p class="fourth-section-card-div-p-two">Back guarantee under 7 days</p>
      </div>
    </div>
    <div class="fourth-section-card">
      <div class="fourth-section-card-div">
        <img src="https://www.shutterstock.com/image-vector/cashback-icon-return-money-cash-260nw-1716679321.jpg"
          alt="">
        <p class="fourth-section-card-div-p">Money Return</p>
        <p class="fourth-section-card-div-p-two">Support online 24 hours</p>
      </div>
    </div>
    <div class="fourth-section-card">
      <div class="fourth-section-card-div">
        <img src="https://cdn.iconscout.com/icon/premium/png-256-thumb/online-support-3473806-2907292.png" alt="">
        <p class="fourth-section-card-div-p">Online Support</p>
        <p class="fourth-section-card-div-p-two">Online Support 24/7</p>
      </div>
    </div>
  </div>
  <!-- FOURTH-SECTION -->
  <!-- CARD-SLIDER -->
  <div class="card-slider-container">
  <header>
    <h1>Best Seller Products</h1>
    <p>
      <span id="forward-icon">&#139;</span>
      <span id="backward-icon">&#155;</span>
    </p>
  </header>
  <section>
    <div class="product">
      <picture>
        <img src="https://cdn.shopify.com/s/files/1/0522/4149/8278/products/coriander_600x.jpg?v=1655521565" alt="">
      </picture>
      <div class="detail">
        <p>
          <b class="detail-tag-b">Coriander</b><br>
          <!-- <b class="detail-tag-b">New arrival</b> -->
        </p>
        <!-- <samp>$45.00</samp> -->
      </div>
      <div class="buttons">
        <button class="btn-enquiry-now btn Enquiry-btn mfp-iframe" data-bs-toggle="modal" data-toggle="modal" data-bs-target="#exampleModal2" data-target="#exampleModal2">Enquiry now</button>
      </div>
    </div>
    <div class="product">
      <picture>
        <img src="https://www.farmingindia.in/wp-content/uploads/onion-cultivation.jpg" alt="">
      </picture>
      <div class="detail">
        <p>
          <b class="detail-tag-b">Onion</b><br>
          <!-- <b class="detail-tag-b">New arrival</b> -->
        </p>
        <!-- <samp>$45.00</samp> -->
      </div>
      <div class="buttons">
      <button class="btn-enquiry-now btn Enquiry-btn mfp-iframe" data-bs-toggle="modal" data-toggle="modal" data-bs-target="#exampleModal2" data-target="#exampleModal2">Enquiry now</button>
      </div>
    </div>
    <div class="product">
      <picture>
        <img src="https://kj1bcdn.b-cdn.net/media/65013/tomatoes.jpg?format=webp&width=1280" alt="">
      </picture>
      <div class="detail">
        <p>
          <b class="detail-tag-b">Tomato</b><br>
          <!-- <b class="detail-tag-b">New arrival</b> -->
        </p>
        <!-- <samp>$45.00</samp> -->
      </div>
      <div class="buttons">
      <button class="btn-enquiry-now btn Enquiry-btn mfp-iframe" data-bs-toggle="modal" data-toggle="modal" data-bs-target="#exampleModal2" data-target="#exampleModal2">Enquiry now</button>
      </div>
    </div>
    <div class="product">
      <picture>
        <img src="https://www.healthifyme.com/blog/wp-content/uploads/2022/01/Benefits-of-Potatoes.jpeg" alt="">
      </picture>
      <div class="detail">
        <p>
          <b class="detail-tag-b">Potato</b><br>
          <!-- <b class="detail-tag-b">New arrival</b> -->
        </p>
        <!-- <samp>$45.00</samp> -->
      </div>
      <div class="buttons">
      <button class="btn-enquiry-now btn Enquiry-btn mfp-iframe" data-bs-toggle="modal" data-toggle="modal" data-bs-target="#exampleModal2" data-target="#exampleModal2">Enquiry now</button>
    </div>
    </div>
    <div class="product">
      <picture>
        <img src="https://cdn.shopify.com/s/files/1/0017/9234/4153/products/edible-gardening-101-harvesting-coriander-seeds-2-corriander-seeds-leaves-powder_1200x1200.jpg?v=1561042220" alt="">
      </picture>
      <div class="detail">
        <p>
          <b class="detail-tag-b">Coriander</b><br>
          <!-- <b class="detail-tag-b">New arrival</b> -->
        </p>
        <!-- <samp>$45.00</samp> -->
      </div>
      <div class="buttons">
      <button class="btn-enquiry-now btn Enquiry-btn mfp-iframe" data-bs-toggle="modal" data-toggle="modal" data-bs-target="#exampleModal2" data-target="#exampleModal2">Enquiry now</button>
    </div>
    </div>
    <div class="product">
      <picture>
        <img src="https://img.freepik.com/free-photo/side-view-basket-full-red-onions-wooden-background_141793-5655.jpg?w=2000" alt="">
      </picture>
      <div class="detail">
        <p>
          <b class="detail-tag-b">Red Onion</b><br>
          <!-- <b class="detail-tag-b">New arrival</b> -->
        </p>
        <!-- <samp>$45.00</samp> -->
      </div>
      <div class="buttons">
      <button class="btn-enquiry-now btn Enquiry-btn mfp-iframe" data-bs-toggle="modal" data-toggle="modal" data-bs-target="#exampleModal2" data-target="#exampleModal2">Enquiry now</button>
    </div>
    </div>
    <div class="product">
      <picture>
        <img src="https://www.cupitfood.com/wp-content/uploads/2018/08/tomato-farming-1200x900.jpg" alt="">
      </picture>
      <div class="detail">
        <p>
          <b class="detail-tag-b">Tomato</b><br>
          <!-- <b class="detail-tag-b">New arrival</b> -->
        </p>
        <!-- <samp>$45.00</samp> -->
      </div>
      <div class="buttons">
      <button class="btn-enquiry-now btn Enquiry-btn mfp-iframe" data-bs-toggle="modal" data-toggle="modal" data-bs-target="#exampleModal2" data-target="#exampleModal2">Enquiry now</button>
    </div>
    </div>
    <div class="product">
      <picture>
        <img src="https://plantix.net/en/library/assets/custom/crop-images/potato.jpeg" alt="">
      </picture>
      <div class="detail">
        <p>
          <b class="detail-tag-b">Potato</b><br>
          <!-- <b class="detail-tag-b">New arrival</b> -->
        </p>
        <!-- <samp>$45.00</samp> -->
      </div>
      <div class="buttons">
      <button class="btn-enquiry-now btn Enquiry-btn mfp-iframe" data-bs-toggle="modal" data-toggle="modal" data-bs-target="#exampleModal2" data-target="#exampleModal2">Enquiry now</button>
    </div>
    </div>
  </section>
  </div>
  <!-- CARD-SLIDER -->
  <!-- SIXTH-SECTION -->
  <!-- <div class="sixth-section">
    <div class="sixth-section-div-one">
      <img src="https://demo.artureanec.com/html/agro/img/banner_bg_3.jpg" alt="">
    </div>
    <div class="sixth-section-div-two">
      <img src="https://demo.artureanec.com/html/agro/img/banner_bg_4.jpg" alt="">
    </div>
  </div> -->
  <!-- SIXTH-SECTION -->
  <!-- SEVENTH-SECTION -->
    <div class="seventh-section">
      <div class="seventh-section-div-one">
        <h1>FRUITS & <br> VEGETABLES</h1>
        <p>FARM PRODUCTS</p>
        <button>MORE ABOUT</button>
      </div>
      <div class="seventh-section-div-two">
        <div class="seventh-section-div-two-divone">
          <img src="https://cdn-icons-png.flaticon.com/512/1412/1412511.png" alt="">
          <p>Tomato</p>
        </div>
        <div class="seventh-section-div-two-divone">
          <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSESgW-HKAU7wvyQYl7N_fFzUIDr4VmEW5p1g&usqp=CAU" alt="">
          <p>Potato</p>
        </div>
        <div class="seventh-section-div-two-divone">
          <img src="https://thumbs.dreamstime.com/b/coriander-cilantro-leaf-vector-flat-graphic-illustration-fully-adjustable-scalable-single-herb-139331777.jpg" alt="">
          <p>Coriander</p>
        </div>
        <div class="seventh-section-div-two-divone">
          <img src="data:image/jpeg;base64,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" alt="">
          <p>Onion</p>
        </div>
      </div>
    </div>
  <!-- SEVENTH-SECTION -->
  <!-- GALLERY-SECTION -->
  <div class="our-products">Our Products</div>
  <div class="gallery-section">
    <div class="gallery-section-div">
      <img src="https://thumbs.dreamstime.com/b/crop-farm-potatoes-19703633.jpg" alt="">
      <button class="btn-enquiry-now btn Enquiry-btn mfp-iframe" data-bs-toggle="modal" data-toggle="modal" data-bs-target="#exampleModal2" data-target="#exampleModal2">Enquiry now</button>
    </div>
    <div class="gallery-section-div">
      <img src="https://images-prod.healthline.com/hlcmsresource/images/AN_images/tomatoes-1296x728-feature.jpg" alt="">
      <button class="btn-enquiry-now btn Enquiry-btn mfp-iframe" data-bs-toggle="modal" data-toggle="modal" data-bs-target="#exampleModal2" data-target="#exampleModal2">Enquiry now</button>
    </div>
    <div class="gallery-section-div">
      <img src="https://thumbs.dreamstime.com/z/fresh-coriander-cilantro-leaves-basket-141083932.jpg" alt="">
      <button class="btn-enquiry-now btn Enquiry-btn mfp-iframe" data-bs-toggle="modal" data-toggle="modal" data-bs-target="#exampleModal2" data-target="#exampleModal2">Enquiry now</button>
    </div>
    <div class="gallery-section-div">
      <img src="https://www.thespruce.com/thmb/BIWD_nzuOuEmYnU26i7gr1osABg=/1500x0/filters:no_upscale():max_bytes(150000):strip_icc()/top-tomato-growing-tips-1402587-11-c6d6161716fd448fbca41715bbffb1d9.jpg" alt="">
      <button class="btn-enquiry-now btn Enquiry-btn mfp-iframe" data-bs-toggle="modal" data-toggle="modal" data-bs-target="#exampleModal2" data-target="#exampleModal2">Enquiry now</button>
    </div>
    <div class="gallery-section-div">
      <img src="https://blog-images-1.pharmeasy.in/blog/production/wp-content/uploads/2021/05/20204137/shutterstock_1284082165-1.jpg" alt="">
      <button class="btn-enquiry-now btn Enquiry-btn mfp-iframe" data-bs-toggle="modal" data-toggle="modal" data-bs-target="#exampleModal2" data-target="#exampleModal2">Enquiry now</button>
    </div>
    <div class="gallery-section-div">
      <img src="https://thumbs.dreamstime.com/b/potatoes-fresh-wooden-basket-33186647.jpg" alt="">
      <button class="btn-enquiry-now btn Enquiry-btn mfp-iframe" data-bs-toggle="modal" data-toggle="modal" data-bs-target="#exampleModal2" data-target="#exampleModal2">Enquiry now</button>
    </div>
    <div class="gallery-section-div">
      <img src="https://static.toiimg.com/photo/msid-89229494/89229494.jpg" alt="">
      <button class="btn-enquiry-now btn Enquiry-btn mfp-iframe" data-bs-toggle="modal" data-toggle="modal" data-bs-target="#exampleModal2" data-target="#exampleModal2">Enquiry now</button>
    </div>
    <div class="gallery-section-div">
      <img src="https://cdn-prod.medicalnewstoday.com/content/images/articles/276/276714/red-and-white-onions.jpg" alt="">
      <button class="btn-enquiry-now btn Enquiry-btn mfp-iframe" data-bs-toggle="modal" data-toggle="modal" data-bs-target="#exampleModal2" data-target="#exampleModal2">Enquiry now</button>
    </div>
  </div>
  <!-- GALLERY-SECTION -->
  <!-- EIGHT_SECTION -->
    <div class="eight-section">
      <div class="eight-section-div">
        <h1>Fresh Exotic Fruits</h1>
        <p class="eight-section-div-first-p">In Our Store</p>
        <p class="eight-section-div-second-p">The generated Lorem Ipsum is therefore always free from repetition injected humour, or non-characteristic words etc.</p>
        <button>BUY</button>
    </div>
    </div>
  <!-- EIGHT_SECTION -->
  <!-- NINTH-SECTION -->
    <div class="ninth-section">
      <div class="ninth-section-header">
        <h1>PEOPLE SAYS</h1>
        <p>ABOUT VIRK</p>
      </div>
      <div class="ninth-section-tagline">
        <p>
          Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable.
        </p>
      </div>
    </div>
  <!-- NINTH-SECTION -->
  <!-- TENTH_SECTION -->
  <section class="container">
    <div class="testimonial mySwiper">
      <div class="testi-content swiper-wrapper">
        <div class="slide swiper-slide">
          <img src="./testimonial-images/img1.jpg" alt="" class="image" />
          <p>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam,
            saepe provident dolorem a quaerat quo error facere nihil deleniti
            eligendi ipsum adipisci, fugit, architecto amet asperiores
            doloremque deserunt eum nemo.
          </p>

          <i class="bx bxs-quote-alt-left quote-icon"></i>

          <div class="details">
            <span class="name">Marnie Lotter</span>
            <span class="job">Web Developer</span>
          </div>
        </div>
        <div class="slide swiper-slide">
          <img src="./testimonial-images/img2.jpg" alt="" class="image" />
          <p>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam,
            saepe provident dolorem a quaerat quo error facere nihil deleniti
            eligendi ipsum adipisci, fugit, architecto amet asperiores
            doloremque deserunt eum nemo.
          </p>

          <i class="bx bxs-quote-alt-left quote-icon"></i>

          <div class="details">
            <span class="name">Marnie Lotter</span>
            <span class="job">Web Developer</span>
          </div>
        </div>
        <div class="slide swiper-slide">
          <img src="./testimonial-images/img3.jpg" alt="" class="image" />
          <p>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam,
            saepe provident dolorem a quaerat quo error facere nihil deleniti
            eligendi ipsum adipisci, fugit, architecto amet asperiores
            doloremque deserunt eum nemo.
          </p>

          <i class="bx bxs-quote-alt-left quote-icon"></i>

          <div class="details">
            <span class="name">Marnie Lotter</span>
            <span class="job">Web Developer</span>
          </div>
        </div>
      </div>
      <!-- <div class="swiper-button-next nav-btn"></div>
      <div class="swiper-button-prev nav-btn"></div> -->
      <div class="swiper-pagination"></div>
    </div>
  </section>
  <!-- TENTH_SECTION -->
  <!-- FOOTER -->
  <div class="footer-section">
    <footer>
      <div class="footer-area-bottom">
        <div class="footer-container">
          <div class="footer-row">
            <div class="col-md-12">
              <div class="footer-icons">
                <ul>
                  <li>
                    <a href="#" class="fa fa-facebook"></a>
                  </li>
                  <li>
                    <a href="#" class="fa fa-twitter"></a>
                  </li>
                  <li>
                    <a href="#" class="fa fa-google"></a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="credits">
                <a href="#">Privacy Policy</a> | <a href="#">Terms & Condition</a>
              </div>
              <div class="copyright text-center">
                <p>
                  &copy; Copyright 2019. | <strong><a href="#">Virk Vegetable&Fruit </a></strong> | All Rights Reserved.
                </p>
              </div>
            </div>
          </div>
        </div>
        <div class="index-footer-logo">
          <img src="logo.png" alt="imgg">
        </div>
      </div>
    </footer>
    
  </div>
  <!-- FOOTER -->
</body>
<script src="./testimonial/script.js"></script>
<script src="./testimonial/swiper-bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
<script>
  let rightMovement = document.getElementById('forward-icon');
  let leftMovement = document.getElementById('backward-icon');
	let product = document.getElementsByClassName('product')
	let product_page = Math.ceil(product.length/4);
	let l = 0;
	let movePer = 25.34;
	let maxMove = 203;
	// mobile_view	
	let mob_view = window.matchMedia("(max-width: 768px)");
	if (mob_view.matches)
	 {
	 	movePer = 50.36;
	 	maxMove = 504;
   }
	let right_mover = ()=>{
		l = l + movePer;
		if (product == 1){l = 0; }
		for(const i of product)
		{
			if (l > maxMove){l = l - movePer;}
			i.style.left = '-' + l + '%';
		}
	}
	let left_mover = ()=>{
		l = l - movePer;
		if (l<=0){l = 0;}
		for(const i of product){
			if (product_page>1){
				i.style.left = '-' + l + '%';
			}
		}
	}
	leftMovement.onclick = ()=>{right_mover();}
	rightMovement.onclick = ()=>{left_mover();}   
</script>
  <!-- Language Converter -->
	<script type="text/javascript">
		function googleTranslateElementInit() {
			new google.translate.TranslateElement({
				pageLanguage: 'en'
			}, 'google_translate_element');
		}
	</script>
	<script type="text/javascript">
		(function () {
			var gtConstEvalStartTime = new Date();
			/*
	  	
			 Copyright The Closure Library Authors.
			 SPDX-License-Identifier: Apache-2.0
			*/
			var h = this || self,
				l = /^[\w+/_-]+[=]{0,2}$/,
				m = null;

			function n(a) {
				return (a = a.querySelector && a.querySelector("script[nonce]")) && (a = a.nonce || a.getAttribute("nonce")) && l.test(a) ? a : ""
			}

			function p(a, b) {
				function c() { }
				c.prototype = b.prototype;
				a.i = b.prototype;
				a.prototype = new c;
				a.prototype.constructor = a;
				a.h = function (g, f, k) {
					for (var e = Array(arguments.length - 2), d = 2; d < arguments.length; d++) e[d - 2] = arguments[d];
					return b.prototype[f].apply(g, e)
				}
			}

			function q(a) {
				return a
			};

			function r(a) {
				if (Error.captureStackTrace) Error.captureStackTrace(this, r);
				else {
					var b = Error().stack;
					b && (this.stack = b)
				}
				a && (this.message = String(a))
			}
			p(r, Error);
			r.prototype.name = "CustomError";

			function u(a, b) {
				a = a.split("%s");
				for (var c = "", g = a.length - 1, f = 0; f < g; f++) c += a[f] + (f < b.length ? b[f] : "%s");
				r.call(this, c + a[g])
			}
			p(u, r);
      
			u.prototype.name = "AssertionError";

			function v(a, b) {
				throw new u("Failure" + (a ? ": " + a : ""), Array.prototype.slice.call(arguments, 1));
			};
			var w;

			function x(a, b) {
				this.g = b === y ? a : ""
			}
			x.prototype.toString = function () {
				return this.g + ""
			};
			var y = {};

			function z(a) {
				var b = document.getElementsByTagName("head")[0];
				b || (b = document.body.parentNode.appendChild(document.createElement("head")));
				b.appendChild(a)
			}

			function _loadJs(a) {
				var b = document;
				var c = "SCRIPT";
				"application/xhtml+xml" === b.contentType && (c = c.toLowerCase());
				c = b.createElement(c);
				c.type = "text/javascript";
				c.charset = "UTF-8";
				if (void 0 === w) {
					b = null;
					var g = h.trustedTypes;
					if (g && g.createPolicy) {
						try {
							b = g.createPolicy("goog#html", {
								createHTML: q,
								createScript: q,
								createScriptURL: q
							})
						} catch (t) {
							h.console && h.console.error(t.message)
						}
						w = b
					} else w = b
				}
				a = (b = w) ? b.createScriptURL(a) : a;
				a = new x(a, y);
				a: {
					try {
						var f = c && c.ownerDocument,
							k = f && (f.defaultView || f.parentWindow);
						k = k || h;
						if (k.Element && k.Location) {
							var e = k;
							break a
						}
					} catch (t) { }
					e = null
				}
				if (e && "undefined" != typeof e.HTMLScriptElement && (!c || !(c instanceof e.HTMLScriptElement) && (c instanceof e.Location || c instanceof e.Element))) {
					e = typeof c;
					if ("object" == e && null != c || "function" == e) try {
						var d = c.constructor.displayName || c.constructor.name || Object.prototype.toString.call(c)
					} catch (t) {
						d = "<object could not be stringified>"
					} else d = void 0 === c ? "undefined" : null === c ? "null" : typeof c;
					v("Argument is not a %s (or a non-Element, non-Location mock); got: %s",
						"HTMLScriptElement", d)
				}
				a instanceof x && a.constructor === x ? d = a.g : (d = typeof a, v("expected object of type TrustedResourceUrl, got '" + a + "' of type " + ("object" != d ? d : a ? Array.isArray(a) ? "array" : d : "null")), d = "type_error:TrustedResourceUrl");
				c.src = d;
				(d = c.ownerDocument && c.ownerDocument.defaultView) && d != h ? d = n(d.document) : (null === m && (m = n(h.document)), d = m);
				d && c.setAttribute("nonce", d);
				z(c)
			}

			function _loadCss(a) {
				var b = document.createElement("link");
				b.type = "text/css";
				b.rel = "stylesheet";
				b.charset = "UTF-8";
				b.href = a;
				z(b)
			}

			function _isNS(a) {
				a = a.split(".");
				for (var b = window, c = 0; c < a.length; ++c)
					if (!(b = b[a[c]])) return !1;
				return !0
			}

			function _setupNS(a) {
				a = a.split(".");
				for (var b = window, c = 0; c < a.length; ++c) b.hasOwnProperty ? b.hasOwnProperty(a[c]) ? b = b[a[c]] : b = b[a[c]] = {} : b = b[a[c]] || (b[a[c]] = {});
				return b
			}
			window.addEventListener && "undefined" == typeof document.readyState && window.addEventListener("DOMContentLoaded", function () {
				document.readyState = "complete"
			}, !1);
			if (_isNS('google.translate.Element')) {
				return
			} (function () {
				var c = _setupNS('google.translate._const');
				c._cest = gtConstEvalStartTime;
				gtConstEvalStartTime = undefined;
				c._cl = 'en';
				c._cuc = 'googleTranslateElementInit';
				c._cac = '';
				c._cam = '';
				c._ctkk = '449532.3786053938';
				var h = 'translate.googleapis.com';
				var s = (true ? 'https' : window.location.protocol == 'https:' ? 'https' : 'http') + '://';
				var b = s + h;
				c._pah = h;
				c._pas = s;
				c._pbi = b + '/translate_static/img/te_bk.gif';
				c._pci = b + '/translate_static/img/te_ctrl3.gif';
				c._pli = b + '/translate_static/img/loading.gif';
				c._plla = h + '/translate_a/l';
				c._pmi = b + '/translate_static/img/mini_google.png';
				c._ps = b + '/translate_static/css/translateelement.css';
				c._puh = 'translate.google.com';
				_loadCss(c._ps);
				_loadJs(b + '/translate_static/js/element/main.js');
			})();
		})();
	</script>
	<!-- End Language Converter -->
	<!-- Including Jquery -->
	<script src="assets/js/vendor/jquery-min.js"></script>
	<script src="assets/js/vendor/js.cookie.js"></script>
	<!--Including Javascript-->
	<script src="assets/js/plugins.js"></script>
	<script src="assets/js/main.js"></script>
	<!--Newsletter Popup Cookies-->
	<script>
		function newsletter_popup() {
			var cookieSignup = "cookieSignup", date = new Date();
			if ($.cookie(cookieSignup) != 'true' && window.location.href.indexOf("challenge#newsletter-modal") <= -1) {
				setTimeout(function () {
					$.magnificPopup.open({
						items: {
							src: '#newsletter-modal'
						}
						, type: 'inline', removalDelay: 300, mainClass: 'mfp-zoom-in'
					}
					);
				}
					, 5000);
			}
			$.magnificPopup.instance.close = function () {
				if ($("#dontshow").prop("checked") == true) {
					$.cookie(cookieSignup, 'true', {
						expires: 1, path: '/'
					}
					);
				}
				$.magnificPopup.proto.close.call(this);
			}
		}
		newsletter_popup();
    <script/>
  
</html>