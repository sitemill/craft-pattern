<?php
/**
 * Pattern for Craft CMS 3.x
 * @link      https://sitemill.co
 * @copyright Copyright (c) 2020 Sitemill
 */

namespace sitemill\pattern\assetbundles;

use craft\web\AssetBundle;

/**
 * Class PatternAssets
 *
 * @package sitemill\pattern\assetbundles
 */
class PatternAssets extends AssetBundle
{
    public function init()
    {
        $this->sourcePath = '@sitemill/pattern/assetbundles/dist';
        $this->css = [
            ['pattern.scss', 'position' => \yii\web\View::POS_END]
        ];
//        $this->js = [
//            'pattern.js',
//            'manifest.js',
//            'vendor.js'
//        ];
        parent::init();
    }
}