<?php

namespace Sunaoka\Aws\Structures\drs\GetRecoveryPlan;

trait GetRecoveryPlanTrait
{
    /**
     * @param GetRecoveryPlanRequest $args
     * @return GetRecoveryPlanResponse
     */
    public function getRecoveryPlan(GetRecoveryPlanRequest $args)
    {
        $result = parent::getRecoveryPlan($args->toArray());
        return new GetRecoveryPlanResponse($result->toArray());
    }
}
