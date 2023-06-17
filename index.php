<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=2.0">
        <title>Admissions - Vichakshan Jain Vidyapeeth</title>
        <link rel="apple-touch-icon" sizes="180x180" href="Images/favicon.png">
        <link rel="icon" type="image/png" href="Images/favicon.png" sizes="32x32">
        <link rel="icon" type="image/png" href="Images/favicon.png" sizes="16x16">
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous"></script>
        <link rel ="stylesheet" href="scripts/styless.css">
        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
        <link rel="stylesheet" href="css/animate.css">
        <script src="https://kit.fontawesome.com/020efee0e2.js" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    </head>
    <body>
        <nav class="navbar bg-light navbar sticky-top bg-body-tertiary clearfix" style="position: sticky;">
            <div class="container">
                <a class="navbar-brand" href="#">
                    <img src="Images/logo.png" alt="Vichakshan Jain Vidyapeeth" class="resizer">
                </a>
                <a style="object-position: 500px;"><button class="button" id="enquire_button">ENQUIRE NOW</button></a>
            </div>
        </nav>
        <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="Images/img-mob1.jpg" class="d-block w-100" alt="Residential Cum School front">
                </div>
                <div class="carousel-item">
                    <img src="Images/4.jpeg" class="d-block w-100" alt="Values practices">
                </div>
                <div class="carousel-item">
                    <img src="Images/10.jpeg" class="d-block w-100" alt="Extra curricular activities">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
        <section >
            <div class="container">
                <div class="row align-items-start">
                    <div class="col-lg-4 col-md-4 order-0 order-sm-last container_ mt-3 form_back clearfix"data-aos="fade-left" data-aos-duration="500">
                        <h2 class="resizer_beauti">Admission Form</h2>

                        <form id="form" action="scripts/register.php" method="POST">
                            <div class="form-group">
                                <label id="form" for="name">*Name:</label>
                                <input type="text" minlength="" id="form_name" name="Name_" placeholder="Enter your name" required>
                            </div>
                            <div class="form-group">
                                <label for="mobile">*Mobile Number:</label>
                                <input type="tel" minlength="10" maxlength="13" pattern="[0-9]+" id="mobile" name="Mobile" placeholder="Enter your mobile number" required>
                            </div>
                            <div class="form_group dropdown mb-2">
                                <label for="class" class="fw-bold">Class:</label><br>
                                <select name="class" class="better" required>
                                    <option value>Applying class *</option>
                                    <option value="Nursery">Nursery</option>
                                    <option value="KG 1">KG-1</option>
                                    <option value="KG-2">KG-2</option>
                                    <option value="Class 1">Class 1</option>
                                    <option value="Class 2">Class 2</option>
                                    <option value="Class 3">Class 3</option>
                                    <option value="Class 4">Class 4</option>
                                    <option value="Class 5">Class 5</option>
                                    <option value="Class 6">Class 6</option>
                                    <option value="Class 7">Class 7</option>
                                    <option value="Class 8">Class 8</option>
                                    <option value="Class 9">Class 9</option>
                                    <option value="Class 11">Class 11</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <input onclick="focusForm()" type="submit" value="Submit">
                            </div>
                        </form>
                    </div>
                    <div class="col-lg-8 col-md-7 mt-3 mb-3 order-1 beauti clearfix" style="line-height: 27px;">
                        <div data-aos="fade-up">
                            <h1 class="para_beauti"><div class="pt-3 pb-3">About us</div></h1><br>
                            <p class="screen_resizer" style="color: rgb(95, 95, 95);">Spread in 14 acre piece of land with lush greenery, the VJV School Campus is one of the finest places to study. The
                            closely located Jain Teerth Kaivalyadham of about 40 acre spread with its huge temple and guest house, the calm and
                            peaceful environment around the territory, the beautiful residential townships in the vicinity and the presence of a
                            holy temple inside, are the other aspects that make the VJV Kumhari Campus a nicest schooling and boarding destination.</p>
                        </div>
                        <hr class="mt-3 mb-3">
                        <div data-aos="fade-up">
                            <h1 style="letter-spacing: 1.2; margin: 15px 0px;">Our Mission</h1><br>
                            <p class="screen_resizer" style="color: rgb(95, 95, 95);">Development of well rounded, confident and responsible citizens who aspire to achieve their full potential and
                            contribute towards building the nation.</p><br>
                            <ul style="list-style: none; right: 20px;">
                                <li style="color: rgb(95, 95, 95);"><i class="mt-2 mb-2 fa-solid fa-check "></i> Shape The Moral Fabric Of Inquisitive Minds.</li>
                                <li style="color: rgb(95, 95, 95);"><i class="mt-2 mb-2 fa-solid fa-check "></i> Channelize Students Towards Spiritual, Psychological , Emotional And Social Growth..</li>
                            </ul>
                        </div>
                        <hr class="mt-3 mb-3">
                        <div data-aos="fade-up">
                            <h1 class="para_beauti"><div class="pt-3 pb-3">Our Aim</div></h1><br>
                            <p class="screen_resizer" style="color: rgb(95, 95, 95);">Shape young minds into responsible youth with the power of knowledge. To learn to use the knowledge acquired practically.</p>
                        </div>
                        <hr class="mt-3 mb-3">
                        <div data-aos="fade-up">
                            <h1 class="para_beauti">
                                <div class="pt-3 pb-3">Our Vision</div>
                            </h1><br>
                            <p class="screen_resizer" style="color: rgb(95, 95, 95);">Development of well rounded, confident and responsible citizens who aspire to achieve their full potential and contribute towards nation building.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section style="background: rgb(174, 0, 17);">
            <div class="container">
                <div class=" text-center">
                    <p class="pt-5" style="color: white; font-size: larger;" data-aos="fade-up">Why choose</p>
                    <h1 class="text-center" style="color: white;" data-aos="fade-up" data-aos-delay="100">VJV</h1>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class=" mt-5">
                            <div class="row mb-3">
                                <div class="col-md-4 col-sm-4 whyus-bg mt-2 mb-2" data-aos="fade-up">
                                    <div class="whyus_bg" style="border-radius: 10px; align-content: center;">
                                        <span class="image_beauti">
                                            <img class="whyus_img" src="Images/school.png">
                                        </span>
                                        <h5 style="text-align: center;">Infrastructure</h5>
                                        <hr style="margin-left: 10px; margin-right: 10px; font-weight: 200;" class="m-3">
                                        <ul class="list-2 pointers">
                                            <li><i class="fa fa-check-circle"></i> Computer Lab</li>
                                            <li><i class="fa fa-check-circle"></i> Activity Halls</li>
                                            <li><i class="fa fa-check-circle"></i> Library</li>
                                            <li><i class="fa fa-check-circle"></i> Multipurpose Halls</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-4 whyus-bg mt-2 mb-2" data-aos="fade-up" data-aos-delay="100" >
                                    <div class="course-item whyus_bg" style="border-radius: 10px; align-content: center;">
                                        <span>
                                            <img class="whyus_img" src="Images/football.png">
                                        </span>
                                        <h5 style="border-radius: 10px; text-align: center">Sports Amenities</h5>
                                        <hr style="margin-left: 10px; margin-right: 10px; font-weight: 200;" class="m-3">
                                        <ul class="list-2 pointers">
                                            <li><i class="fa fa-check-circle"></i> Cricket</li>
                                            <li><i class="fa fa-check-circle"></i> Football</li>
                                            <li><i class="fa fa-check-circle"></i> Volleyball</li>
                                            <li><i class="fa fa-check-circle"></i> Kho Kho</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-4 mt-2 mb-2" data-aos="fade-up" data-aos-delay="200">
                                    <div class="whyus_bg" style="border-radius: 10px;">
                                        <span>
                                            <img class="whyus_img" src="Images/user.png">
                                        </span>
                                        <h5 style="text-align: center;">Faculties</h5>
                                        <hr style="margin-left: 10px; margin-right: 10px;" class="m-3">
                                        <ul class="list-2 pointers">
                                            <li><i class="fa fa-check-circle"></i> Highly Qualified</li>
                                            <li><i class="fa fa-check-circle"></i> Experienced</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section style="margin-left: 35px; margin-right: 35px; margin-top: 40px; margin-bottom: 40px;">
            <div class="row beauti">
                <div class="col-md-12 mt-4 pt-3">
                    <div class="intro-box clearfix">
                        <div>
                            <div class="text-center mb-5" style="text-transform: none; letter-spacing: 1px; font-size: xx-large;"><i class="fa-solid fa-gallery-thumbnails" style="color: #000000;">Gallery</i></div>
                        </div>
                    </div>
                </div>
                <div class="container text-center resp">
                    <div class="row">
                        <div class="col-lg-3 mb-3 col-md-4 col-sm-6 col-6 mb-3">
                            <img class="mag_img img-fluid" src="Images/1.jpg" alt="Image 1" onclick="openOverlay('Images/1.jpg')" data-aos="fade-up" data-wow-offset="100px">
                        </div>
                        <div class="col-lg-3 mb-3 col-md-4 col-sm-6 col-6 mb-3">
                            <img class="mag_img img-fluid" src="Images/2.jpeg" alt="Image 2" onclick="openOverlay('Images/2.jpeg')"data-aos="fade-up" data-aos-delay="100" data-wow-offset="100px">
                        </div>
                        <div class="col-lg-3 mb-3 col-md-4 col-sm-6 col-6 mb-3">
                            <img class="mag_img img-fluid" src="Images/3.jpeg" alt="Image 3" onclick="openOverlay('Images/3.jpeg')"data-aos="fade-up"data-aos-delay="200" data-wow-offset="100px">
                        </div>
                        <div class="col-lg-3 mb-3 col-md-4 col-sm-6 col-6 mb-3">
                            <img class="mag_img img-fluid" src="Images/4_org.jpeg" alt="Image 4" onclick="openOverlay('Images/4_org.jpeg')"data-aos="fade-up" ata-aos-delay="300" data-wow-offset="100px">
                        </div>
                        <div class="col-lg-3 mb-3 col-md-4 col-sm-6 col-6 mb-3">
                            <img class="mag_img img-fluid" src="Images/5_1.jpeg" alt="Image 5" onclick="openOverlay('Images/5_1.jpeg')"data-aos="fade-up" data-wow-offset="100px"> 
                        </div>
                        <div class="col-lg-3 mb-3 col-md-4 col-sm-6 col-6 mb-3">
                            <img class="mag_img img-fluid" src="Images/6.jpeg" alt="Image 6" onclick="openOverlay('Images/6.jpeg')"data-aos="fade-up" data-aos-delay="100" data-wow-offset="100px">
                        </div>
                        <div class="col-lg-3 mb-3 col-md-4 col-sm-6 col-6 mb-3">
                            <img class="mag_img img-fluid" src="Images/7.jpeg" alt="Image 7" onclick="openOverlay('Images/7.jpeg')"data-aos="fade-up"ata-aos-delay="200" data-wow-offset="100px">
                        </div>
                        <div class="col-lg-3 mb-3 col-md-4 col-sm-6 col-6 mb-3">
                            <img class="mag_img img-fluid" src="Images/8.jpg" alt="Image 8" onclick="openOverlay('Images/8.jpg')"data-aos="fade-up" data-aos-delay="300" data-wow-offset="100px">
                        </div>
                        <div class="col-lg-3 mb-3 col-md-4 col-sm-6 col-6 mb-3">
                            <img class="mag_img img-fluid" src="Images/9.jpg" alt="Image 9" onclick="openOverlay('Images/9.jpg')">
                        </div>
                        <div class="col-lg-3 mb-3 col-md-4 col-sm-6 col-6 mb-3">
                            <img class="mag_img img-fluid" src="Images/10_org.jpeg" alt="Image 10" onclick="openOverlay('Images/10_org.jpeg')">
                        </div>
                        <div class="col-lg-3 mb-3 col-md-4 col-sm-6 col-6 mb-3">
                            <img class="mag_img img-fluid" src="Images/11.jpeg" alt="Image 11" onclick="openOverlay('Images/11.jpeg')"> 
                        </div>
                        <div class="col-lg-3 mb-3 col-md-4 col-sm-6 col-6 mb-3">
                            <img class="mag_img img-fluid" src="Images/12.jpeg" alt="Image 12" onclick="openOverlay('Images/12.jpeg')">
                        </div>
                    </div>
                </div>
                <div class="overlay" onclick="closeOverlay()">
                    <div class="arrow arrow-left" onclick="changeImage(-1)">&lt;</div>
                    <img id="overlayImage" alt="Enlarged Image">
                    <div class="arrow arrow-right" onclick="changeImage(1)">&gt;</div>
                </div>
            </div>
        </section>
        <section>
            <div class="row">
                <div class="col-lg-4">
        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
       <script>
            var images = [];
            var currentIndex = 0;

            function openOverlay(imageSrc, index) {
                currentIndex = index;
                document.getElementById('overlayImage').src = imageSrc;
                document.querySelector('.overlay').style.display = 'flex';
            }
            function closeOverlay() {
                document.querySelector('.overlay').style.display = 'none';
            }
            function changeImage(direction) {
                currentIndex += direction;
                if (currentIndex < 0) {
                    currentIndex = images.length - 1;
                } else if (currentIndex >= images.length) {
                    currentIndex = 0;
                }
                document.getElementById('overlayImage').src = images[currentIndex];
            }
            var galleryImages = document.querySelectorAll('.gallery img');
            for (var i = 0; i < galleryImages.length; i++) {
                images.push(galleryImages[i].src);
            }
        </script>
        <script>
            AOS.init();
        </script>
        <script>
            function focusForm() {
                document.getElementById('form').scrollIntoView();
            }
        </script>
        <script>
            document.getElementById("mobile").addEventListener("input", function() {
                var mobileInput = document.getElementById("mobile");
                var mobileLength = mobileInput.value.length;

                if (mobileLength < 10 || mobileLength > 13) {
                mobileInput.setCustomValidity("Mobile number must be between 10 and 13 digits.");
                } else {
                mobileInput.setCustomValidity("");
                }
            });
        </script>
        <!-- <script>
            function scrollIntoView() {
                document.getElementById('form_name').focus();
            }
        </script> -->
        <script>
            $(document).ready(function() {
            $("#enquire_button").click(function() {
                $("#form_name").focus();
                });
            });
        </script>
    </body>
</html>