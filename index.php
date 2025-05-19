<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Ecomus</title>
  <link rel="icon" type="image/png" href="./IMAGES/favicon.png">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
    integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />

  <!-- External CSS -->
  <link rel="stylesheet" href="style.css" />
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
  

  <script src="script.js"></script>
  <script>
    window.addEventListener('scroll', () => {
const navbar = document.querySelector('.navbar');

    console.log("Navbar is scrolled! 1px down");
    if (window.scrollY > 0) {
        
        navbar.classList.add('scrolled');
    } else {
        navbar.classList.remove('scrolled');
    }
});
document.addEventListener("DOMContentLoaded", function () {
  let navbar = document.querySelector(".navbar");
  let toggler = document.querySelector(".navbar-toggler");

  toggler.addEventListener("click", function () {
    if (navbar.classList.contains("bg-white")) {
      navbar.classList.remove("bg-white");
      navbar.style.backgroundColor = "transparent";
    } else {
      navbar.classList.add("bg-white");
      navbar.style.backgroundColor = "white";
    }
  });
});

  </script>

</head>

<body>
<nav class="navbar position-fixed navbar-expand-lg w-100" style="z-index: 20; background-color: transparent;">
    <div class="container-fluid">
      <a class="navbar-brand" href="#"><img src="IMAGES/logo.svg" alt="Ecomus Logo" /></a>

      <button style="border:none;outline:none" class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path stroke="black" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" d="M4 7h22M4 15h22M4 23h22"/>
        </svg>
      </button>

      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link" href="#home">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#shop">Shop</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#product">Product</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#about">About Us</a>
          </li>
        </ul>
      </div>

      <div class="d-flex mx-3 gap-3 align-items-center">
        <i class="bi bi-search"></i>
        <i class="bi bi-person" data-bs-toggle="modal" data-bs-target="#loginModal" style="cursor: pointer;"></i>
        <i class="fa-regular fa-heart"></i>
        <i class="fa-solid fa-cart-shopping" onclick="openCart()"></i>
      </div>

    </div>
  </nav>

<!-- Login moodal -->
<div class="modal fade" id="loginModal">
  <div class="modal-dialog modal-dialog-centered modal-lg">
      <div class="modal-content p-4">
          <div class="modal-header border-0">
              <h4 class="modal-title fw-bold">Log in</h4>
              <button type="button" class="btn-close" data-bs-dismiss="modal" ></button>
          </div>
          <div class="modal-body">
              <form action="login.php" method="POST">
                  <div class="mb-3">
                      <input type="email" name="email" class="form-control p-3" placeholder="Email *" required title="Enter a valid email">
                  </div>

                  <div class="mb-3">
                      <input type="password" name="password" class="form-control p-3" placeholder="Password *" required>
                  </div>

                  <button type="submit" class="btn btn-dark w-100 py-2">Log in</button>
              </form>
              <hr>
              <div class="text-center">
                  <a href="#" class="text-decoration-underline hover-effect" data-bs-toggle="modal" data-bs-target="#registerModal">
                      New customer? Create your account →
                  </a>
              </div>
          </div>
      </div>
  </div>
</div>



