<?php

/**
 * @file
 * Contains \Drupal\demo\Form\ContactForm
 */

 namespace Drupal\demo\Form;

 use Drupal\Core\Form\FormBase;
 use Drupal\Core\Form\FormStateInterface;


 class ContactForm extends FormBase {

  /**
   * {inheritdoc}
   */
  public function getFormId() {
    return 'contact_form';
  }

  /**
   * {inheritdoc}
   */
  public function buildForm(array $form, FormStateInterface $form_state) {
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
