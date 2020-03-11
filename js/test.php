<?php
get_header();
?>

<div class="eq-wrap event-single">

<?php
		// Start the loop.
		while ( have_posts() ) :
			the_post();
			$postid=$post->ID;
			$event_speakers=get_field('event_speakers',$postid);
			$event_schedule=get_field('event_schedule',$postid);
			
			?>


        <section class="top-banner">
            <div class="back-banner">
                 <?php
                  $img=wp_get_attachment_image_src( get_post_thumbnail_id( $post_id ), 'eventstax' )[0];
                  if(!empty($img)){
                  ?>
                <div class="back-bnr"><img src="<?php echo $img ?>" alt=""></div>
                <?php } ?>
                <div class="banner-title">
                    <h1><?php the_title(); ?></h1>
                    <p><?php $event_day = get_field('event_date', $postid);
                                      //$date = explode("/ ",$event_day);
                                    //   echo substr($event_day , 0, 2);
                                      ?> <?php $event_MONTH = get_field('event_date', $postid);
                                      
                                      $month = substr($event_MONTH,3, 2);

									
                                    //  echo date("M",$month);
                                     echo $event_MONTH;
                                      ?> |<?php echo get_field('event_location', $postid); ?> </p>
                                <div class="slider-btn-spc">
              <a class="btn btn-orng" href="<?php echo get_field('register_url'); ?>">Register Now</a>
            </div>
                </div>
            </div>
        </section>


        <section class="mid-contnet" data-aos="fade-up" data-aos-once="ture">
          <div class="mid-title"><h2>Event</h2></div>
          <div class="content">
            <p>
              <?php the_content(); ?>
            </p>
          </div>
        </section>


 
<section class="section04__wrap" data-aos="fade-up" data-aos-once="ture">
  <div class="my-container container">
      
  <div class="news-head">
    <div class="news-title">
      <h2>Speakers</h2>
    </div>
  </div>
  <div class="let-news-wrap">
      <?php foreach ($event_speakers as $speakers) {?>
    <div class="news-wrap">
      <div class="news-img">
        <img src="<?php echo $speakers['image']; ?>" alt="">
      </div>
      <div class="news-contnet">
        <div class="news-title-box">
         <span class="name-spkr"><?php echo $speakers['name']; ?></span>
            <span class="footer-social speaker-social">
              <ul>
                <li><a href="<?php echo $speakers['twitter_url']; ?>"><i class="fa fa-twitter"></i></a></li>
                <li><a href="<?php echo $speakers['linkedin_url']; ?>"><i class="fa fa-linkedin"></i></a></li>
              </ul>
            </span>
        </div>
        <div class="post-prsn">
          <p><?php echo $speakers['designation']; ?></p>
        </div>
        <div class="btn-space">
          <a class="clear-btn"><?php echo $speakers['company']; ?></a>
        </div>        
      </div>
    </div>
    <?php } ?>
    </div>      
  </div>
  
</div>
</section>



<section class="agenda-section">
  <div class="agenda-pd my-container container">
        <div class="news-title">
      <h2>Agenda </h2>
    </div>
<div class="agenda-inline">
    <?php foreach ($event_schedule as $schedule) {?>
    <div class="agenda-wrap wd-50">
      <div class="agenda-box">
        <div class="right-design"></div>
        <div class="agenda-cont">
            <div class="timing-wrap">
              <?php echo $schedule['from_time']; ?> - <?php echo $schedule['to_time']; ?>
            </div>
            <div class="regis">
              <h4><?php echo $schedule['title']; ?></h4>
            </div>
            <div class="regic-p"><p><?php echo $schedule['description']; ?> </p></div>
        </div>
      </div>
    </div>
<?php } ?>
   
     <div class="butn-pd">
      <a class="btn-orng" href="#">Register Now</a>
    </div>  
    </div>          
  </div>
</section>




<section class="sigh-up-wrap event-email">
    <div class="sign-up-pad">
        <?php echo do_shortcode('[contact-form-7 id="53" title="Sign Up Newsletter"]');?>
    </div>
</section>

<?php
		endwhile;
		

?>
           
</div>

<?php
get_footer();
?>