<?php

namespace Sunaoka\Aws\Structures\WorkSpacesWeb\UpdateNetworkSettings;

trait UpdateNetworkSettingsTrait
{
    /**
     * @param UpdateNetworkSettingsRequest $args
     * @return UpdateNetworkSettingsResponse
     */
    public function updateNetworkSettings(UpdateNetworkSettingsRequest $args)
    {
        $result = parent::updateNetworkSettings($args->toArray());
        return new UpdateNetworkSettingsResponse($result->toArray());
    }
}
