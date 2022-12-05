<?php

/**
 * Forums Loop
 *
 * @package bbPress
 * @subpackage Theme
 */

// Exit if accessed directly
defined( 'ABSPATH' ) || exit;

do_action( 'bbp_template_before_forums_loop' ); ?>

<ul id="forums-list-<?php bbp_forum_id(); ?>" class="bbp-forums ddoc-forums">

	<li class="bbp-header">

		<ul class="forum-titles">
			<li class="bbp-forum-info"><?php esc_html_e( 'Forum', 'ddoc' ); ?></li>
			<li class="bbp-forum-topic-count"><?php esc_html_e( 'Topics', 'ddoc' ); ?></li>
			<li class="bbp-forum-reply-count"><?php bbp_show_lead_topic(true) ? esc_html_e( 'Replies', 'ddoc' ) : esc_html_e( 'Posts',   'ddoc' ); ?></li>
			<li class="bbp-forum-freshness"><?php esc_html_e( 'Last Post', 'ddoc' ); ?></li>
		</ul>
	</li><!-- .bbp-header -->

	<li class="bbp-body">

		<?php while ( bbp_forums() ) : bbp_the_forum(); ?>

			<?php bbp_get_template_part( 'loop', 'single-forum' ); ?>

		<?php endwhile; ?>

	</li><!-- .bbp-body -->

	<li class="bbp-footer">

		<div class="tr">
			<p class="td colspan4">&nbsp;</p>
		</div><!-- .tr -->

	</li><!-- .bbp-footer -->

</ul><!-- .forums-directory -->

<?php do_action( 'bbp_template_after_forums_loop' );
