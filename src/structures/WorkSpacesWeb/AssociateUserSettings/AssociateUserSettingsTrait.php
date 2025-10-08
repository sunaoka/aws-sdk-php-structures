<?php

namespace Sunaoka\Aws\Structures\WorkSpacesWeb\AssociateUserSettings;

trait AssociateUserSettingsTrait
{
    /**
     * @param AssociateUserSettingsRequest $args
     * @return AssociateUserSettingsResponse
     */
    public function associateUserSettings(AssociateUserSettingsRequest $args)
    {
        $result = parent::associateUserSettings($args->toArray());
        return new AssociateUserSettingsResponse($result->toArray());
    }
}
