<?php

namespace Sunaoka\Aws\Structures\FreeTier\UpgradeAccountPlan;

trait UpgradeAccountPlanTrait
{
    /**
     * @param UpgradeAccountPlanRequest $args
     * @return UpgradeAccountPlanResponse
     */
    public function upgradeAccountPlan(UpgradeAccountPlanRequest $args)
    {
        $result = parent::upgradeAccountPlan($args->toArray());
        return new UpgradeAccountPlanResponse($result->toArray());
    }
}
