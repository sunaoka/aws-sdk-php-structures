<?php

namespace Sunaoka\Aws\Structures\WorkSpacesWeb\DeleteUserAccessLoggingSettings;

trait DeleteUserAccessLoggingSettingsTrait
{
    /**
     * @param DeleteUserAccessLoggingSettingsRequest $args
     * @return DeleteUserAccessLoggingSettingsResponse
     */
    public function deleteUserAccessLoggingSettings(DeleteUserAccessLoggingSettingsRequest $args)
    {
        $result = parent::deleteUserAccessLoggingSettings($args->toArray());
        return new DeleteUserAccessLoggingSettingsResponse($result->toArray());
    }
}
