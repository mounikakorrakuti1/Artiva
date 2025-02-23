<?php
// Start the session
session_start();

// Check if the user is logged in
if (!isset($_SESSION['username'])) {
    // If not logged in, redirect to login page
    header('Location: login.php');
    exit();
}

// Get the username from the session
$username = $_SESSION['username'];
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Artiva</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.rtl.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/css/bootstrap.min.css" rel="stylesheet">
    
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/js/bootstrap.min.js"></script>
    <style> 
      * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
      }

      body {
        font-family: 'Poppins', sans-serif;
        background-color: #f4f4f4;
        color: #333;
      }

      .navbar {
        padding: 10px 20px;
      }

      .logo-img {
        width: 50px;
        height: auto;
      }

      .navbar-brand {
        font-family: 'Lobster', cursive;
        font-size: 1.8rem;
        color: #333;
      }

      .navbar-nav .nav-link {
        font-size: 1rem;
        color: #555;
        margin: 0 10px;
      }

      .navbar-nav .nav-link:hover {
        color: #000;
      }

      .form-control {
        max-width: 300px;
      }

      .product-category {
        margin-top: 30px;
        align-items: left;
      }

      .product-card {
        margin-bottom: 20px;
      }

      .product-card {
        background: #fff;
        border: 1px solid #ddd;
        border-radius: 10px;
        overflow: hidden;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        transition: transform 0.2s ease;
        position: relative;
      }

      .product-card:hover {
        transform: scale(1.02);
      }

      .product-card img {
        width: 100%;
        height: 250px;
        object-fit: cover;
      }

      .wishlist-icon {
        position: absolute;
        top: 10px;
        right: 10px;
        font-size: 1.5rem;
        color: #fff;
        background-color: rgba(0, 0, 0, 0.5);
        border-radius: 50%;
        padding: 10px;
        cursor: pointer;
        transition: color 0.3s ease;
      }

      .wishlist-icon:hover {
        color: #e74c3c;
      }

      .product-card-body {
        padding: 15px;
        text-align: center;
      }

      .product-card h3 {
        font-size: 1.5rem;
        margin-bottom: 10px;
        color: #444;
      }

      .product-card p {
        font-size: 1rem;
        color: #777;
        margin-bottom: 15px;
      }

      .product-card button {
        font-size: 0.9rem;
        padding: 5px 15px;
        background-color: #007bff;
        color: #fff;
        border: none;
        border-radius: 20px;
        cursor: pointer;
      }

      .product-card button:hover {
        background-color: #0056b3;
      }
     
      .c {
        align-items: left;
        padding-left: 1px;
      }
      div {
        margin-left: 0px;
      }
      #circle {
    width: 170px;
    height: 170px;
    border-radius: 50%;
    display: flex;
    justify-content: center;
    align-items: center;
    color: white;
    font-size: 18px;
    background: url("https://www.stylemotivation.com/wp-content/uploads/2013/12/26-Extremely-Creative-Handmade-Wall-Clocks-24.jpg"); /* Ensure path is correct */
    background-size: cover;
    background-position: center; 
    transition: transform 0.3s ease, background-color 0.3s ease;
}/* Ensure the image is centered */
#circle:hover {
    transform: scale(1.1); 
    background-blend-mode: overlay; 
    color: yellow; 
}
      #rect {
    width: 170px;
    height: 170px;
    border-radius: 50%;
    display: flex;
    justify-content: center;
    align-items: center;
    color: white;
    font-size: 18px;
    background: url("https://i.pinimg.com/originals/69/aa/e5/69aae554bbf0d69557489f6469d45f8c.jpg"); /* Ensure path is correct */
    background-size: cover;
    background-position: center;
    transition: transform 0.3s ease, background-color 0.3s ease;
} /* Ensure the image is centered */
#rect:hover {
    transform: scale(1.1); 
    background-blend-mode: overlay; 
    color: yellow; 
}
      #para {
    width: 170px;
    height: 170px;
    border-radius: 50%;
    display: flex;
    justify-content: center;
    align-items: center;
    color: white;
    font-size: 18px;
    background: url("https://img.freepik.com/premium-photo/hindu-god-idol-hd-8k-wallpaper-stock-photographic-image_915071-30717.jpg"); /* Ensure path is correct */
    background-size: cover;
    background-position: center;
    transition: transform 0.3s ease, background-color 0.3s ease;
} /* Ensure the image is centered */

