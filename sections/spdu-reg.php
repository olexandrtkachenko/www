<?php $language = wp_cache_get( 'language' ); ?>
<section class="landing-page-contact landing-page-company-contact clearfix">
	<div class="landing-page-section">
	
	
	<?php 		
	$date = time();
	$regStart = strtotime('2019-07-31 00:00:00');
		
		if ($date < $regStart) {
		?>
			<h2 class="contact-header-primary">
			 ЦІКАВО?
	      <span class="contact-header-secondary">
	      	РEЄСТРУЙСЯ!
	      </span>
	    </h2>
			<a href="http://bit.ly/spdu_sr" class="btn cta-button button-hover" title="Start a project" role="button">
	       Зареєструватися
	    </a>
	
		<?php
	} else {
		?>
	
<div class="primary-text reg-closed reg-closed-footer col-lg-6 offset-lg-3">Реєструйся на V сезон та отримай можливість прокачати та вдосконалити власні технічні навички у дружньому колі практикуючих менторів та однодумців.</div>
 <div class="clearfix btn-wrap btn-footer">
      <a
        href="https://spd-ukraine.com/spdu-contact/"
        class="btn cta-button spdu-reg-button"
        title="Залишити заявку"
        role="button">
    Залишити заявку          
      </a>
</br>
    </div>
	<?php
	}
	?>

<p class="thank-text primary-text">Ми вдячні нашим партнерам за підтримку проекту SPD-University</p></br>
<p class="primary-text"><a target="_blank" href="https://www.jetbrains.com" alt="JetBrains official site"><img src="https://d294zfc0bwifja.cloudfront.net/spdu/images/jetb.png" width="300px" alt="JetBrains logo"></a></p>
	
	</div>
</section>
