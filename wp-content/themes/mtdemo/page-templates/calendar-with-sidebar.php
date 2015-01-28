<?php
/**
 * Template Name: Events Calendar With Sidebar
 * Description: A page template that provides a key component of WordPress as a CMS
 * by meeting the need for a carefully crafted introductory page. The front page template
 * in Twenty Twelve consists of a page content area for adding text, images, video --
 * anything you'd like -- followed by front-page-only widgets in one or two columns.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
?>	
<?php get_header(); ?>
	<div id="primary" class="site-content">
		<div id="content" role="main">
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<header class="entry-header">
					<h1 class="entry-title"><?php the_title(); ?></h1>
				</header>

				<div class="entry-content">
					<?php the_content(); ?>
						<div id="tribe-events-content" class="grid" data-title="<?php wp_title(); ?>">
				<div id='tribe-events-calendar-header' class="clearfix">
					<span class='tribe-events-month-nav'>
						<span class='tribe-events-prev-month'>
							<a href='<?php echo tribe_get_previous_month_link(); ?>' class="tribe-pjax">
							&#x2190; <?php echo tribe_get_previous_month_text(); ?>
							</a>
						</span>

						<?php tribe_month_year_dropdowns( "tribe-events-" ); ?>

						<span class='tribe-events-next-month'>
							<a href='<?php echo tribe_get_next_month_link(); ?>' class="tribe-pjax">
							<?php echo tribe_get_next_month_text(); ?> &#x2192; 
							</a>
		               <img src="<?php echo esc_url( admin_url( 'images/wpspin_light.gif' ) ); ?>" class="ajax-loading" id="ajax-loading" alt="" style='display: none'/>
						</span>
					</span>

					<span class='tribe-events-calendar-buttons'>
						<a class='tribe-events-button-off' href='<?php echo tribe_get_listview_link(); ?>'><?php _e('Event List', 'tribe-events-calendar'); ?></a>
						<a class='tribe-events-button-on' href='<?php echo tribe_get_gridview_link(); ?>'><?php _e('Calendar', 'tribe-events-calendar'); ?></a>
					</span>
				</div><!-- tribe-events-calendar-header -->
				<?php tribe_calendar_grid(); // See the views/table.php template for customization ?>
		      <?php if( function_exists( 'tribe_get_ical_link' ) ): ?>
		         <a title="<?php esc_attr_e('iCal Import', 'tribe-events-calendar'); ?>" class="ical" href="<?php echo tribe_get_ical_link(); ?>"><?php _e('iCal Import', 'tribe-events-calendar'); ?></a>
		      <?php endif; ?>
				<?php if (tribe_get_option('donate-link', false) == true) { ?>
					<p class="tribe-promo-banner"><?php echo apply_filters('tribe_promo_banner', sprintf( __('Calendar powered by %sThe Events Calendar%s', 'tribe-events-calendar'), '<a href="http://tri.be/wordpress-events-calendar/">', '</a>' ) ); ?></p>
				<?php } ?>
			</div>
					<?php wp_link_pages( array( 'before' => '<div class="page-links">' . __( 'Pages:', 'mtdemo' ), 'after' => '</div>' ) ); ?>
				</div><!-- .entry-content -->
				<footer class="entry-meta">
					<?php edit_post_link( __( 'Edit', 'mtdemo' ), '<span class="edit-link">', '</span>' ); ?>
				</footer><!-- .entry-meta -->
			</article><!-- #post -->
		</div>
	</div>		
<?php get_sidebar(); ?>
<?php get_footer(); ?>
