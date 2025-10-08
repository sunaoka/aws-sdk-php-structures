<?php

namespace Sunaoka\Aws\Structures\Chime\GetUserSettings;

trait GetUserSettingsTrait
{
    /**
     * @param GetUserSettingsRequest $args
     * @return GetUserSettingsResponse
     */
    public function getUserSettings(GetUserSettingsRequest $args)
    {
        $result = parent::getUserSettings($args->toArray());
        return new GetUserSettingsResponse($result->toArray());
    }
}
