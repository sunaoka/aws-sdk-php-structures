<?php

namespace Sunaoka\Aws\Structures\MTurk\UpdateNotificationSettings;

trait UpdateNotificationSettingsTrait
{
    /**
     * @param UpdateNotificationSettingsRequest $args
     * @return UpdateNotificationSettingsResponse
     */
    public function updateNotificationSettings(UpdateNotificationSettingsRequest $args)
    {
        $result = parent::updateNotificationSettings($args->toArray());
        return new UpdateNotificationSettingsResponse($result->toArray());
    }
}
