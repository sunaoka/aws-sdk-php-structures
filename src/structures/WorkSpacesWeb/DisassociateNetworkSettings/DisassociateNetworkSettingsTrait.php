<?php

namespace Sunaoka\Aws\Structures\WorkSpacesWeb\DisassociateNetworkSettings;

trait DisassociateNetworkSettingsTrait
{
    /**
     * @param DisassociateNetworkSettingsRequest $args
     * @return DisassociateNetworkSettingsResponse
     */
    public function disassociateNetworkSettings(DisassociateNetworkSettingsRequest $args)
    {
        $result = parent::disassociateNetworkSettings($args->toArray());
        return new DisassociateNetworkSettingsResponse($result->toArray());
    }
}