#para:hover {
    transform: scale(1.1); 
    background-blend-mode: overlay; 
    color: yellow; 
}
      #sq {
    width: 170px;
    height: 170px;
    border-radius: 50%;
    display: flex;
    justify-content: center;
    align-items: center;
    color: white;
    font-size: 18px;
    background: url("https://adpostman.com/wp-content/uploads/classified-listing/2024/06/Wooden-House-Keys-Hanger-Key-Holder-For-HomeOffice-Decor-JaipurCrafts.png"); /* Ensure path is correct */
    background-size: cover;
    background-position: center; 
    transition: transform 0.3s ease, background-color 0.3s ease;
}
#sq:hover {
    transform: scale(1.1); 
    background-blend-mode: overlay; 
    color: yellow; 
}
#dia {
    width: 170px;
    height: 170px;
    border-radius: 50%;
    display: flex;
    justify-content: center;
    align-items: center;
    color: white;
    font-size: 18px;
    background: url("http://webneel.com/daily/sites/default/files/images/daily/11-2013/10-flower-paintings.jpg");
    background-size: cover;
    background-position: center;
    transition: transform 0.3s ease, background-color 0.3s ease;
}

#dia:hover {
    transform: scale(1.1); 
    background-blend-mode: overlay; 
    color: yellow; 
}

      .container {
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 90px;
            padding: 30px;
        }
        /* Styling for the tooltip */
.tooltip {
    position: absolute;
    background-color: rgba(0, 0, 0, 0.7);
    color: white;
    padding: 5px;
    border-radius: 5px;
    display: none;  /* Initially hidden */
    top: 50px;  /* Position the tooltip below the icon */
    left: 0;
}
.navbar-nav {
    display: flex;
    justify-content: flex-start; /* Align items to the left */
    align-items: center; /* Vertically align the items in the middle */
    list-style: none; /* Remove list bullets */
    padding: 0;
    margin: 0;
}
    </style>
  </head>
  <body>
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
      
          <a href="#"><img src="photos/logo.png" alt="Website Logo" class="logo-img"></a>
      
      
        <a class="navbar-brand" href="#">Artiva</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        &nbsp;  &emsp; &emsp; &emsp; &emsp; &emsp;&emsp; &emsp; &emsp; &emsp; &emsp; &emsp;
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <form class="d-flex" role="search" method="get" action="search.php">
            <input class="form-control me-2" type="search" name="q" placeholder="Search" aria-label="Search" style="width: 400px;">
            <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" href="#">Home</a>
              </li>
              <li class="nav-item dropdown" onmouseover="this.querySelector('.dropdown-menu').classList.add('show')" onmouseleave="this.querySelector('.dropdown-menu').classList.remove('show')">
                <a class="nav-link" href="#">Categories</a>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                  <li align="center"><a class="dropdown-item" href="Categories/handicrafts.html">Handicrafts</a></li>
                  <li align="center"><a class="dropdown-item" href="Categories/jewellery.html">Jewelry</a></li>
                  <li align="center"><a class="dropdown-item" href="Categories/HomeDecor.html">Home Decor</a></li>
                  <li  align="center"><a class="dropdown-item" href="Categories/Painting.html">Paintings</a></li>
                  <li align="center"><a class="dropdown-item" href="Categories/Sculpture.html">Sculpture</a></li>
                </ul>
              </li>
              <ul class="navbar-nav">
    <!-- Become Seller Link -->
    <li class="nav-item">
        <a class="nav-link" href="../Mini Project 2-1/Seller/steps.html">Become Seller</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="Competitions.php">Competitions</a>
    </li>
    
    <!-- User Profile Section -->
    <li class="nav-item" id="user-profile">
        <a href="#" id="user-icon-link">
            <!-- User profile icon -->
            <i class="fas fa-user-circle" id="user-icon"></i>
        </a>
        <!-- Display the logged-in username next to the icon -->
        <span id="username-text"><?php echo $username; ?></span>
    </li>

    <!-- Logout Link -->
    <li class="nav-item">
        <a class="nav-link" href="logout.php">Logout</a>
    </li>
