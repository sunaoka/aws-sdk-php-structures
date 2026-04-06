<?php

namespace Sunaoka\Aws\Structures\WorkSpacesWeb\GetDataProtectionSettings;

trait GetDataProtectionSettingsTrait
{
    /**
     * @param GetDataProtectionSettingsRequest $args
     * @return GetDataProtectionSettingsResponse
     */
    public function getDataProtectionSettings(GetDataProtectionSettingsRequest $args)
    {
        $result = parent::getDataProtectionSettings($args->toArray());
        return new GetDataProtectionSettingsResponse($result->toArray());
    }
}