<!-- Register Modal -->
 <div class="modal fade" id="registerModal">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content p-4">
                <div class="modal-header border-0">
                    <h4 class="modal-title fw-bold">Register</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <form action="" method="POST">
                        <div class="mb-3">
                            <input type="text" name="first_name" class="form-control p-3" placeholder="First name" required>
                        </div>
                        <div class="mb-3">
                            <input type="text" name="last_name" class="form-control p-3" placeholder="Last name" required>
                        </div>
                        <div class="mb-3">
                            <input type="email" name="email" class="form-control p-3" placeholder="Email *" required>
                        </div>
                        <div class="mb-3">
                            <input type="password" name="password" class="form-control p-3" placeholder="Password *" required>
                        </div>
                        <button type="submit" class="btn btn-dark w-100 py-2">Register</button>
                    </form>
                    <hr>
                    <div class="text-center">
                        <a href="#" class="text-decoration-underline hover-effect" data-bs-toggle="modal" data-bs-target="#loginModal">Already have an account? Log in here →</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Database -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "ecomus"; // Make sure the database name is correct

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];
    $password = $_POST['password']; 

    // Check if email already exists
    $check_stmt = $conn->prepare("SELECT email FROM users WHERE email = ?");
    $check_stmt->bind_param("s", $email);
    $check_stmt->execute();
    $check_stmt->store_result();

    if ($check_stmt->num_rows > 0) {
        // Email already exists
        echo "<script>alert('Email already exists! Please use a different email.'); window.location.href='index.php';</script>";
    } else {
        //  Insert new user if email is unique
        $stmt = $conn->prepare("INSERT INTO users (first_name, last_name, email, password) VALUES (?, ?, ?, ?)");
        $stmt->bind_param("ssss", $first_name, $last_name, $email, $password);

        if ($stmt->execute()) {
            echo "<script>alert('Registration successful!'); window.location.href='index.php';</script>";
        } else {
            echo "<script>alert('Error: " . $stmt->error . "');</script>";
        }
        $stmt->close();
    }

    $check_stmt->close();
}
$conn->close();
?>




  <!-- Carousel -->
  <div id="home" class="position-relative" >
    <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel" data-bs-wrap="true"
      data-bs-interval="4000" >

      <!-- Carousel Indicators -->
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleSlidesOnly" data-bs-slide-to="0"
          class="bg-dark active rounded-circle carousel-indicators1" style="height: 5px; width: 5px" aria-current="true"
          aria-label="Slide 1"></button>

        <button type="button" data-bs-target="#carouselExampleSlidesOnly" data-bs-slide-to="1"
          class=" bg-dark rounded-circle" style="height: 5px; width: 5px" aria-label="Slide 2"></button>

        <button type="button" data-bs-target="#carouselExampleSlidesOnly" data-bs-slide-to="2"
          class="bg-dark rounded-circle" style="height: 5px; width: 5px" aria-label="Slide 3"></button>
      </div>

      <!-- Carousel Slides -->
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="./IMAGES/fashion-slideshow-01.jpg" class="d-block w-100" alt="Slide 1" />
        </div>

        <div class="carousel-item">
          <img src="./IMAGES/fashion-slideshow-02.jpg" class="d-block w-100" alt="Slide 2" />
        </div>

        <div class="carousel-item">
          <img src="./IMAGES/fashion-slideshow-03.jpg" class="d-block w-100" alt="Slide 3" />
        </div>
      </div>

      <div class="carousel-div">
        <h1 class="carousel-caption">Glamorous</h1>
        <h1 class="carousel-caption" style="margin-top:-50px;">Glam</h1>
        <p class="p-0 m-0">From casual to Formal,we've got you covered.</p>
        <button class="shop-btn">Shop Collection <i class="bi bi-arrow-right"></i></button>
      </div>
    </div>

  </div>

  <!-- discount -->
  <div class="container-fluid marquee discount" style="height: 80px;">
    <marquee class="scrolling-text" behavior="scroll" direction="left" scrollamount="5" scrolldelay="100">
      <div class="discount blinking-text">
        <h4><i class="bi bi-lightning-charge-fill">Summer Clearance Event: Save up to 70%</i></h4>
        <h4><i class="bi bi-lightning-charge-fill">Summer Clearance Event: Save up to 70%</i></h4>
        <h4><i class="bi bi-lightning-charge-fill">Summer Clearance Event: Save up to 70%</i></h4>
      </div>
    </marquee>
  </div>

  <!-- SHOP BY CATEGORIES Section -->
  <div class="container">
    <p class="shop-category-title">SHOP BY CATEGORIES</p>

    <div class="row">
      <div class="col-6 col-md-3 text-center category">
        <button class="btn p-0">
          <img src="./IMAGES/collection-17.jpg" alt="Category 1" class="img-fluid rounded" />
          <p class="mt-2">Clothing</p>
        </button>
      </div>
      <div class="col-6 col-md-3 category">
        <button class="btn p-0">
          <img src="./IMAGES/collection-14.jpg" alt="Category 2" class="img-fluid rounded" />
          <p class="mt-2">Sunglasses</p>
        </button>
      </div>

      <div class="col-6 col-md-3 category">
        <button class="btn p-0">
          <img src="./IMAGES/collection-20.jpg" alt="Category 3" class="img-fluid rounded h-100" />
          <p class="mt-2">Shoes</p>
        </button>
      </div>

      <div class="col-6 col-md-3 rounded box">
        <button class="btn p-0">
          <p class="discover">Discover all new items</p>
          <a href="#"><i style="font-size: 40px" class="up-right-arrow bi bi-arrow-up-right-circle"></i></a>
        </button>
      </div>
    </div>
  </div>

  <!-- Best seller container -->
  <div id="product"class="bs container mt-5">
    <h2 class="section-title">Best Seller</h2>
    <p class="section-subtitle">
      Shop the latest styles: Stay ahead of the curve with our newest arrivals
    </p>
  </div>

