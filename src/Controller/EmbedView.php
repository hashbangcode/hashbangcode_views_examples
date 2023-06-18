<?php

namespace Drupal\hashbangcode_views_examples\Controller;

use Drupal\Core\Controller\ControllerBase;

/**
 * Controller to show an embedded view.
 */
class EmbedView extends ControllerBase {

  /**
   * Action for the route hashbangcode_views_examples.display_modes_embed.
   *
   * @return array|null
   *   The render array returned from views_embed_view(), or null if the
   *   view doesn't exist.
   */
  public function embedViewAction() {
    return views_embed_view('hashbangcode_example_display_modes', 'display_modes_embed');
  }

}
