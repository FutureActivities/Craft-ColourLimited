<?php
/**
 * Colour scheme plugin for Craft CMS
 *
 * @author    Future Activities
 * @copyright Copyright (c) 2016 Future Activities
 * @link      https://github.com/FutureActivities
 * @since     1.0.0
 */

namespace Craft;

class ColourLimitedPlugin extends BasePlugin
{

    /**
     * @return mixed
     */
    public function getName()
    {
         return Craft::t('Colour (Limited)');
    }

    /**
     * @return mixed
     */
    public function getDescription()
    {
        return Craft::t('Adds a new field type which allows selecting a colour limited to pre-defined options');
    }

    /**
     * @return string
     */
    public function getVersion()
    {
        return '1.0.0';
    }

    /**
     * @return string
     */
    public function getSchemaVersion()
    {
        return '1.0.0';
    }

    /**
     * @return string
     */
    public function getDeveloper()
    {
        return 'Future Activities';
    }

    /**
     * @return string
     */
    public function getDeveloperUrl()
    {
        return 'https://github.com/FutureActivities';
    }
}
