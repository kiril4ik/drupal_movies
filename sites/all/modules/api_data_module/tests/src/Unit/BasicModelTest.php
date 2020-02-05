<?php
namespace Drupal\Tests\api_data_module\Unit;

//use Drupal\Core\DependencyInjection\ContainerBuilder;

use Drupal\api_data_module\Model\DataFromApi;
use Drupal\Tests\UnitTestCase;

/**
 * Tests generation of api_data_module.
 *
 *
 * Required PHPDoc metadata for test discoverability
 * @link https://www.drupal.org/docs/8/phpunit/phpunit-file-structure-namespace-and-required-metadata
 *
 * @group mymodule
 * @coversDefaultClass \Drupal\api_data_module\Model\BasicModelTest
 */

class BasicModelTest extends UnitTestCase {

  private $model;
  /**
   * {@inheritdoc}
   */
  public function setUp() {
    parent::setUp();

    $this->model = (new DataFromApi)->getData();
  }

  public function testTest() {

    $result = $this->model->test( ['a','b']);

    $this->assertTrue( is_array( $this->model ) );
    $this->assertEquals( count($this->model), 5 );
  }
}
