<?php

namespace Sunaoka\Aws\Structures\Deadline\GetMonitorSettings;

trait GetMonitorSettingsTrait
{
    /**
     * @param GetMonitorSettingsRequest $args
     * @return GetMonitorSettingsResponse
     */
    public function getMonitorSettings(GetMonitorSettingsRequest $args)
    {
        $result = parent::getMonitorSettings($args->toArray());
        return new GetMonitorSettingsResponse($result->toArray());
    }
}
