<?php

namespace Sunaoka\Aws\Structures\SSMIncidents\UpdateResponsePlan;

trait UpdateResponsePlanTrait
{
    /**
     * @param UpdateResponsePlanRequest $args
     * @return UpdateResponsePlanResponse
     */
    public function updateResponsePlan(UpdateResponsePlanRequest $args)
    {
        $result = parent::updateResponsePlan($args->toArray());
        return new UpdateResponsePlanResponse($result->toArray());
    }
}
