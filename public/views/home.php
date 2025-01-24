<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Casa Marcos - Welcome</title>
    <link rel="stylesheet" href="/css/style.css">
</head>

<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    body {
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        line-height: 1.6;
        font-size: 16px;
    }

    header {
        position: fixed;
        padding: 1.5rem;
        width: 100%;
        display: flex;
        justify-content: center;
        z-index: 1000;
        background-color: transparent;
        transition: background-color 0.5s ease;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
    }

    header.scrolled {
        background-color: #2c3e50;
    }

    nav {
        display: flex;
        justify-content: space-between;
        align-items: center;
        max-width: 1200px;
        margin: 0 auto;
        position: relative;
    }

    .logo h1 {
        color: rgb(102, 67, 35);
        font-size: 3.8rem;
        font-family: impact;
        letter-spacing: 1px;
    }

    nav ul {
        display: flex;
        list-style: none;
        gap: 1.5rem;
    }

    nav ul li {
        position: relative;
    }

    nav ul li a {
        color:rgb(102, 67, 35);
        text-decoration: none;
        padding: 0.8rem 1.5rem;
        font-size: 1rem;
        font-family: impact;
        text-transform: uppercase;
        transition: background-color 0.3s, transform 0.3s;
        border-radius: 4px;
    }

    nav ul li a:hover {
        background-color: #34495e;
        color: #fff;
        transform: scale(1.05);
    }

    .dropdown-menu {
        display: none;
        position: absolute;
        top: 100%;
        left: 0;
        background-color: #fff;
        box-shadow: 0 3px 10px rgba(0, 0, 0, 0.1);
        border-radius: 4px;
        z-index: 1;
        opacity: 0;
        visibility: hidden;
        transition: opacity 0.3s ease-in-out, visibility 0s 0.3s;
    }

    .dropdown-menu a {
        color: rgb(163, 99, 15);
        padding: 0.7rem 1.2rem;
        text-decoration: none;
        display: block;
        transition: background-color 0.3s;
    }

    .dropdown-menu a:hover {
        background-color: #34495e;
        color: #fff;
    }

    nav ul li:hover .dropdown-menu {
        display: block;
        opacity: 1;
        visibility: visible;
        transition: opacity 0.3s ease-in-out;
    }

    .hero {
        text-align: center;
        padding: 28rem;
        background-color: #f8f9fa;
    }

    .cta-button {
        display: inline-block;
        padding: 1rem 2.5rem;
        background-color: #2c3e50;
        color: #fff;
        text-decoration: none;
        border-radius: 25px;
        margin-top: 2rem;
        transition: background-color 0.3s;
    }

    .cta-button:hover {
        background-color: #c0392b;
    }

    .features {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 3rem;
        padding: 5rem 2rem;
        max-width: 1200px;
        margin: 0 auto;
    }

    .feature {
        text-align: center;
        padding: 2.5rem;
        background-color: #fff;
        box-shadow: 0 3px 10px rgba(0, 0, 0, 0.1);
        border-radius: 8px;
        transition: transform 0.3s;
    }

    .feature:hover {
        transform: translateY(-5px);
    }

    footer {
        background-color: #2c3e50;
        color: #fff;
        text-align: center;
        padding: 1.5rem;
        margin-top: 2rem;
    }

    input, select {
        font-family: 'Arial', sans-serif;
    }

    input:focus, select:focus {
        border-color: rgb(163, 99, 15);
        outline: none;
    }

    button:hover {
        background-color: #c0392b;
        transform: translateY(-2px);
    }

</style>