</ul>

              



            </ul>
            
            <div class="ms-3">
              <a href="Categories/cart.html" class="nav-link d-inline" ><i class="fas fa-shopping-cart"></i></a>
              <a href="Categories/wishlist.html" class="nav-link d-inline"><i class="fas fa-heart"></i></a>
            </div>
          </div>
        </div>
        </nav>
    
      
     <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3" aria-label="Slide 4"></button>
      </div>
      <a href="#" target="_blank">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="photos/3.jpg" class="d-block w-100" alt="image not found">
          <div class="carousel-caption d-none d-md-block">
          </div>
        </div>
      </a>
      <a href="#" target="_blank">
        <div class="carousel-item">
          <img src="photos/2.jpg" class="d-block w-100" alt="image not found">
          <div class="carousel-caption d-none d-md-block">
          </div>
        </div>
        </a>
        <a href="#" target="_blank">
        <div class="carousel-item">
          <img src="photos/1.jpg" class="d-block w-100" alt="image not found">
          <div class="carousel-caption d-none d-md-block">
          </div>
        </div>
        </a>
        <a href="#" target="_blank">
        <div class="carousel-item">
          <img src="photos/4.jpg" class="d-block w-100" alt="image not found">
          <div class="carousel-caption d-none d-md-block">
          </div>
        </div>
        </a>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
     </div>
     
     <div class="container">
     
     <a href="../Mini Project 2-1/Categories/handicrafts.html">
     <div id="circle"></div>
     </a>
     <a href="../Mini Project 2-1/Categories/jewellery.html">
     <div id="rect"></div>
     </a>
     <a href="../Mini Project 2-1/Categories/HomeDecor.html">
     <div id="sq"></div>
     </a>
     <a href="../Mini Project 2-1/Categories/Painting.html">
     <div id="dia"></div>
     </a>
     <a href="../Mini Project 2-1/Categories/Sculpture.html">
     <div id="para"></div>
     </a>
     </div>
      
     

     <!-- Product Layout -->
     <div class="container" align = "left">
      <!-- Handicrafts Section -->
      <div class="product-category">
        <h2>Handicrafts</h2>
        <div class="row g-4">
          <!-- Product 1 -->
          <div class="col-md-4">
              <div class="product-card">
                  <img src="photos/1.jpg" alt="Handcrafted Vase">
                  <i class="fas fa-heart wishlist-icon" data-product-id="product1098"></i>
                  <div class="product-card-body">
                      <h3>Handcrafted Vase</h3>
                      <p>Elegant ceramic vase with intricate patterns. Perfect for home decor.</p>
                      <div class="price">₹750 <span class="originalPrice">₹950</span> <span class="discount">21% OFF</span></div>
                      <button class="add-to-cart" data-product-id="product1098">Add to Cart</button>
                  </div>
              </div>
          </div>
      
          <!-- Product 2 -->
          <div class="col-md-4">
              <div class="product-card">
                  <img src="photos/image.png" alt="Wooden Elephant">
                  <i class="fas fa-heart wishlist-icon" data-product-id="product2098"></i>
                  <div class="product-card-body">
                      <h3>Wooden Elephant</h3>
                      <p>Hand-carved wooden elephant, a beautiful decorative piece.</p>
                      <div class="price">₹550 <span class="originalPrice">₹700</span> <span class="discount">21% OFF</span></div>
                      <button class="add-to-cart" data-product-id="product2098">Add to Cart</button>
                  </div>
              </div>
          </div>
      
          <!-- Product 3 -->
          <div class="col-md-4">
              <div class="product-card">
                  <img src="photos\j6.jpg" alt="Embroidered Floral Necklace" width="300" height="250">
                  <i class="fas fa-heart wishlist-icon" data-product-id="product13123"></i>
                  <div class="product-card-body">
                      <h3>Embroidered Floral Necklace</h3>
                      <p>A handmade jewelry set featuring a necklace with yellow and white embroidered flowers.</p>
                      <div class="price">₹355 <span class="originalPrice">₹415</span> <span class="discount">14% OFF</span></div>
                      <button class="add-to-cart" data-product-id="product13123">Add to Cart</button>
                  </div>
              </div>
          </div>
      </div>
      
        
     



     
     <section class="py-6 dark:bg-gray-100 dark:text-gray-900">
      <div class="container grid grid-cols-2 gap-4 p-4 mx-auto md:grid-cols-4">
        
        <img alt="" class="w-full h-full rounded shadow-sm min-h-48 dark:bg-gray-500 aspect-square" src="photos/Hp1.jpg">
        <img alt="" class="w-full h-full rounded shadow-sm min-h-48 dark:bg-gray-500 aspect-square" src="photos/Hp2.jpg">
        <img alt="" class="w-full h-full rounded shadow-sm min-h-48 dark:bg-gray-500 aspect-square" src="photos/Hp3.jpg">
        <img alt="" class="w-full h-full rounded shadow-sm min-h-48 dark:bg-gray-500 aspect-square" src="photos/Hp9.jpg">
        <img alt="" class="w-full h-full rounded shadow-sm min-h-48 dark:bg-gray-500 aspect-square" src="photos/Hp8.jpg">
        <img alt="" class="w-full h-full rounded shadow-sm min-h-48 dark:bg-gray-500 aspect-square" src="photos/Hp7.jpg">
        <img alt="" class="w-full h-full rounded shadow-sm min-h-48 dark:bg-gray-500 aspect-square" src="photos/Hp6.jpg">
        <img alt="" class="w-full h-full rounded shadow-sm min-h-48 dark:bg-gray-500 aspect-square" src="photos/Hp5.jpg">
        <img src="https://source.unsplash.com/random/302x302/" alt="" class="w-full h-full col-span-2 row-span-2 rounded shadow-sm min-h-96 md:col-start-1 md:row-start-3 dark:bg-gray-500 aspect-square">
      </div>
    </section>


     <div class="c" padding = "0px">
      <footer class="bg-light text-dark py-4" align="left">
          <div class="container px-0" align="left">
              <div class="row" align="left">
                  <div class="col-md-4" align="left">
                      <h5>About Us</h5>
                      <p>Artiva is an online marketplace for handcrafted products, supporting artisans and small businesses worldwide. Discover unique, high-quality items created with love and passion.</p>
                  </div>
                  <div class="col-md-4">
                      <h5>Quick Links</h5>
                      <ul class="list-unstyled">
                          <li><a class="text-dark" href="#">Home</a></li>
                          <li><a class="text-dark" href="#">Shop</a></li>
                          <li><a class="text-dark" href="#">Become Seller</a></li>
                          <li><a class="text-dark" href="#">FAQ</a></li>
                          <li><a class="text-dark" href="#">Contact Us</a></li>
                      </ul>
                  </div>
                  <div class="col-md-4">
                      <h5>Contact</h5>
                      <p><i class="fas fa-map-marker-alt"></i> 123 Artiva Street, City Name, Country</p>
                      <p><i class="fas fa-phone"></i> +1 234 567 890</p>
                      <p><i class="fas fa-envelope"></i> info@artiva.com</p>
                      <div class="mt-3">
                          <a href="#" class="text-dark me-3"><i class="fab fa-facebook-f"></i></a>
                          <a href="#" class="text-dark me-3"><i class="fab fa-twitter"></i></a>
                          <a href="#" class="text-dark me-3"><i class="fab fa-instagram"></i></a>
                          <a href="#" class="text-dark me-3"><i class="fab fa-linkedin-in"></i></a>
                      </div>
                  </div>
              </div>
              <div class="text-center mt-4">
                  <p>&copy; 2024 Artiva. All Rights Reserved.</p>
              </div>
          </div>
      </footer>
  </div>
  <script>
  
  document.addEventListener('DOMContentLoaded', () => {
    // Add to Cart Functionality
    const addToCartButtons = document.querySelectorAll('.add-to-cart');
    addToCartButtons.forEach(button => {
        button.addEventListener('click', (e) => {
            const productElement = e.target.closest('.product-card');
            const productId = productElement.querySelector('.add-to-cart').getAttribute('data-product-id');
            const productName = productElement.querySelector('h3').textContent;

            // Extracting the price from the price element
            const priceText = productElement.querySelector('.price').textContent;
            const productPrice = parseFloat(priceText.replace('₹', '').trim()); // Remove ₹ and any extra spaces

            const productImage = productElement.querySelector('img').src;

            // Retrieve the cart from localStorage or initialize an empty array
            let cart = JSON.parse(localStorage.getItem('cart')) || [];

            // Check if the product is already in the cart
            const existingCartItem = cart.find(item => item.id === productId);

            if (existingCartItem) {
                // If product is already in cart, do nothing or show a message
                alert("This product is already in your cart.");
            } else {
                // If product is not in cart, add it
                cart.push({
                    id: productId,
                    name: productName,
                    price: productPrice,
                    image: productImage
                });

                // Save the updated cart to localStorage
                localStorage.setItem('cart', JSON.stringify(cart));

                // Optional: Change button text to indicate it's in the cart
                e.target.textContent = 'Added to Cart';
            }
        });
    });

    // Wishlist Functionality
    const wishlistIcons = document.querySelectorAll('.wishlist-icon');
    wishlistIcons.forEach(icon => {
        icon.addEventListener('click', (e) => {
            const productElement = e.target.closest('.product-card');
            const productId = productElement.querySelector('.wishlist-icon').getAttribute('data-product-id');
            const productName = productElement.querySelector('h3').textContent;

            // Extracting the price from the price element
            const priceText = productElement.querySelector('.price').textContent;
            const productPrice = parseFloat(priceText.replace('₹', '').trim()); // Remove ₹ and extra spaces

            const productImage = productElement.querySelector('img').src;

            // Retrieve the wishlist from localStorage or initialize an empty array
            let wishlist = JSON.parse(localStorage.getItem('wishlist')) || [];

            // Check if the product is already in the wishlist
            const existingWishlistItem = wishlist.find(item => item.id === productId);

            if (existingWishlistItem) {
                // If product is already in wishlist, do nothing or show a message
                alert("This product is already in your wishlist.");
            } else {
                // If product is not in wishlist, add it
                wishlist.push({
                    id: productId,
                    name: productName,
                    price: productPrice,
                    image: productImage
                });

                // Save the updated wishlist to localStorage
                localStorage.setItem('wishlist', JSON.stringify(wishlist));

                // Change the heart icon to indicate it's in the wishlist (optional)
                e.target.classList.add('added');
                e.target.innerHTML = '<i class="fas fa-heart"></i> Added';
            }
        });
    });
});

</script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js" integrity="sha384-Rx+T1VzGupg4BHQYs2gCW9It+akI2MM/mndMCy36UVfodzcJcF0GGLxZIzObiEfa" crossorigin="anonymous"></script>
  </body>
</html>
