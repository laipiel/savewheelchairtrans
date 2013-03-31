<!DOCTYPE html>
<html>
  <head>
    <meta charset='utf-8'>
    <meta property="fb:app_id" content="327868690650759">
  	<title>
      <?php if (is_front_page()) echo 'Wheelchair Accessible Transportation Services in Toronto (GTA) |'; else wp_title('|',1,'right');?> <?php bloginfo('name'); ?>
    </title>
    <?php if(is_single()) {
      head_meta_desc();
    } else { ?>
    <meta name='description' content="<?php bloginfo('description'); ?>">
    <? } ?>
    <meta name='keywords' content='wheelchair taxi,accessible taxi,accessible transportation,accessible transit,car transport for handicapped,disabled transportation,handicap taxi,handicapped accessible vans,transportation services for disabled,wheelchair accessible transit,accessible,services for seniors,transportation services,toronto,gta,north york,mississauga,markham,cabs,scarborough'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <!-- Le styles -->
    <link href="<?php bloginfo('stylesheet_url');?>" rel='stylesheet'>
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <link rel='shortcut icon' href='<?php bloginfo('template_url');?>/img/favicon.ico'>
    <link rel="openid.server"
          href="http://www.myopenid.com/server" />
    <link rel="openid.delegate"
          href="http://SAVEWheelchairTrans.myopenid.com" />
    <link href='https://plus.google.com/106099111215835488940' rel='publisher' />
    <script type="text/javascript">
      var _gaq = _gaq || [];
      _gaq.push(['_setAccount', 'UA-36756183-1']);
      _gaq.push(['_trackPageview']);
      (function() {
        var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true; 
        ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
      })();
    </script>
    <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="https://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
    <?php wp_enqueue_script("jquery"); ?>
    <?php wp_head(); ?>
  </head>
  <body>
    <div class='navbar navbar-inverse navbar-fixed-top'>
      <div class='navbar-inner'>
        <div class='container'>
          <a class='brand hidden-phone' href="<?php echo site_url(); ?>">
            <?php bloginfo('name'); ?>
          </a>
          <div class='nav-collapse collapse'>
          <ul class='nav'>
            <?php wp_list_pages(array('title_li' => '', 'exclude' => 4)); ?>
          </ul>
          </div>
          <div class='pull-right'>
            <span class='navbar-text lead' style='color:#ffff00'>
              RESERVATION CALL:
            </span>
            <span class='navbar-text lead' style='color:#fff'>647.239.5467</span>
          </div>
        </div>
      </div>
    </div>
