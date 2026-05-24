<?php
$page = isset($_GET['p']) ? $_GET['p'] : 'home';
?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WEBIZONE</title>
    <link rel="icon" type="image/x-icon" href="webizone.png">
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>
<body>

    <div class="glow-bg glow-purple"></div>
    <div class="glow-bg glow-blue"></div>
    <div class="glow-bg glow-pink"></div>

    <header class="ios-glass">
        <div class="container-nav">
            <div class="logo">WEBI<span>ZONE</span></div>
            <nav id="nav-menu">
                <a href="index.php?p=home" class="<?= $page == 'home' ? 'active' : '' ?>">Start</a>
                <a href="index.php?p=home#uslugi">Usługi</a>
                <a href="?p=portfolio" class="<?= $page == 'portfolio' ? 'active' : '' ?>">Portfolio</a>
                <a href="?p=kontakt" class="<?= $page == 'kontakt' ? 'active' : '' ?>">Kontakt</a>
            </nav>
            <div class="header-right">
                <a href="?p=kontakt" class="btn-ios-small desktop-only">Darmowa wycena</a>
                <div class="mobile-btn" id="mobile-btn"><i class="fas fa-bars"></i></div>
            </div>
        </div>
    </header>

    <div class="main-wrapper">
        <main>
            <?php if($page == 'home'): ?>
                <section class="hero container">
                    <div class="hero-text">
                        <div class="ios-badge">● Nowy standard designu</div>
                        <h1>PRZYSZŁOŚĆ <br><span>TWOJEJ FIRMY</span></h1>
                        <p>Tworzymy nowoczesne strony internetowe, które łączą estetykę, funkcjonalność i technologię. Prosty design, dobre doświadczenie użytkownika i rozwiązania dopasowane do potrzeb.</p>
                        <div class="hero-actions">
                            <a href="?p=kontakt" class="btn-ios-main">Zacznijmy projekt</a>
                            <a href="#uslugi" class="btn-ios-glass">Zobacz ofertę</a>
                        </div>
                    </div>

                    <div class="hero-panel">
                        <div class="ios-glass card-stat">
                            <div class="card-header">
                                <span>webizone.pl</span>
                                <img src="webizone.png" class="ios-icon" alt="WEBIZONE Logo" style="width: 40px; height: 40px;">
                            </div>
                            <div class="ios-number">97%</div>
                            <div class="ios-progress">
                                <div class="prog-text"><span>Zadowolonych klientów</span></div>
                                <div class="bar"><div class="fill"></div></div>
                            </div>
                            <div class="ios-grid">
                                <div class="ios-item"><span>Wsparcie</span><strong>24/7</strong></div>
                                <div class="ios-item"><span>Doświadczenie</span><strong>4 lata +</strong></div>
                            </div>
                        </div>
                    </div>
                </section>

                <section id="uslugi" class="services container">
                    <div class="title-center"><h2>Nasze <span>Usługi</span></h2></div>
                    <div class="services-grid">
                        <div class="ios-glass s-card">
                            <div class="s-dot">01</div>
                            <h3>Wizytówki Premium</h3>
                            <p>Strony typu One-Page z nieskazitelnym designem.</p>
                        </div>
                        <div class="ios-glass s-card">
                            <div class="s-dot">02</div>
                            <h3>E-commerce</h3>
                            <p>Sklepy online intuicyjne jak smartfon.</p>
                        </div>
                        <div class="ios-glass s-card">
                            <div class="s-dot">03</div>
                            <h3>Systemy dedykowane</h3>
                            <p>Rozwiązania skrojone pod Twój biznes.</p>
                        </div>
                    </div>
                </section>

            <?php elseif($page == 'portfolio'): ?>
                <section class="container">
                    <div class="title-center"><h2>Portfolio <span>Showcase</span></h2></div>
                    <div class="ios-grid-port">
                        <div class="ios-glass port-item" onclick="openGallery('https://i.imgur.com/5ONPxEU.png', 'One-Page Dashboard')">
                            <div class="port-img" style="background-image: url('https://i.imgur.com/5ONPxEU.png');"></div>
                            <div class="port-info"><span>UI/UX Design</span><h4>Modern Dashboard</h4></div>
                        </div>
                        <div class="ios-glass port-item" onclick="openGallery('https://i.imgur.com/lluzI9P.png', 'Luxury E-commerce')">
                            <div class="port-img" style="background-image: url('https://i.imgur.com/lluzI9P.png');"></div>
                            <div class="port-info"><span>E-commerce</span><h4>Luxury Brand</h4></div>
                        </div>
                        <div class="ios-glass port-item" onclick="openGallery('https://i.imgur.com/rFcEHld.png', 'Dedicated Service Inquiry Website')">
                            <div class="port-img" style="background-image: url('https://i.imgur.com/rFcEHld.png');"></div>
                            <div class="port-info"><span>Dedicated website</span><h4>Service Inquiry Website</h4></div>
                        </div>
                    </div>
                </section>

            <?php elseif($page == 'kontakt'): ?>
                <section class="container">
                    <div class="title-center"><h2>Napisz <span>do nas</span></h2></div>
                    <div class="ios-glass contact-card">
                        <!-- POPRAWKA: Dodano id i name -->
                        <form id="contact-form">
                            <input type="text" name="user_name" placeholder="Twoje Imię" class="ios-input" required>
                            <input type="email" name="user_email" placeholder="Twój E-mail" class="ios-input" required>
                            <textarea name="message" placeholder="W czym możemy pomóc?" rows="4" class="ios-input" required></textarea>
                            <button type="submit" id="submit-btn" class="btn-ios-main">Wyślij wiadomość</button>
                            <div id="status-msg" style="margin-top: 15px; font-size: 0.85rem; text-align: center;"></div>
                        </form>
                    </div>
                </section>
            <?php endif; ?>
        </main>
    </div>

    <div id="galleryModal" class="gallery-modal" onclick="closeGallery()">
        <span class="close-gallery">&times;</span>
        <img class="modal-content" id="imgFull">
        <div id="caption"></div>
    </div>

    <footer class="ios-footer">
        <p>&copy; <?php echo date("Y"); ?> WEBIZONE. Nowoczesne strony www.</p>
    </footer>

    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/@emailjs/browser@4/dist/email.min.js"></script>
    <script>
        (function() {
            emailjs.init({
              publicKey: "NayP0L320YB9CS6m7",
            });
        })();

        // 2. OBSŁUGA FORMULARZA
