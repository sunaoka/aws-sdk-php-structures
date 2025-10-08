<?php

namespace Sunaoka\Aws\Structures\SSMQuickSetup\GetServiceSettings;

trait GetServiceSettingsTrait
{
    /**
     * @return GetServiceSettingsResponse
     */
    public function getServiceSettings()
    {
        $result = parent::getServiceSettings();
        return new GetServiceSettingsResponse($result->toArray());
    }
}
