<?php

/**
 * Provides a 'Hello' Block
 *
 * @Block(
 *   id = "demo_block",
 *   admin_label = @Translation("Demo block"),
 * )
 */

 namespace Drupal\demo\Plugin\Block;

 use Drupal\Core\Block\BlockBase;
 use Drupal\Core\Block\BlockPluginInterface;
 use Drupal\Core\Form\FormStateInterface;

 class DemoBlock extends BlockBase implements BlockPluginInterface {

  /**
   * {@inheritdoc}
   */
  public function defaultConfiguration() {
    $default_config = \Drupal::config('demo.settings');
    return array(
      'name' => $default_config->get('name'),
    );
  }

  /**
   * {@inheritdoc}
   */
  public function build() {
    $config = $this->getConfiguration();

    if(!empty($config['name'])) {
      $name = $config['name'];
    }
    else {
      $name = 'wala po';
    }

    return array(
      '#markup' => $this->t('Hello hello @name !', array('@name' => $name)),
    );
  }

  /**
   * {inheritdoc}
   */
  public function blockForm($form, FormStateInterface $form_state) {
    $form = parent::blockForm($form, $form_state);

    $config = $this->getConfiguration();

    $form['demo_fieldset'] = array(
      '#type' => 'fieldset',
      '#title' => t('Demo Fieldset'),
    );

    $form['demo_fieldset']['demo_block_name'] = array(
      '#type' => 'textfield',
      '#title' => $this->t('Who?'),
      '#description' => $this->t('Who you?'),
      '#default_value' => isset($config['name']) ? $config['name']: '',
    );

    return $form;
  }

  /**
   * {inheritdoc}
   */
   public function blockSubmit($form, FormStateInterface $form_state) {
     $this->setConfigurationValue('name', $form_state->getValue(array('demo_fieldset', 'demo_block_name')));
   }
 }
