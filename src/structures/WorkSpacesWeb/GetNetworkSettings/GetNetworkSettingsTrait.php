<?php

namespace Sunaoka\Aws\Structures\WorkSpacesWeb\GetNetworkSettings;

trait GetNetworkSettingsTrait
{
    /**
     * @param GetNetworkSettingsRequest $args
     * @return GetNetworkSettingsResponse
     */
    public function getNetworkSettings(GetNetworkSettingsRequest $args)
    {
        $result = parent::getNetworkSettings($args->toArray());
        return new GetNetworkSettingsResponse($result->toArray());
    }
}
