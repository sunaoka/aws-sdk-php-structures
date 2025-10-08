<?php

namespace Sunaoka\Aws\Structures\WorkSpacesWeb\CreateNetworkSettings;

trait CreateNetworkSettingsTrait
{
    /**
     * @param CreateNetworkSettingsRequest $args
     * @return CreateNetworkSettingsResponse
     */
    public function createNetworkSettings(CreateNetworkSettingsRequest $args)
    {
        $result = parent::createNetworkSettings($args->toArray());
        return new CreateNetworkSettingsResponse($result->toArray());
    }
}
