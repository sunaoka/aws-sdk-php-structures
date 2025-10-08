<?php

namespace Sunaoka\Aws\Structures\ARCRegionSwitch\GetPlan;

trait GetPlanTrait
{
    /**
     * @param GetPlanRequest $args
     * @return GetPlanResponse
     */
    public function getPlan(GetPlanRequest $args)
    {
        $result = parent::getPlan($args->toArray());
        return new GetPlanResponse($result->toArray());
    }
}