<!-- Modal -->
<div class="cart-popup-modal-overlay" style="display: none;">
  <div class="cart-popup-modal-container p-0" style="max-width: 1000px;">
      <button class="cart-popup-close-button" onclick="closeModal()" aria-label="Close modal">&times;</button>

      <div class="cart-popup-modal-content">
          <div class="row g-0">
              <div class="col-lg-6">
                  <div class="product-swiper" style="min-height: 500px;">
                      <img id="product-image" src="" alt="Product Image" style="width: 100%; height: 100%; object-fit: cover;">
                  </div>
              </div>
              <div class="col-lg-6">
                  <div class="product-details p-4">
                      <h2 class="mb-3" id="product-name"></h2>
                      <div class="d-flex align-items-center gap-2 mb-3">
                          <span class="badge bg-dark">BEST SELLER</span>
                      </div>
                      <h3 class="fw-bold mb-4" id="product-price"></h3>

                      <div class="mb-4">
                        <p class="mb-2">Color: <strong id="selected-color"></strong></p>
                        <div class="d-flex gap-2" id="color-options"></div>
                    </div>

                    <div class="mb-4">
                        <p class="mb-2">Size: <strong id="selected-size">M</strong></p>
                        <div class="d-flex gap-2" id="size-options">
                            <button class="size-option" onclick="selectSize('S')">S</button>
                            <button class="size-option active" onclick="selectSize('M')">M</button>
                            <button class="size-option" onclick="selectSize('L')">L</button>
                            <button class="size-option" onclick="selectSize('XL')">XL</button>
                        </div>
                    </div>

                      <div class="mb-4">
                          <p class="mb-2">Quantity</p>
                          <div class="cart-popup-quantity-controls">
                              <button class="quantity-btn" onclick="decreaseQuantity()">-</button>
                              <span class="cart-popup-quantity-display" id="quantity"><b>1</b></span>
                              <button class="quantity-btn" onclick="increaseQuantity()">+</button>
                          </div>
                      </div>

                      <div class="cart-popup-action-buttons">
                          <div class="d-flex gap-2">
                              <button class="cart-popup-add-button" onclick="addToCart()">
                                  Add to cart - <span id="total-price"></span>
                              </button>
                              <button class="btn btn-outline-dark">&#x2661;</button>
                              <button class="btn btn-outline-dark">&#x21C4;</button>
                          </div>
                          <button class="cart-popup-paypal-button"><b>Buy with</b>
                            <img src="./IMAGES/paypal.png" alt="PayPal" class="paypal-logo"></button>
                          <button class="cart-popup-more-options-button">View full details</button>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
