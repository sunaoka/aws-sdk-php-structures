<?php

namespace Sunaoka\Aws\Structures\CognitoIdentityProvider\AdminSetUserSettings;

trait AdminSetUserSettingsTrait
{
    /**
     * @param AdminSetUserSettingsRequest $args
     * @return AdminSetUserSettingsResponse
     */
    public function adminSetUserSettings(AdminSetUserSettingsRequest $args)
    {
        $result = parent::adminSetUserSettings($args->toArray());
        return new AdminSetUserSettingsResponse($result->toArray());
    }
}
