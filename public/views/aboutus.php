<?php
    include_once 'nav/homenav.php';
    
?>
<script>
document.addEventListener('DOMContentLoaded', () => {
    const mobileMenuBtn = document.querySelector('.mobile-menu-btn');
    const navLinks = document.querySelector('.nav-links');
    const header = document.querySelector('header');

    mobileMenuBtn.addEventListener('click', () => {
        navLinks.classList.toggle('active');
        header.classList.toggle('menu-open');
    });

    // Close menu when clicking outside
    document.addEventListener('click', (e) => {
        if (!navLinks.contains(e.target) && !mobileMenuBtn.contains(e.target)) {
            navLinks.classList.remove('active');
            header.classList.remove('menu-open');
        }
        });
    });
    </script>


<section style="padding: 15rem 2rem; position: relative; overflow: hidden;">
    <style>
        @media (max-width: 768px) {
            .history-container {
                flex-direction: column !important;
                padding: 2rem !important;
                gap: 2rem !important;
            }
            .history-image {
                width: 100% !important;
            }
            .history-content {
                text-align: center !important;
            }
            section {
                padding: 8rem 1rem !important;
            }
        }
    </style>

    <!-- Decorative Elements -->
    <div style="position: absolute; top: 0; left: 0; width: 150px; height: 150px; background: rgba(218, 191, 156, 0.2); border-radius: 50%;"></div>
    <div style="position: absolute; bottom: -50px; right: -50px; width: 200px; height: 200px; background: rgba(218, 191, 156, 0.2); border-radius: 50%;"></div>
    
    <div style="max-width: 1200px; margin: 0 auto; text-align: center; position: relative; z-index: 1;">
    
    <div class="history-container" style="display: flex; gap: 4rem; align-items: center; background: linear-gradient(145deg, rgba(255, 255, 255, 0.95), rgba(250, 245, 240, 0.95)); 
                padding: 3rem; border-radius: 25px; box-shadow: 0 15px 40px rgba(0,0,0,0.15); position: relative; overflow: hidden;">
        
        <!-- Decorative elements -->
        <div style="position: absolute; top: -20px; left: -20px; width: 100px; height: 100px; background: rgba(218, 191, 156, 0.2); 
                    border-radius: 50%; filter: blur(2px);"></div>
        <div style="position: absolute; bottom: -30px; right: -30px; width: 150px; height: 150px; background: rgba(102, 67, 35, 0.1); 
                    border-radius: 50%; filter: blur(3px);"></div>

        <div class="history-image" style="flex: 1; transition: all 0.5s ease; position: relative;">
            <img src="../images/history.jpg" alt="Resort History" 
                 style="width: 100%; border-radius: 15px; box-shadow: 0 10px 30px rgba(0,0,0,0.2); 
                        transform: rotate(-2deg); transition: all 0.5s ease;"
                 onmouseover="this.style.transform='rotate(0deg) scale(1.03)'; this.style.boxShadow='0 15px 35px rgba(0,0,0,0.3)';"
                 onmouseout="this.style.transform='rotate(-2deg) scale(1)'; this.style.boxShadow='0 10px 30px rgba(0,0,0,0.2)';">
            <div style="position: absolute; top: -15px; right: -15px; background: rgb(102, 67, 35); color: white; 
                        padding: 0.5rem 1rem; border-radius: 20px; font-size: 0.9rem; transform: rotate(3deg);">
                Since 1985
            </div>
        </div>
        
        <div class="history-content" style="flex: 1; text-align: left;">
            <h3 style="color: rgb(102, 67, 35); font-size: 1.8rem; margin-bottom: 1.5rem; font-family: 'impact';">
                Our Story
            </h3>
            <p style="font-size: 1.1rem; line-height: 1.9; color: #4a4a4a; margin-bottom: 1.8rem; 
                     text-shadow: 0 1px 1px rgba(0,0,0,0.05); font-family: 'Georgia', serif;">
                Founded in 1985, Casa Marcos began as a modest family retreat nestled in the heart of nature. 
                Over the decades, it has evolved into a premier luxury resort while maintaining its authentic charm 
                and warm hospitality.
            </p>
            <p style="font-size: 1.1rem; line-height: 1.9; color: #4a4a4a; margin-bottom: 2rem; 
                     text-shadow: 0 1px 1px rgba(0,0,0,0.05); font-family: 'Georgia', serif;">
                Today, Casa Marcos stands as a testament to excellence in hospitality, combining traditional values 
                with modern luxury. Our commitment to exceptional service and guest satisfaction continues to be 
                the cornerstone of our legacy.
            </p>
        </div>
    </div>
    </div>
</section>

<!-- Video Section with Responsive Design -->
<section style="padding: 4rem 2rem; background: linear-gradient(145deg, rgba(250, 245, 240, 0.9), rgba(255, 255, 255, 0.9)); position: relative;">
    <style>
        @media (max-width: 768px) {
            .video-container {
                padding-bottom: 75% !important;
            }
            .video-title {
                font-size: 1.5rem !important;
            }
        }
    </style>

    <!-- Decorative Elements -->
    <div style="position: absolute; top: -30px; right: 20px; width: 50px; height: 50px; background: rgba(218, 191, 156, 0.2); border-radius: 50%;"></div>
    <div style="position: absolute; bottom: -20px; left: -20px; width: 70px; height: 70px; background: rgba(102, 67, 35, 0.1); border-radius: 50%;"></div>
    
    <div style="max-width: 1000px; margin: 0 auto; text-align: center;">
        <h2 class="video-title" style="color: rgb(102, 67, 35); font-size: 2rem; margin-bottom: 1.5rem; font-family: 'Impact'; text-transform: uppercase; letter-spacing: 2px;">
            Experience Casa Marcos
        </h2>
        <div class="video-container" style="position: relative; padding-bottom: 60%; height: 0; overflow: hidden; border-radius: 20px; 
                box-shadow: 0 20px 40px rgba(0,0,0,0.2); transition: all 0.3s ease; max-width: 950px; margin: 0 auto;"> 
                <video style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; object-fit: cover; border: none;" 
                        autoplay 
                        muted 
                        loop
                        poster="your-poster-image.jpg">
                        <source src="../images/casa.mp4" type="video/mp4">
                        Your browser does not support the video tag. Please update your browser or check your video source.
                </video>
       </div>
    </div>
</section>
     

    </main>

    <footer>
        <p>© 2025 Casa Marcos. All rights reserved.</p>
    </footer>

    <script>
        window.addEventListener('scroll', function () {
            const header = document.querySelector('header');
            if (window.scrollY > 50) {
                header.classList.add('scrolled');
            } else {
                header.classList.remove('scrolled');
            }
        });
    </script>

<script>
document.addEventListener('DOMContentLoaded', () => {
    const mobileMenuBtn = document.querySelector('.mobile-menu-btn');
    const navLinks = document.querySelector('.nav-links');
    const header = document.querySelector('header');

    mobileMenuBtn.addEventListener('click', () => {
        navLinks.classList.toggle('active');
        header.classList.toggle('menu-open');
    });

    // Close menu when clicking outside
    document.addEventListener('click', (e) => {
        if (!navLinks.contains(e.target) && !mobileMenuBtn.contains(e.target)) {
            navLinks.classList.remove('active');
            header.classList.remove('menu-open');
        }
    });
});
</script>
</body>
</html>