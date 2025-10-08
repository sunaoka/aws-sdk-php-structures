<?php

namespace Sunaoka\Aws\Structures\Chime\GetGlobalSettings;

trait GetGlobalSettingsTrait
{
    /**
     * @return GetGlobalSettingsResponse
     */
    public function getGlobalSettings()
    {
        $result = parent::getGlobalSettings();
        return new GetGlobalSettingsResponse($result->toArray());
    }
}
