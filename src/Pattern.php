<?php
/**
 * Pattern for Craft CMS 3.x
 * @link      https://sitemill.co
 * @copyright Copyright (c) 2020 Sitemill
 */

namespace sitemill\pattern;

use craft\events\RegisterTemplateRootsEvent;
use craft\web\View;
use sitemill\pattern\variables\PatternVariable;
use sitemill\pattern\models\Settings;

use Craft;
use craft\base\Plugin;
use craft\services\Plugins;
use craft\events\PluginEvent;
use craft\web\twig\variables\CraftVariable;

use yii\base\Event;
use sitemill\pattern\assetbundles\PatternAssets;

/**
 * Class Pattern
 *
 * @author    Sitemill
 * @package   Pattern
 * @since     1.0.0
 *
 */
class Pattern extends Plugin
{
    // Static Properties
    // =========================================================================

    /**
     * @var Pattern
     */
    public static $plugin;

    // Public Properties
    // =========================================================================

    /**
     * @var string
     */
    public $schemaVersion = '1.0.0';

    /**
     * @var bool
     */
    public $hasCpSettings = false;

    /**
     * @var bool
     */
    public $hasCpSection = false;

    // Public Methods
    // =========================================================================

    /**
     * @inheritdoc
     */
    public function init()
    {
        parent::init();
        self::$plugin = $this;

        Event::on(
            CraftVariable::class,
            CraftVariable::EVENT_INIT,
            function (Event $event) {
                /** @var CraftVariable $variable */
                $variable = $event->sender;
                $variable->set('pattern', PatternVariable::class);
            }
        );

        Event::on(
            Plugins::class,
            Plugins::EVENT_AFTER_INSTALL_PLUGIN,
            function (PluginEvent $event) {
                if ($event->plugin === $this) {
                }
            }
        );

        // Register the templates
        Event::on(
            View::class,
            View::EVENT_REGISTER_SITE_TEMPLATE_ROOTS,
            function(RegisterTemplateRootsEvent $event) {
                $event->roots['_pattern'] = __DIR__ . '/templates/alpha1';
            }
        );

        // Trigger loading of front-end assets
        $request = Craft::$app->getRequest();
        if (
            $this->isInstalled
            && !$request->isConsoleRequest
            && !$request->isCpRequest
        ) {
            $this->registerFrontEndAssetBundles();
        }

        Craft::info(
            Craft::t(
                'pattern',
                '{name} plugin loaded',
                ['name' => $this->name]
            ),
            __METHOD__
        );
    }



    // Protected Methods
    // =========================================================================

    /**
     * @inheritdoc
     */
    protected function createSettingsModel()
    {
        return new Settings();
    }

        protected function registerFrontEndAssetBundles()
    {
        $view = Craft::$app->getView();
        $view->registerAssetBundle(PatternAssets::class);
    }

}
