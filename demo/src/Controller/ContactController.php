<?php
/**
 * @file
 * Contains \Drupal\demo\Controller\ContactController.
 */

namespace Drupal\demo\Controller;

use Drupal\Core\Controller\ControllerBase;

class ContactController extends ControllerBase {
  public function content() {
    return array(
      '#type' => 'markup',
      '#markup' => $this->t('Hello World Demo'),
    );
  }
}
