<?php

namespace Sunaoka\Aws\Structures\AppConfig\GetAccountSettings;

trait GetAccountSettingsTrait
{
    /**
     * @return GetAccountSettingsResponse
     */
    public function getAccountSettings()
    {
        $result = parent::getAccountSettings();
        return new GetAccountSettingsResponse($result->toArray());
    }
}