<body>
    <header>
        <nav>
            <ul style="width: 100%; align-items: center;">
                <li>
                    <a href="#">Our Rooms</a>
                </li>
                <li>
                    <a href="#">Offer</a>
                    <div class="dropdown-menu">
                        <a href="/menu">Menu</a>
                        <a href="/specials">Special Offers</a>
                        <a href="/events">Events</a>
                    </div>
                </li>
                <div class="logo" style="margin: 0 2rem;">
                    <h1 style="text-align: center; line-height: 1.2;">CASA MARCOS
                        <span style="display: block; font-size: 1rem;">RESORT AND VILLAS</span>
                    </h1>
                </div>
                <li><a href="/reservations">About Us</a></li>
                <li><a href="/contact">Contact</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <section class="hero" style="background-image: url('../images/11.jpg'); background-size: cover; background-position: center; color: white;">
            <h2>Welcome to Casa Marcos</h2>
            <p>Experience authentic Spanish cuisine in a warm, family atmosphere</p>
            <a href="/reservations" class="cta-button">Make a Reservation</a>
        </section>

        <section class="check-in-out" style="padding: 8rem 1rem; background-color: #f8f9fa;">
            <div style="max-width: 1000px; margin: 0 auto; background: white; padding: 2rem; border-radius: 8px; box-shadow: 0 3px 15px rgba(0, 0, 0, 0.1);">
            <h2 style="text-align: center; color: rgb(163, 99, 15); margin-bottom: 1.5rem; font-size: 1.8rem;">Reservation Details</h2>
            <form action="/reservation/submit" method="POST">
            <!-- Check-in and Check-out Section -->
            <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 1.5rem;">
            <div>
                <h3 style="color: rgb(163, 99, 15); margin-bottom: 0.6rem;">Check In</h3>
                <input type="date" name="check_in" required style="width: 90%; padding: 0.6rem; margin: 0.3rem 0; border: 1px solid #ddd; border-radius: 8px; font-size: 0.9rem;">
                <input type="time" name="check_in_time" required style="width: 90%; padding: 0.6rem; margin: 0.3rem 0; border: 1px solid #ddd; border-radius: 8px; font-size: 0.9rem;">
            </div>
            <div>
                <h3 style="color: rgb(163, 99, 15); margin-bottom: 0.6rem;">Check Out</h3>
                <input type="date" name="check_out" required style="width: 90%; padding: 0.6rem; margin: 0.3rem 0; border: 1px solid #ddd; border-radius: 8px; font-size: 0.9rem;">
                <input type="time" name="check_out_time" required style="width: 90%; padding: 0.6rem; margin: 0.3rem 0; border: 1px solid #ddd; border-radius: 8px; font-size: 0.9rem;">
            </div>
            </div>

            <!-- Guest Information Section -->
            <div style="margin-top: 2rem;">
            <h3 style="color: rgb(163, 99, 15); margin-bottom: 0.8rem;">Guest Information</h3>
            <input type="text" name="name" placeholder="Full Name" required style="width: 95%; padding: 0.6rem; margin: 0.3rem 0; border: 1px solid #ddd; border-radius: 8px; font-size: 0.9rem;">
            <input type="email" name="email" placeholder="Email Address" required style="width: 95%; padding: 0.6rem; margin: 0.3rem 0; border: 1px solid #ddd; border-radius: 8px; font-size: 0.9rem;">
            <input type="tel" name="phone" placeholder="Phone Number" required style="width: 95%; padding: 0.6rem; margin: 0.3rem 0; border: 1px solid #ddd; border-radius: 8px; font-size: 0.9rem;">
            <select name="room_type" required style="width: 95%; padding: 0.6rem; margin: 0.3rem 0; border: 1px solid #ddd; border-radius: 8px; font-size: 0.9rem;">
                <option value="">Select Room Type</option>
                <option value="standard">Standard Room</option>
                <option value="deluxe">Deluxe Room</option>
                <option value="suite">Suite</option>
                <option value="villa">Villa</option>
            </select>
            </div>

            <!-- Submit Button -->
            <button type="submit" style="width: 95%; padding: 0.8rem; margin-top: 1.5rem; background-color: rgb(163, 99, 15); color: white; border: none; border-radius: 8px; cursor: pointer; font-size: 1rem;">
            Confirm Reservation
            </button>
            </form>
            </div>
        </section>
    </main>

    <footer>
        <p>&copy; <?php echo date('Y'); ?> Casa Marcos. All rights reserved.</p>
    </footer>

    <script>
        window.addEventListener('scroll', function() {
            const header = document.querySelector('header');
            if (window.scrollY > 50) {
                header.classList.add('scrolled');
            } else {
                header.classList.remove('scrolled');
            }
        });
    </script>
</body>
</html>
