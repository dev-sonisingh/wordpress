 <?php get_header();?> 


	<section class="breadcrumb-area" style="background-image:url(<?php bloginfo('template_directory');?>/assets/images/background/2.jpg)">
			    <div class="container">
			        <div class="row">
			            <div class="col-md-12">
			                <div class="breadcrumbs text-center">
			                    <h1>Blogs</h1>
			                    <h4><?php echo the_title();?></h4>
			                </div>
			            </div>
			        </div>
			    </div>
				<div class="breadcrumb-bottom-area">
				    <div class="container">
				        <div class="row">
				            <div class="col-lg-8 col-md-5 col-sm-5">
				                <ul>
				                    <li><a href="#">Home</a></li>
				                    <li><a href="#"><i class="fa fa-angle-right"></i></a></li>
				                    <li><a href="#">Gallery</a></li>
				                    <li><a href="#"><i class="fa fa-angle-right"></i></a></li>
				                    <li>News single</li> 
				                </ul>
				            </div>
				            <div class="col-lg-4 col-md-7 col-sm-7">
				                <p>We provide <span>100% organic</span> products</p>
				            </div>
				        </div>
				    </div>
				</div>
			    
			</section>
<section class="news single_news_page with_sidebar news_single">
<?php
if(have_posts()){
	while(have_posts()){
		the_post();
		get_template_part('template-parts/content','article');
	} 
}
?>
</section>



 <?php get_footer();?> 