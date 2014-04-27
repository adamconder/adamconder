{{ theme:partial name="aside" }}

{{ post }}

<article class="post">	

			<div class="post-information">
				<div class="post-title">
					<h4>{{ theme:image file="link.png" }} <a href="{{ url }}">{{ title }}</a></h4>
					{{ if slogan }}<p class="post-slogan">{{ slogan }}</p>{{ endif }}
				</div>
				<div class="post-date">
					<p>Posted on {{ helper:date timestamp=created_on format="d-m-Y" }}<p>
					<!-- <p>Posted {{ helper:timespan timestamp=created_on }} ago</p> -->
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
			
			{{ if featured_image }}
				<div class="post-featured-image">
					{{ featured_image:img }}
				</div>
			{{ endif }}
			
			<div class="post_body">
				{{ body }}
			</div>
</article>

	
	<?php if (Settings::get('enable_comments')): ?>	
		
		<div id="existing-comments">
			<h4><?php echo lang('comments:title') ?></h4>
			<?php echo $this->comments->display() ?>
		</div>		

		
		<?php if ($form_display): ?>
			<?php echo $this->comments->form() ?>
		<?php else: ?>
			<?php echo sprintf(lang('blog:disabled_after'), strtolower(lang('global:duration:'.str_replace(' ', '-', $post[0]['comments_enabled'])))) ?>
		<?php endif ?>
	
	<?php endif; ?>

{{ /post }}
