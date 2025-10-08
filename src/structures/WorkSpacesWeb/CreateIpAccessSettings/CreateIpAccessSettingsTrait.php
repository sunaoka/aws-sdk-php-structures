<?php

namespace Sunaoka\Aws\Structures\WorkSpacesWeb\CreateIpAccessSettings;

trait CreateIpAccessSettingsTrait
{
    /**
     * @param CreateIpAccessSettingsRequest $args
     * @return CreateIpAccessSettingsResponse
     */
    public function createIpAccessSettings(CreateIpAccessSettingsRequest $args)
    {
        $result = parent::createIpAccessSettings($args->toArray());
        return new CreateIpAccessSettingsResponse($result->toArray());
    }
}
