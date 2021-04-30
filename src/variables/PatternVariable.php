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
     * @return array
     */
    public function theme()
    {
        return Pattern::$plugin->getSettings()->theme;
    }

}
