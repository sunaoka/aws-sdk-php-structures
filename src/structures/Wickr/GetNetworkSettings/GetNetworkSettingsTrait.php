<?php

namespace Sunaoka\Aws\Structures\Wickr\GetNetworkSettings;

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
