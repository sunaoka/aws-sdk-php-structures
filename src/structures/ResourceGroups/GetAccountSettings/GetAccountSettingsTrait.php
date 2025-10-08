<?php

namespace Sunaoka\Aws\Structures\ResourceGroups\GetAccountSettings;

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
