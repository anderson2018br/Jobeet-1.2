<?php

/**
 * JobeetJob form.
 *
 * @package    form
 * @subpackage JobeetJob
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 6174 2007-11-27 06:22:40Z fabien $
 */
class JobeetJobForm extends BaseJobeetJobForm
{
  public function configure()
  {
      $this->removeFields();

      $this->validatorSchema['email'] = new sfValidatorAnd(array(
          $this->validatorSchema['email'],
          new sfValidatorEmail(),
      ));

      $this->widgetSchema['type'] = new sfWidgetFormChoice(array(
         'choices' => Doctrine::getTable('JobeetJob')->getTypes(),
         'expanded' => true,
      ));

      $this->validatorSchema['type'] = new sfValidatorChoice(array(
         'choices' => array_keys(Doctrine::getTable('JobeetJob')->getTypes()),
      ));

      $this->widgetSchema['logo'] = new sfWidgetFormInputFile(array(
         'label' => 'Company logo',
      ));

      $this->widgetSchema->setLabels(array(
         'category_id' => 'Category',
         'is_public' => 'Public?',
         'how_to_apply' => 'How to apply?',
      ));

      $this->validatorSchema['logo'] = new sfValidatorFile(array(
         'required' => false,
         'path' => sfConfig::get('sf_upload_dir').'/jobs',
         'mime_types' => 'web_images',
      ));

      $this->widgetSchema->setHelp('is_public', 'Whether the job can also be published on affiliate website or not.');
  }

  protected function removeFields()
  {
        unset(
            $this['created_at'], $this['updated_at'],
            $this['expired_at'], $this['is_activated'],
            $this['token']
        );
  }
}
