<?php

namespace Sunaoka\Aws\Structures\WorkSpacesWeb\CreateDataProtectionSettings;

trait CreateDataProtectionSettingsTrait
{
    /**
     * @param CreateDataProtectionSettingsRequest $args
     * @return CreateDataProtectionSettingsResponse
     */
    public function createDataProtectionSettings(CreateDataProtectionSettingsRequest $args)
    {
        $result = parent::createDataProtectionSettings($args->toArray());
        return new CreateDataProtectionSettingsResponse($result->toArray());
    }
}
