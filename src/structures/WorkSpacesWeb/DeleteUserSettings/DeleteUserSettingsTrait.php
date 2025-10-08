<?php

namespace Sunaoka\Aws\Structures\WorkSpacesWeb\DeleteUserSettings;

trait DeleteUserSettingsTrait
{
    /**
     * @param DeleteUserSettingsRequest $args
     * @return DeleteUserSettingsResponse
     */
    public function deleteUserSettings(DeleteUserSettingsRequest $args)
    {
        $result = parent::deleteUserSettings($args->toArray());
        return new DeleteUserSettingsResponse($result->toArray());
    }
}
