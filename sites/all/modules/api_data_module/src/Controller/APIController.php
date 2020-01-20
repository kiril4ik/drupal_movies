<?php
/**
 * @file
 * Contains \Drupal\api_data_module\Controller\APIController.
 */

namespace Drupal\api_data_module\Controller;

use Drupal\api_data_module\Model\DbConnectionModel;
use Drupal\Core\Controller\ControllerBase;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;

use Drupal\Core\DependencyInjection\ContainerInjectionInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;

class APIController extends ControllerBase {

//  protected $dbConnection;

//  public function __construct($database) {
//    $this->dbConnection = $database;
//  }

  /**
   * https://www.drupal.org/docs/8/api/services-and-dependency-injection/services-and-dependency-injection-in-drupal-8
   * */
//  public static function create(ContainerInterface $container) {
//    return new static($container->get('database'));
//  }

  /**
   * @param $request
   *
   *
   * @return \Symfony\Component\HttpFoundation\JsonResponse
   */
  public function aggregate(Request $request) {
//
//    $format = $request->get('format');
//
//    if ('json' !== $format) {
//      return new JsonResponse([], 400);
//    }

    $response['results'] = (new DbConnectionModel())->get();

    return new JsonResponse($response, 200);
  }
}
