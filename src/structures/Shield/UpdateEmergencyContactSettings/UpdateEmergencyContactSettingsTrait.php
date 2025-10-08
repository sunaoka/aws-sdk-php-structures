<?php

namespace Sunaoka\Aws\Structures\Shield\UpdateEmergencyContactSettings;

trait UpdateEmergencyContactSettingsTrait
{
    /**
     * @param UpdateEmergencyContactSettingsRequest $args
     * @return UpdateEmergencyContactSettingsResponse
     */
    public function updateEmergencyContactSettings(UpdateEmergencyContactSettingsRequest $args)
    {
        $result = parent::updateEmergencyContactSettings($args->toArray());
        return new UpdateEmergencyContactSettingsResponse($result->toArray());
    }
}
