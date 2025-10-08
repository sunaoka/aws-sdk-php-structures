<?php

namespace Sunaoka\Aws\Structures\LicenseManagerLinuxSubscriptions\GetServiceSettings;

trait GetServiceSettingsTrait
{
    /**
     * @param GetServiceSettingsRequest $args
     * @return GetServiceSettingsResponse
     */
    public function getServiceSettings(GetServiceSettingsRequest $args)
    {
        $result = parent::getServiceSettings($args->toArray());
        return new GetServiceSettingsResponse($result->toArray());
    }
}
