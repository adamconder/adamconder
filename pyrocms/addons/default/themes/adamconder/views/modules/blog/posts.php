<section id="blog-blurb">
	<h3>The thoughts and ramblings of Adam</h3>
</section>

{{ if posts }}
	{{ posts }}
	
		<article class="post">
			<div class="post-information">
				<div class="post-title">
					<h4>{{ theme:image file="link.png" }} <a href="{{ url }}">{{ title }}</a></h4>
					{{ if slogan }}<p class="post-slogan">{{ slogan }}</p>{{ endif }}
				</div>
				<div class="post-date">
					<p>Posted on {{ helper:date timestamp=created_on format="d-m-Y" }}<p>
					<!-- <p>Posted {{ helper:timespan timestamp=created_on format="d-m-Y" }} ago</p> -->
					<p class="post-author">Posted by {{ created_by:display_name }}</p>

					{{# if category }}
							<!-- {{ helper:lang line="blog:category_label" }} -->
							<p>Posted in category: <span class="category"><a href="{{ url:site }}blog/category/{{ category:slug }}">{{ category:title }}</a></span></p>
					{{ endif #}}

					<!-- Tags -->
					{{ if keywords }}
						{{ keywords }}
							<span class="post-keyword"><a href="{{ url:site }}blog/tagged/{{ keyword }}">{{ keyword }}</a></span>
						{{ /keywords }}
					{{ endif }}

				</div>
				<div class="clearFix"></div>
			</div>
			
<!-- 			<div class="post_date">
				<span class="date">
					{{ theme:image file="date.png" }}
					About {{ helper:timespan timestamp=created_on }} ago.
				</span>
			</div> -->

			{{ if featured_image }}
				<div class="post-featured-image">
					{{ featured_image:img }}
				</div>
			{{ endif }}
			
			<div class="post_intro">
				{{ intro }}
			</div>

			<div class="post-links">
				<a href="{{ url }}" class="post-read-more">read more</a>
			</div>
			
<!-- 			<div class="post_meta">
				{{# if keywords }}
					{{ theme:image file="tags.png" }}
					<span class="tags">
						{{ keywords }}
					</span>
				{{ endif #}}
			</div> -->
		</article>

	{{ /posts }}

	{{ pagination }}

{{ else }}
	

	<h4>{{ helper:lang line="blog:currently_no_posts" }}</h4>

{{ endif }}
