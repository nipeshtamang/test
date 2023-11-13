<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package drishyam
 */

get_header();
?>
<!-- Banner -->
<div class="home-banner">
    <?php echo do_shortcode('[smartslider3 slider="2"]'); ?>
</div>


<!-- About Us -->
<div id="about" class="about title-header">
    <div class="container">
        <h1>About Us</h1>
        <p>Drishyam Digital Media Pvt. Ltd. is independent Digital Service provider established with the aim of
            providing digital media services for the modern day people. Since the establishement we are performing
            Digital Media Services through various Media. We are providing Dynamic Display Solution for Corporate and
            Government Sector since begining.</p>

        <p>We have devoted our entire energy to facilitate digitally to our valued clients, we are progressing with the
            satisfied client base.</p>
    </div>
</div>

<!-- Services -->
<div id="services" class="services title-header">
    <div class="container">
        <h1>Services</h1>
        <div class="row">
            <div class="col-md-3">
                <div class="box">
                    <h4>Digital Display</h4>
                    <p>We believe in the power of Digital Display as a Nobel storytelling platform to
                        engage with mass at a time. We Deliver high- impact, effective, innovative digital
                        display solutions for Retails, corporate and government. With our cloud based
                        content management system multiple display can be managed from anywhere any
                        time.</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="box">
                    <h4>Digital Content</h4>
                    <p>&quot;Contain is king&quot; so it is essential to creating high-quality and shareable digital
                        contain for
                        building your brand reputation. Our Content creation team forms a deeper understanding of
                        your goals, and help your organization to create digital content.</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="box">
                    <h4>Digital Production</h4>
                    <p>We live in a digitally connected world. We know how business communicate with public to
                        deliver and render their services to their target customers. We help our client to prepare and
                        produce digital content which includes all kind of promotional and advertisement materials.</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="box">
                    <h4>Digital Promotion</h4>
                    <p>We help you to concept, plan and execute a best in class digital promotion campaign to reach,
                        inform, engage, reward and convert your target customers. Whether you are SME, Corporate or
                        Government.</p>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Clients -->
<div id="clients" class="clients title-header">
    <div class="container">
        <h1>Happy Clients</h1>
        
        <div class="row">
        <?php
                $client= new WP_Query(array(
                    'post_type' => 'clients',
                    'order' => 'ASC',
					'posts_per_page' => '6',
                ));
                while ($client->have_posts()) : $client->the_post(); ?>
                <div class="col-md-3 mb-3">
                    <img src="<?php the_post_thumbnail_url(); ?>" alt="image">
                    <h4 class="py-3"><?php the_title(); ?></h4>
                </div>
            
            <?php endwhile; ?>
        </div>
    </div>
</div>


<?php
get_footer();