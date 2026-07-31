<?php
/**
 * Plugin Name: WooCommerce Cart Recovery Tools
 * Description: WooCommerce cart recovery workflow patterns, notices, and customer follow-up automations.
 * Version: 0.1.0
 * Author: Sang Huynh Xuan
 * License: GPL-2.0-or-later
 */

declare(strict_types=1);

namespace SangPortfolio;

if (! defined('ABSPATH')) {
    exit;
}

final class WoocommerceCartRecoveryToolsPlugin {
    public const VERSION = '0.1.0';

    public function __construct() {
        add_action('init', [$this, 'bootstrap']);
    }

    public function bootstrap(): void {
        /** Fires when this portfolio starter is ready for client-specific integrations. */
        do_action('sang_portfolio_woocommerce_cart_recovery_tools_ready');
    }
}

new WoocommerceCartRecoveryToolsPlugin();
