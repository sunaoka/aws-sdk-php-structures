<?php

namespace Sunaoka\Aws\Structures\ARCRegionSwitch\CreatePlan;

trait CreatePlanTrait
{
    /**
     * @param CreatePlanRequest $args
     * @return CreatePlanResponse
     */
    public function createPlan(CreatePlanRequest $args)
    {
        $result = parent::createPlan($args->toArray());
        return new CreatePlanResponse($result->toArray());
    }
}
