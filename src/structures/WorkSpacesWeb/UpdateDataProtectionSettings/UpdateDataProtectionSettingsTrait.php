<?php

namespace Sunaoka\Aws\Structures\WorkSpacesWeb\UpdateDataProtectionSettings;

trait UpdateDataProtectionSettingsTrait
{
    /**
     * @param UpdateDataProtectionSettingsRequest $args
     * @return UpdateDataProtectionSettingsResponse
     */
    public function updateDataProtectionSettings(UpdateDataProtectionSettingsRequest $args)
    {
        $result = parent::updateDataProtectionSettings($args->toArray());
        return new UpdateDataProtectionSettingsResponse($result->toArray());
    }
}
