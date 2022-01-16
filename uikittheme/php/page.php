
  <div class="uk-container uk-container-small uk-container-center uk-margin-top uk-margin-xlarge" id="particles-js">
  <!-- Load Bludit Plugins: Page Begin -->
  <?php Theme::plugins('pageBegin'); ?>

  <div class="uk-grid" data-uk-grid-margin>
      <div class="uk-width-medium-3-4">

          <article class="uk-article">
              <h1 class="uk-article-title">
                <!-- Title -->
              <a class="uk-text-dark" href="<?php echo $page->permalink(); ?>">
                <h1 class="title"><?php echo $page->title(); ?></h1>
              </a>
              </h1>
              <!-- Creation date -->
              <?php if (!$page->isStatic() && !$url->notFound()): ?>
                      <p class="uk-article-meta"><?php echo $page->date(); ?> - <?php echo $L->get('Reading time') . ': ' . $page->readingTime() ?>
              <?php endif ?> </p>

              <?php if ($page->coverImage()): ?>
                <div class="uk-animation-toggle" tabindex="0">
                <div class="uk-card uk-card-default uk-card-body">
                <img class="uk-img" alt="Cover Image" src="<?php echo $page->coverImage(); ?>"/>
                </div>
                </div>
    <?php endif ?>      

            <!-- Full content -->
            <p><?php echo $page->content(); ?></p>
             
          </article>
        <!-- Load Bludit Plugins: Page End -->
        <?php Theme::plugins('pageEnd'); ?>
      </div>
    </div>

  </div>

