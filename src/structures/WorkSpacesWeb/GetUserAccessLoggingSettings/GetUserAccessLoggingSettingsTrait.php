<?php

namespace Sunaoka\Aws\Structures\WorkSpacesWeb\GetUserAccessLoggingSettings;

trait GetUserAccessLoggingSettingsTrait
{
    /**
     * @param GetUserAccessLoggingSettingsRequest $args
     * @return GetUserAccessLoggingSettingsResponse
     */
    public function getUserAccessLoggingSettings(GetUserAccessLoggingSettingsRequest $args)
    {
        $result = parent::getUserAccessLoggingSettings($args->toArray());
        return new GetUserAccessLoggingSettingsResponse($result->toArray());
    }
}
