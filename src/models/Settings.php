<?php
/**
 * Pattern plugin for Craft CMS 3.x
 *
 * A component library for Craft CMS
 *
 * @link      https://sitemill.co
 * @copyright Copyright (c) 2021 Sitemill
 */

namespace sitemill\pattern\models;

use sitemill\pattern\Pattern;

use Craft;
use craft\base\Model;

/**
 * @author    Sitemill
 * @package   Pattern
 * @since     1.0.0
 */
class Settings extends Model
{
    // Public Properties
    // =========================================================================

    /**
     * @var string
     */
    public $blueprint = 'true';

    /**
     * @var array
     */
    public $theme = [
        'heading/1' => 'font-bold text-2xl',
        'heading/2' => 'font-bold text-xl',
        'heading/3' => 'font-bold text-lg',
        'heading/4' => 'font-bold text-md',
        'heading/5' => 'font-bold text-md',
        'heading/6' => 'font-bold text-md',
        'siteHeader' => [
            'main' => '',
            'brand' => 'bg-green-500',
            'nav' => 'bg-blue-500'
        ],
        'navigation/horizontal' => [
            'main' => 'bg-red-500'
        ],
        'richText' => 'prose'
    ];

//    // Public Methods
//    // =========================================================================
//
//    /**
//     * @inheritdoc
//     */
//    public function rules()
//    {
//        return [
//            ['someAttribute', 'string'],
//            ['someAttribute', 'default', 'value' => 'Some Default'],
//        ];
//    }
}
