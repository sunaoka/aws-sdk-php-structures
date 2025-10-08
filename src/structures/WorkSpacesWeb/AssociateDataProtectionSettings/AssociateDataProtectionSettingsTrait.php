<?php

namespace Sunaoka\Aws\Structures\WorkSpacesWeb\AssociateDataProtectionSettings;

trait AssociateDataProtectionSettingsTrait
{
    /**
     * @param AssociateDataProtectionSettingsRequest $args
     * @return AssociateDataProtectionSettingsResponse
     */
    public function associateDataProtectionSettings(AssociateDataProtectionSettingsRequest $args)
    {
        $result = parent::associateDataProtectionSettings($args->toArray());
        return new AssociateDataProtectionSettingsResponse($result->toArray());
    }
}
