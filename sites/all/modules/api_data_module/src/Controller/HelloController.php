<?php
/**
 * @file
 * Contains \Drupal\hello_world\Controller\HelloController.
 */

namespace Drupal\api_data_module\Controller;

class HelloController
{
  private $post_fields;

  public function content()
  {
    $aa = 1;
    return array(
      '#type' => 'markup',
      '#markup' => $this->getData(),
    );
  }
}
