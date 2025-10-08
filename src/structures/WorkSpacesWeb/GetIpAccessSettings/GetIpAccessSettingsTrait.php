<?php

namespace Sunaoka\Aws\Structures\WorkSpacesWeb\GetIpAccessSettings;

trait GetIpAccessSettingsTrait
{
    /**
     * @param GetIpAccessSettingsRequest $args
     * @return GetIpAccessSettingsResponse
     */
    public function getIpAccessSettings(GetIpAccessSettingsRequest $args)
    {
        $result = parent::getIpAccessSettings($args->toArray());
        return new GetIpAccessSettingsResponse($result->toArray());
    }
}
