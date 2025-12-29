<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tailor-Made Safari Planner | Duliey Tours & Safaris</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <style>
        body {
            background: url('img/tailor-bg.jpg') center center / cover no-repeat fixed;
            min-height: 100vh;
        }
        .overlay {
            background: rgba(0, 0, 0, 0.72);
            min-height: 100vh;
        }
        .form-card {
            background: rgba(255, 255, 255, 0.12);
            backdrop-filter: blur(16px);
            border: 1px solid rgba(255, 255, 255, 0.2);
            border-radius: 20px;
            box-shadow: 0 20px 50px rgba(0, 0, 0, 0.4);
        }
        .form-control, .form-select, .form-check-input {
            background: rgba(255, 255, 255, 0.15) !important;
            border: 1px solid rgba(255, 255, 255, 0.3);
            color: white !important;
        }
        .form-control::placeholder, .form-select option {
            color: rgba(255, 255, 255, 0.7);
        }
        label, .form-check-label {
            color: white;
            font-weight: 500;
        }
        .btn-whatsapp {
            background: #25D366;
            color: white;
            font-weight: bold;
            padding: 15px 30px;
            font-size: 1.2rem;
            border-radius: 50px;
            box-shadow: 0 10px 30px rgba(37, 211, 102, 0.4);
        }
        .btn-whatsapp:hover {
            background: #1da851;
            transform: translateY(-3px);
        }
        .topbar a { color: #fff; text-decoration: none; }
        .topbar a:hover { color: #ffc107; }
        footer a { color: #ccc; }
        footer a:hover { color: #fff; }
    </style>
</head>
<body>

<!-- Topbar Start -->
<div class="container-fluid bg-dark px-5 d-none d-lg-block">
    <div class="row gx-0">
        <div class="col-lg-8 text-center text-lg-start mb-2 mb-lg-0">
            <div class="d-inline-flex align-items-center" style="height: 45px;">
                <small class="me-3 text-light topbar"><i class="fa fa-map-marker-alt me-2"></i>Malindi, Kilifi, Kenya</small>
                <small class="me-3 text-light topbar"><i class="fa fa-phone-alt me-2"></i><a href="tel:+2547029131281">+2547029131281</a></small>
                <small class="text-light topbar"><i class="fa fa-envelope-open me-2"></i><a href="mailto:info@dulieytoursafari.com">info@dulieytoursafari.com</a></small>
            </div>
        </div>
        <div class="col-lg-4 text-center text-lg-end">
            <div class="d-inline-flex align-items-center" style="height: 45px;">
                <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href="https://www.facebook.com/share/1PdVxLQJqV/" target="_blank"><i class="fab fa-facebook-f fw-normal"></i></a>
                <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href="https://www.instagram.com/duliey_tour_and_safaris?igsh=MXRwb3pua3d0M2dhbg==" target="_blank"><i class="fab fa-instagram fw-normal"></i></a>
            </div>
        </div>
    </div>
</div>
<!-- Topbar End -->

  <!-- Topbar Start -->
<div class="container-fluid bg-dark px-5 d-none d-lg-block">
    <div class="row gx-0">
        <div class="col-lg-8 text-center text-lg-start mb-2 mb-lg-0">
            <div class="d-inline-flex align-items-center" style="height: 45px;">
                <small class="me-3 text-light" data-translate="topbar_address"><i class="fa fa-map-marker-alt me-2"></i>Malindi, Kilifi, Kenya</small>
                <small class="me-3 text-light"><i class="fa fa-phone-alt me-2"></i><a href="tel:+2547029131281" data-translate="topbar_phone">+2547029131281</a></small>
                <small class="text-light"><i class="fa fa-envelope-open me-2"></i><a href="mailto:info@dulieytoursafari.com" data-translate="topbar_email">info@dulieytoursafari.com</a></small>
            </div>
        </div>
        <div class="col-lg-4 text-center text-lg-end">
            <div class="d-inline-flex align-items-center" style="height: 45px;">
                <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href="https://www.facebook.com/share/1PdVxLQJqV/" data-translate="topbar_facebook"><i class="fab fa-facebook-f fw-normal"></i></a>
                <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href="https://www.instagram.com/duliey_tour_and_safaris" data-translate="topbar_instagram"><i class="fab fa-instagram fw-normal"></i></a>
            </div>
        </div>
    </div>
</div>
<!-- Topbar End -->

<!-- Navbar & Hero Start -->
<div class="container-fluid position-relative p-0">
    <nav class="navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-3 py-lg-0">
        <a href="" class="navbar-brand p-0">
            <!-- <h4 class="text-primary m-0" data-translate="navbar_brand"><i class="fa fa-map-marker-alt me-3"></i>DULI TOURS & SAFARIS</h4> -->
            <img src="img/logo-main.jpeg" alt="Logo" style="border-radius: 10px;">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="fa fa-bars" data-translate="navbar_toggle"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto py-0">
                <a href="index.php" class="nav-item nav-link" data-translate="nav_home">Home</a>
                <a href="index.php#about" class="nav-item nav-link" data-translate="nav_about">About</a>
                <a href="index.php#services" class="nav-item nav-link" data-translate="nav_services">Services</a>
                <a href="index.php#packages" class="nav-item nav-link" data-translate="nav_packages">Packages</a>
                <a href="index.php#excursions" class="nav-item nav-link" data-translate="nav_excursions">Excursions</a>
                <a href="index.php#testimonial" class="nav-item nav-link" data-translate="nav_reviews">Reviews</a>
                <a href="contact.php" class="nav-item nav-link" data-translate="nav_contact">Contact</a>
            </div>
                <a href="#reviews" class="btn btn-primary rounded-pill py-2 px-4 d-flex align-items-center justify-content-center gap-2" data-translate="nav_packages_button">
                    <img src="https://www.tripadvisor.com/img/cdsi/img2/branding/v2/Tripadvisor_lockup_horizontal_secondary_registered-11900-2.svg" 
                         alt="TripAdvisor" 
                         style="height: 22px; width: auto;">
                    
                </a>
        </div>
    </nav>
</div>
<!-- Navbar & Hero End -->

<!-- Main Content (Form) -->
<div class="overlay py-5">
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="text-center text-white mb-5">
                    <h1 class="display-4 fw-bold mb-4">Design Your Dream Safari</h1>
                    <p class="lead opacity-90">Tell us exactly what you want – parks, activities, dates, budget, and special wishes.<br>We’ll create your perfect private Kenyan adventure.</p>
                </div>

                <div class="form-card p-5 p-lg-7">
                    <form id="tailorForm" onsubmit="sendTailorRequest(event)">

                        <div class="row g-4">

                            <!-- Personal Info -->
                            <div class="col-md-6">
                                <label>Full Name *</label>
                                <input type="text" name="name" class="form-control form-control-lg" placeholder="John & Marie Smith" required>
                            </div>
                            <div class="col-md-6">
                                <label>WhatsApp Number *</label>
                                <input type="text" name="whatsapp" class="form-control form-control-lg" placeholder="+254..." required>
                            </div>

                            <div class="col-md-6">
                                <label>Email</label>
                                <input type="email" name="email" class="form-control form-control-lg" placeholder="your@email.com">
                            </div>
                            <div class="col-md-6">
                                <label>Country</label>
                                <input type="text" name="country" class="form-control form-control-lg" placeholder="France">
                            </div>

                            <!-- Travel Details -->
                            <div class="col-md-4">
                                <label>Travel Dates (Approximate)</label>
                                <input type="text" name="dates" class="form-control form-control-lg" placeholder="e.g. July 2026 or flexible">
                            </div>
                            <div class="col-md-4">
                                <label>Number of Days</label>
                                <input type="number" name="days" class="form-control form-control-lg" placeholder="e.g. 7" min="1">
                            </div>
                            <div class="col-md-4">
                                <label>Number of Travelers</label>
                                <input type="text" name="travelers" class="form-control form-control-lg" placeholder="e.g. 2 adults, 1 child">
                            </div>

                            <!-- Parks & Destinations -->
                            <div class="col-12">
                                <label>Parks & Destinations You Want to Visit (select all that interest you)</label>
                                <div class="row g-3">
                                    <div class="col-md-4 col-sm-6">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="Maasai Mara" id="mara">
                                            <label class="form-check-label" for="mara">Maasai Mara (Big Cats & Migration)</label>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="Amboseli" id="amboseli">
                                            <label class="form-check-label" for="amboseli">Amboseli (Kilimanjaro Views)</label>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="Tsavo East" id="tsavo">
                                            <label class="form-check-label" for="tsavo">Tsavo East (Red Elephants)</label>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="Lake Nakuru" id="nakuru">
                                            <label class="form-check-label" for="nakuru">Lake Nakuru (Flamingos & Rhinos)</label>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="Samburu" id="samburu">
                                            <label class="form-check-label" for="samburu">Samburu (Rare Species)</label>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="Coastal Excursion" id="coast">
                                            <label class="form-check-label" for="coast">Coastal Day Trip (Marafa, Sardegna, etc.)</label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Activities -->
                            <div class="col-12 mt-4">
                                <label>Activities & Experiences You Love</label>
                                <div class="row g-3">
                                    <div class="col-md-4">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="Hot Air Balloon Safari">
                                            <label class="form-check-label">Hot Air Balloon Safari</label>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="Maasai Village Visit">
                                            <label class="form-check-label">Maasai Village Visit</label>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="Bush Dinner / Sundowner">
                                            <label class="form-check-label">Bush Dinner / Sundowner</label>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="Walking Safari">
                                            <label class="form-check-label">Walking Safari</label>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="Photography Focus">
                                            <label class="form-check-label">Photography Focus</label>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="Family-Friendly">
                                            <label class="form-check-label">Family-Friendly Activities</label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Budget & Accommodation -->
                            <div class="col-md-6 mt-4">
                                <label>Approximate Budget per Person (USD)</label>
                                <select name="budget" class="form-select form-select-lg">
                                    <option value="">Select range</option>
                                    <option value="Under $1,500">Under $1,500</option>
                                    <option value="$1,500 – $2,500">$1,500 – $2,500</option>
                                    <option value="$2,500 – $4,000">$2,500 – $4,000</option>
                                    <option value="$4,000+">Luxury $4,000+</option>
                                </select>
                            </div>
                            <div class="col-md-6 mt-4">
                                <label>Preferred Accommodation Style</label>
                                <select name="accommodation" class="form-select form-select-lg">
                                    <option value="">Any</option>
                                    <option value="Luxury Lodges">Luxury Lodges & Camps</option>
                                    <option value="Mid-range">Comfortable Mid-range</option>
                                    <option value="Budget">Budget-Friendly</option>
                                </select>
                            </div>

                            <!-- Special Requests -->
                            <div class="col-12 mt-4">
                                <label>Special Requests or Anything Else We Should Know</label>
                                <textarea name="special" class="form-control" rows="5" placeholder="e.g. honeymoon, birthday celebration, dietary needs, mobility requirements, specific wildlife interests..."></textarea>
                            </div>

                            <!-- Submit -->
                            <div class="col-12 text-center mt-5">
                                <button type="submit" class="btn btn-whatsapp btn-lg d-inline-flex align-items-center">
                                    <i class="fab fa-whatsapp fa-2x me-3"></i>
                                    SEND MY TAILOR-MADE REQUEST VIA WHATSAPP
                                </button>
                                <p class="text-white opacity-75 mt-3">
                                    We reply within minutes with ideas and a custom quote!
                                </p>
                            </div>

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

    <!-- Footer Start -->
<div class="container-fluid text-light footer pt-5 mt-5 wow fadeIn position-relative" data-wow-delay="0.1s" 
     style="background: url('https://www.shutterstock.com/image-vector/vector-illustration-african-savanna-sunset-flat-2661091341?trackingId=7adc637c-405e-4396-ad2d-12713efadefe') center center / cover no-repeat fixed;">
    
    <!-- Dark overlay for better text readability -->
    <div class="position-absolute top-0 start-0 w-100 h-100" style="background: rgba(0, 0, 0, 0.75); z-index: 1;"></div>
    
    <div class="container py-5 position-relative" style="z-index: 2;">
        <div class="row g-5">
            <div class="col-lg-3 col-md-6">
                <h4 class="text-white mb-3" data-translate="footer_company_title">Company</h4>
                <a class="btn btn-link" href="#about" data-translate="footer_about_us">About Us</a>
                <a class="btn btn-link" href="contact.php" data-translate="footer_contact_us">Contact Us</a>
                <a class="btn btn-link" href="#packages" data-translate="footer_safari_packages">Safari Packages</a>
                <a class="btn btn-link" href="#excursions" data-translate="footer_tours_excursions">Tours and Excursions</a>
                <a class="btn btn-link" href="#booking-sec" data-translate="footer_quick_booking">Quick Booking</a>
            </div>
            <div class="col-lg-3 col-md-6">
                <h4 class="text-white mb-3" data-translate="footer_contact_title">Contact</h4>
                <p class="mb-2" data-translate="footer_address"><i class="fa fa-map-marker-alt me-3"></i>Malindi, Kilifi, Kenya</p>
                <p class="mb-2"><i class="fa fa-phone-alt me-3"></i><a href="tel:+2547029131281" data-translate="footer_phone">+2547029131281</a></p>
                <p class="mb-2"><i class="fa fa-envelope me-3"></i><a href="mailto:info@dulieytoursafari.com" data-translate="footer_email">info@dulieytoursafari.com</a></p>
                <div class="position-relative d-flex justify-content-center mt-2">
                    <a class="btn btn-square mx-1" href="https://www.facebook.com/share/1PdVxLQJqV/"><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-square mx-1" href="https://www.instagram.com/duliey_tour_and_safaris?igsh=MXRwb3pua3d0M2dhbg=="><i class="fab fa-instagram"></i></a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <h4 class="text-white mb-3" data-translate="footer_gallery_title">Gallery</h4>
                <div class="row g-2 pt-2">
                    <div class="col-4">
                        <img class="img-fluid bg-light p-1" src="img/package-1.jpg" alt="" data-translate="footer_gallery_img1">
                    </div>
                    <div class="col-4">
                        <img class="img-fluid bg-light p-1" src="img/package-2.jpg" alt="" data-translate="footer_gallery_img2">
                    </div>
                    <div class="col-4">
                        <img class="img-fluid bg-light p-1" src="img/package-3.jpg" alt="" data-translate="footer_gallery_img3">
                    </div>
                    <div class="col-4">
                        <img class="img-fluid bg-light p-1" src="img/package-2.jpg" alt="" data-translate="footer_gallery_img4">
                    </div>
                    <div class="col-4">
                        <img class="img-fluid bg-light p-1" src="img/package-3.jpg" alt="" data-translate="footer_gallery_img5">
                    </div>
                    <div class="col-4">
                        <img class="img-fluid bg-light p-1" src="img/package-1.jpg" alt="" data-translate="footer_gallery_img6">
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <h4 class="text-white mb-3" data-translate="footer_newsletter_title">Newsletter</h4>
                <p data-translate="footer_newsletter_text">Join our client list and receive updates on tours, packages, excursions and travel trending topics, all at Duliey Tours & Safaris.</p>
                <div class="position-relative mx-auto" style="max-width: 400px;">
                    <input class="form-control border-primary w-100 py-3 ps-4 pe-5" type="text" placeholder="Your email" data-translate="footer_newsletter_placeholder">
                    <button type="button" class="btn btn-primary py-2 position-absolute top-0 end-0 mt-2 me-2" data-translate="footer_newsletter_button">SignUp</button>
                </div>
            </div>
        </div>
    </div>
    <div class="container position-relative" style="z-index: 2;">
        <div class="copyright">
            <div class="row">
                <div class="col-md-6 text-center text-md-start mb-3 mb-md-0" data-translate="footer_copyright">
                    &copy; <a class="border-bottom" href="#">Duliey Tours & Safaris</a>, All Rights Reserved.
                    Copyrights <a class="border-bottom">2025</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Footer End -->


<!-- Same WhatsApp script as before -->
<script>
function sendTailorRequest(e) {
    e.preventDefault();
    const f = document.getElementById('tailorForm');
    const d = new FormData(f);
    const parks = Array.from(document.querySelectorAll('input[type=checkbox]:checked'))
                       .map(cb => cb.value)
                       .join(', ') || 'None specified';

    let msg = `*NEW TAILOR-MADE SAFARI REQUEST*%0A%0A`;
    msg += `*Name:* ${d.get('name')}%0A`;
    msg += `*WhatsApp:* ${d.get('whatsapp')}%0A`;
    if (d.get('email')) msg += `*Email:* ${d.get('email')}%0A`;
    if (d.get('country')) msg += `*Country:* ${d.get('country')}%0A`;
    if (d.get('dates')) msg += `*Travel Dates:* ${d.get('dates')}%0A`;
    if (d.get('days')) msg += `*Duration:* ${d.get('days')} days%0A`;
    if (d.get('travelers')) msg += `*Travelers:* ${d.get('travelers')}%0A`;
    msg += `*Destinations:* ${parks}%0A`;
    if (d.get('budget')) msg += `*Budget:* ${d.get('budget')} per person%0A`;
    if (d.get('accommodation')) msg += `*Accommodation:* ${d.get('accommodation')}%0A`;
    if (d.get('special')) msg += `%0A*Special Requests:* ${d.get('special')}%0A`;
    msg += `%0AFrom Duliey Tours & Safaris Tailor-Made Planner`;

    const adminPhone = "254702931281"; // ← CHANGE TO YOUR REAL NUMBER
    window.open(`https://wa.me/${adminPhone}?text=${msg}`, '_blank');
}
</script>

</body>
</html>