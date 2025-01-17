<?php
namespace verbb\bugsnag\variables;

use verbb\bugsnag\Bugsnag;
use verbb\bugsnag\services\Service;

use craft\helpers\Json;
use craft\helpers\Template;

class BugsnagVariable
{
    // Public Methods
    // =========================================================================

    public function metadata(array $data = []): Service
    {
        return Bugsnag::$plugin->getService()->metadata($data);
    }

    public function getBrowserConfig($asJson = true)
    {
        $config = Bugsnag::$plugin->getSettings()->getBrowserConfig();

        if ($asJson) {
            return Template::raw(Json::htmlEncode($config));
        }

        return $config;
    }
}
