<?php

namespace Sunaoka\Aws\Structures\Ecs\UpdateClusterSettings;

trait UpdateClusterSettingsTrait
{
    /**
     * @param UpdateClusterSettingsRequest $args
     * @return UpdateClusterSettingsResponse
     */
    public function updateClusterSettings(UpdateClusterSettingsRequest $args)
    {
        $result = parent::updateClusterSettings($args->toArray());
        return new UpdateClusterSettingsResponse($result->toArray());
    }
}
