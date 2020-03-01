<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- <link rel="stylesheet" href="css/reset.css"> -->
        <link rel="stylesheet" href="css/app.css">
    <!-- <link rel="stylesheet" href="sass/styles.scss"> -->
    <script src="https://use.fontawesome.com/88d424c6a6.js"></script>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
    <section id="welcome">
        <div class="welcome-menu">
            <div class="logo">
                <img src="https://pngimage.net/wp-content/uploads/2018/06/resto-png-3.png" alt="">
            </div>
            <div class="menu">
                <div class="menu-title">
                    Menu
                </div>
                <ul class="links">
                    <li>
                        <a href="#">Menu</a>
                    </li>
                    <li>
                        <a href="#">Wait List</a>
                    </li>
                    <li>
                        <a href="#">Giftcards</a>
                    </li>
                    <li>
                        <a href="#">Offers</a>
                    </li>
                </ul>
            </div>
            <div class="social-icons">
                <a href="#"><i class="fa fa-facebook"></i></a>
                <a href="#"><i class="fa fa-twitter"></i></a>
                <a href="#"><i class="fa fa-instagram"></i></a>
            </div>
            <div class="location">
                <div class="address">
                    234 Main st, <br>
                    New York, NY 11747
                </div>
                <div class="phone-number">
                    <a href="tel:7182198652">718-219-8652</a>
                </div>
            </div>
        </div>

        <div class="welcome-jumbo">
            <div class="status animated flash slow">NEW</div>
            <h1>The Billy Burger</h1>
            <img src="https://i.ya-webdesign.com/images/hamburger-and-fries-png-4.png" alt="" class="burger-fries">
            <!-- class="burger-fries animated infinite pulse slow"> -->
        </div>
    </section>

    <!-- Information about the organization -->
    <section id="information">
        <div class="restaurant-image">
            <img src="img/restaurant-table-and-chairs-1581384.jpg" alt="restaurant-tables-chairs">
        </div>
        <div class="info">
            <h2>We Started From The Bottom in 1984</h2>
            <div class="paragraphs">
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Doloremque cum blanditiis consequuntur
                    voluptas
                    officia. Neque ipsum eaque inventore praesentium, mollitia eligendi soluta provident explicabo
                    possimus
                    adipisci! Accusamus dolor suscipit ratione! Lorem ipsum dolor sit amet, consectetur adipisicing
                    elit. Aliquid voluptatum adipisci obcaecati assumenda quod earum itaque quam nobis laborum nostrum
                    voluptas distinctio similique eaque non, aut porro, doloribus incidunt quo.
                </p>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Doloremque cum blanditiis consequuntur
                    voluptas
                    officia. Neque ipsum eaque inventore praesentium, mollitia eligendi soluta provident explicabo
                    possimus
                    adipisci! Accusamus dolor suscipit ratione! Lorem, ipsum dolor sit amet consectetur adipisicing
                    elit. Eveniet labore totam illo ad mollitia pariatur, eos explicabo possimus voluptate hic nostrum
                    tempora consequuntur repellat quidem quaerat tempore soluta voluptatum corrupti! </p>
            </div>
            <a href="#" class="about-link">
                <span>Learn more about our restaurants</span>
                <div class="circle-right">
                    <i class="fa fa-chevron-right"></i>
                </div>
            </a>
        </div>
    </section>


    <!-- **** FOOD PREVIEW SECTION ****** -->
    <section id="food-preview">
        <h2>We have everything you need to kill your hunger</h2>
        <div class="button-rounded">
            View Our Menu
        </div>

        <div class="container">
            <div class="btn right-btn" id="rightBtn">
                <i class="fa fa-chevron-right"></i>
            </div>
            <div class="btn left-btn" id="leftBtn">
                <i class="fa fa-chevron-left"></i>
            </div>
            <div class="food-slider">
                <div class="sliding-system" id="slideSystem">
                    <div class="slide">
                        <div class="background">
                            <!-- This will be behind the .content below. Will appear with hover animation -->
                        </div>
                        <div class="content">
                            <div class="food-title">
                                Starters
                            </div>
                            <p class="food-description">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere, ullam? Culpa harum
                                reprehenderit
                                magnam quia explicabo perferendis sapiente quisquam ipsa ea tenetur maxime dignissimos
                                eaque,
                                architecto consectetur veniam consequatur similique!
                            </p>
                            <div class="food-image">
                                <img src="img/kisspng-buffalo-wing-nachos-onion-ring-wrap-macaroni-and-c-sticks-5ac414802191e5.5826062815227997441375.png"
                                    alt="">
                            </div>
                        </div>
                    </div>
                    <div class="slide">
                        <div class="background">
                            <!-- This will be behind the .content below. Will appear with hover animation -->
                        </div>
                        <div class="content">
                            <div class="food-title">
                                Burgers
                            </div>
                            <p class="food-description">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere, ullam? Culpa harum
                                reprehenderit
                                magnam quia explicabo perferendis sapiente quisquam ipsa ea tenetur maxime dignissimos
                                eaque,
                                architecto consectetur veniam consequatur similique!
                            </p>
                            <div class="food-image">
                                <img src="https://i.ya-webdesign.com/images/hamburger-and-fries-png-4.png" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="slide">
                        <div class="background">
                            <!-- This will be behind the .content below. Will appear with hover animation -->
                        </div>
                        <div class="content">
                            <div class="food-title">
                                Entrees
                            </div>
                            <p class="food-description">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere, ullam? Culpa harum
                                reprehenderit
                                magnam quia explicabo perferendis sapiente quisquam ipsa ea tenetur maxime dignissimos
                                eaque,
                                architecto consectetur veniam consequatur similique!
                            </p>
                            <div class="food-image">
                                <img src="img/kisspng-sausage-steak-pasta-cooking-meat-cooked-meat-png-clipart-5a7978ff037984.4231625115179102710142.png"
                                    alt="" style="position: absolute; top: 85%; left: 30px; width: 75%;">
                            </div>
                        </div>
                    </div>
                    <div class="slide">
                        <div class="background">
                            <!-- This will be behind the .content below. Will appear with hover animation -->
                        </div>
                        <div class="content">
                            <div class="food-title">
                                Sides
                            </div>
                            <p class="food-description">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere, ullam? Culpa harum
                                reprehenderit
                                magnam quia explicabo perferendis sapiente quisquam ipsa ea tenetur maxime dignissimos
                                eaque,
                                architecto consectetur veniam consequatur similique!
                            </p>
                            <div class="food-image">
                                <img src="img/kisspng-greek-salad-vinaigrette-caesar-salad-fruit-salad-salad-5abc15ffee6593.7693796115222758399765.png"
                                    alt="" style="position: absolute; top: 80%; left: 30px; width: 75%;">
                            </div>
                        </div>
                    </div>
                    <div class="slide">
                        <div class="background">
                            <!-- This will be behind the .content below. Will appear with hover animation -->
                        </div>
                        <div class="content">
                            <div class="food-title">
                                Desserts
                            </div>
                            <p class="food-description">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere, ullam? Culpa harum
                                reprehenderit
                                magnam quia explicabo perferendis sapiente quisquam ipsa ea tenetur maxime dignissimos
                                eaque,
                                architecto consectetur veniam consequatur similique!
                            </p>
                            <div class="food-image">
                                <img src="img/kisspng-coffee-tiramisu-ladyfinger-italian-cuisine-chocola-chocolate-cake-with-spoon-5a8cf6646a3186.994008741519187556435.png"
                                    alt="" style="position: absolute; top: 85%; left: 30px; width: 75%;">
                            </div>
                        </div>
                    </div>
                    <!-- ******* -->
                    <div class="slide">
                        <div class="background">
                            <!-- This will be behind the .content below. Will appear with hover animation -->
                        </div>
                        <div class="content">
                            <div class="food-title">
                                Fountain
                            </div>
                            <p class="food-description">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere, ullam? Culpa harum
                                reprehenderit
                                magnam quia explicabo perferendis sapiente quisquam ipsa ea tenetur maxime dignissimos
                                eaque,
                                architecto consectetur veniam consequatur similique!
                            </p>
                            <div class="food-image">
                                <img src="img/5a34b4d8ca3042.7165704415134036088282.png" alt=""
                                    style="width: 35%; position:absolute; left: 33%; top: 85%;">
                            </div>
                        </div>
                    </div>
                    <div class="slide">
                        <div class="background">
                            <!-- This will be behind the .content below. Will appear with hover animation -->
                        </div>
                        <div class="content">
                            <div class="food-title">
                                Kids
                            </div>
                            <p class="food-description">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere, ullam? Culpa harum
                                reprehenderit
                                magnam quia explicabo perferendis sapiente quisquam ipsa ea tenetur maxime
                                dignissimos
                                eaque,
                                architecto consectetur veniam consequatur similique!
                            </p>
                            <div class="food-image">
                                <img src="img/5a2b5796de7717.5928634515127899109112.png" alt=""
                                    style="position: absolute; top: 80%; left: 20%; width: 60%;">
                            </div>
                        </div>
                    </div>
                    <div class="slide">
                        <div class="background">
                            <!-- This will be behind the .content below. Will appear with hover animation -->
                        </div>
                        <div class="content">
                            <div class="food-title">
                                Wine
                            </div>
                            <p class="food-description">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere, ullam? Culpa harum
                                reprehenderit
                                magnam quia explicabo perferendis sapiente quisquam ipsa ea tenetur maxime
                                dignissimos
                                eaque,
                                architecto consectetur veniam consequatur similique!
                            </p>
                            <div class="food-image">
                                <img src="img/5a2187b16157e1.4606110915121468653987.png" alt=""
                                    style="position: absolute; top: 85%; left: 33%; width: 42%;">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </section>

    move();

    <script src="js/main.js"></script>
        <!-- <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    Laravel
                </div>

                <div class="links">
                    <a href="https://laravel.com/docs">Docs</a>
                    <a href="https://laracasts.com">Laracasts</a>
                    <a href="https://laravel-news.com">News</a>
                    <a href="https://blog.laravel.com">Blog</a>
                    <a href="https://nova.laravel.com">Nova</a>
                    <a href="https://forge.laravel.com">Forge</a>
                    <a href="https://vapor.laravel.com">Vapor</a>
                    <a href="https://github.com/laravel/laravel">GitHub</a>
                </div>
            </div>
        </div> -->
    </body>
</html>
