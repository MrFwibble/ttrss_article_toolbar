<?php
global $link;

echo stylesheet_tag("plugins.local/ttrss_article_toolbar/css/font-awesome.css");
print_user_stylesheet($link);
?>
<span id="framarticle-toolbar">

    <button class="button_nav" title="Mark feed as read" onclick="catchupCurrentFeed()">
    <i class="icon-eye-open"></i></button>

    <button class="button_nav" title="Refresh Feed" onclick="Feeds.reloadCurrent()">
    <i class="icon-refresh"></i></button>

    <button class="button_nav" title="Previous Post" onclick="Headlines.move('prev')">
    <i class="icon-arrow-up"></i></button>

    <button class="button_nav" title="Next Post" onclick="Headlines.move('next')">
    <i class="icon-arrow-down"></i></button>
</span>
