<?php

namespace Sunaoka\Aws\Structures\WorkSpacesWeb\AssociateNetworkSettings;

trait AssociateNetworkSettingsTrait
{
    /**
     * @param AssociateNetworkSettingsRequest $args
     * @return AssociateNetworkSettingsResponse
     */
    public function associateNetworkSettings(AssociateNetworkSettingsRequest $args)
    {
        $result = parent::associateNetworkSettings($args->toArray());
        return new AssociateNetworkSettingsResponse($result->toArray());
    }
}
