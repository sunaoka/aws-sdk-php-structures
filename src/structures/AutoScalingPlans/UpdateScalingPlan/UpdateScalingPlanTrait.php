<?php

namespace Sunaoka\Aws\Structures\AutoScalingPlans\UpdateScalingPlan;

trait UpdateScalingPlanTrait
{
    /**
     * @param UpdateScalingPlanRequest $args
     * @return UpdateScalingPlanResponse
     */
    public function updateScalingPlan(UpdateScalingPlanRequest $args)
    {
        $result = parent::updateScalingPlan($args->toArray());
        return new UpdateScalingPlanResponse($result->toArray());
    }
}
