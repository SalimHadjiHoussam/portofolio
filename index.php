<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- link file css -->
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <nav class="contanier">
            <img class="logo" src="img/log.PNG" alt="">
            <i id="btn-menu" class="fa-solid fa-bars"></i>
            <div class="nav-links">
                <a href="#home" class="active">Home</a>
                <a href="#about">A propos</a>
                <a href="#services">Services</a>
                <a href="#Portfolio">Portfolio</a>
                <a href="#Contact">Contact</a>
            </div>
        </nav>
    </header>
<!-- start home sec -->
    <div class="hero" id="home">
        <div class="contanier">
            <div class="content">
                <h4>Salut , je suis</h4>
                <h1>Salim Hadji Houssam</h1>
                <p>Développement web</p>
                <a href="#" class="btn">Telecharger mon cv ici!</a>
            </div>

            <div class="hero-img">
                <img src="img/WhatsApp Image 2024-07-16 à 23.21.50_5da4fe89.jpg" alt="">
            </div>
        </div>
    </div>

    <!-- start about sec -->

    <section id="about" class="about">
        <div class="contanier">
            <div class="about-img">
                <img src="img/WhatsApp Image 2024-07-16 à 23.21.50_b83c31e3.jpg" alt="">
            </div>
            <div class="content">
                <h1>A propos <span>de moi</span></h1>
                <h3>Développement web</h3>
                <p>Je suis passionné par l'informatique et j'ai déjà accumulé deux ans d'expérience dans ce domaine.
                     Où j'ai acquis des compétences solides en développement web, 
                     notamment en HTML, CSS, JavaScript, PHP et Java. Ces connaissances me permettent de créer des
                      sites web et des applications dynamiques et fonctionnelles. Mon objectif est d'aller loin dans
                       le domaine de l'informatique, en continuant à apprendre et à me perfectionner pour relever de 
                       nouveaux défis technologiques. Je suis déterminé à développer mon expertise et à contribuer
                        de manière significative à ce secteur en constante évolution.</p>
                     <div class="btns">
                        <a href="#" class="btn">Telecharger mon cv ici!</a>
                        <a href="#" class="btn">Contact moi</a>
                     </div>
            </div>
        </div>
    </section>

    <!-- start Services -->

    <section id="services" class="services">
        <div class="contanier">
            <div class="sec-top">
                <h1>Our <span>Services</span></h1>
            </div>

            <div class="boxs">

                <div class="box">
                    <i class="fa-solid fa-pen-ruler"></i>
                    <h3>Web Design</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                         Voluptates ad sit expedita maxime ipsa molestias quasi?</p>

                         <a href="#" class="btn">Read More</a>
                </div>

                <div class="box">
                    <i class="fa-solid fa-rocket"></i>
                    <h3>Fast Performance</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                         Voluptates ad sit expedita maxime ipsa molestias quasi?</p>

                         <a href="#" class="btn">Read More</a>
                </div>

                <div class="box">
                    <i class="fa-solid fa-code"></i>
                    <h3>Clean Code</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                         Voluptates ad sit expedita maxime ipsa molestias quasi?</p>

                         <a href="#" class="btn">Read More</a>
                </div>
            </div>
        </div>
    </section>


    <!-- start Portfolio -->

    <section id="Portfolio" class="portfolio">
        <div class="contanier">
            <div class="sec-top">
                <h1>Latest <span>Projects</span></h1>
            </div>

            <div class="boxs">

                <div class="box">
                    <div class="box-hover">
                        <span>Landing Page</span>
                    </div>
                    <img src="img/project1.png" alt="">
                </div>

                <div class="box">
                    <div class="box-hover">
                        <span>Landing Page</span>
                    </div>
                    <img src="img/project2.png" alt="">
                </div>

                <div class="box">
                    <div class="box-hover">
                        <span>Landing Page</span>
                    </div>
                    <img src="img/project3.png" alt="">
                </div>

                <div class="box">
                    <div class="box-hover">
                        <span>Landing Page</span>
                    </div>
                    <img src="img/project4.png" alt="">
                </div>

                <div class="box">
                    <div class="box-hover">
                        <span>Landing Page</span>
                    </div>
                    <img src="img/project5.png" alt="">
                </div>

                <div class="box">
                    <div class="box-hover">
                        <span>Landing Page</span>
                    </div>
                    <img src="img/project6.png" alt="">
                </div>

            </div>
        </div>
    </section>


    <!-- start Contact -->

    <section id="Contact" class="contact">
        <div class="contanier">
            <div class="sec-top">
                <h1>Contact <span>Me</span></h1>
            </div>

            <form action="">
                <input type="text" placeholder="First Name">
                <input type="text" placeholder="Last Name">
                <input type="number" placeholder="Phone Number">
                <input type="email" placeholder="Email Address">
                <textarea name="" id="" cols="30" rows="10" placeholder="Your Message"></textarea>
                <button class="btn">Send Message</button>
            </form>
        </div>
    </section>
    <script src="main.js"></script>
</body>
</html>