<?php
/**
 * Template part for displaying the page sidebar.
 *
 * @package Attribute Canva
 */
?>

<aside id="secondary" class="widget-area page-sidebar" role="complementary">
    <?php if (is_active_sidebar('page-sidebar')) : ?>
        <?php dynamic_sidebar('page-sidebar'); ?>
    <?php endif; ?>
</aside><!-- .widget-area -->