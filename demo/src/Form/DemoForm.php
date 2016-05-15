<?php

/**
 * @file
 * Contains \Drupal\demo\Form\DemoForm
 */

namespace Drupal\demo\Form;
 
use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;


class DemoForm extends FormBase {

  /**
   * {inheritdoc}
   */
  public function getFormId() {
    return 'demo_form';
  }

  /**
   * {inheritdoc}
   */
  public function buildForm(array $form, FormStateInterface $form_state) {
    $form['title'] = array(
      '#type' => 'textfield',
      '#title' => t('Title'),
      '#required' => TRUE,
    );

    return $form;
  }

  /**
   * {inheritdoc}
   */
  public function validateForm(array &$form, FormStateInterface $form_state) {
    
  }

  /**
   * {inheritdoc}
   */
  public function submitForm(array &$form, FormStateInterface $form_state) {
    
  }
}