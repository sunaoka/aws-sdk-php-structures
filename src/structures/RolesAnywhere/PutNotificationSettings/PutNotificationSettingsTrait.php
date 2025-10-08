<?php

namespace Sunaoka\Aws\Structures\RolesAnywhere\PutNotificationSettings;

trait PutNotificationSettingsTrait
{
    /**
     * @param PutNotificationSettingsRequest $args
     * @return PutNotificationSettingsResponse
     */
    public function putNotificationSettings(PutNotificationSettingsRequest $args)
    {
        $result = parent::putNotificationSettings($args->toArray());
        return new PutNotificationSettingsResponse($result->toArray());
    }
}