</div>

  <!-- Product Boxes 1-->
  <div class="row mt-4 " style=" margin-right: 30px; margin-left:30px">

   <!-- Product 1 -->
   <div class="col-12 col-md-3">
        <div class="card"
            data-name="Ribbed Tank Top"
            data-price="₹1,400"
            data-image="./IMAGES/orange-1.jpg">

          <div class="card1">
            <img style="height: 485px;width: 350px;" src="./IMAGES/orange-1.jpg" class="img-hover img-fluid" alt="Oversized Printed Hoodie" />

            <!-- Eye Icon Button -->
            <div class="eye-button" onclick="openModal(this)" style="cursor: pointer;">
              <i class="bi bi-eye" style="font-size: 24px;"></i>
            </div>
          </div>

          <div class="card-body text-center">
            <h5 class="card-title">Ribbed Tank Top</h5>
            <p class="card-text">₹1,400</p>

            <div class="color-options d-flex justify-content-center">
              <span class="color-circle" style="background-color: orange; width: 15px; height: 15px; border-radius: 50%;" title="Blue"></span>
              <span class="color-circle" style="background-color: black; width: 15px; height: 15px; border-radius: 50%;" title="Pink"></span>
              <span class="color-circle" style="background-color: wheat; width: 15px; height: 15px; border-radius: 50%;" title="Wheat"></span>
            </div>
          </div>
        </div>
      </div>
<!-- Card Section -->

