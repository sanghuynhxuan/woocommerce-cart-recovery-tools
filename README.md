# WooCommerce Cart Recovery Tools

Cart-stage customer messaging that supports a recovery workflow.

## Functional scope

- Runs as a standalone WordPress plugin
- Uses a plugin-specific PHP namespace to avoid class collisions
- Includes an admin settings screen and an enable/disable option
- Implements real WordPress or WooCommerce hooks for the stated workflow
- Cleans up its option on uninstall

## Installation

Copy this repository into `wp-content/plugins/woocommerce-cart-recovery-tools`, activate it, then open **Settings → WooCommerce Cart Recovery Tools**.

## Production note

This is a working reference implementation intended for discovery and adaptation to a client’s requirements. Test on staging before deployment.
