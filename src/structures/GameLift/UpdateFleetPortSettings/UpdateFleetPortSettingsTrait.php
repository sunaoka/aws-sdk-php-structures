<?php

namespace Sunaoka\Aws\Structures\GameLift\UpdateFleetPortSettings;

trait UpdateFleetPortSettingsTrait
{
    /**
     * @param UpdateFleetPortSettingsRequest $args
     * @return UpdateFleetPortSettingsResponse
     */
    public function updateFleetPortSettings(UpdateFleetPortSettingsRequest $args)
    {
        $result = parent::updateFleetPortSettings($args->toArray());
        return new UpdateFleetPortSettingsResponse($result->toArray());
    }
}
