<?php

namespace Sunaoka\Aws\Structures\WorkSpacesWeb\ListNetworkSettings;

trait ListNetworkSettingsTrait
{
    /**
     * @param ListNetworkSettingsRequest $args
     * @return ListNetworkSettingsResponse
     */
    public function listNetworkSettings(ListNetworkSettingsRequest $args)
    {
        $result = parent::listNetworkSettings($args->toArray());
        return new ListNetworkSettingsResponse($result->toArray());
    }
}
