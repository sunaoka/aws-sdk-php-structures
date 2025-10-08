<?php

namespace Sunaoka\Aws\Structures\AutoScalingPlans\DeleteScalingPlan;

trait DeleteScalingPlanTrait
{
    /**
     * @param DeleteScalingPlanRequest $args
     * @return DeleteScalingPlanResponse
     */
    public function deleteScalingPlan(DeleteScalingPlanRequest $args)
    {
        $result = parent::deleteScalingPlan($args->toArray());
        return new DeleteScalingPlanResponse($result->toArray());
    }
}
