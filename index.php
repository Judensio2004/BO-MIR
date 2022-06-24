<?php
    require 'functions.php';
    $connection = dbconnect();
     
    $result = $connection->query("SELECT * FROM `projecten`")


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio Judensio</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" media="screen and (max-width:80rem)" href="tablet.css">
    <link rel="stylesheet" media="screen and (max-width:53rem)" href="phone.css">
</head>
<body>
    <nav class="navbar">
        <ul>
            <li><a href="#home">Home</a></li>
            <li><a href="#about">About Me</a></li>
            <li><a href="#portfolio">Portfolio</a></li>
            <li><a href="#services">Services</a></li>
            <li><a href="#contact">Contact Me</a></li>
        </ul>
    </nav>

    <section id="home">
        <div class="main">
            <h1 class="headings">  I AM JUDENSIO STERN <br> WEBSITE DEVELOPER</h1> 
            <button class="btn">
                hire me
            </button>
        </div>
    </section>

    <section id="about">
            <h1 class="headings">About me</h1>
            <div id="pic">
            <img src="img/judensio.webp" alt="">
            <div id="intro">
                <h2>JUDENSIO STERN</h2>
                <p>HI there, my name is Judensio Stern, I am 17 years old and live in the Netherlands. I like to play football and playing Fifa 22. I built this website to check my HTML, JAVASCRIPT and CSS skills.
                </p>
            </div>
        </div>
    </section>

    <section id="portfolio">
        <h1 class="headings">Portfolio</h1>
        <div class="testimonial">
            <div class="small-container">
                <div class="row">
                <?php foreach($result as $row): ?>
                    <div class="col-3">
                        <i class="fa fa-quote-left"></i>
                        <p class="text"><?php echo $row['beschrijving'] ?></p>
                        
                        <figure class="programmers-img" style="background-image: url(/test.php/database/img/<?php echo $row['foto'];?>)" > </figure>
                        <h3><?php echo $row['titel']?></h3>
                        <a target="blanck" href="details.php?id=<?php echo $row['id'];?>" class="btn">More information</a>
                    </div>
                    <?php endforeach;?>
                </div>
            </div>
        </div>
    </section>

    <section id="services">
        <h1 class="headings">Services</h1>
        <div class="row">
            <div class="box">
                <img src="img/website.webp" alt="">
                <h1 class="headings">Website Design</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere minima ipsam explicabo, et soluta quisquam expedita quae in eum dolore optio quidem corrupti, earum repudiandae impedit sunt repellendus voluptatibus culpa.</p>
            </div>
            <div class="box">
                <img src="img/UX.webp" alt="">
                <h1 class="headings">UXD/UI <br> Design</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere minima ipsam explicabo, et soluta quisquam expedita quae in eum dolore optio quidem corrupti, earum repudiandae impedit sunt repellendus voluptatibus culpa.</p>
            </div>
            <div class="box">
                <img src="img/digital.webp" alt=""> 
                <h1 class="headings">Digital Marketing</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere minima ipsam explicabo, et soluta quisquam expedita quae in eum dolore optio quidem corrupti, earum repudiandae impedit sunt repellendus voluptatibus culpa.</p>
            </div>
        </div>
    </section>

    <section id="contact">
        <h1 class="headings">Contact</h1>
        <form action="" class="form">
            <input type="text" name="name" class="input" placeholder="Enter Your Name">
            <input type="email" name="email" class="input" placeholder="Enter Your Email">
            <textarea name="msg" id="msg" cols="30" rows="10" placeholder="Enter Your Message"></textarea>
            <input type="submit" value="Send" id="Send">
        </form>
    </section>
    
    <ul class="reviews">
        <button class="arrow"><</button>
        <li class="review">
            <figure class="quote">&#10077;</figure>
            <section class="stars">&#9733;&#9733;&#9733;&#9734;&#9734;</section>
            <p>1. Lorem ipsum, dolor sit amet consectetur adipisicing elit. Enim, ipsam! Repudiandae est culpa beatae voluptatibus, enim et neque pariatur deserunt ipsam error numquam esse, natus explicabo architecto labore libero consequatur!</p>
        </li>
        <li class="review">
            <figure class="quote">&#10077;</figure>
            <section class="stars">&#9733;&#9733;&#9733;&#9733;&#9734;</section>
            <p>2. Lorem ipsum, dolor sit amet consectetur adipisicing elit. Enim, ipsam! Repudiandae est culpa beatae voluptatibus, enim et neque pariatur deserunt ipsam error numquam esse, natus explicabo architecto labore libero consequatur!</p>
        </li>
        <li class="review">
            <figure class="quote">&#10077;</figure>
            <section class="stars">&#9733;&#9733;&#9734;&#9734;&#9734;</section>
            <p>3. Lorem ipsum, dolor sit amet consectetur adipisicing elit. Enim, ipsam! Repudiandae est culpa beatae voluptatibus, enim et neque pariatur deserunt ipsam error numquam esse, natus explicabo architecto labore libero consequatur!</p>
        </li>
        <li class="review">
            <figure class="quote">&#10077;</figure>
            <section class="stars">&#9733;&#9733;&#9733;&#9734;&#9734;</section>
            <p>4. Lorem ipsum, dolor sit amet consectetur adipisicing elit. Enim, ipsam! Repudiandae est culpa beatae voluptatibus, enim et neque pariatur deserunt ipsam error numquam esse, natus explicabo architecto labore libero consequatur!</p>
        </li>
        <li class="review">
            <figure class="quote">&#10077;</figure>
            <section class="stars">&#9733;&#9733;&#9733;&#9733;&#9734;</section>
            <p>5. Lorem ipsum, dolor sit amet consectetur adipisicing elit. Enim, ipsam! Repudiandae est culpa beatae voluptatibus, enim et neque pariatur deserunt ipsam error numquam esse, natus explicabo architecto labore libero consequatur!</p>
        </li>
        <li class="review">
            <figure class="quote">&#10077;</figure>
            <section class="stars">&#9733;&#9733;&#9734;&#9734;&#9734;</section>
            <p>6. Lorem ipsum, dolor sit amet consectetur adipisicing elit. Enim, ipsam! Repudiandae est culpa beatae voluptatibus, enim et neque pariatur deserunt ipsam error numquam esse, natus explicabo architecto labore libero consequatur!</p>
        </li>
        <button class="arrow">></button>
    </ul>
    
</section>
<script src="main.js"></script>
</body>
</html>