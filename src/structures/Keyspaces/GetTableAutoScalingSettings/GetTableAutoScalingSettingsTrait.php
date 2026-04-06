<?php

namespace Sunaoka\Aws\Structures\Keyspaces\GetTableAutoScalingSettings;

trait GetTableAutoScalingSettingsTrait
{
    /**
     * @param GetTableAutoScalingSettingsRequest $args
     * @return GetTableAutoScalingSettingsResponse
     */
    public function getTableAutoScalingSettings(GetTableAutoScalingSettingsRequest $args)
    {
        $result = parent::getTableAutoScalingSettings($args->toArray());
        return new GetTableAutoScalingSettingsResponse($result->toArray());
    }
}