<div class="col-12 col-md-3">
        <div class="card"
            data-name="Ribbed modal T-shirt"
            data-price="₹1,400"
            data-image="./IMAGES/oversizedhoodie.jpg">

          <div class="card1">
            <img style="height: 485px;width: 350px;" src="./IMAGES/white-2.jpg" class="img-hover img-fluid" alt="Oversized Printed Hoodie" />

            <!-- Eye Icon Button -->
            <div class="eye-button" onclick="openModal(this)" style="cursor: pointer;">
              <i class="bi bi-eye" style="font-size: 24px;"></i>
            </div>
          </div>

          <div class="card-body text-center">
            <h5 class="card-title">Ribbed modal T-shirt</h5>
            <p class="card-text">₹1,400</p>

            <div class="color-options d-flex justify-content-center">
              <span class="color-circle" style="background-color: whitesmoke; width: 15px; height: 15px; border-radius: 50%;" title="Blue"></span>
              <span class="color-circle" style="background-color: pink; width: 15px; height: 15px; border-radius: 50%;" title="Pink"></span>
              <span class="color-circle" style="background-color: green; width: 15px; height: 15px; border-radius: 50%;" title="Wheat"></span>
            </div>
          </div>
        </div>
      </div>


    <!-- Product 3 -->
      <div class="col-12 col-md-3">
        <div class="card"
            data-name="Oversized Printed Hoodie"
            data-price="₹1,400"
            data-image="./IMAGES/oversizedhoodie.jpg">

          <div class="card1">
            <img style="height: 485px;width: 350px;" src="./IMAGES/oversizedhoodie.jpg" class="img-hover img-fluid" alt="Oversized Printed Hoodie" />

            <!-- Eye Icon Button -->
            <div class="eye-button" onclick="openModal(this)" style="cursor: pointer;">
              <i class="bi bi-eye" style="font-size: 24px;"></i>
            </div>
          </div>

          <div class="card-body text-center">
            <h5 class="card-title">Oversized Printed Hoodie</h5>
            <p class="card-text">₹1,400</p>

            <div class="color-options d-flex justify-content-center">
              <span class="color-circle" style="background-color: blue; width: 15px; height: 15px; border-radius: 50%;" title="Blue"></span>
              <span class="color-circle" style="background-color: pink; width: 15px; height: 15px; border-radius: 50%;" title="Pink"></span>
              <span class="color-circle" style="background-color: wheat; width: 15px; height: 15px; border-radius: 50%;" title="Wheat"></span>
            </div>
          </div>
        </div>
      </div>

    <!-- Product 4 -->
    <div class="col-12 col-md-3">
      <div class="card"
           data-name="Oversized Printed T-shirt"
           data-price="₹1,400"
           data-image=".IMAGES/black-2.jpg">

        <div class="card1">
          <img style="height: 485px;" src="./IMAGES/black-2.jpg" class="img-hover img-fluid" alt="Oversized Printed T-shirt" />

          <!-- Eye Icon Button -->
          <div class="eye-button" onclick="openModal(this)" style="cursor: pointer;">
            <i class="bi bi-eye" style="font-size: 24px;"></i>
          </div>
        </div>

        <div class="card-body text-center">
          <h5 class="card-title">Oversized Printed T-shirt</h5>
          <p class="card-text">₹1,400</p>

          <div class="color-options d-flex justify-content-center">
            <span class="color-circle" style="background-color: black; width: 15px; height: 15px; border-radius: 50%;" title="Black"></span>
            <span class="color-circle" style="background-color: darkblue; width: 15px; height: 15px; border-radius: 50%;" title="Dark Blue"></span>
            <span class="color-circle" style="background-color: white; width: 15px; height: 15px; border-radius: 50%;" title="White"></span>
          </div>
        </div>
      </div>
    </div>
    </div>

  <!-- Product box 2 -->
  <div class="row mt-4 " style=" margin-right: 30px; margin-left:30px">
    <!-- Product 1 -->
    <div class="col-12 col-md-3">
      <div class="card"
           data-name="V-neck linen T-shirt"
           data-price="₹1,400"
           data-image="./IMAGES/brown-2.jpg">

        <div class="card1">
          <img style="height: 485px;" src="./IMAGES/brown-2.jpg" class="img-hover img-fluid" alt="V-neck linen T-shirt" />

          <!-- Eye Icon Button -->
          <div class="eye-button" onclick="openModal(this)" style="cursor: pointer;">
            <i class="bi bi-eye" style="font-size: 24px;"></i>
          </div>
        </div>

        <div class="card-body text-center">
          <h5 class="card-title">V-neck linen T-shirt</h5>
          <p class="card-text">₹1,400</p>

          <div class="color-options d-flex justify-content-center">
            <span class="color-circle" style="background-color: brown; width: 15px; height: 15px; border-radius: 50%;" title="Brown"></span>
          </div>
        </div>
      </div>
    </div>

    <!-- Product 2 -->
    <div class="col-12 col-md-3">
      <div class="card"
           data-name="Loose Fit Sweatshirt"
           data-price="From ₹1,560"
           data-image="./IMAGES/light-green-1.jpg">

        <div class="card1">
          <img style="height: 485px;" src="./IMAGES/light-green-1.jpg" class="img-hover img-fluid" alt="Loose Fit Sweatshirt" />

          <!-- Eye Icon Button -->
          <div class="eye-button" onclick="openModal(this)" style="cursor: pointer;">
            <i class="bi bi-eye" style="font-size: 24px;"></i>
          </div>
        </div>

        <div class="card-body text-center">
          <h5 class="card-title">Loose Fit Sweatshirt</h5>
          <p class="card-text">From ₹1,560</p>

          <div class="color-options d-flex justify-content-center">
            <span class="color-circle" style="background-color: lightgreen; width: 15px; height: 15px; border-radius: 50%;" title="Light Green"></span>
            <span class="color-circle" style="background-color: black; width: 15px; height: 15px; border-radius: 50%;" title="Black"></span>
            <span class="color-circle" style="background-color: darkblue; width: 15px; height: 15px; border-radius: 50%;" title="Dark Blue"></span>
            <span class="color-circle" style="background-color: grey; width: 15px; height: 15px; border-radius: 50%;" title="Grey"></span>
          </div>
        </div>
      </div>
    </div>

    <!-- Product 3 -->
    <div class="col-12 col-md-3">
      <div class="card"
           data-name="Regular Fit Oxford Shirt"
           data-price="From ₹1,560"
           data-image="./IMAGES/black-4.jpg">

        <div class="card1">
          <img style="height: 485px;" src="./IMAGES/black-4.jpg" class="img-hover img-fluid" alt="Loose Fit Sweatshirt" />

          <!-- Eye Icon Button -->
          <div class="eye-button" onclick="openModal(this)" style="cursor: pointer;">
            <i class="bi bi-eye" style="font-size: 24px;"></i>
          </div>
        </div>

        <div class="card-body text-center">
          <h5 class="card-title">Regular Fit Oxford Shirt</h5>
          <p class="card-text">From ₹1,560</p>

          <div class="color-options d-flex justify-content-center">
            <span class="color-circle" style="background-color: lightgreen; width: 15px; height: 15px; border-radius: 50%;" title="Light Green"></span>
            <span class="color-circle" style="background-color: black; width: 15px; height: 15px; border-radius: 50%;" title="Black"></span>
            <span class="color-circle" style="background-color: darkblue; width: 15px; height: 15px; border-radius: 50%;" title="Dark Blue"></span>
            <span class="color-circle" style="background-color:grey; width: 15px; height: 15px; border-radius: 50%;" title="Grey"></span>
          </div>
        </div>
      </div>
    </div>

    <!-- Product 4 -->
    <div class="col-12 col-md-3">
      <div class="card"
           data-name="Loose Fit Hoodie"
           data-price="₹1,400"
           data-image="./IMAGES/white-8.jpg">

        <div class="card1">
          <img style="height: 485px;" src="./IMAGES/white-8.jpg" class="img-hover img-fluid" alt="Loose Fit Hoodie" />

          <!-- Eye Icon Button -->
          <div class="eye-button" onclick="openModal(this)" style="cursor: pointer;">
            <i class="bi bi-eye" style="font-size: 24px;"></i>
          </div>
        </div>

        <div class="card-body text-center">
          <h5 class="card-title">Loose Fit Hoodie</h5>
          <p class="card-text">₹1,400</p>

          <div class="color-options d-flex justify-content-center">
            <span class="color-circle" style="background-color: black; width: 15px; height: 15px; border-radius: 50%;" title="Black"></span>
            <span class="color-circle" style="background-color: wheat; width: 15px; height: 15px; border-radius: 50%;" title="Wheat"></span>
            <span class="color-circle" style="background-color: violet; width: 15px; height: 15px; border-radius: 50%;" title="Blue Violet"></span>
          </div>
        </div>
      </div>
    </div>

  <!-- See More button -->
  <div class="text-center mt-5">
    <button class="sm-btn" style="margin-top:-80px;">See more <i class="bi bi-arrow-down"></i></button>
  </div>

  <!--Shop the look -->
  <div id="shop"class="bs container mt-5">
    <h2 class="section-title">Shop The Look</h2>
    <p class="section-subtitle">
      Inspire and let yourself be inspired,from one unique fashion to another.
    </p>
  </div>

  <div class="container-fluid my-5 mt-4">
    <div class="row">
      <!-- First image -->
      <div class="col-md-6">
        <div class="product-image">
          <div class="image-dots">
            <img src="./IMAGES/lookbook-3.jpg" alt="Product 1" class="img-fluid">

            <!-- Highlight Necklace -->
            <div class="product-highlight highlight-necklace">
              <span></span>
              <div class="custom-tooltip">
                <img src="./IMAGES/wild-1.webp" alt="Necklace">
                <div>
                  <p class="product-title">Elegant Necklace</p>
                  <p class="product-price">₹2,480<i style="margin-left: 80px;" class="bi bi-eye"></i></p>
                </div>
              </div>
            </div>

            <!-- Highlight Dress -->
            <div class="product-highlight highlight-dress">
              <span></span>
              <div class="custom-tooltip">
                <img src="./IMAGES/orange-1.jpg" alt="Dress">
                <div>
                  <p class="product-title">Summer Dress<i style="margin-left: 10px;" class="bi bi-eye"></i></p>
                  <p class="product-price">₹4130</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Second image -->
      <div class="col-md-6 ">
        <div class="product-image">
          <div class="image-dots">
          <img src="./IMAGES/lookbook-4.jpg" alt="Product 2" class="img-fluid">

          <div class="product-highlight highlight-hat">
            <span></span>
            <div class="custom-tooltip">
              <img src="./IMAGES/hat2" alt="Hat">
              <div>
                <p class="product-title">Stylish Hat<i style="margin-left: 10px;" class="bi bi-eye"></i></p>
                <p class="product-price">₹1,650</p>

              </div>
            </div>
          </div>

        </div>
        </div>
      </div>
    </div>
  </div>

