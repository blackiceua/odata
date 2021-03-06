<?php

namespace Drupal\odata\Plugin\views\field;

/**
 * @file
 * Definition of odata_handler_filter.
 */

///**
// * Handler to handle an oData field.
// */
use Drupal\views\Plugin\views\display\DisplayPluginBase;
use Drupal\views\Plugin\views\field\Field;
use Drupal\views\ViewExecutable;

/**
 * Displays entity field data.
 *
 * @ingroup views_field_handlers
 *
 * @ViewsField("odata_field_string")
 */
class OdataFieldString extends Field {

  /**
   * {@inheritdoc}
   */
  public function init(ViewExecutable $view, DisplayPluginBase $display, array &$options = NULL) {
    parent::init($view, $display, $options);
    // Always treat numbers as floats.
//    $this->definition['float'] = TRUE;
  }

  public function defineOptions() {
    return parent::defineOptions(); // TODO: Change the autogenerated stub
  }

  /**
   * Overrides query().
   */
  public function query() {
    // Add the field.
    $this->field_alias = $this->query->addField($this->table, $this->realField, NULL);
  }

}
