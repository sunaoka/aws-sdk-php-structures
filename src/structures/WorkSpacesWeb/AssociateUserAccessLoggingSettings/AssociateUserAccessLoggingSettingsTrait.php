<?php

namespace Sunaoka\Aws\Structures\WorkSpacesWeb\AssociateUserAccessLoggingSettings;

trait AssociateUserAccessLoggingSettingsTrait
{
    /**
     * @param AssociateUserAccessLoggingSettingsRequest $args
     * @return AssociateUserAccessLoggingSettingsResponse
     */
    public function associateUserAccessLoggingSettings(AssociateUserAccessLoggingSettingsRequest $args)
    {
        $result = parent::associateUserAccessLoggingSettings($args->toArray());
        return new AssociateUserAccessLoggingSettingsResponse($result->toArray());
    }
}
