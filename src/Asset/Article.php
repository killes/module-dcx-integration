<?php

namespace Drupal\dcx_integration\Asset;

/**
 * Class Article.
 *
 * @package Drupal\dcx_integration\Asset
 */
class Article extends BaseAsset {
  static $mandatory_attributes = [
    'id',
    'title',
    'body',
  ];

  static $optional_attributes = [
    'files',
  ];

  /**
   * Constuctor.
   *
   * @param array $data
   *   Data representing this asset.
   */
  public function __construct($data) {
    parent::__construct($data, self::$mandatory_attributes, self::$optional_attributes);
  }

}
