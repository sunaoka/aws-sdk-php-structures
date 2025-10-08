<?php

namespace Sunaoka\Aws\Structures\LicenseManagerLinuxSubscriptions\UpdateServiceSettings;

trait UpdateServiceSettingsTrait
{
    /**
     * @param UpdateServiceSettingsRequest $args
     * @return UpdateServiceSettingsResponse
     */
    public function updateServiceSettings(UpdateServiceSettingsRequest $args)
    {
        $result = parent::updateServiceSettings($args->toArray());
        return new UpdateServiceSettingsResponse($result->toArray());
    }
}
