<!DOCTYPE html>

<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>KITAE LEE CMS <?php if(isset($page_title)) { echo '- ' . h($page_title); } ?><?php if(isset($preview) && $preview) { echo ' [PREVIEW]'; } ?></title>
    <link rel="stylesheet" media="all" href="<?php echo url_for('/stylesheets/public.css'); ?>" />
  </head>

  <body>

    <header>
      <h1>
          <a href="<?php echo url_for('/index.php'); ?>">
            <img src="<?php echo url_for('/images/gbi_logo.png'); ?>" width="298" height="71" alt="" />
          </a>
      </h1>
    </header>
