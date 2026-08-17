<?php

namespace Sunaoka\Aws\Structures\drs\CreateRecoveryPlan;

trait CreateRecoveryPlanTrait
{
    /**
     * @param CreateRecoveryPlanRequest $args
     * @return CreateRecoveryPlanResponse
     */
    public function createRecoveryPlan(CreateRecoveryPlanRequest $args)
    {
        $result = parent::createRecoveryPlan($args->toArray());
        return new CreateRecoveryPlanResponse($result->toArray());
    }
}
