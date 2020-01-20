<?php
/**
 * @file
 * Contains \Drupal\api_data_module\Model\DbConnectionModel .
 */

namespace Drupal\api_data_module\Model;

use Drupal\Core\Database\Connection;

/**
 * Class DbConnectionModel
 *
 * */
class DbConnectionModel {

  public function get() {
    //Use Database API to retrieve 5 lastest posts.
    $query =  \ Drupal :: database () -> select('node_field_data', 'n')
          ->fields('n', ['nid','title'])
          ->condition('n.status', 1) //Published.
          ->orderBy('n.created', 'DESC') //Most recent first.
          ->range(0, 5);
    return $query->execute()->fetchAll();
  }
}
