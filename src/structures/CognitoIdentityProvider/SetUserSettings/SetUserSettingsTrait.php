<?php

namespace Sunaoka\Aws\Structures\CognitoIdentityProvider\SetUserSettings;

trait SetUserSettingsTrait
{
    /**
     * @param SetUserSettingsRequest $args
     * @return SetUserSettingsResponse
     */
    public function setUserSettings(SetUserSettingsRequest $args)
    {
        $result = parent::setUserSettings($args->toArray());
        return new SetUserSettingsResponse($result->toArray());
    }
}
