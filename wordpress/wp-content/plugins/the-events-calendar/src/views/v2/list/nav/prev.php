<?php
/**
 * View: List View Nav Template
 *
 * Override this template in your own theme by creating a file at:
 * [your-theme]/tribe/events/views/v2/list/nav/prev.php
 *
 * See more documentation about our views templating system.
 *
 * @link {INSERT_ARTCILE_LINK_HERE}
 *
 * @var string $link The URL to the previous page, if any, or an empty string.
 *
 * @version 4.9.3
 *
 */
if ( empty( $link ) ) {
	return;
}
?>
<li class="tribe-common-c-nav__list-item">
	<a
		href="<?php echo esc_url( $link ); ?>"
		rel="prev"
		class="tribe-common-c-nav__prev"
		data-js="tribe-events-view-link"
	>
		<?php echo esc_html( sprintf( __( 'Previous %s', 'the-events-calendar' ), tribe_get_event_label_plural() ) ); ?>
	</a>
</li>
