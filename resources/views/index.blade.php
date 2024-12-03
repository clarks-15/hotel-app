<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Luxury Stay | Premium Hotel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <style>
        body {
            background: #0d0d0d;
            color: #ffffff;
            font-family: 'Poppins', sans-serif;
            overflow-x: hidden;
        }

        header {
            background: linear-gradient(to right, #1a1a1a, #333333);
            padding: 20px 0;
            position: sticky;
            top: 0;
            z-index: 1000;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.7);
        }

        header h1 {
            font-size: 2.5rem;
            color: #ffffff;
            font-weight: 700;
        }

        header nav a {
            color: #ffffff;
            text-decoration: none;
            margin: 0 15px;
            font-size: 1rem;
            transition: color 0.3s ease;
        }

        header nav a.btn {
            padding: 10px 20px;
            font-size: 1rem;
            font-weight: 500;
        }

        header nav a:hover {
            color: #6c63ff;
        }

        .hero-section {
            background: url('https://source.unsplash.com/1920x1080/?luxury,hotel') no-repeat center center/cover;
            height: 100vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center;
            color: #ffffff;
            position: relative;
        }

        .hero-section:before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: rgba(0, 0, 0, 0.6);
        }

        .hero-section h2 {
            font-size: 4rem;
            font-weight: 700;
            text-shadow: 0 4px 10px rgba(0, 0, 0, 0.8);
            z-index: 1;
        }

        .hero-section p {
            font-size: 1.5rem;
            margin-top: 20px;
            max-width: 700px;
            z-index: 1;
        }

        .hero-section .btn {
            background: #6c63ff;
            border: none;
            padding: 15px 40px;
            font-size: 1.2rem;
            margin-top: 30px;
            box-shadow: 0 4px 15px rgba(108, 99, 255, 0.6);
            z-index: 1;
            transition: all 0.3s ease;
        }

        .hero-section .btn:hover {
            background: #5a54d4;
            transform: translateY(-5px);
        }

        .about-section,
        .promo-section {
            background: linear-gradient(to bottom, #121212, #1a1a1a);
            padding: 80px 0;
        }

        .about-section h3,
        .promo-section h3 {
            color: #6c63ff;
            font-size: 2.5rem;
            font-weight: 600;
            margin-bottom: 50px;
            text-align: center;
        }

        .about-section p {
            font-size: 1.1rem;
            line-height: 1.8;
            text-align: center;
            max-width: 800px;
            margin: 0 auto;
        }

        footer {
            background: #1a1a1a;
            padding: 40px 0;
            text-align: center;
            color: #ffffff;
            font-size: 1rem;
        }

        footer a {
            color: #6c63ff;
            text-decoration: none;
            margin: 0 10px;
            font-weight: 500;
        }

        .social-icons a {
            margin: 0 10px;
            color: #6c63ff;
            font-size: 1.5rem;
            transition: color 0.3s;
        }

        .social-icons a:hover {
            color: #ffffff;
        }

        .promo-section .card img {
            height: 200px;
            object-fit: cover;
        }

        .hero-image {
            margin-top: 20px;
            max-width: 90%;
            height: auto;
            border-radius: 15px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.7);
        }

        .btn {
            transition: all 0.3s ease;
            box-shadow: 0 4px 15px rgba(108, 99, 255, 0.6);
        }

        .btn:hover {
            transform: translateY(-5px);
            background: #5a54d4;
            box-shadow: 0 8px 20px rgba(90, 84, 212, 0.8);
        }

        .highlight-events .card-body {
            text-align: center;
        }

        .highlight-events .card-title {
            font-size: 1.5rem;
            color: #6c63ff;
            font-weight: 600;
        }

        .highlight-events .card-text {
            font-size: 1rem;
            margin: 15px 0;
        }

        .highlight-events .card ul {
            font-size: 1rem;
            text-align: left;
            padding-left: 20px;
        }

        .highlight-events .card-body a {
            background: #6c63ff;
            color: white;
            padding: 10px 20px;
            text-decoration: none;
            border-radius: 5px;
        }

        .highlight-events .card-body a:hover {
            background: #5a54d4;
        }

        .contact-form {
            background: rgba(255, 255, 255, 0.15);
            border: 1px solid rgba(255, 255, 255, 0.2);
            backdrop-filter: blur(10px);
            border-radius: 15px;
            padding: 30px 40px;
            box-shadow: 0px 15px 35px rgba(0, 0, 0, 0.5);
            text-align: center;
            max-width: 600px;
            margin: 50px auto;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .contact-form:hover {
            transform: scale(1.03);
            box-shadow: 0px 20px 40px rgba(0, 0, 0, 0.7);
        }

        .contact-form input,
        .contact-form textarea {
            background: rgba(255, 255, 255, 0.9);
            border: none;
            border-radius: 25px;
            color: #333;
            padding: 15px;
            width: 100%;
            max-width: 550px;
            margin: 15px auto;
            font-size: 1rem;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            transition: all 0.3s ease;
        }

        .contact-form input:focus,
        .contact-form textarea:focus {
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.4);
            background: rgba(255, 255, 255, 1);
        }

        .contact-form textarea {
            resize: none;
            height: 150px;
        }

        .contact-form button {
            background: linear-gradient(135deg, #ff6f61, #ff914d);
            border: none;
            border-radius: 25px;
            padding: 12px 25px;
            font-size: 1.2rem;
            font-weight: bold;
            color: white;
            cursor: pointer;
            text-transform: uppercase;
            transition: all 0.3s ease;
            box-shadow: 0px 5px 15px rgba(255, 111, 97, 0.5);
            margin-top: 20px;
        }

        .contact-form button:hover {
            background: linear-gradient(135deg, #ff5a5f, #ff7f50);
            box-shadow: 0px 8px 20px rgba(255, 111, 97, 0.7);
        }

        .contact-form button:active {
            transform: scale(0.95);
        }
    </style>
</head>

<body>
    <header>
        <div class="container d-flex justify-content-between align-items-center">
            <h1>Luxury Stay</h1>
            <nav>
                <a href="/login" class="btn btn-primary">Login</a>
                <a href="/register" class="btn btn-primary">Register</a>
            </nav>
        </div>
    </header>

    <div class="hero-section" style="background: url('https://source.unsplash.com/1920x1080/?luxury,hotel') no-repeat center center/cover; position: relative; color: white; text-align: center; padding: 80px 0;">
    <div class="overlay" style="position: absolute; top: 0; left: 0; right: 0; bottom: 0; background: rgba(0, 0, 0, 0.5);"></div>
    <div class="container position-relative z-index-1">
        <h2 class="display-4">Welcome to Luxury Stay</h2>
        <p class="lead">Indulge in an unforgettable experience of elegance and comfort. Book your stay at the finest hotel in town and enjoy our festive holiday celebrations.</p>
        
        <!-- Christmas & New Year Ornaments -->
        <div class="holiday-decorations mt-4">
            <span class="fa fa-snowflake" style="font-size: 50px; color: #ffcc00; margin-right: 15px;"></span>
            <span class="fa fa-gift" style="font-size: 50px; color: #ffcc00; margin-right: 15px;"></span>
            <span class="fa fa-tree" style="font-size: 50px; color: #ffcc00;"></span>
            <span class="fa fa-bell" style="font-size: 50px; color: #ffcc00; margin-left: 15px;"></span>
        </div>

        <img src="https://source.unsplash.com/800x500/?hotel,luxury" alt="Luxury Hotel" class="hero-image mt-5" style="max-width: 100%; border-radius: 15px; box-shadow: 0 4px 15px rgba(0, 0, 0, 0.7);">

        <a href="/booking" class="btn btn-primary btn-lg mt-4">Book Now</a>
    </div>
</div>

<section class="welcome-section text-center py-5" style="background: url('https://source.unsplash.com/1600x900/?christmas,holiday') no-repeat center center; background-size: cover; color: white;">
    <div class="container">
        <h2 class="display-4">Welcome to Your Dream Holiday Destination!</h2>
        <p class="lead">Experience the warmth, joy, and magic of Christmas and New Year at our hotel. Celebrate your holidays with exclusive offers that will make every moment unforgettable for you and your loved ones!</p>
        <p class="mt-4"><strong>Make every second of your holiday filled with beautiful memories and special surprises!</strong></p>
        <div class="mt-5">
            <a href="#exclusive-offers" class="btn btn-light btn-lg">Check Out Our Special Offers</a>
        </div>
    </div>
    <div class="christmas-decorations text-center mt-5">
        <span class="fa fa-snowflake" style="font-size: 40px; color: #ffcc00; margin-right: 20px;"></span>
        <span class="fa fa-gift" style="font-size: 40px; color: #ffcc00; margin-right: 20px;"></span>
        <span class="fa fa-tree" style="font-size: 40px; color: #ffcc00;"></span>
    </div>
</section>

<!-- Exclusive Offers and Packages Section -->
<section id="exclusive-offers" class="promo-section py-5">
    <div class="container">
        <h3 class="text-center">Exclusive Offers and Packages</h3>
        <div class="row mt-5">
            <!-- Christmas Event -->
            <div class="col-md-4">
                <div class="card text-center">
                    <img src="https://source.unsplash.com/400x300/?christmas,holiday" alt="Christmas Event">
                    <div class="card-body">
                        <h4 class="card-title">Christmas Celebration</h4>
                        <ul class="list-unstyled">
                            <li>🍪 Complimentary Holiday Snacks & Beverages</li>
                            <li>🎅 Meet & Greet with Santa Claus</li>
                            <li>🛍️ Festive Goodie Bag</li>
                        </ul>
                        <a href="/offer/christmas" class="btn btn-primary w-100">Discover More</a>
                    </div>
                </div>
            </div>

            <!-- New Year Event -->
            <div class="col-md-4">
                <div class="card text-center">
                    <img src="https://source.unsplash.com/400x300/?new-year,celebration" alt="New Year Event">
                    <div class="card-body">
                        <h4 class="card-title">New Year's Eve Party</h4>
                        <ul class="list-unstyled">
                            <li>🎉 Countdown Party with Fireworks</li>
                            <li>🥂 Unlimited Drinks Package</li>
                            <li>🍴 Gourmet Buffet Dinner</li>
                            <li>🎶 Live Band Performances</li>
                        </ul>
                        <a href="/offer/newyear" class="btn btn-primary w-100">Discover More</a>
                    </div>
                </div>
            </div>

            <!-- Beach Event -->
            <div class="col-md-4">
                <div class="card text-center">
                    <img src="https://source.unsplash.com/400x300/?beach,vacation" alt="Beach Event">
                    <div class="card-body">
                        <h4 class="card-title">Beach Getaway</h4>
                        <ul class="list-unstyled">
                            <li>🏖️ Private Beach Access</li>
                            <li>🏄 Surfing Lessons Included</li>
                            <li>🏡 Stay in Beachfront Villa</li>
                            <li>🍹 Welcome Tropical Drinks</li>
                        </ul>
                        <a href="/offer/beach" class="btn btn-primary w-100">Discover More</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- See More Events Button -->
        <div class="text-center mt-4">
            <button class="btn btn-secondary" id="see-more-events">See More Events</button>
        </div>

        <!-- Hidden Event Packages (Initially Hidden) -->
        <div id="more-events" class="row g-4 mt-5" style="display: none;">
            <!-- Family Package -->
            <div class="col-md-4">
                <div class="card text-center">
                    <img src="https://source.unsplash.com/400x300/?family,vacation" alt="Family Package">
                    <div class="card-body">
                        <h4 class="card-title">Family Package</h4>
                        <ul class="list-unstyled">
                            <li>🏠 Suite Family Room</li>
                            <li>🍴 Complimentary Breakfast & Dinner</li>
                            <li>🎟 Access to Kids' Playground</li>
                            <li>💰 Starting at $200/night</li>
                        </ul>
                        <a href="/offer/family" class="btn btn-primary w-100">Discover More</a>
                    </div>
                </div>
            </div>

            <!-- Wedding Package -->
            <div class="col-md-4">
                <div class="card text-center">
                    <img src="https://source.unsplash.com/400x300/?wedding,event" alt="Wedding Package">
                    <div class="card-body">
                        <h4 class="card-title">Wedding Package</h4>
                        <ul class="list-unstyled">
                            <li>💒 Grand Ballroom</li>
                            <li>🍴 Catering for 100-500 Guests</li>
                            <li>🎶 Live Band or DJ Included</li>
                            <li>💰 Starting at $5,000</li>
                        </ul>
                        <a href="/offer/wedding" class="btn btn-primary w-100">Discover More</a>
                    </div>
                </div>
            </div>

            <!-- Corporate Package -->
            <div class="col-md-4">
                <div class="card text-center">
                    <img src="https://source.unsplash.com/400x300/?conference,corporate" alt="Corporate Package">
                    <div class="card-body">
                        <h4 class="card-title">Corporate Package</h4>
                        <ul class="list-unstyled">
                            <li>🏢 Meeting Rooms for 10-200 People</li>
                            <li>🍴 Coffee Breaks & Lunch Options</li>
                            <li>🎥 Full AV Equipment</li>
                            <li>💰 Starting at $1,000/day</li>
                        </ul>
                        <a href="/offer/corporate" class="btn btn-primary w-100">Discover More</a>
                    </div>
                </div>
            </div>

            <!-- Single Room Booking -->
            <div class="col-md-4">
                <div class="card text-center">
                    <img src="https://source.unsplash.com/400x300/?room,hotel" alt="Single Room Booking">
                    <div class="card-body">
                        <h4 class="card-title">Single Room Booking</h4>
                        <ul class="list-unstyled">
                            <li>🛏️ Comfortable Queen Bed</li>
                            <li>📶 High-speed Wi-Fi</li>
                            <li>🧹 Daily Room Cleaning</li>
                            <li>☕ Complimentary Coffee & Tea</li>
                            <li>💰 Starting at $100/night</li>
                        </ul>
                        <a href="/offer/single-room" class="btn btn-primary w-100">Discover More</a>
                    </div>
                </div>
            </div>

            <!-- Couple's Retreat -->
            <div class="col-md-4">
                <div class="card text-center">
                    <img src="https://source.unsplash.com/400x300/?couple,romantic" alt="Couple's Retreat">
                    <div class="card-body">
                        <h4 class="card-title">Couple's Retreat</h4>
                        <ul class="list-unstyled">
                            <li>🛌 King-Sized Bed in Romantic Setting</li>
                            <li>🥂 Welcome Champagne</li>
                            <li>💆 Spa Package for Two</li>
                            <li>🌹 Room Decor with Flowers & Candles</li>
                            <li>💰 Starting at $250/night</li>
                        </ul>
                        <a href="/offer/couples-retreat" class="btn btn-primary w-100">Discover More</a>
                    </div>
                </div>
            </div>

            <!-- Beach Party Event -->
            <div class="col-md-4">
                <div class="card text-center">
                    <img src="https://source.unsplash.com/400x300/?beach-party,celebration" alt="Beach Party">
                    <div class="card-body">
                        <h4 class="card-title">Beach Party</h4>
                        <ul class="list-unstyled">
                            <li>🎶 Live DJ Performances</li>
                            <li>🍹 Complimentary Welcome Drinks</li>
                            <li>🌅 Sunset View Lounge</li>
                            <li>🏖️ Access to Private Beach Area</li>
                            <li>💰 Entry Ticket: $50/person</li>
                        </ul>
                        <a href="/offer/beach-party" class="btn btn-primary w-100">Discover More</a>
                    </div>
                </div>
            </div>

            <!-- Luxury Suite -->
            <div class="col-md-4">
                <div class="card text-center">
                    <img src="https://source.unsplash.com/400x300/?luxury-suite,hotel" alt="Luxury Suite">
                    <div class="card-body">
                        <h4 class="card-title">Luxury Suite</h4>
                        <ul class="list-unstyled">
                            <li>🛋️ Spacious Living Room</li>
                            <li>🛁 Private Jacuzzi and Rain Shower</li>
                            <li>📺 Smart TV with Streaming Services</li>
                            <li>🍾 Mini Bar with Premium Drinks</li>
                            <li>💰 Starting at $600/night</li>
                        </ul>
                        <a href="/offer/luxury-suite" class="btn btn-primary w-100">Discover More</a>
                    </div>
                </div>
            </div>

            <!-- Adventure Package -->
            <div class="col-md-4">
                <div class="card text-center">
                    <img src="https://source.unsplash.com/400x300/?adventure,travel" alt="Adventure Package">
                    <div class="card-body">
                        <h4 class="card-title">Adventure Package</h4>
                        <ul class="list-unstyled">
                            <li>🏞️ Guided Hiking Tours</li>
                            <li>🚤 Water Sports: Jet Ski & Kayaking</li>
                            <li>🎒 Complimentary Adventure Gear</li>
                            <li>🏕️ Overnight Camping Options</li>
                            <li>💰 Package Starting at $300/person</li>
                        </ul>
                        <a href="/offer/adventure" class="btn btn-primary w-100">Discover More</a>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card text-center">
                    <img src="https://source.unsplash.com/400x300/?birthday,party" alt="Birthday Party">
                    <div class="card-body">
                        <h4 class="card-title">Birthday Party</h4>
                        <ul class="list-unstyled">
                            <li>🎂 Custom Birthday Cake</li>
                            <li>🎶 Live Music or DJ Option</li>
                            <li>🍴 Buffet or Finger Food Catering</li>
                            <li>🕺 Party Games and Activities</li>
                            <li>💰 Starting at $500/event</li>
                        </ul>
                        <a href="/offer/birthday" class="btn btn-primary w-100">Discover More</a>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
</section>



<!-- JavaScript to Toggle the See More Events Button -->
<script>
    document.getElementById('see-more-events').addEventListener('click', function() {
        const moreEventsSection = document.getElementById('more-events');
        if (moreEventsSection.style.display === "none") {
            moreEventsSection.style.display = "flex";
            this.textContent = "See Less Events";
        } else {
            moreEventsSection.style.display = "none";
            this.textContent = "See More Events";
        }
    });
</script>
    <!-- Contact Us -->
    <section class="contact-form">
        <h3>Contact Us</h3>
        <form action="/submit" method="POST">
            <input type="text" name="name" placeholder="Your Name" required>
            <input type="email" name="email" placeholder="Your Email" required>
            <textarea name="message" rows="5" placeholder="Your Message" required></textarea>
            <button type="submit">Submit</button>
        </form>
    </section>

    <footer>
    <div class="social-icons">
        <a href="https://www.facebook.com/Raihan Siddik" target="_blank"><i class="fab fa-facebook-f"></i></a>
        <a href="https://www.instagram.com/mchlstp_" target="_blank"><i class="fab fa-instagram"></i></a>
        <a href="https://wa.me/+6281378837289" target="_blank"><i class="fab fa-whatsapp"></i></a>
    </div>
    <p>&copy; 2024 Luxury Stay | By Michael Stephen</p>
</footer>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>