const form = document.getElementById('contact-form');
if (form) {
    form.addEventListener('submit', function(event) {
        event.preventDefault();
        const btn = document.getElementById('submit-btn');
        const status = document.getElementById('status-msg');

        btn.innerText = "Wysyłanie...";
        btn.disabled = true;

        // PRZECHODZIMY NA METODĘ 'send' (zamiast sendForm)
        // Tworzymy czysty obiekt z danymi, co eliminuje błąd 413
        const templateParams = {
            user_name: form.user_name.value,
            user_email: form.user_email.value,
            message: form.message.value
        };

        emailjs.send('home_pl_service', 'template_k8gdw95', templateParams)
            .then(() => {
                status.style.color = "#4ade80";
                status.innerText = "Wiadomość wysłana! Odezwiemy się niebawem. ✅";
                form.reset();
                btn.innerText = "Wyślij wiadomość";
                btn.disabled = false;
            }, (error) => {
                status.style.color = "#f87171";
                status.innerText = "Błąd wysyłania (Kod: " + error.status + "). ❌";
                btn.innerText = "Spróbuj ponownie";
                btn.disabled = false;
                console.log('FAILED...', error);
            });
    });
}

        const btnMenu = document.getElementById('mobile-btn');
        const menu = document.getElementById('nav-menu');
        btnMenu.onclick = () => menu.classList.toggle('active');

        function openGallery(src, title) {
            document.getElementById("galleryModal").style.display = "flex";
            document.getElementById("imgFull").src = src;
            document.getElementById("caption").innerHTML = title;
        }

        function closeGallery() {
            document.getElementById("galleryModal").style.display = "none";
        }

        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                const target = document.querySelector(this.getAttribute('href'));
                if(target) {
                    e.preventDefault();
                    target.scrollIntoView({ behavior: 'smooth' });
                    menu.classList.remove('active');
                }
            });
        });
    </script>

    <a href="https://www.instagram.com/webizone" class="instagram-float" target="_blank" title="Obserwuj nas na Instagramie">
        <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <path fill="white" d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/>
        </svg>
    </a>
</body>
</html>