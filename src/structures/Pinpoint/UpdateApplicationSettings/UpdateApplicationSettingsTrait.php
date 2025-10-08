<?php

namespace Sunaoka\Aws\Structures\Pinpoint\UpdateApplicationSettings;

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
