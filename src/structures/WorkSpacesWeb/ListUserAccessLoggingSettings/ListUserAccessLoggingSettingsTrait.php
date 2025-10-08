<?php

namespace Sunaoka\Aws\Structures\WorkSpacesWeb\ListUserAccessLoggingSettings;

trait ListUserAccessLoggingSettingsTrait
{
    /**
     * @param ListUserAccessLoggingSettingsRequest $args
     * @return ListUserAccessLoggingSettingsResponse
     */
    public function listUserAccessLoggingSettings(ListUserAccessLoggingSettingsRequest $args)
    {
        $result = parent::listUserAccessLoggingSettings($args->toArray());
        return new ListUserAccessLoggingSettingsResponse($result->toArray());
    }
}
