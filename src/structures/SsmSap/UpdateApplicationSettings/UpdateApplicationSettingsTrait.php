<?php

namespace Sunaoka\Aws\Structures\SsmSap\UpdateApplicationSettings;

trait UpdateApplicationSettingsTrait
{
    /**
     * @param UpdateApplicationSettingsRequest $args
     * @return UpdateApplicationSettingsResponse
     */
    public function updateApplicationSettings(UpdateApplicationSettingsRequest $args)
    {
        $result = parent::updateApplicationSettings($args->toArray());
        return new UpdateApplicationSettingsResponse($result->toArray());
    }
}
