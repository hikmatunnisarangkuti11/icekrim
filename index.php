<?php
$conn = mysqli_connect("localhost", "root", "", "toko");
$data = query("SELECT * FROM jajanan");

function query($query){
    global $conn;
    $result = mysqli_query($conn,$query);
    $wadah = [];
    while($baju = mysqli_fetch_assoc($result)){
        $wadah[] = $baju;
    }
    return $wadah;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"/>
    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>atun</title>
</head>
<body>

    <header>
        <div class="navbar">
            <div class="logo">
                <img src="logo.jpg" alt="">
            </div>
            <div class="navigation">
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="beli.php ">Shop</a></li>
                    <li><a href="#categoryContent swiper mySwiper">Ice Cream</a></li>
                    <li><a href="#trending">best seller</a></li>
                    <li><a href="#blog">Blog</a></li>
                </ul>
            </div>
            <div class="sci">
                <ul>
                    <li><a href="beli.php"><i class="fas fa-shopping-bag"></i></a></li>
                </ul>
            </div>
        </div>
    </header>

    <section class="hero swiper mySwiper">
        <div class="heroWrapper swiper-wrapper">
            <div class="card card1 swiper-slide">
                <div class="heroText">
                    <h3>Fresh & Delicious</h3>
                    <h1>Chocolate Ice Cream</h1>
                    <p>Premium Quality & tasty Products</p>
                    <button>
                        <a href="beli.php">shop now <i class="heroText"></i></a>
                    </button>
                    <!-- <button><li><a href="beli.php">Shop Now<i class="heroText"></i></a></li></button> -->
  
                </div>
            </div>
            <div class="card card2 swiper-slide">
                <div class="heroText">
                    <h3>Fresh & Delicious</h3>
                    <h1>Chocolate Ice Cream</h1>
                    <p>Premium Quality & tasty Products</p>
                    <button><a href="beli.php">Shop Now</a></button>
                </div>
            </div>
        </div>
    </section>

    <section class="service">
      <div class="service" id="service"></div>
        <div class="card">
            <div class="images">
                <i class="fas fa-plane"></i>
            </div>
            <div class="cardText">
                <h3>Free Worldwide Shipping</h3>
                <p>On Order Over $100</p>
            </div>
        </div>
        <div class="card">
            <div class="images">
                <i class="fas fa-dollar"></i>
            </div>
            <div class="cardText">
                <h3>Money Back Guarantee</h3>
                <p>Cash On Delivery</p>
            </div>
        </div>
        <div class="card">
            <div class="images">
                <i class="fas fa-gift"></i>
            </div>
            <div class="cardText">
                <h3>Special Gift Card</h3>
                <p>Offer Specials Bonus With Gift</p>
            </div>
        </div>
        <div class="card">
            <div class="images">
                <i class="fas fa-headset"></i>
            </div>
            <div class="cardText">
                <h3>Best Online Support</h3>
                <p>Call On 089627049537</p>
            </div>
        </div>
    </section>

    <section class="categorySection">
        <div class="categoryTitle">
            <h1>Top Category</h1>
        </div>

        <div class="categoryContent swiper mySwiper">
          <div class="categoryContent swiper mySwiper" id="categoryContent swiper mySwiper"></div>
            <div class="categoryWrapper swiper-wrapper">
                <div class="card swiper-slide">
                    <div class="images">
                        <img src="thumb-1.jpg" alt="">
                    </div>
                    <div class="cardText">
                        <h3>Cookies and Cream</h3>
                        <p>Ice Cream</p>
                    </div>
                </div>
                <div class="card swiper-slide">
                    <div class="images">
                        <img src="thumb-2.jpg" alt="">
                    </div>
                    <div class="cardText">
                        <h3>Popcorn Ice Cream</h3>
                        <p>Ice Cream</p>
                    </div>
                </div>
                <div class="card swiper-slide">
                    <div class="images">
                        <img src="thumb-3.jpg" alt="">
                    </div>
                    <div class="cardText">
                        <h3>Popcorn Ice Cream</h3>
                        <p>Ice Cream</p>
                    </div>
                </div>
                <div class="card swiper-slide">
                    <div class="images">
                        <img src="thumb-4.jpg" alt="">
                    </div>
                    <div class="cardText">
                        <h3>strawberry Ice Cream</h3>
                        <p>Ice Cream</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="trending">
      <div class="trending" id="trending"></div>
        <div class="trendingTitle">
            <h3>Trending Products</h3>
        </div>
        <div class="trendingbtn">
            <ul>
                <li><button>Trending</button></li>
                <li><button>Lattest</button></li>
                <li><button>Best Seller</button></li>
            </ul>
        </div>

        <div class="trendingContent">
            <div class="card">
                <div class="images">
                    <img src="product1.jpg" alt="">
                    <ul class="desc">
                        <li><a href=""><i class="fas fa-heart"></i></a></li>
                        <li><a href=""><i class="fas fa-eye"></i></a></li>
                        <li><a href=""><i class="fas fa-share"></i></a></li>
                    </ul>
                    <div class="buyBtn">
                        <button>Buy Now</button>
                    </div>
                </div>
                <div class="cardText">
                    <div class="ratting">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h3>Almond Ice Cream</h3>
                    <ul class="price">
                        <li>$19.00</li>
                        <li>$23.00</li>
                    </ul>
                </div>
            </div>
            <div class="card">
                <div class="images">
                    <img src="product2.jpg" alt="">
                    <ul class="desc">
                        <li><a href=""><i class="fas fa-heart"></i></a></li>
                        <li><a href=""><i class="fas fa-eye"></i></a></li>
                        <li><a href=""><i class="fas fa-share"></i></a></li>
                    </ul>
                    <div class="buyBtn">
                        <button>Buy Now</button>
                    </div>
                </div>
                <div class="cardText">
                    <div class="ratting">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h3>Chocolate Chips</h3>
                    <ul class="price">
                        <li>$19.00</li>
                        <li>$23.00</li>
                    </ul>
                </div>
            </div>
            <div class="card">
                <div class="images">
                    <img src="product3.jpg" alt="">
                    <ul class="desc">
                        <li><a href=""><i class="fas fa-heart"></i></a></li>
                        <li><a href=""><i class="fas fa-eye"></i></a></li>
                        <li><a href=""><i class="fas fa-share"></i></a></li>
                    </ul>
                    <div class="buyBtn">
                        <button>Buy Now</button>
                    </div>
                </div>
                <div class="cardText">
                    <div class="ratting">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h3>cornetto Ice Cream</h3>
                    <ul class="price">
                        <li>$19.00</li>
                        <li>$23.00</li>
                    </ul>
                </div>
            </div>
            <div class="card">
                <div class="images">
                    <img src="product4.jpg" alt="">
                    <ul class="desc">
                        <li><a href=""><i class="fas fa-heart"></i></a></li>
                        <li><a href=""><i class="fas fa-eye"></i></a></li>
                        <li><a href=""><i class="fas fa-share"></i></a></li>
                    </ul>
                    <div class="buyBtn">
                        <button>Buy Now</button>
                    </div>
                </div>
                <div class="cardText">
                    <div class="ratting">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h3>Chocolate </h3>
                    <ul class="price">
                        <li>$19.00</li>
                        <li>$23.00</li>
                    </ul>
                </div>
            </div>
            <div class="card">
                <div class="images">
                    <img src="product5.jpg" alt="">
                    <ul class="desc">
                        <li><a href=""><i class="fas fa-heart"></i></a></li>
                        <li><a href=""><i class="fas fa-eye"></i></a></li>
                        <li><a href=""><i class="fas fa-share"></i></a></li>
                    </ul>
                    <div class="buyBtn">
                        <button>Buy Now</button>
                    </div>
                </div>
                <div class="cardText">
                    <div class="ratting">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h3>strawberry</h3>
                    <ul class="price">
                        <li>$19.00</li>
                        <li>$23.00</li>
                    </ul>
                </div>
            </div>
            <div class="card">
                <div class="images">
                    <img src="product6.jpg" alt="">
                    <ul class="desc">
                        <li><a href=""><i class="fas fa-heart"></i></a></li>
                        <li><a href=""><i class="fas fa-eye"></i></a></li>
                        <li><a href=""><i class="fas fa-share"></i></a></li>
                    </ul>
                    <div class="buyBtn">
                        <button>Buy Now</button>
                    </div>
                </div>
                <div class="cardText">
                    <div class="ratting">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h3>Almond Ice Cream</h3>
                    <ul class="price">
                        <li>$19.00</li>
                        <li>$23.00</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section class="gallery">
        <div class="card">
            <div class="images">
                <img src="bigImg1.jpg" alt="">
            </div>
        </div>
        <div class="card">
            <h1>Ice Cream Cake </h1>
            <p>Save Up To 40% Off</p>
            <button>Shop Now</button>
        </div>
        <div class="card">
            <div class="images">
                <img src="bigImg2.jpg" alt="">
            </div>
        </div>
        <div class="card">
            <h1>Ice Cream Cup </h1>
            <p>Save Up To 40% Off</p>
            <button>Shop Now</button>
        </div>
        <div class="card">
            <div class="images">
                <img src="bigImg3.jpg" alt="">
            </div>
        </div>
        <div class="card">
            <h1>Ice Cream Cone </h1>
            <p>Save Up To 40% Off</p>
            <button>Shop Now</button>
        </div>
    </section>

    <section class="blog">
      <div class="blog" id="blog">
        <div class="blogTitle">
            <div class="title">
                <h1>Lattest Blog</h1>
            </div>
        </div>

        <div class="blogContent">
            <div class="card">
                <div class="images">
                    <img src="blog1.jpg" alt="">
                </div>
                <div class="cardText">
                    <h1>Delicious Ice Cream</h1>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Reprehenderit, earum. Ipsum saepe unde dolorum doloribus! Corrupti, nulla assumenda atque cupiditate aliquid rerum consequuntur. Qui, quisquam!</p>
                    <button>Read More</button>
                </div>
            </div>
            <div class="card">
                <div class="images">
                    <img src="blog2.jpg" alt="">
                </div>
                <div class="cardText">
                    <h1>Delicious Ice Cream</h1>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Reprehenderit, earum. Ipsum saepe unde dolorum doloribus! Corrupti, nulla assumenda atque cupiditate aliquid rerum consequuntur. Qui, quisquam!</p>
                    <button>Read More</button>
                </div>
            </div>
            <div class="card">
                <div class="images">
                    <img src="blog3.jpg" alt="">
                </div>
                <div class="cardText">
                    <h1>Delicious Ice Cream</h1>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Reprehenderit, earum. Ipsum saepe unde dolorum doloribus! Corrupti, nulla assumenda atque cupiditate aliquid rerum consequuntur. Qui, quisquam!</p>
                    <button>Read More</button>
                </div>
            </div>
        </div>
    </section>

    <footer>
        <div class="footer1">
            <h3>Contact Info</h3>
            <p>Address:13 Bogor Jawabarat, </p>
            <p>Phone : 089627049537</p>
            <p>hikmatunnisa72@gmail.com</p>
        </div>
        <div class="footer1">
            <h3>Information</h3>
            <p><a href="">Delivery</a></p>
            <p><a href="">Legal Notice</a></p>
            <p><a href="">About us</a></p>
            <p><a href="">Payment</a></p>
            <p><a href="">Stores</a></p>
        </div>
        <div class="footer1">
            <h3>Extra</h3>
            <p><a href="">Prices Drop</a></p>
            <p><a href="">Legal Notice</a></p>
            <p><a href="">Dite Map</a></p>
            <p><a href="">Login</a></p>
            <p><a href="">Stores</a></p>
        </div>
        <div class="footer1">
            <h3>My Account</h3>
            <p><a href="">My Info</a></p>
            <p><a href="">Personals</a></p>
            <p><a href="">Dite Map</a></p>
            <p><a href="">Orders</a></p>
            <p><a href="">Credits</a></p>
        </div>
        <div class="footer1">
            <h3>Newsletter</h3>
            <p>Subscribe to our newsletters now and stay up to date with new collections and exclusive offers.</p>
        </div>
    </footer>



    <script src="script.js"></script>

</body>
</html>
