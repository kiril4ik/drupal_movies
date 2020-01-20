<?php
/**
 * @file
 * Contains \Drupal\mymodule\Model\MyModuleModel.
 */

namespace Drupal\api_data_module\Model;

use Drupal\Core\Database\Connection;

/**
 * Class DbConnectionModel
 *
 * */
class DbConnectionModel {

  public function get() {
    //Use Database API to retrieve current posts.
    $query = db_select('node_field_data', 'n')
      ->fields('n', array('nid','title'))
//      ->condition('status', 1) //Published.
      ->orderBy('created', 'DESC') //Most recent first.
      ->execute();
    return $query;
  }
}
