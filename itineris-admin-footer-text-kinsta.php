<?php
declare(strict_types=1);

/**
 * Plugin Name:     Itineris Admin Footer Text (Kinsta)
 * Plugin URI:      https://github.com/itinerisltd/itineris-admin-footer-text-kinsta
 * Description:     Itineris Admin Footer Text (Kinsta)
 * Version:         0.2.0
 * Author:          Itineris Limited
 * Author URI:      https://www.itineris.co.uk/
 * Text Domain:     itineris-admin-footer-text-kinsta
 */

namespace Itineris\AdminFooterText\Kinsta;

// If this file is called directly, abort.
if (! defined('WPINC')) {
    die;
}

add_filter('admin_footer_text', function (): string {
    // Translators: %1$s is link to WordPress, %2$s is link to Itineris, %3$s is link to Kinsta.
    $pattern = __(
        'Thanks for creating with %1$s, working with %2$s and hosting with %3$s',
        'itineris-admin-footer-text-kinsta'
    );

    return sprintf(
        '<span id="footer-thankyou">' . $pattern . '</span>',
        '<a href="https://wordpress.org/" target="_blank">WordPress</a>',
        '<a href="https://www.itineris.co.uk/?utm_source=client-wp-admin&utm_medium=bottom-cta" target="_blank">Itineris</a>',
        '<a href="https://kinsta.com/?utm_source=client-wp-admin&utm_medium=bottom-cta" target="_blank">Kinsta</a>'
    );
}, 999);
