<?php

namespace Sunaoka\Aws\Structures\QuickSight\ListSelfUpgrades;

trait ListSelfUpgradesTrait
{
    /**
     * @param ListSelfUpgradesRequest $args
     * @return ListSelfUpgradesResponse
     */
    public function listSelfUpgrades(ListSelfUpgradesRequest $args)
    {
        $result = parent::listSelfUpgrades($args->toArray());
        return new ListSelfUpgradesResponse($result->toArray());
    }
}
