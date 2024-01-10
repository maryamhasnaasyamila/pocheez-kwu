@extends('frontend.layout.index')

@section('content')
    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex align-items-center">
        <div class="container position-relative text-center text-lg-start" data-aos="zoom-in" data-aos-delay="100">
            <div class="row">
                <div class="col-lg-8">
                    <h1>Welcome to <span>Pocheez.id</span></h1>
                    <h2>Sekali hap, langsung mood up!</h2>

                    <!-- <div class="btns">
                                                                              <a href="#menu" class="btn-menu animated fadeInUp scrollto"
                                                                                >Our Menu</a
                                                                              >
                                                                              <a
                                                                                href="#book-a-table"
                                                                                class="btn-book animated fadeInUp scrollto"
                                                                                >Book a Table</a
                                                                              >
                                                                            </div> -->
                </div>
                <div class="col-lg-4 d-flex align-items-center justify-content-center position-relative" data-aos="zoom-in"
                    data-aos-delay="200">
                    <a href="https://www.youtube.com/watch?v=u6BOC7CDUTQ" class="glightbox">
                        <img src="{{ asset('assets/img/kentang.png') }}" style="width:35%" class="img-fluid"
                            alt="" />
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!-- End Hero -->

    <main id="main">
        <!-- ======= Why Us Section ======= -->
        <section id="why-us" class="why-us">
            <div class="container" data-aos="fade-up">
                <div class="section-title">
                    <h2>Why Pocheez</h2>
                    <!-- <p>3 Reason of Must to Order</p> -->
                </div>

                <div class="row">
                    <div class="col-lg-4">
                        <div class="box" data-aos="zoom-in" data-aos-delay="100">
                            <span>01</span>
                            <h4>Affordable Price</h4>
                            <p>
                                Dengan budget 10k kamu bisa nyemil kenyang, sehat, dan enak,
                                lho!
                            </p>
                        </div>
                    </div>

                    <div class="col-lg-4 mt-4 mt-lg-0">
                        <div class="box" data-aos="zoom-in" data-aos-delay="200">
                            <span>02</span>
                            <h4>High Quality</h4>
                            <p>
                                Gak usah diragukan lagi deh kualitasnya, karena Pocheez
                                terbuat dari bahan-bahan berkualitas yang terjamin mutunya!
                            </p>
                        </div>
                    </div>

                    <div class="col-lg-4 mt-4 mt-lg-0">
                        <div class="box" data-aos="zoom-in" data-aos-delay="300">
                            <span>03</span>
                            <h4>Mood Up</h4>
                            <p>Sekali hap, langsung mood up!</p>
                            <p>So, what you waiting for?</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Why Us Section -->

        <!-- ======= Specials Section ======= -->
        <section id="specials" class="specials">
            <div class="container" data-aos="fade-up">
                <div class="section-title">
                    <h2>Pocheez's Hacks</h2>
                    <!-- <p>Tips Menikmati Pocheez</p> -->
                </div>

                <div class="row" data-aos="fade-up" data-aos-delay="100">
                    <div class="col-lg-3">
                        <ul class="nav nav-tabs flex-column">
                            <li class="nav-item">
                                <a class="nav-link active show" data-bs-toggle="tab" href="#tab-1">Original Authentic</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-bs-toggle="tab" href="#tab-2">Xtra Cheese Melt</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-bs-toggle="tab" href="#tab-3">With Creamy Mayo</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-bs-toggle="tab" href="#tab-4">Spicy Sensation</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-bs-toggle="tab" href="#tab-5">Grilled Satay</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-9 mt-4 mt-lg-0">
                        <div class="tab-content">
                            <div class="tab-pane active show" id="tab-1">
                                <div class="row">
                                    <div class="col-lg-8 details order-2 order-lg-1">
                                        <h3>Original Authentic</h3>
                                        <p class="fst-italic">
                                            Nikmati rasa otentik yang asli dari Pocheez.
                                        </p>
                                        <p>
                                            Bayangkan ngegigit bola emas garing sempurna, kulitnya renyah ngasih jalan ke
                                            inti mozzarella meleleh.
                                            Itulah otentik original Pocheez, melodi abadi rasa yang nggak bakal lekang
                                            waktu. Kayak pelukan hangat nenek, tapi versi camilan.
                                        </p>

                                    </div>
                                    <div class="col-lg-4 text-center order-1 order-lg-2">
                                        <img src="{{ asset('assets/img/original.png') }}" alt=""
                                            class="img-fluid" />
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="tab-2">
                                <div class="row">
                                    <div class="col-lg-8 details order-2 order-lg-1">
                                        <h3>Xtra Cheese Melt</h3>
                                        <p class="fst-italic">
                                            Buat kamu yang cheese lovers, wajib coba!
                                        </p>
                                        <p>
                                            Hack ini bawa Pocheezmu ke level maksimal.
                                            Cukup taburi keju melt parut di atas Pocheez sebelum masuk oven/microvae/pan.
                                            Saksikan banjir keju meleleh, ciptakan simfoni lelehan yang ngebahagiain.
                                        </p>
                                    </div>
                                    <div class="col-lg-4 text-center order-1 order-lg-2">
                                        <img src="{{ asset('assets/img/keju.png') }}" alt="" class="img-fluid" />
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="tab-3">
                                <div class="row">
                                    <div class="col-lg-8 details order-2 order-lg-1">
                                        <h3>With Creamy Mayo</h3>
                                        <p class="fst-italic">
                                            Pocheez + mayonaise = jodoh langit di dunia camilan!
                                        </p>
                                        <p>
                                            Kombinasi ini kayak awan beludru kerihanan nyungkup taste bud-mu.
                                            Kesegaran mayo yang lembut bikin komplit kehangatan keju Pocheez, ciptakan
                                            harmoni tekstur dan rasa yang bikin tanganmu nggak berhenti ngambil.
                                        </p>
                                    </div>
                                    <div class="col-lg-4 text-center order-1 order-lg-2">
                                        <img src="{{ asset('assets/img/saus-pedas.png') }}" alt=""
                                            class="img-fluid" />
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="tab-4">
                                <div class="row">
                                    <div class="col-lg-8 details order-2 order-lg-1">
                                        <h3>
                                            Spicy Sensation
                                        </h3>
                                        <p class="fst-italic">
                                            Tambahkan sensasi pedas pada Pocheezmu!
                                        </p>
                                        <p>
                                            Hack ini buat jiwa pemberani yang suka camilan nendang.
                                            Cabe bubuk atau saus sambal bakal nyalain pesta rasa di lidahmu.
                                        </p>
                                    </div>
                                    <div class="col-lg-4 text-center order-1 order-lg-2">
                                        <img src="{{ asset('assets/img/mayo.png') }}" alt="" class="img-fluid" />
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="tab-5">
                                <div class="row">
                                    <div class="col-lg-8 details order-2 order-lg-1">
                                        <h3>
                                            Grilled Satay
                                        </h3>
                                        <p class="fst-italic">
                                            Ini dia cara unik untuk menikmati Pocheez, abis digoreng dibakar lagi.
                                        </p>
                                        <p>
                                            Jurus ini buat jago panggang yang ngerti sentuhan smoky.
                                            Lempar Pocheezmu ke grill atau panci panggang, biarkan api mencium kulitnya,
                                            lihat mereka berubah jadi kenikmatan hangus beraroma asap.
                                            Sedikit gosong bikin dimensi rasa baru, kayak serenada musim panas yang menggoda
                                            indra mu.
                                        </p>
                                    </div>
                                    <div class="col-lg-4 text-center order-1 order-lg-2">
                                        <img src="{{ asset('assets/img/dipanggang.png') }}" alt=""
                                            class="img-fluid" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Specials Section -->

        <!-- ======= Testimonials Section ======= -->
        <section id="testimonials" class="testimonials section-bg">
            <div class="container" data-aos="fade-up">
                <div class="section-title">
                    <h2>Testimonials</h2>
                    <p>What they're saying about Pocheez</p>
                </div>

                <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <p>
                                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                    Proin iaculis purus consequat sem cure digni ssim donec
                                    porttitora entum suscipit rhoncus. Accusantium quam,
                                    ultricies eget id, aliquam eget nibh et. Maecen aliquam,
                                    risus at semper.
                                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                </p>
                                <img src="assets/img/testimonials/testimonials-1.jpg" class="testimonial-img"
                                    alt="" />
                                <h3>Karina Yoo</h3>
                                <h4>Rocket Puncher</h4>
                            </div>
                        </div>
                        <!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <p>
                                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                    Export tempor illum tamen malis malis eram quae irure esse
                                    labore quem cillum quid cillum eram malis quorum velit fore
                                    eram velit sunt aliqua noster fugiat irure amet legam anim
                                    culpa.
                                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                </p>
                                <img src="assets/img/testimonials/testimonials-2.jpg" class="testimonial-img"
                                    alt="" />
                                <h3>Winter Kim</h3>
                                <h4>Armamanter</h4>
                            </div>
                        </div>
                        <!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <p>
                                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                    Enim nisi quem export duis labore cillum quae magna enim
                                    sint quorum nulla quem veniam duis minim tempor labore quem
                                    eram duis noster aute amet eram fore quis sint minim.
                                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                </p>
                                <img src="assets/img/testimonials/testimonials-3.jpg" class="testimonial-img"
                                    alt="" />
                                <h3>Giselle Uchinga</h3>
                                <h4>Xenoglossy</h4>
                            </div>
                        </div>
                        <!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <p>
                                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                    Fugiat enim eram quae cillum dolore dolor amet nulla culpa
                                    multos export minim fugiat minim velit minim dolor enim duis
                                    veniam ipsum anim magna sunt elit fore quem dolore labore
                                    illum veniam.
                                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                </p>
                                <img src="assets/img/testimonials/testimonials-4.jpg" class="testimonial-img"
                                    alt="" />
                                <h3>Ningning Yizhuo</h3>
                                <h4>E.D Hacker</h4>
                            </div>
                        </div>
                        <!-- End testimonial item -->
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </section>
        <!-- End Testimonials Section -->

        <!-- ======= Gallery Section ======= -->
        <section id="gallery" class="gallery">
            <div class="container" data-aos="fade-up">
                <div class="section-title">
                    <h2>Pocheez's Gallery</h2>
                    <!-- <p>Some photos from Our Restaurant</p> -->
                </div>
            </div>

            <div class="container-fluid" data-aos="fade-up" data-aos-delay="100">
                <div class="row g-0">
                    <div class="col-lg-3 col-md-3">
                        <div class="gallery-item">
                            <a href="assets/img/gallery/kentang-kupas.png') }}" class="gallery-lightbox"
                                data-gall="gallery-item">
                                <img src="{{ asset('assets/img/gallery/kentang-kupas.png') }}" alt=""
                                    class="img-fluid" />
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-3">
                        <div class="gallery-item">
                            <a href="assets/img/gallery/keju-dadu.png') }}" class="gallery-lightbox"
                                data-gall="gallery-item">
                                <img src="{{ asset('assets/img/gallery/keju-dadu.png') }}" alt=""
                                    class="img-fluid" />
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-3">
                        <div class="gallery-item">
                            <a href="assets/img/gallery/panir.png') }}" class="gallery-lightbox"
                                data-gall="gallery-item">
                                <img src="{{ asset('assets/img/gallery/panir.png') }}" alt=""
                                    class="img-fluid" />
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-3">
                        <div class="gallery-item">
                            <a href="assets/img/gallery/frozen.png') }}" class="gallery-lightbox"
                                data-gall="gallery-item">
                                <img src="{{ asset('assets/img/gallery/frozen.png') }}" alt=""
                                    class="img-fluid" />
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-3">
                        <div class="gallery-item">
                            <a href="assets/img/gallery/original.png') }}" class="gallery-lightbox"
                                data-gall="gallery-item">
                                <img src="{{ asset('assets/img/gallery/original.png') }}" alt=""
                                    class="img-fluid" />
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-3">
                        <div class="gallery-item">
                            <a href="assets/img/gallery/mayo.png') }}" class="gallery-lightbox" data-gall="gallery-item">
                                <img src="{{ asset('assets/img/gallery/mayo.png') }}" alt=""
                                    class="img-fluid" />
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-3">
                        <div class="gallery-item">
                            <a href="assets/img/gallery/saus-pedas.png') }}" class="gallery-lightbox"
                                data-gall="gallery-item">
                                <img src="{{ asset('assets/img/gallery/saus-pedas.png') }}" alt=""
                                    class="img-fluid" />
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-3">
                        <div class="gallery-item">
                            <a href="assets/img/gallery/keju.png') }}" class="gallery-lightbox" data-gall="gallery-item">
                                <img src="{{ asset('assets/img/gallery/keju.png') }}" alt=""
                                    class="img-fluid" />
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Gallery Section -->

        <!-- ======= Chefs Section ======= -->
        <section id="chefs" class="chefs">
            <div class="container" data-aos="fade-up">
                <div class="section-title">
                    <h2>Our Team</h2>
                    <!-- <p>Our Proffesional Chefs</p> -->
                </div>

                <div class="row">
                    <div class="col-lg-3 col-md-3">
                        <div class="member" data-aos="zoom-in" data-aos-delay="100">
                            <img src="{{ asset('assets/img/chefs/chefs-2.jpg') }}" class="img-fluid" alt="" />
                            <div class="member-info">
                                <div class="member-info-content">
                                    <h4>Haura Tsabitah</h4>
                                    <span></span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-3">
                        <div class="member" data-aos="zoom-in" data-aos-delay="200">
                            <img src="{{ asset('assets/img/chefs/chefs-2.jpg') }}" class="img-fluid" alt="" />
                            <div class="member-info">
                                <div class="member-info-content">
                                    <h4>Maryam Hasnaa' Syamila</h4>
                                    <span>0110222067</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-3">
                        <div class="member" data-aos="zoom-in" data-aos-delay="200">
                            <img src="{{ asset('assets/img/chefs/chefs-2.jpg') }}" class="img-fluid" alt="" />
                            <div class="member-info">
                                <div class="member-info-content">
                                    <h4>Aria Kristalinact</h4>
                                    <span></span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-3">
                        <div class="member" data-aos="zoom-in" data-aos-delay="200">
                            <img src="{{ asset('assets/img/chefs/chefs-2.jpg') }}" class="img-fluid" alt="" />
                            <div class="member-info">
                                <div class="member-info-content">
                                    <h4>Jamilatun Khoerunnisa</h4>
                                    <span></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-4 col-md-3">
                        <div class="member" data-aos="zoom-in" data-aos-delay="100">
                            <img src="{{ asset('assets/img/chefs/chefs-1.jpg') }}" class="img-fluid" alt="" />
                            <div class="member-info">
                                <div class="member-info-content">
                                    <h4>Faiz Abdullah</h4>
                                    <span></span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-3">
                        <div class="member" data-aos="zoom-in" data-aos-delay="200">
                            <img src="{{ asset('assets/img/chefs/chefs-1.jpg') }}" class="img-fluid" alt="" />
                            <div class="member-info">
                                <div class="member-info-content">
                                    <h4>Aulia Rahman Mahayudin</h4>
                                    <span></span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-3">
                        <div class="member" data-aos="zoom-in" data-aos-delay="200">
                            <img src="{{ asset('assets/img/chefs/chefs-1.jpg') }}" class="img-fluid" alt="" />
                            <div class="member-info">
                                <div class="member-info-content">
                                    <h4>Bagus Achmad</h4>
                                    <span></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Chefs Section -->

        <!-- End Contact Section -->
    </main>
    <!-- End #main -->
@endsection
