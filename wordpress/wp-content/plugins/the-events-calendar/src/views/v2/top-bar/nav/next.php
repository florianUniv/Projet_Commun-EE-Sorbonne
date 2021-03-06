<?php
/**
 * View: Top Bar Navigation Next Template
 *
 * Override this template in your own theme by creating a file at:
 * [your-theme]/tribe/events/views/v2/top-bar/nav/next.php
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
<li class="tribe-events-c-top-bar__nav-list-item">
	<a
		href="<?php echo esc_url( $link ); ?>"
		class="tribe-common-c-btn-icon tribe-common-c-btn-icon--caret-right tribe-common-b3 tribe-events-c-top-bar__nav-link tribe-events-c-top-bar__nav-link--next"
		aria-label="<?php esc_html_e( 'Next', 'the-events-calendar' ); ?>"
		title="<?php esc_html_e( 'Next', 'the-events-calendar' ); ?>"
		data-js="tribe-events-view-link"
	>
	</a>
</li>
