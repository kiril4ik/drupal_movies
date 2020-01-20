<?php
/**
 * @file
 * Contains \Drupal\hello_world\Controller\HelloController.
 */

namespace Drupal\api_data_module\Model;

class DataFromApi
{
  private $post_fields;

  public function __construct()
  {
    $this->post_fields ['apikey'] = 'fdd96480';
    $this->post_fields ['s'] = 'Dark';
  }

  public function getData()
  {
    $query_str = http_build_query($this->post_fields);
    $ch = curl_init("http://www.omdbapi.com/?$query_str");
    curl_setopt($ch, CURLOPT_HEADER, 0);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    $list = curl_exec($ch);
    if (curl_errno($ch)) {
      echo curl_error($ch);
      curl_close($ch);
      exit ();
    }
    curl_close($ch);

    return json_decode($list)->Search;
  }
}