<!-- hear what they say-->
<div class="bs container mt-5">
  <h2 class="section-title">Happy Clients</h2>
  <p class="section-subtitle">
    Hear what they say about us.
  </p>
</div>

<!-- Brand Logos -->
<div class="container my-5">
  <div class="logo-container">

    <div class="logo-item" >
      <img src="./IMAGES/brand-01.png" alt="SSENSE">
    </div>

    <div class="logo-item">
      <img src="./IMAGES/brand-02.png" alt="BURBERRY">
    </div>

    <div class="logo-item">
      <img src="./IMAGES/brand-03.png" alt="NIKE">
    </div>

    <div class="logo-item">
      <img src="./IMAGES/brand-04.png" alt="ASOS">
    </div>

    <div class="logo-item">
      <img src="./IMAGES/brand-05.png" alt="PULL&BEAR">
    </div>

    <div class="logo-item">
      <img src="./IMAGES/brand-06.png" alt="GILDAN">
    </div>

  </div>
</div>

<!-- Shop Gram -->
<div class="bs container mt-5">
  <h2 class="section-title">Shop Gram</h2>
  <p class="section-subtitle">
    Inspire and let yourself be inspired,from one unique fashion to another.
  </p>
</div>

<!-- Random Images -->
<div class="product-container ">
  <div class="product-card">
    <img src="./IMAGES/gallery-7.jpg" alt="Product 1">
    <div class="cart-icon">
      <i class="bi bi-cart3"></i>
    </div>
  </div>

  <div class="product-card">
    <img src="./IMAGES/gallery-3.jpg" alt="Product 2">
    <div class="cart-icon">
      <i class="bi bi-cart3"></i>
    </div>
  </div>

  <div class="product-card">
    <img src="./IMAGES/gallery-5.jpg" alt="Product 3">
    <div class="cart-icon">
      <i class="bi bi-cart3"></i>
    </div>
  </div>

  <div class="product-card">
    <img src="./IMAGES/gallery-6.jpg" alt="Product 4">
    <div class="cart-icon">
      <i class="bi bi-cart3"></i>
    </div>
  </div>

  <div class="product-card">
    <img src="./IMAGES/gallery-8.jpg" alt="Product 5">
    <div class="cart-icon">
      <i class="bi bi-cart3"></i>
    </div>
  </div>
