<?php

namespace Sunaoka\Aws\Structures\WorkSpacesWeb\UpdateUserSettings;

trait UpdateUserSettingsTrait
{
    /**
     * @param UpdateUserSettingsRequest $args
     * @return UpdateUserSettingsResponse
     */
    public function updateUserSettings(UpdateUserSettingsRequest $args)
    {
        $result = parent::updateUserSettings($args->toArray());
        return new UpdateUserSettingsResponse($result->toArray());
    }
}
