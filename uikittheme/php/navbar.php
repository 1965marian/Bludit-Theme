

<!-- desktop sticky navbar -->
<div class="uk-position-top" id="top">
  <nav class="uk-navbar-container uk-navbar-transparent" uk-navbar="dropbar: false;" data-uk-sticky="show-on-up: true; animation: uk-animation-slide-top; sel-target: .uk-navbar-container; cls-active: uk-navbar-sticky uk-section-primary uk-light; bottom: #scrollup-dropdown">
    <!-- LEFT -->
    <div class="uk-navbar-left uk-dark">
      <a href="<?php echo Theme::siteUrl() ?>" class="uk-navbar-item uk-logo"><?php echo $site->title() ?></a>
      <!-- show ul on desktop-tablet with uk-visible@m = Only affects device widths of 960px and larger-->
      <ul class="uk-navbar-nav uk-visible@m">
      <?php foreach ($staticContent as $staticPage): ?>
        <li>
            <a  href="<?php echo $staticPage->permalink(); ?>"><?php echo $staticPage->title(); ?></a>
        </li>
        <?php endforeach ?>     
      </ul>
    </div>
    <!-- toogle icon visible only on phones -->
    <div class="uk-navbar-right">
      <!--off-canvas btn show only on mobile -->
      <a class="uk-navbar-toggle uk-hidden@m" href="#" uk-toggle="target: #offcanvas-nav-primary">
        <span uk-navbar-toggle-icon></span> <span class="uk-margin-small-left">Menu</span>
      </a>
    </div>
  </nav>
</div>
<!-- OFF-CANVAS NAVBAR -->
<nav id="offcanvas-nav-primary" uk-offcanvas="overlay: true; mode: push; flip: true">
  <!-- offcanvas setting  -->
  <div class="uk-offcanvas-bar uk-flex uk-flex-column">
    <!-- navbar content her -->
    <!-- A - logo -->
    <a href="<?php echo Theme::siteUrl() ?>" class="uk-navbar-item uk-logo"><?php echo $site->title() ?></a>
    <!-- B - nav -->
    <ul class="uk-nav-default uk-nav-parent-icon" uk-nav>

      <?php foreach ($staticContent as $staticPage): ?>
        <li>
            <a  href="<?php echo $staticPage->permalink(); ?>"><?php echo $staticPage->title(); ?></a>
        </li>
        <?php endforeach ?>     
    </ul>
    <!--contact us -->
   
  </div>
</nav>
