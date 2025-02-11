<?php
    include_once 'nav/homenav.php';
    include_once '../model/BookingModel.php';
include_once '../model/Booking_Model.php';

$model = new BookingModel();
$bookingModel = new Booking_Model();

// Get all services
$services = $bookingModel->get_service();

// Include the Connector class
require_once '../model/server.php';
$connector = new Connector();

// Fetch all bookings that are pending approval
$sql = "SELECT booking_id, booking_fullname, booking_email, booking_number, booking_date FROM booking_tb WHERE booking_status = 'pending'";
$bookings = $connector->executeQuery($sql);

// Handle form submission
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Get form data
    $fullname = $_POST['fullname'];
    $email = $_POST['email'];
    $number = $_POST['number'];
    $date = $_POST['date'];
    $service_id = $_POST['service_id'];  // Get the selected service ID from the form

    // Attempt to insert the booking
    $result = $bookingModel->insert_booking($fullname, $email, $number, $date, $service_id);

    if ($result === true) {
        echo "Booking successfully added!";
    } else {
        echo $result;  // Display error message if any
    }
}
?>
  <style>
  //* Section Styling */
  .image-slider-section {
      padding: 5rem 2rem;
      background-color: #f4f4f4;
  }

  /* Flexbox for positioning and layout */
  .relative {
      position: relative;
      display: flex;
      justify-content: center;
      align-items: center;
  }

  /* Container for the images and text */
  .image-container {
      width: 200%;
      max-width: 1500px;
      position: relative;
      overflow: hidden; /* Ensures no overflow when sliding */
  }

  /* Wrapper for the left, right, and additional images */
  .image-wrapper {
      display: flex; /* Display images side by side */
      justify-content: space-between; /* Adds space between images */
      position: relative;
      transition: transform 1s ease-in-out; /* Smooth sliding transition */
  }

  /* Styling for each image */
  .image {
      width: 48%; /* Make each image take up 48% of the width, leaving space between */
      flex-shrink: 0; /* Prevent images from shrinking */
      position: relative;
      overflow: hidden;
      border-radius: 12px; /* Round the corners of the images */
      box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1); /* Soft shadow around images */
      margin: 0 1%; /* Add margin on the left and right of each image */
  }

  /* Image styling */
  .image img {
      width: 100%;
      height: 100%;
      object-fit: cover;
      transition: transform 0.5s ease; /* Smooth transition */
  }

  /* Dark Overlay */
  .overlay-dark {
      background-color: rgba(51, 51, 51, 0.6);
      position: absolute;
      inset: 0;
      border-radius: 12px; /* Round the overlay to match the image */
  }

  /* Light Overlay on the left image */
  .overlay-light-left {
      background-color: rgba(243, 244, 246, 0.8);
      position: absolute;
      inset-y: 0;
      width: 50%;
      left: 0;
      border-radius: 12px 0 0 12px; /* Rounded corners on the left */
  }

  /* Light Overlay on the right image */
  .overlay-light-right {
      background-color: rgba(243, 244, 246, 0.8);
      position: absolute;
      inset-y: 0;
      width: 50%;
      right: 0;
      border-radius: 0 12px 12px 0; /* Rounded corners on the right */
  }

  /* Description Styling */
  .image-description {
      position: absolute;
      bottom: 30px;
      left: 20px;
      right: 20px;
      color: white;
      text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.6);
      padding: 20px;
      border-radius: 8px;
      max-width: 90%;
  }

  .room-card {
      position: relative;
      border-radius: 15px;
      overflow: hidden;
      box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
      transition: transform 0.3s ease;
  }

  .room-card:hover {
      transform: translateY(-5px);
  }

  .room-image {
      width: 100%;
      height: 400px;
      object-fit: cover;
  }

  .room-content {
      position: absolute;
      width: 100%;
      height: 100%;
      top: 0;
      left: 0;
      background: linear-gradient(to bottom, rgba(0,0,0,0.2), rgba(0,0,0,0.8));
      display: flex;
      flex-direction: column;
      justify-content: space-between;
  }

  .room-title {
      padding: 25px;
      font-size: 2rem;
      font-weight: 600;
      color: #fff;
      text-shadow: 2px 2px 4px rgba(0,0,0,0.3);
      font-family: 'Playfair Display', serif;
  }

  .room-details {
      background: rgba(255, 255, 255, 0.95);
      padding: 25px;
      border-radius: 15px 15px 0 0;
      transform: translateY(100%);
      transition: transform 0.4s ease;
  }

  .room-card:hover .room-details {
      transform: translateY(0);
  }

  .room-price {
      font-size: 1.8rem;
      color: rgb(102, 67, 35);
      font-weight: 700;
      margin-bottom: 15px;
  }

  .room-features {
      display: flex;
      gap: 15px;
      margin: 15px 0;
  }

  .feature-item {
      display: flex;
      align-items: center;
      gap: 8px;
      color: #666;
  }

  .book-button {
      background: rgb(102, 67, 35);
      color: white;
      padding: 12px 25px;
      border-radius: 25px;
      border: none;
      font-weight: 600;
      cursor: pointer;
      transition: all 0.3s ease;
      text-transform: uppercase;
      letter-spacing: 1px;
  }

  .book-button:hover {
      background: rgb(218, 191, 156);
      transform: translateY(-2px);
  }

  /* Responsive Design for Smaller Screens */
  @media (max-width: 768px) {
      /* Stack the images vertically */
      .image-wrapper {
          flex-direction: column; /* Stack images vertically */
          gap: 2rem; /* Add space between images */
      }

      .image {
          width: 100%; /* Make images full-width on small screens */
      }

      .image-description {
          bottom: 20px;
          left: 20px;
          right: 20px;
          padding: 15px;
          max-width: 95%;
      }

      .room-title {
          font-size: 1.5rem; /* Adjust title font size */
      }

      .room-details {
          font-size: 0.9rem; /* Adjust details font size */
      }

  }
  </style>


        <section class="hera">
            <div style="max-width: 1000px; margin: 0 auto; background: rgba(255, 255, 255, 0); padding: 1rem; border-radius: 15px; box-shadow: 0 8px 32px rgba(0, 0, 0, 0.2); backdrop-filter: blur(1px);">
            <form action="/reservation/submit" method="POST">
                    <!-- Check-in and Check-out Section -->
                    <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 2rem;">
                        <div style="background:rgba(250, 240, 230, 0); padding: 1.5rem; border-radius: 12px;">
                            <h3 style="color: rgb(218, 191, 156); margin-bottom: 1rem; font-size: 1.4rem; font-family: 'impact';">CHECK IN</h3>
                            <input type="date" name="check_in" required style="width: 100%; padding: 0.8rem; margin: 0.5rem 0; border: 2px solid #d4b696; border-radius: 8px; font-size: 1rem; transition: all 0.3s ease;">
                            <input type="time" name="check_in_time" required style="width: 100%; padding: 0.8rem; margin: 0.5rem 0; border: 2px solid #d4b696; border-radius: 8px; font-size: 1rem; transition: all 0.3s ease;">
                        </div>
                        <div style="background:rgba(250, 240, 230, 0); padding: 1.5rem; border-radius: 12px;">
                            <h3 style="color: rgb(218, 191, 156); margin-bottom: 1rem; font-size: 1.4rem; font-family: 'impact';">CHECK OUT</h3>
                            <input type="date" name="check_out" required style="width: 100%; padding: 0.8rem; margin: 0.5rem 0; border: 2px solid #d4b696; border-radius: 8px; font-size: 1rem; transition: all 0.3s ease;">
                            <input type="time" name="check_out_time" required style="width: 100%; padding: 0.8rem; margin: 0.5rem 0; border: 2px solid #d4b696; border-radius: 8px; font-size: 1rem; transition: all 0.3s ease;">
                        </div>
                    </div>

                    <!-- Submit Button -->
                    <button type="submit" style="width: 50%; padding: 1rem; margin-top: 2rem; background: linear-gradient(to right, rgb(218, 191, 156), rgb(218, 191, 156)); color: white; border: none; border-radius: 12px; cursor: pointer; font-size: 1.1rem; font-weight: bold; transition: all 0.3s ease; text-transform: uppercase; letter-spacing: 1px;">
                        Search Booking
                    </button>
                </form>
            </div>
        </section>



        <section class="image-slider-section" style = "padding: 10rem 1rem; background-color:rgb(255, 255, 255);">
            <div class="relative flex items-center justify-center">
                <div class="image-container">
                    <!-- Image Wrapper (Two columns for left and right images) -->
                    <div class="image-wrapper">
                        <!-- Left Column Image -->
                        <div class="image left-image">
                            <img src="../images/room.jpg" alt="Holiday Tier Deluxe Room" />
                            <div class="overlay-dark"></div>
                            <div class="overlay-light-left"></div>
                            <div class="image-description">
                                <h2 class="room-title">Holiday Tier Deluxe Room</h2>
                                <p class="room-details">A luxurious and spacious room designed for ultimate comfort. Experience a blend of elegance and modern amenities, ideal for those seeking a premium getaway.</p>
                            </div>
                        </div>

                        <!-- Right Column Image -->
                        <div class="image right-image">
                            <img src="../images/room.jpg" alt="Holiday Tier Superior Room" />
                            <div class="overlay-dark"></div>
                            <div class="overlay-light-right"></div>
                            <div class="image-description">
                                <h2 class="room-title">Holiday Tier Superior Room</h2>
                                <p class="room-details">Enjoy a perfect stay with exceptional amenities in our superior room, featuring modern furnishings and a serene atmosphere for a relaxing experience.</p>
                            </div>
                        </div>

                        <div class="image right-image">
                            <img src="../images/room.jpg" alt="Holiday Tier Superior Room" />
                            <div class="overlay-dark"></div>
                            <div class="overlay-light-right"></div>
                            <div class="image-description">
                                <h2 class="room-title">Holiday Tier Superior Room</h2>
                                <p class="room-details">Enjoy a perfect stay with exceptional amenities in our superior room, featuring modern furnishings and a serene atmosphere for a relaxing experience.</p>
                            </div>
                        </div>

                        <div class="image right-image">
                            <img src="../images/room.jpg" alt="Holiday Tier Superior Room" />
                            <div class="overlay-dark"></div>
                            <div class="overlay-light-right"></div>
                            <div class="image-description">
                                <h2 class="room-title">Holiday Tier Superior Room</h2>
                                <p class="room-details">Enjoy a perfect stay with exceptional amenities in our superior room, featuring modern furnishings and a serene atmosphere for a relaxing experience.</p>
                            </div>
                        </div>


                        <div class="image right-image">
                            <img src="../images/room.jpg" alt="Holiday Tier Superior Room" />
                            <div class="overlay-dark"></div>
                            <div class="overlay-light-right"></div>
                            <div class="image-description">
                                <h2 class="room-title">Holiday Tier Superior Room</h2>
                                <p class="room-details">Enjoy a perfect stay with exceptional amenities in our superior room, featuring modern furnishings and a serene atmosphere for a relaxing experience.</p>
                            </div>
                        </div>

                        <div class="image right-image">
                            <img src="../images/room.jpg" alt="Holiday Tier Superior Room" />
                            <div class="overlay-dark"></div>
                            <div class="overlay-light-right"></div>
                            <div class="image-description">
                                <h2 class="room-title">Holiday Tier Superior Room</h2>
                                <p class="room-details">Enjoy a perfect stay with exceptional amenities in our superior room, featuring modern furnishings and a serene atmosphere for a relaxing experience.</p>
                            </div>
                        </div>

                        
                    </div>
                </div>
            </div>
       </section>
















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
            let currentIndex = 0;
            const slider = document.querySelector('.image-wrapper');
            const images = document.querySelectorAll('.image');
            const totalImages = images.length;

            // Set initial styles
            slider.style.transition = "transform 1s ease-in-out";

            function changeSlide() {
                if (currentIndex === totalImages - 1) {
                    // Reset to first image
                    currentIndex = 0;
                    slider.style.transition = "none";
                    slider.style.transform = `translateX(0)`;
                    
                    requestAnimationFrame(() => {
                        requestAnimationFrame(() => {
                            slider.style.transition = "transform 1s ease-in-out";
                        });
                    });
                } else {
                    currentIndex++;
                    slider.style.transform = `translateX(-${currentIndex * 100}%)`;
                }
            }

            // Start automatic sliding
            const slideInterval = setInterval(changeSlide, 3000);

            // Add hover controls
            slider.addEventListener('mouseenter', () => clearInterval(slideInterval));
            slider.addEventListener('mouseleave', () => setInterval(changeSlide, 3000));

            // Add touch support
            let touchStartX = 0;
            let touchEndX = 0;

            slider.addEventListener('touchstart', e => {
                touchStartX = e.changedTouches[0].screenX;
            });

            slider.addEventListener('touchend', e => {
                touchEndX = e.changedTouches[0].screenX;
                if (touchStartX - touchEndX > 50) {
                    changeSlide();
                }
            });
        </script>
