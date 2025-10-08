<?php

namespace Sunaoka\Aws\Structures\WorkSpacesWeb\UpdateUserAccessLoggingSettings;

trait UpdateUserAccessLoggingSettingsTrait
{
    /**
     * @param UpdateUserAccessLoggingSettingsRequest $args
     * @return UpdateUserAccessLoggingSettingsResponse
     */
    public function updateUserAccessLoggingSettings(UpdateUserAccessLoggingSettingsRequest $args)
    {
        $result = parent::updateUserAccessLoggingSettings($args->toArray());
        return new UpdateUserAccessLoggingSettingsResponse($result->toArray());
    }
}
