<?php /* Template Name: Sevice Page New Template */ ?>
<?php get_header(); ?>
<style>

	
.cta-ser{
    background: url(https://jhg.338.myftpupload.com/wp-content/uploads/2023/07/GC_Service_Becoming_CEO_1.webp);
    padding: 50px 0;
    text-align: center;
    position:relative;
}
.cta-ser .row::after{
content: "";
    background: #07314cc2;
    position: absolute;
    width: 100%;
    height: 100%;
    left: 0;
    z-index: 0;
    top: 0;
}
.cta-ser .row div {
    color: #fff;
    z-index: 1;
    text-align: center;
}
.cta-ser h4{
	font-weight: bold;
}
.service-acc{
padding-bottom:100px;
}
</style>
<div class="container-fluid about_banner">
	<div class="row">
		<div class="col-lg-12">
			<h1>Our Services</h1>
			<p>We Offer Services</p>			
		</div>
	</div>
</div>
<?php 

$we_offer = get_field('we_offer',$page_ID); 
$main_heading = get_field('main_heading',$page_ID); 
$content = get_field('content',$page_ID); 

if(!empty($we_offer)) { 
?>
<section class="container">
	<div class="row">
		<div class="col-lg-6 col-md-12 hm_offer">
			<div class="p-lr-40">
				<p class="sub-heading single font-800"><?php echo $we_offer; ?></p>
				<h2 class="big-hd"><?php echo $main_heading; ?></h2>
			</div>
		</div>
		<div class="col-lg-6 col-md-12 pos-rel">
			<div class="box_lft_bdr">			
				<p><?php echo $content; ?></p>
			</div>
		</div>
	</div>
</section>
<?php } ?>

<?php
$corporate_sage_heading = get_field('corporate_sage_heading',$page_ID);
$being_a_spiritual_ceo_bullet_no = get_field('being_a_spiritual_ceo_bullet_no',$page_ID);
$being_a_spiritual_ceo_heading = get_field('being_a_spiritual_ceo_heading',$page_ID);
$being_a_spiritual_ceo_paragraph = get_field('being_a_spiritual_ceo_paragraph', $page_Id);

if(!empty($corporate_sage_heading)) {
?>

<section class="container-fluid bg-grey">
<div class="container">
		<div class="row">
			<div class="col-lg-12 col-md-12">
				<div class="box_head">
					<h2><?php echo $corporate_sage_heading; ?></h2>
					<div class="our-services">
                    	<div class="services-block">
                        <span class="ser-num"><?php echo $being_a_spiritual_ceo_bullet_no; ?></span><h3><?php echo $being_a_spiritual_ceo_heading; ?></h3>
                        <span class="ser-txt"> <?php echo $being_a_spiritual_ceo_paragraph; ?></span><span class="ser-week">– A 10-week course (virtual) </span>
                        <div class="ser-btn"><a href="https://growthcoach.co/being-a-spiritual-ceo/">Know More</a><img src="https://jhg.338.myftpupload.com/wp-content/uploads/2023/06/GrowthCoach_Favicon_80x80.png"></div>
                        </div>
                        <div class="services-block">
                        <span class="ser-num">02.</span><h3>Becoming a Spiritual CEO</h3>
                        <span class="ser-txt">Moulding your “C” suite executives into a Well-rounded 360° CEO material </span><span class="ser-week">– A 10-week course (virtual) </span>
                        <div class="ser-btn"><a href="https://growthcoach.co/becoming-a-spiritual-ceo/">Know More</a><img src="https://jhg.338.myftpupload.com/wp-content/uploads/2023/06/GrowthCoach_Favicon_80x80.png"></div>
                        </div>
                        <div class="services-block">
                        <span class="ser-num">03.</span><h3>Sounding Board Services</h3>
                        <span class="ser-txt">Yogic Wisdom;
for Modern CEOs</span><span class="ser-week">Yogic Wisdom; for Modern CEOS </span>
                        <div class="ser-btn"><a href="https://growthcoach.co/sounding-board-services/">Know More</a><img src="https://jhg.338.myftpupload.com/wp-content/uploads/2023/06/GrowthCoach_Favicon_80x80.png"></div>
                        </div>
                        <div class="services-block">
                        <span class="ser-num">04.</span><h3>SEE 360 Biz Scan Report </h3>
                        <span class="ser-txt">Our team is introducing a report using 27 major parameters </span><span class="ser-week">10-week course (virtual)</span>
                        <div class="ser-btn"><a href="https://growthcoach.co/growth-coachs-see-360-biz-scan-report/">Know More</a><img src="https://jhg.338.myftpupload.com/wp-content/uploads/2023/06/GrowthCoach_Favicon_80x80.png"></div>
                        </div>
                    </div>
				</div>
			</div>
		</div>
	</div>
</section>
<?php } ?>
<section class="container">
		<div class="row">
			<div class="col-lg-6 col-md-12 hm_offer">
				<div class="p-lr-40">
					<p class="sub-heading single font-800">Our services</p>
					<h2>WHY CHOOSE OUR COACHING SERVICES?</h2>
					<p>
						We offer private and confidential sessions designed to foster individual reflection, enhance your strategic thinking, and share stimulating and captivating perspectives.
					</p>
					<p>
						Our goal is to boost your personal and organizational growth. We provide pre-arranged conversations, either virtually or in person, tailored to meet your unique requirements.
					</p>
				</div>
			</div>
			<div class="col-lg-6 col-md-12">
				<div class="icons_text_Box">
					<div class="icons_wrap">
						<i class="bi bi-check"></i>
					</div>
					<div class="icons_content">
						<h3>Tailored Coaching Approach</h3>	
						
					</div>
				</div>
				
				<div class="icons_text_Box">
					<div class="icons_wrap">
						<i class="bi bi-check"></i>
					</div>
					<div class="icons_content">
						<h3>Professional Expertise</h3>	
						
					</div>
				</div>
				
				<div class="icons_text_Box">
					<div class="icons_wrap">
						<i class="bi bi-check"></i>
					</div>
					<div class="icons_content">
						<h3>Accountability and Motivation</h3>	
						
					</div>
				</div>
				
				<div class="icons_text_Box">
					<div class="icons_wrap">
						<i class="bi bi-check"></i>
					</div>
					<div class="icons_content">
						<h3>Identifying Blocks and Limitations</h3>	
						
					</div>
				</div>
				
				<div class="icons_text_Box">
					<div class="icons_wrap">
						<i class="bi bi-check"></i>
					</div>
					<div class="icons_content">
						<h3>Goal Setting and Action Planning</h3>							
					</div>
				</div>
			</div>
		</div>
	</section>

<section class="cta-ser container-fluid">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<p>For setting up a meeting with Corporate Sage and investment details, please get in touch with</p>
				<h4 class="white">Anand Balasubramanian</h4><em>(Founder & Growth Coach)</em>
				<p>call <a href="tel:+18322785856">+1(832)278-5856</a><br> or email <a href="mailto:anandb@growthcoach.co">anandb@growthcoach.co</a> </p>
			</div>
		</div>
	</div>
</section>

<!--
<section class="container hm_benefits">
		<div class="row">
			<div class="col-md-12">
				<div class="section-title">
					<h2>Why Choose Our Coaching Services? </h2>
					
				</div>
			</div>
		</div>
		<div class="row">		
			<div class="col-xl-3 col-md-6">
				<div class="card">
					<img class="card-img-top" src="https://jhg.338.myftpupload.com/wp-content/uploads/2023/07/GC_Service_2-1.webp" alt="">
					<div class="card-body">
						<h5 class="card-title">Tailored Coaching Approach</h5>
						<p class="card-text">We understand that every individual is unique, with specific strengths and areas for growth. Our experienced coaches take a personalized approach, crafting strategies that align with your goals and aspirations. </p>
					</div>
				</div>			
				
			</div>
			<div class="col-xl-3 col-md-6">
				<div class="card">
					<img class="card-img-top" src="https://jhg.338.myftpupload.com/wp-content/uploads/2023/07/GC_Service_2-1.webp" alt="">
					<div class="card-body">
						<h5 class="card-title">Professional Expertise</h5>
						<p class="card-text">Our team of coaches consists of seasoned professionals from diverse backgrounds. Whether you seek executive coaching, career development, or personal growth, we have the expertise to assist you effectively. </p>
					</div>
				</div>
			</div>
			<div class="col-xl-3 col-md-6">
				<div class="card">
					<img class="card-img-top" src="https://jhg.338.myftpupload.com/wp-content/uploads/2023/07/GC_Service_2-1.webp" alt="">
					<div class="card-body">
						<h5 class="card-title">Accountability and Motivation</h5>
						<p class="card-text">Among the most notable advantages of coaching is its capacity to install accountability. Our coaches will keep you focused, motivated, and on track toward your objectives, ensuring you stay committed to your journey of growth. </p>
					</div>
				</div>
			</div>
			<div class="col-xl-3 col-md-6">
				<div class="card">
					<img class="card-img-top" src="https://jhg.338.myftpupload.com/wp-content/uploads/2023/07/GC_Service_2-1.webp" alt="">
					<div class="card-body">
						<h5 class="card-title">Identifying Blocks and Limitations</h5>
						<p class="card-text">Sometimes, we encounter roadblocks that hinder our progress. Our coaches are skilled at identifying these barriers and working with you to overcome them, unlocking your true potential. </p>
					</div>
				</div>
			</div>
			<div class="col-xl-3 col-md-6">
				<div class="card">
					<img class="card-img-top" src="https://jhg.338.myftpupload.com/wp-content/uploads/2023/07/GC_Service_2-1.webp" alt="">
					<div class="card-body">
						<h5 class="card-title">Goal Setting and Action Planning</h5>
						<p class="card-text">Setting clear and achievable goals is essential for growth. Through our Coaching Services, we help you define your objectives and create actionable plans to get there.</p>
					</div>
				</div>
			</div>
			
		</div>
	<div class="service_btn">
		<a class="btn btn-primary btn-lg" href="https://growthcoach.co/contacts/">Contact Us</a>
	</div>
	</section>
-->

<?php get_footer(); ?>