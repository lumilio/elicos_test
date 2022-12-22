<?php

namespace Drupal\current_date\Plugin\Block;
use Drupal\Core\Block\BlockBase;

/**
* Provides a block with a simple text.
*
* @Block(
*   id = "current_date_block",
*   admin_label = @Translation("current date"),
*   category = "test"
* )
*/
class CurrentDateBlock extends BlockBase {

 /**
  * {@inheritdoc}
  */
 public function build() {
    return [
        '#theme' => 'clock-template',
    ];
 }
}

?>








