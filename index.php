<?php
get_header();
?>


<?php
/**
 * 
 


<!-- *******Welcome Section Start ****** -->
<div class="container-fluid px-0">

    <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active" data-bs-interval="10000">
                <img src="<?php echo get_template_directory_uri(); ?>/images/welcome-banner-1.jpg" class="d-block w-100 img-fluid" alt="...">
            </div>
            <div class="carousel-item" data-bs-interval="2000">
                <img src="<?php echo get_template_directory_uri(); ?>/images/welcome-banner-2.jpg" class="d-block w-100 img-fluid" alt="...">
            </div>
            <div class="carousel-item">
                <img src="<?php echo get_template_directory_uri(); ?>/images/welcome-banner-3.jpg" class="d-block w-100 img-fluid" alt="...">
            </div>

        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

</div>

<!-- *******Welcome Section End ****** -->

 * 
 */
?>

<!--***** Our courses section start  ******-->

<div class="container-fluid py-5 bg-body-tertiary">
    <div class="container">
        <div class="row">
            <div class="col-12 mb-5">
                <h2 class="text-center mb-3 fw-bold">My Projects</h2>
                <p class="text-center">
                    Lorem, ipsum dolor sit amet consectetur
                    adipisicing elit amet consectetur adipisicing elit.
                    <br>
                    Facere, alias consequatur. Hic, ex dolor esse sequi ex
                    dolor esse sequi!
                </p>

            </div>

            <!--** photo-card start ** -->

            <?php
            query_posts(array(
                'posts_per_page'    => -1,
                'order'             => 'DESC'
            ));
            ?>

            <?php while (have_posts()) : the_post(); ?>
                <!-- item start  -->
                <div class="col-md-4 mb-md-4 mb-3">
                    <div class="card shadow rounded-0">

                        <?php if (has_post_thumbnail()) {
                            the_post_thumbnail('medium', array(
                                'class' => 'card-img-top rounded-0',
                                'alt'   =>  get_the_title()
                            ));
                        } ?>


                        <div
                            class="card-body our-courses-view-btn-hover d-flex flex-column justify-content-center align-items-center position-relative pb-4">
                            <div
                                class="position-absolute top-0 start-50 translate-middle bg-white px-3 py-2 rounded-circle shadow-sm">
                                <i class="bi bi-filetype-html fs-2 icon-color"></i>
                            </div>
                            <h5 class="card-title mt-5 mb-3"> <?php the_title(); ?> </h5>

                            <?php
                            $link = get_post_meta(get_the_ID(), 'Github Link', true);
                            if ($link) {
                                echo '<a href="' . esc_url($link) . '" target="_blank" class="btn rounded-pill brand-color">View on GitHub</a>';
                            }
                            ?>


                        </div>

                    </div>
                </div>
                <!-- item end  -->
            <?php endwhile;
            wp_reset_postdata(); ?>



            <!--** photo-card end ** -->
        </div>
    </div>
</div>

<!--***** Our courses section start  ******-->


<!-- *****Footer Section Start *****-->

<div class="container-fluid footer-bg-color">
    <div class="container">
        <div class="row py-5">
            <div class="col-md-4">
                <div class="row">
                    <div class="col-12 footer-logo-size mb-3">
                        <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/logo-1.jpg" alt="main logo" style="width: 80px;"></a>
                    </div>

                    <div class="col-12 footer-address mt-3">
                        <a href="#" class="text-decoration-none">
                            <i class="bi bi-geo-alt"></i>
                            New Circular Road, Mouchak Mor, Malibagh, Dhaka, Bangladesh
                        </a>
                        <a href="tel:+8801715-038031" class="text-decoration-none d-block">
                            <i class="bi bi-phone-vibrate"></i> +88001914449393
                        </a>
                        <a href="#" class="text-decoration-none d-block">
                            <i class="bi bi-envelope-at"></i> masudrana@gmail.com
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-md-2 footer-company mt-md-0 mt-4">
                <h5 class="footer-headings-color mb-md-3 mb-2">Company</h5>
                <ul>
                    <li>
                        <a href="index.html">Home</a>
                    </li>
                    <li><a href="about-us.html">My Projects</a></li>

                    <li><a href="faqs.html">About Myself</a></li>

                    <li><a href="contact-us.html">Contact</a></li>

                </ul>
            </div>
            <div class="col-md-3 footer-courses mt-md-0 mt-4">
                <h5 class="footer-headings-color mb-md-3 mb-2">Recent Projects</h5>
                <ul>
                    <li>
                        <a href="https://masudrana93.github.io/saimons-ielts/" target="_blank">Saimon IELTS</a>
                    </li>
                    <li><a href="https://masudrana93.github.io/naem-nizam/" target="_blank">Naem Nizam</a></li>

                    <li><a href="https://masudrana93.github.io/happiness-institute/" target="_blank">Happiness Institute</a></li>

                    <li><a href="https://masudrana93.github.io/madrasha-website/" target="_blank">Madrasha</a></li>

                    <li><a href="https://masudrana93.github.io/university-website/" target="_blank">University</a></li>





                </ul>
            </div>
            <div class="col-md-3 footer-getin-touch mt-md-0 mt-4">
                <h5 class="footer-headings-color mb-md-3 mb-2">Get In Touch</h5>
                <ul>
                    <li>
                        <a href="#"><i class="bi bi-instagram"></i> Instagram</a>
                    </li>
                    <li><a href="#"><i class="bi bi-youtube"></i> Youtube</a></li>

                    <li><a href="#"><i class="bi bi-facebook"></i> Facebook</a></li>

                    <li><a href="#"><i class="bi bi-linkedin"></i> Linkedin</a></li>

                </ul>

            </div>
        </div>
    </div>
</div>
<!-- *****Footer Section End *****-->

<?php get_footer(); ?>