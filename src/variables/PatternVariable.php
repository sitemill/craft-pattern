<?php
/**
 * Pattern for Craft CMS 3.x
 * @link      https://sitemill.co
 * @copyright Copyright (c) 2020 Sitemill
 */

namespace sitemill\pattern\variables;

use sitemill\pattern\Pattern;

use Craft;

/**
 * @author    Sitemill
 * @package   Pattern
 * @since     1.0.0
 */
class PatternVariable
{

    // Public Methods
    // =========================================================================

    /**
     * @param int $version
     * @return array
     */
    public function component($version = 1)
    {
        return [
            'header' => '/v' . $version . '/components/header/index.twig'
        ];
    }

    /**
     * @return array
     */
    public function layout($version)
    {
        return [
            'helloWorld' => '_pattern/helloWorld',
        ];
    }

    /**
     * @return array
     */
    public function theme()
    {
        return Pattern::$plugin->getSettings()->theme;
    }

    /**
     * @return array
     */
    public function default()
    {
        return 'hi';
    }

}
