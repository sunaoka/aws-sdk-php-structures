<?php

namespace Sunaoka\Aws\Structures\RolesAnywhere\ResetNotificationSettings;

trait ResetNotificationSettingsTrait
{
    /**
     * @param ResetNotificationSettingsRequest $args
     * @return ResetNotificationSettingsResponse
     */
    public function resetNotificationSettings(ResetNotificationSettingsRequest $args)
    {
        $result = parent::resetNotificationSettings($args->toArray());
        return new ResetNotificationSettingsResponse($result->toArray());
    }
}
