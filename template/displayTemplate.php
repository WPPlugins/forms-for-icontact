<?php
global $post;
wp_head();
$shortcodeString = '[icontact_forms id="postId"]';
$shortcodeString = str_replace('postId', $post->ID, $shortcodeString);
echo do_shortcode($shortcodeString);
wp_footer();
?>