<?php include('header.php'); ?>

	<!-- INTRO -->
	<section class="bg-white text-center">
		<div class="wrapper">
			<h2>Language Learning is an Experience</h2>
			<p class="text-block">
				At Speak Ease, we believe that learning Spanish should be easy. We understand that each student learns at their own pace and with their own style, so we do our best to make sure every language learning experience is as unique as our pupils. We offer classes <span class="emphasis">in-person, online and a combination of both</span> to teach students of all skill levels. Everybody’s experience is different, and made just for them. So, if you’re ready to embark on your language-learning voyage, then we’re ready to take you where you need to go!
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
						As the official language of over 20 countries in South America, Europe and Africa, knowing Spanish could be the difference between leading the life of a lost tourist or a seasoned local on your next vacation.
					</p>
				</div>
				<div class="third">
					<div class="circle"><span class="icon-bubbles4"></span></div>
					<h3 class="desc-head">Make new friends</h3>
					<p class="text-center">
						Language can be a barrier or a door—you decide. With SpeakEase, we want to equip you with the key that opens the door to new friends and new social opportunities!
					</p>
				</div>
				<div class="third">
					<div class="circle"><span class="icon-user-tie"></span></div>
					<h3 class="desc-head">Better your career</h3>
					<p class="text-center">
						Spanish is the fastest growing language in the U.S. and more employers are looking for Spanish speakers. Exciting new career opportunities for fluent linguists can all be available to you!
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
				<h3 class="date">June 3, 2015</h3>
				<p>
					Maria is very punctual and always prepared. Her command of English is excellent which is a great help in her explaining some of the more difficult Spanish irregularities.  I would highly recommend her for any level from beginner to advanced.
				</p>
				<a href="https://tack.bz/2jOt7" target="_blank">- Beverly B.</a>
			</article>
			<article class="review text-block wrapper">
				<div class="stars">
					<span class="icon-star-full"></span>
					<span class="icon-star-full"></span>
					<span class="icon-star-full"></span>
					<span class="icon-star-full"></span>
					<span class="icon-star-full"></span>
				</div>
				<h3 class="date">February 12, 2015</h3>
				<p>
					We've met twice so far and I am very pleased with the quality of these tutoring sessions. Maria has been very flexible to meet my special requests regarding the material that we would like to cover and how we would like to study. I appreciate also that she is willing to travel to our home to providing a 1.5 hour lesson to two people of differing Spanish ability. We look forward to many more sessions and much improvement to our Spanish!
				</p>
				<a href="https://tack.bz/2jOt7" target="_blank">- Christina A.</a>
			</article>
			<article class="review text-block wrapper">
				<div class="stars">
					<span class="icon-star-full"></span>
					<span class="icon-star-full"></span>
					<span class="icon-star-full"></span>
					<span class="icon-star-full"></span>
					<span class="icon-star-full"></span>
				</div>
				<h3 class="date">October 21, 2014</h3>
				<p>
					I Highly Recommend Maria Moreno to anyone who wants to learn spanish or build on what they already know. Maria goes above and beyond to help you speak,comprehend and retain the lessons. She is always very prompt with class times and flexible with any changes that I have had in times or days. I would not change any thing about the way her classes are taught. I appreciate everything she has helped me with so far.
				</p>
				<a href="https://tack.bz/2jOt7" target="_blank">- Brian T.</a>
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