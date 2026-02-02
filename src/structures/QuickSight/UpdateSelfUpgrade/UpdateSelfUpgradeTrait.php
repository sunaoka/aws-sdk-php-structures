<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateSelfUpgrade;

trait UpdateSelfUpgradeTrait
{
    /**
     * @param UpdateSelfUpgradeRequest $args
     * @return UpdateSelfUpgradeResponse
     */
    public function updateSelfUpgrade(UpdateSelfUpgradeRequest $args)
    {
        $result = parent::updateSelfUpgrade($args->toArray());
        return new UpdateSelfUpgradeResponse($result->toArray());
    }
}
