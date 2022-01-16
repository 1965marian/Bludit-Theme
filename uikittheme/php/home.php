<?php if (empty($content)): ?>
	<div class="uk-margin-xlarge">
	<?php $language->p('No pages found') ?>
	</div>
<?php endif ?>

<div class="uk-container uk-container-small uk-margin-xlarge"> 

<?php foreach ($content as $page): ?>
<!-- Post -->
<div class="uk-card uk-margin-xlarge" id="article">

	<!-- Load Bludit Plugins: Page Begin -->
	<?php Theme::plugins('pageBegin'); ?>

	<!-- Cover image -->
	<div class="uk-card-media-top">
	<?php if ($page->coverImage()): ?>
	<img alt="Cover Image" src="<?php echo $page->coverImage(); ?>"/>
	<?php endif ?>
    </div>
	<div class="uk-card-body">
		<!-- Title -->
		<a class="uk-card-title" href="<?php echo $page->permalink(); ?>">
			<h2 class="title"><?php echo $page->title(); ?></h2>
		</a>

		<!-- Creation date -->
		<h6 class="uk-card-subtitle uk-text-muted"><?php echo $page->date(); ?> - <?php echo $L->get('Reading time') . ': ' . $page->readingTime(); ?></h6>

		<!-- Breaked content -->
		<p><?php echo $page->contentBreak(); ?>

		<!-- "Read more" button -->
		<?php if ($page->readMore()): ?>
		<a href="<?php echo $page->permalink(); ?>"><?php echo $L->get('Read more'); ?></a></p>
		<?php endif ?>

	</div>

	<!-- Load Bludit Plugins: Page End -->
	<?php Theme::plugins('pageEnd'); ?>


</div>
<hr>
<?php endforeach ?>

<!-- Pagination -->
<?php if (Paginator::numberOfPages()>1): ?>
<nav class="paginator">
	<ul class="uk-pagination uk-flex-center">

		<!-- Previous button -->
		<?php if (Paginator::showPrev()): ?>
		<li>
			<a href="<?php echo Paginator::previousPageUrl() ?>" tabindex="-1">&#9664; <?php echo $L->get('Previous'); ?></a>
		</li>
		<?php endif; ?>

		<!-- Home button -->
		<li <?php if (Paginator::currentPage()==1) echo 'disabled' ?>>
			<a class="uk-disabled" href="<?php echo Theme::siteUrl() ?>">Home</a>
		</li>

		<!-- Next button -->
		<?php if (Paginator::showNext()): ?>
		<li>
			<a class="uk-active" href="<?php echo Paginator::nextPageUrl() ?>"><?php echo $L->get('Next'); ?> &#9658;</a>
		</li>
		<?php endif; ?>

	</ul>
</nav>
<?php endif ?>
</div>
