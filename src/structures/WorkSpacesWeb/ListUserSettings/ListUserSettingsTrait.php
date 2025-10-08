<?php

namespace Sunaoka\Aws\Structures\WorkSpacesWeb\ListUserSettings;

trait ListUserSettingsTrait
{
    /**
     * @param ListUserSettingsRequest $args
     * @return ListUserSettingsResponse
     */
    public function listUserSettings(ListUserSettingsRequest $args)
    {
        $result = parent::listUserSettings($args->toArray());
        return new ListUserSettingsResponse($result->toArray());
    }
}
