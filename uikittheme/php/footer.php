<div class="uk-section uk-section-primary">
  <footer class="uk-container uk-container-medium  uk-light  footer">
    <div class="uk-flex uk-flex-middle uk-grid" uk-grid>

      <div class="uk-text-left@s">
        <p class="uk-text-meta">
        <?php echo $site->footer(); ?><br class="uk-hidden@l" /> All Rights Reserved CM
        </p>

      </div>
      <!-- col1 -->
      <div class="uk-inline">
      <button class="uk-button uk-button-default" type="button">Social</button>
      <div uk-dropdown="animation: uk-animation-slide-top-small; duration: 1000">
      <ul class="uk-nav uk-dropdown-nav">
						<?php foreach (Theme::socialNetworks() as $key=>$label): ?>
						<li>
							<a class="social" href="<?php echo $site->{$key}(); ?>" target="_blank">
								<img src="<?php echo DOMAIN_THEME.'img/'.$key.'.svg' ?>" alt="<?php echo $label ?>" />
								<span class="uk-active"><?php echo $label; ?></span>
							</a>
						</li>
						<?php endforeach; ?>
					</ul>
      </div>
      </div>
      <!-- col2 -->
      <div class="uk-width-expand@m">
        <div class="uk-align-left uk-align-right@m uk-flex-row-reverse uk-text-meta">
        <a target="_blank" class="text-white" href="https://www.bludit.com">
            <div class="n-container uk-flex uk-flex-inline uk-flex-middle">
              <div class="name uk-margin-right">Bludit</div>
              <div class="logo uk-margin-right">
                
              </div>
            </div>
        </div>
      </div>
      </a>
    </div>
  </footer>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.5.9/js/uikit.min.js" integrity="sha512-OZ9Sq7ecGckkqgxa8t/415BRNoz2GIInOsu8Qjj99r9IlBCq2XJlm9T9z//D4W1lrl+xCdXzq0EYfMo8DZJ+KA==" crossorigin="anonymous"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.5.9/js/uikit-icons.min.js"  integrity="sha512-hcz3GoZLfjU/z1OyArGvM1dVgrzpWcU3jnYaC6klc2gdy9HxrFkmoWmcUYbraeS+V/GWSgfv6upr9ff4RVyQPw==" crossorigin="anonymous"></script>
 <script src="https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>