<?php
if (comments_open()) :
?>
<div id="commentsbox">
<?php if (post_password_required()) : ?>
<p class="nopassword">
<?php echo PASSWORDPROTECT; ?>
</p>
</div>
<!-- #comments -->
<?php return;
endif; ?>
<div id="comments">
<?php if (have_comments()) : ?>  
<h3 id="comments"> <span> <?php comments_number('No Responses', 'One Response', '% Responses' );?></span></h3>              
<div class="comment_list">
	<ol class="commentlist">
<?php wp_list_comments(array('callback' => 'videocast_commentslist', 'avatar_size' => 63)); ?>
	</ol>
</div>
<?php endif; // end have_comments() ?>
</div>  
<?php if ('open' == $post->comment_status && !$comment_add_flag) : ?>
<div id="respond">
<div class="post-info">
	<h3 id="comments"> <span>Leave a reply</span></h3>
  </div>
<div class="comment_form">
	<?php if (get_option('comment_registration') && !$user_ID) : ?>
		<p class="comment_message"><?php echo YOUMUST; ?> <a href="<?php echo get_option('siteurl'); ?>/wp-login.php?redirect_to=<?php echo urlencode(get_permalink()); ?>"><?php echo LOGGEDIN; ?></a> <?php echo POSTCOMMENT; ?></p>
		<?php else : ?>
		<form action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post" id="commentform">
			<?php comment_form(); ?>
		</form>
<?php endif; // If registration required and not logged in  ?>
</div>
<?php endif; // if you delete this the sky will fall on your head  ?>
</div>
<?php if (!$comment_add_flag) { ?>
</div>
<?php } ?>
<?php endif; // end ! comments_open() ?>
