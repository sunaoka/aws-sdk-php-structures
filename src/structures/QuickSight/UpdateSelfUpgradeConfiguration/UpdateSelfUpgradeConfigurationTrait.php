<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateSelfUpgradeConfiguration;

trait UpdateSelfUpgradeConfigurationTrait
{
    /**
     * @param UpdateSelfUpgradeConfigurationRequest $args
     * @return UpdateSelfUpgradeConfigurationResponse
     */
    public function updateSelfUpgradeConfiguration(UpdateSelfUpgradeConfigurationRequest $args)
    {
        $result = parent::updateSelfUpgradeConfiguration($args->toArray());
        return new UpdateSelfUpgradeConfigurationResponse($result->toArray());
    }
}
