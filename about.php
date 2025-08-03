<?php
	include ('include/header.php');
?>

<main class="site-main">
    <!-- page-header -->
    <section class="page-header">
        <div class="page-header-bg"></div>
        <div class="container">
            <div class="page-header-inner text-center">
                <h2 class="wow fadeInUp animated" data-wow-duration="1500ms" data-wow-delay="100ms">About Company</h2>
                <ul class="page-header-inner-title list-unstyled wow fadeInUp animated" data-wow-duration="1500ms" data-wow-delay="300ms">
                    <li class="arrow-right"><a href="index.php">Home</a></li>
                    <li><h4>About Company</h4></li>
                </ul>
            </div>
        </div>
    </section>

    <!-- progress-one -->
    <section class="progress-one">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 wow fadeInLeft animated" data-wow-duration="1500ms" data-wow-delay="200ms">
                    <div class="progress-one-left">
                        <div class="section-title">
                            <i class="icon-main-icon"></i>
                            <span>Welcome To Fiberflow</span>
                        </div>
                        <div class="section-main-title">
                            <h2><span class="section-main-title-primery">5+</span>Years Of Experience In Broadband <span class="section-main-title-primery">Internet</span></h2>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 wow fadeInRight animated" data-wow-duration="1500ms" data-wow-delay="200ms">
                    <div class="progress-one-right">
                        <p>We are a leading Internet provider in Coimbatore and surrounding areas, delivering high-speed fiber broadband. With over 2000+ happy customers, we solve network issues quickly and efficiently.</p>
                        <ul class="list-item">
                            <li><i class="icon-right-arrow"></i><p>Advanced networking technology</p></li>
                            <li><i class="icon-right-arrow"></i><p>Highly qualified engineering team</p></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- whychoose-one -->
    <section class="whychoose-one" style="margin-bottom: 150px;">
        <div class="container">
            <div class="section-title text-center">
                <i class="icon-main-icon"></i>
                <span>Why Choose Us</span>
            </div>
            <div class="section-main-title text-center">
                <h2 class="mx-auto">Explore Why Should People <span class="section-main-title-primery">Choose Our</span> Service</h2>
            </div>
            <div class="row">
                <!-- Services list -->
                <?php
                    $features = [
                        ["icon" => "flaticon-stopwatch", "title" => "Fast Installation"],
                        ["icon" => "flaticon-price-tag", "title" => "Cheap Pricing Plan"],
                        ["icon" => "flaticon-24-hours", "title" => "24/7 hr Support"],
                        ["icon" => "flaticon-wifi", "title" => "High-Speed WiFi"],
                        ["icon" => "flaticon24-hours", "title" => "Customer Support"],
                        ["icon" => "flaticon-security", "title" => "Secure Connection"],
                    ];
                    $delay = 200;
                    foreach ($features as $feature) {
                        echo '
                        <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp animated" data-wow-duration="1500ms" data-wow-delay="'.$delay.'ms">
                            <div class="whychoose-one-box">
                                <i class="'.$feature["icon"].'"></i>
                                <div class="text">
                                    <h4>'.$feature["title"].'</h4>
                                    <div>
                                        <a href="plans.php" class="btn-read-more">Read More</a>
                                    </div>
                                </div>
                            </div>
                        </div>';
                        $delay += 200;
                    }
                ?>
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section class="services-faq">
        <div class="services-faq-shape-1"></div>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-5 col-lg-6 col-md-12 col-sm-12 wow fadeInLeft animated" data-wow-duration="1500ms" data-wow-delay="100ms">
                    <div class="services-faq-left">
                        <div class="section-title"><i class="icon-main-icon"></i><span>Asked Questions</span></div>
                        <div class="section-main-title"><h2>Have Any Questions On Your Minds!</h2></div>
                        <ul class="list-item">
                            <li><i class="icon-right-arrow"></i><p>We have good customer service 24/7</p></li>
                            <li><i class="icon-right-arrow"></i><p>You can ask your queries to us, or check here</p></li>
                        </ul>
                    </div>
                </div>

                <div class="col-xl-7 col-lg-6 col-md-12 col-sm-12 wow fadeInRight animated" data-wow-duration="1500ms" data-wow-delay="100ms">
                    <div class="services-faq-inner">
                        <div class="accordion accordion-flush" id="accordionFlushExample">
                            <?php
                                $faqs = [
                                    ["q" => "Which Wi-Fi is best for home?", "a" => "Fiberflow's fiber-optic Wi-Fi plans are ideal for home use, offering stable and high-speed connectivity."],
                                    ["q" => "Which is the best broadband?", "a" => "Fiber broadband is the best due to its speed, reliability, and low latency—Fiberflow specializes in this."],
                                    ["q" => "Which is the best internet service provider?", "a" => "Fiberflow is trusted by 2000+ users in Coimbatore for fast speeds, low downtime, and great customer service."],
                                    ["q" => "Which is the best internet connection?", "a" => "Fiber connections provide the best experience for gaming, streaming, and work-from-home—Fiberflow delivers all of these."],
                                    ["q" => "How to measure internet speed?", "a" => "You can visit websites like speedtest.net or use our customer portal to check real-time speed statistics."],
                                    ["q" => "Which Wi-Fi plan is best for home?", "a" => "Our starter 100 Mbps unlimited plan is perfect for most homes—affordable, fast, and reliable."],
                                    ["q" => "How to measure broadband speed?", "a" => "Use any speed testing app or online tool like Ookla Speedtest while connected directly to your router."],
                                    ["q" => "Which is the best Wi-Fi connection near me?", "a" => "Fiberflow provides the best local fiber broadband service in and around Coimbatore—check availability on our website."]
                                ];
                                $i = 1;
                                foreach ($faqs as $faq) {
                                    $id = "flush-collapse".$i;
                                    $heading = "flush-heading".$i;
                                    $show = ($i == 1) ? "show" : "";
                                    $collapsed = ($i == 1) ? "" : "collapsed";
                                    echo '
                                    <div class="accordion-item">
                                        <h6 class="accordion-header" id="'.$heading.'">
                                            <button class="accordion-button '.$collapsed.'" type="button" data-bs-toggle="collapse" data-bs-target="#'.$id.'" aria-expanded="'.($i == 1 ? "true" : "false").'" aria-controls="'.$id.'">
                                                '.$faq["q"].'
                                            </button>
                                        </h6>
                                        <div id="'.$id.'" class="accordion-collapse collapse '.$show.'" aria-labelledby="'.$heading.'" data-bs-parent="#accordionFlushExample">
                                            <div class="accordion-body"><p>'.$faq["a"].'</p></div>
                                        </div>
                                    </div>';
                                    $i++;
                                }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<?php
	include ('include/footer.php');
?>
