<?php include('header.php'); ?>

	<!-- INTRO -->
	<section class="bg-white text-center">
		<div class="wrapper">
			<h2>Language Learning is an Experience</h2>
			<p class="text-block">
				At Speak Ease, we understand that each student learns at their own pace and with their own style.  We do our best to make sure every language learning experience is as unique as our pupils.  Since there is no "one size fits all" approach to learning a new language, we work hard to make sure we find the perfectly tailored lesson plan for each person. Everybody’s experience is different, and made just for them.
			</p>
			<a href="classes.php" class="cta">explore our classes</a>
		</div>
	</section>

	<!-- LEARN SPANISH -->
	<section class="color-white bg-blue">
		<h2>Why Learn Spanish?</h2>
		<h3 class="sub">Three Good Reasons Why Learning Spanish is Worth it.</h3>
		<div class="wrapper">
			<div class="container">
				<div class="third">
					<div class="circle"><span class="icon-airplane"></span></div>
					<h3 class="desc-head">Travel the world</h3>
					<p class="text-center">
						Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus nulla autem, quos obcaecati vitae asperiores necessitatibus illo omnis, nostrum sequi ad, tempore ullam sint iusto?
					</p>
				</div>
				<div class="third">
					<div class="circle"><span class="icon-bubbles4"></span></div>
					<h3 class="desc-head">Make new friends</h3>
					<p class="text-center">
						Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis quis voluptatibus fugiat, eum dolores, et hic reiciendis aliquam. Facilis aut quam ducimus labore reprehenderit, autem.
					</p>
				</div>
				<div class="third">
					<div class="circle"><span class="icon-user-tie"></span></div>
					<h3 class="desc-head">Better your career</h3>
					<p class="text-center">
						Lorem ipsum dolor sit amet, consectetur adipisicing elit. Praesentium ut tenetur possimus velit ipsam voluptas commodi consectetur, consequatur dolorum id. Perferendis doloremque aliquid neque excepturi.
					</p>
				</div>
			</div>
		</div>
	</section>
	<!-- INTRO -->
	
	<!-- REVIEWS -->
	<section class="text-center" style='background:url("images/confectionary.png");background-color:#fafafa;'>
		<h2>See What Our Students Are Saying</h2>
		<div class="review-wrapper">	
			<div class="arrow"><span class="icon-left"></span></div>
			<article class="review text-block wrapper active">
				<div class="stars">
					<span class="icon-star-full"></span>
					<span class="icon-star-full"></span>
					<span class="icon-star-full"></span>
					<span class="icon-star-full"></span>
					<span class="icon-star-full"></span>
				</div>
				<h3 class="date">May 5, 2015</h3>
				<p>
					Lorem ipsum dolor sit amet, consectetur adipisicing elit. A facere labore beatae fugit ratione tenetur vel explicabo, odio maiores ducimus vitae eaque voluptates minima possimus voluptatum cupiditate deserunt culpa quas dolorem eius. Repellendus, unde, fugit repudiandae necessitatibus quidem expedita voluptate aspernatur quo cupiditate excepturi perferendis magnam eos nisi eveniet laborum! Quo praesentium vel commodi soluta. Recusandae a aut excepturi similique! Quo nulla in velit non cum qui consectetur obcaecati earum repellendus rem quam ad ea voluptates, itaque, amet totam assumenda blanditiis quibusdam harum ducimus ipsum sint consequatur adipisci esse. Facere inventore, voluptatibus accusamus impedit reiciendis, optio omnis dignissimos nihil autem.
				</p>
				<h3>- El Viejo</h3>
			</article>
			<article class="review text-block wrapper">
				<div class="stars">
					<span class="icon-star-full"></span>
					<span class="icon-star-full"></span>
					<span class="icon-star-full"></span>
					<span class="icon-star-full"></span>
					<span class="icon-star-full"></span>
				</div>
				<h3 class="date">May 5, 2015</h3>
				<p>
					Lorem ipsum dolor sit amet, consectetur adipisicing elit. A facere labore beatae fugit ratione tenetur vel explicabo, odio maiores ducimus vitae eaque voluptates minima possimus voluptatum cupiditate deserunt culpa quas dolorem eius. Repellendus, unde, fugit repudiandae necessitatibus quidem expedita voluptate aspernatur quo cupiditate non cum qui consectetur obcaecati earum repellendus rem quam ad ea voluptates, itaque, amet totam assumenda blanditiis quibusdam harum ducimus ipsum sint consequatur adipisci esse. Facere inventore, voluptatibus accusamus impedit reiciendis, optio omnis dignissimos nihil autem.
				</p>
				<h3>- Someone else</h3>
			</article>
			<article class="review text-block wrapper">
				<div class="stars">
					<span class="icon-star-full"></span>
					<span class="icon-star-full"></span>
					<span class="icon-star-full"></span>
					<span class="icon-star-full"></span>
					<span class="icon-star-full"></span>
				</div>
				<h3 class="date">May 5, 2015</h3>
				<p>
					Lorem ipsum dolor sit amet, consectetur adipisicing elit. A facere labore beatae fugit ratione tenetur vel explicabo, odio maiores ducimus vitae eaque voluptates minima possimus voluptatum cupiditate deserunt culpa quas dolorem eius. Repellendus, unde, fugit repudiandae necessitatibus quidem expedita voluptate aspernatur quo cupiditate excepturi perferendis magnam eos nisi eveniet laborum! Quo praesentium vel commodi soluta. Recusandae a aut excepturi similique! Quo nulla in velit non cum qui consectetur obcaecati earum repellendus rem quam ad ea voluptates, itaque, amet totam assumenda blanditiis quibusdam harum ducimus ipsum sint 
				</p>
				<h3>- Third Person</h3>
			</article>
			<div class="arrow"><span class="icon-right"></span></div>
		</div>
		<a href="about.php" class="cta">get to know the instructor</a>
	</section>
	<!-- REVIEWS -->
	
	<script src="js/jquery-2.1.4.js"></script>
	<!--
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
	-->
	<script src="js/script.js"></script>


		<!-- REVIEWS JS CAROUSEL -->
	<script>
		// Get reviews
		var reviews = $(".review");
		var max = reviews.length - 1;
		var min = 0;

		// Right arrow		
		$(".icon-right").click( function() {
			var activeReview = $(".review.active");
			var i = reviews.index(activeReview);
			if (i === max) {
				$(reviews[i]).removeClass("active");
				$(reviews[0]).addClass("active");
			} else {
				$(reviews[i]).removeClass("active");
				$(reviews[i + 1]).addClass("active");
			}
		});

		// Left Arrow
		$(".icon-left").click( function() {
			var activeReview = $(".review.active");
			var i = reviews.index(activeReview);
			if (i === min) {
				$(reviews[i]).removeClass("active");
				$(reviews[max]).addClass("active");
			} else {
				$(reviews[i]).removeClass("active");
				$(reviews[i - 1]).addClass("active");
			}
		});
	</script>
	<!-- REVIEWS JS CAROUSEL -->

<?php include('footer.php'); ?>