</div>
</div>

<!-- Features Section -->
<div class="container mt-5">
  <div class="row text-center">

    <div class="col-6 col-md-3">
      <div class="feature-box p-4 border rounded">
        <i class="bi bi-truck display-4" style="color: black;"></i>
        <h5 class="mt-3"style="font-weight: 600;">Free Shipping</h5>
        <p>Free shipping on orders over ₹1,130.</p>
      </div>
    </div>

    <div class="col-6 col-md-3">
      <div class="feature-box p-4 border rounded">
        <i class="bi bi-credit-card display-4" style="color: black;"></i>
        <h5 class="mt-3"style="font-weight: 600;">Flexible Payment</h5>
        <p>Pay with UPI, Paytm, and credit cards.</p>
      </div>
    </div>

    <div class="col-6 col-md-3">
      <div class="feature-box p-4 border rounded">
        <i class="bi bi-arrow-counterclockwise display-4" style="color: black;"></i>
        <h5 class="mt-3"style="font-weight: 600;">14-Day Returns</h5>
        <p>Within 14 days for an exchange.</p>
      </div>
    </div>

    <div class="col-6 col-md-3">
      <div class="feature-box p-4 border rounded">
        <i class="bi bi-headset display-4" style="color: black;"></i>
        <h5 class="mt-3"style="font-weight: 600;">Premium Support</h5>
        <p>Outstanding premium support.</p>
      </div>
    </div>
    </div>

    <div class="container mt-5 ">
      <div class="row text-center">
    <div class="col-6 col-md-3">
      <div class="feature-box p-4 border rounded">
        <i class="bi bi-bag-check display-4" style="color: black;"></i>
        <h5 class="mt-3"style="font-weight: 600;">Quality Assured</h5>
        <p>Products checked for quality.</p>
      </div>
    </div>

    <div class="col-6 col-md-3">
      <div class="feature-box p-4 border rounded">
        <i class="bi bi-globe display-4" style="color: black;"></i>
        <h5 class="mt-3"style="font-weight: 600;">Worldwide Shipping</h5>
        <p>Delivering across the globe.</p>
      </div>
    </div>

    <div class="col-6 col-md-3">
      <div class="feature-box p-4 border rounded">
        <i class="bi bi-gift display-4"  style="color: black;" ></i>
        <h5 class="mt-3"style="font-weight: 600;">Gift Packaging</h5>
        <p>Complimentary gift packaging.</p>
      </div>
    </div>

    <div class="col-6 col-md-3">
      <div class="feature-box p-4 border rounded">
        <i class="bi bi-award display-4" style="color: black;"></i>
        <h5 class="mt-3" style="font-weight: 600;">Award-Winning</h5>
        <p>Recognized for excellence.</p>
      </div>
    </div>

  </div>
