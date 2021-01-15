<?php

namespace Drupal\asu_header\Plugin\Block;

use Drupal\Core\Block\BlockBase;
use Drupal\Core\Form\FormStateInterface;

/**
 * Provides a block for the ASU universal header
 *
 * @Block(
 *   id = "asu_global_header",
 *   admin_label = @Translation("ASU Universal Header"),
 *   category = @Translation("ASU"),
 * )
 */
class GlobalHeader extends BlockBase {

  /**
   * {@inheritdoc}
   */
  public function blockForm($form, FormStateInterface $form_state) {
    $form = parent::blockForm($form, $form_state);

    $config = $this->getConfiguration();

    $form['asu_header_cols'] = [
      '#type' => ''
    ]
  }

  /**
   * {@inheritdoc}
   */
  public function build() {

    return [
      '#theme' => 'asu_header',
    ];
  }


}