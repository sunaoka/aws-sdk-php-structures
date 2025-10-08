<?php

namespace Sunaoka\Aws\Structures\Chime\GetPhoneNumberSettings;

trait GetPhoneNumberSettingsTrait
{
    /**
     * @return GetPhoneNumberSettingsResponse
     */
    public function getPhoneNumberSettings()
    {
        $result = parent::getPhoneNumberSettings();
        return new GetPhoneNumberSettingsResponse($result->toArray());
    }
}
