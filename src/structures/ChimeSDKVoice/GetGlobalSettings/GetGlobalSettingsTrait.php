<?php

namespace Sunaoka\Aws\Structures\ChimeSDKVoice\GetGlobalSettings;

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
