<?php // $Id$
 
function olender_form_system_theme_settings_alter(&$form, $form_state) {
  $form['olender_settings'] = array(
    '#type' => 'fieldset',
    '#title' => t('Optional Settings')
   );
  $form['olender_settings']['olender_site_slogan_line_2'] = array(
    '#type'          => 'textfield',
    '#title'         => t('Site Slogan Line 2'),
    '#default_value'  => theme_get_setting('olender_site_slogan_line_2'), 
    '#description'   => t("If the site slogan needs to break over more than 1 line, add the second line of text here."),
    '#size'  => 70, 
    '#maxlength'  => 128, 
  );
}