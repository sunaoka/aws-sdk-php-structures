<?php

namespace Sunaoka\Aws\Structures\Deadline\UpdateMonitorSettings;

trait UpdateMonitorSettingsTrait
{
    /**
     * @param UpdateMonitorSettingsRequest $args
     * @return UpdateMonitorSettingsResponse
     */
    public function updateMonitorSettings(UpdateMonitorSettingsRequest $args)
    {
        $result = parent::updateMonitorSettings($args->toArray());
        return new UpdateMonitorSettingsResponse($result->toArray());
    }
}
