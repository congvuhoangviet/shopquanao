<?php
/**
 * The sidebar containing the main widget area.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Lebanon
 */
if (!is_active_sidebar('sidebar-left')) {
    return;
}
?>

<div class="col-sm-3" id="lebanon-sidebar">
    <div id="secondary" class="widget-area" role="complementary">
        <?php dynamic_sidebar('sidebar-left'); ?>
    </div><!-- #secondary -->
</div>
