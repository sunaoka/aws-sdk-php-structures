<?php

namespace Sunaoka\Aws\Structures\WorkSpacesWeb\AssociateIpAccessSettings;

trait AssociateIpAccessSettingsTrait
{
    /**
     * @param AssociateIpAccessSettingsRequest $args
     * @return AssociateIpAccessSettingsResponse
     */
    public function associateIpAccessSettings(AssociateIpAccessSettingsRequest $args)
    {
        $result = parent::associateIpAccessSettings($args->toArray());
        return new AssociateIpAccessSettingsResponse($result->toArray());
    }
}
