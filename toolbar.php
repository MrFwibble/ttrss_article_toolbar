<?php
global $link;

echo stylesheet_tag("plugins.local/article_toolbar/css/font-awesome.css");
print_user_stylesheet($link);
?>
<span id="framarticle-toolbar">

    <button class="button_nav" title="Subscribe To Feed" onclick="quickAddFeed()">
    <i class="icon-plus"></i></button>

    <button class="button_nav" title="Toggle Expanded View" onclick="toggle_cdm_expanded()">
    <i class="icon-th-list"></i></button>

    <button class="button_nav" title="Mark feed as read" onclick="catchupCurrentFeed()">
    <i class="icon-eye-open"></i></button>

    <button class="button_nav" title="Refresh Feed" onclick="viewCurrentFeed()">
    <i class="icon-refresh"></i></button>

    <button class="button_nav" title="Previous Post" onclick="moveToPost('prev',true)">
    <i class="icon-arrow-up"></i></button>

    <button class="button_nav" title="Next Post" onclick="moveToPost('next',true)">
    <i class="icon-arrow-down"></i></button>
</span>
