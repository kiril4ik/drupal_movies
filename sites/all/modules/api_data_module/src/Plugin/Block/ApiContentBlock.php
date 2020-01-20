<?php

namespace Drupal\api_data_module\Plugin\Block;

use Drupal\Core\Block\BlockBase;
use Drupal\Core\Block\BlockPluginInterface;

/**
 * Provides a 'TestModuleBlock' Block.
 *
 * @link https://www.drupal.org/docs/8/creating-custom-modules/create-a-custom-block
 *
 * @Block(
 *   id = "api_content_block",
 *   admin_label = @Translation("Api Content Block"),
 *   category = @Translation("Api Content Block"),
 * )
 */
class ApiContentBlock extends BlockBase implements BlockPluginInterface {
  /**
   * {@inheritdoc}
   */

  public function build() {
    return [
      '#theme' => 'movies_list_block'
    ];
  }
}
