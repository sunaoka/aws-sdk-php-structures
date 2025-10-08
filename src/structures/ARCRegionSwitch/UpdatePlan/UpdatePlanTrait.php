<?php

namespace Sunaoka\Aws\Structures\ARCRegionSwitch\UpdatePlan;

trait UpdatePlanTrait
{
    /**
     * @param UpdatePlanRequest $args
     * @return UpdatePlanResponse
     */
    public function updatePlan(UpdatePlanRequest $args)
    {
        $result = parent::updatePlan($args->toArray());
        return new UpdatePlanResponse($result->toArray());
    }
}