</div>
</div>

<br>
<br>

<footer id="about"class="bg-light py-5">
  <div class="container mt-5">
    <div class="row">
      <!-- Logo and Contact -->
      <div class="col-md-4">
        <h5><img src="./IMAGES/logo.svg" alt=""></h5><br>
        <p>
  Address: 567 Fashion Plaza, Near SG Highway,<br>
  Ahmedabad, Gujarat 380015, India<br>
  Email: <a href="mailto:info@fashionshop.com">info@fashionshop.com</a><br>
  Phone: <a href="tel:+917912345678">+91 79 1234-5678</a>
</p>

        <p><a href="#" class="text-decoration-none">Get direction</a></p>
        <div class="social-icons">
          <a href="https://www.facebook.com"><i class="bi bi-facebook"></i></a>
          <a href="https://www.twitter.com"><i class="bi bi-x"></i></a>
          <a href="https://www.instagram.com"><i class="bi bi-instagram"></i></a>
          <a href="https://www.tiktok.com"><i class="bi bi-tiktok"></i></a>
          <a href="https://www.pinterest.com"><i class="bi bi-pinterest"></i></a>
        </div>
      </div>
      <!-- Help Links -->
      <div class="col-md-2">
        <h4 class="fw-bold">Help</h4><br>
        <ul class="list-unstyled">
          <li><a href="#">Privacy Policy</a></li>
          <li><a href="#">Returns + Exchanges</a></li>
          <li><a href="#">Shipping</a></li>
          <li><a href="#">Terms & Conditions</a></li>
          <li><a href="#">FAQs</a></li>
          <li><a href="#">Compare</a></li>
          <li><a href="#">My Wishlist</a></li>
        </ul>
      </div>
      <!-- Useful Links -->
      <div class="col-md-2">
        <h4 class="fw-bold">Useful Links</h4>
        <br>
        <ul class="list-unstyled">
          <li><a href="#">Our Story</a></li>
          <li><a href="#">Visit Our Store</a></li>
          <li><a href="#">Contact Us</a></li>
          <li><a href="#">About us</a></li>
          <li><a href="#">Account</a></li>
        </ul>
      </div>
      <!-- Newsletter Signup -->
      <div class="col-md-4">
        <h4 class="fw-bold">Sign Up for Email</h4><br>
        <p>Sign up to get first dibs on new arrivals, sales, exclusive content, events and more!</p>
        <form class="d-flex">
          <input type="email" class="form-control " placeholder="Enter email address">
          <button id="registerModal"class="btn btn-dark ms-2">Subscribe</button>
        </form>
        <div class="mt-3 language-currency">
          <div>
            <select class="form-select form-select-sm">
              <option selected>INR</option>
              <option value="1">USD</option>
              <option value="2">EUR</option>
            </select>
          </div>
          <div>
            <select class="form-select form-select-sm">
              <option selected>English</option>
              <option value="1">Hindi</option>
              <option value="2">Tamil</option>
            </select>
          </div>
        </div>
        <div class="mt-3">
          <img src="./IMAGES/visa.png" alt="Visa">
          <img src="./IMAGES/img-2.png" alt="MasterCard">
          <img src="./IMAGES/img-1.png" alt="PayPal">
          <img src="./IMAGES/img-3.png" alt="American Express">
        </div>
      </div>
    </div>
    <hr>
    <p class="text-center m-0">© 2025 Ecomus. All rights reserved.</p>
  </div>
</footer>
</body>
</html>
