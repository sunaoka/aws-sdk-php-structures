<?php

namespace Sunaoka\Aws\Structures\AutoScalingPlans\CreateScalingPlan;

trait CreateScalingPlanTrait
{
    /**
     * @param CreateScalingPlanRequest $args
     * @return CreateScalingPlanResponse
     */
    public function createScalingPlan(CreateScalingPlanRequest $args)
    {
        $result = parent::createScalingPlan($args->toArray());
        return new CreateScalingPlanResponse($result->toArray());
    }
}
