<?php
namespace Craft;

class ColourLimited_ColourSelectFieldType extends BaseFieldType
{
	public function getName()
	{
		return Craft::t('Colour Limited');
	}

	public function defineContentAttribute()
	{
		return AttributeType::String;
	}

	public function getSettingsHtml()
	{
		craft()->templates->includeJsResource('colourlimited/js/ColourSelectField.js');

		return craft()->templates->render('colourlimited/fieldtypes/ColourSelect/settings', array(
			'settings'   => $this->getSettings(),
			'savedOptions' => $this->getSettings()->getAttributes()['options']
		));
	}

	public function getInputHtml($name, $value)
	{
		craft()->templates->includeJsResource('colourlimited/js/ColourSelectInput.js');
		craft()->templates->includeCssResource('colourlimited/css/ColourSelectInput.css');

		$id = craft()->templates->formatInputId($name);
		craft()->templates->includeJs('new ColourSelectInput("'.craft()->templates->namespaceInputId($id).'");');

		$options = $this->getSettings()->options;

		if (!$value && $options)
			$value = array_shift(array_values($options));

		return craft()->templates->render('colourlimited/fieldtypes/ColourSelect/input', array(
			'id'         => $id,
			'name'       => $name,
			'value'      => $value,
			'options'    => $options
		));
	}

	protected function defineSettings()
	{
		return array(
			'options' => array(AttributeType::Mixed, 'default' => []),
		);
	}
}
